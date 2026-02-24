<?php
/**
 * ============================================
 * API CLIENT - Conectar con API Laravel
 * ============================================
 * 
 * Cliente HTTP para consumir la API
 * Maneja requests y respuestas
 * 
 * @author Cybertec Team
 * @version 1.0
 * @since 2026-02-24
 */

// Asegurarse de cargar config
if (!defined('API_ENDPOINT')) {
    require_once __DIR__ . '/env-loader.php';
}

class ApiClient {
    
    /**
     * URL base de la API
     */
    private $baseUrl;
    
    /**
     * Token de autenticación
     */
    private $token;
    
    /**
     * Timeout de conexión
     */
    private $timeout;
    
    /**
     * Constructor
     */
    public function __construct() {
        $this->baseUrl = constant('API_ENDPOINT');
        $this->token = env('API_KEY', '');
        $this->timeout = (int) env('API_TIMEOUT', 30);
    }
    
    /**
     * Realizar GET request
     * 
     * @param string $endpoint El endpoint (ej: 'contactos')
     * @param array $params Parámetros de query
     * @return array Respuesta decodificada
     */
    public function get($endpoint, $params = []) {
        $url = $this->buildUrl($endpoint, $params);
        return $this->makeRequest('GET', $url);
    }
    
    /**
     * Realizar POST request
     * 
     * @param string $endpoint El endpoint
     * @param array $data Datos a enviar
     * @return array Respuesta decodificada
     */
    public function post($endpoint, $data = []) {
        $url = $this->buildUrl($endpoint);
        return $this->makeRequest('POST', $url, $data);
    }
    
    /**
     * Realizar PUT request
     * 
     * @param string $endpoint El endpoint
     * @param array $data Datos a enviar
     * @return array Respuesta decodificada
     */
    public function put($endpoint, $data = []) {
        $url = $this->buildUrl($endpoint);
        return $this->makeRequest('PUT', $url, $data);
    }
    
    /**
     * Realizar DELETE request
     * 
     * @param string $endpoint El endpoint
     * @return array Respuesta decodificada
     */
    public function delete($endpoint) {
        $url = $this->buildUrl($endpoint);
        return $this->makeRequest('DELETE', $url);
    }
    
    /**
     * Construir URL completa
     * 
     * @param string $endpoint
     * @param array $params
     * @return string
     */
    private function buildUrl($endpoint, $params = []) {
        $url = $this->baseUrl . '/' . ltrim($endpoint, '/');
        
        if (!empty($params)) {
            $url .= '?' . http_build_query($params);
        }
        
        return $url;
    }
    
    /**
     * Hacer request HTTP
     * 
     * @param string $method GET, POST, PUT, DELETE
     * @param string $url URL completa
     * @param array $data Datos a enviar (para POST/PUT)
     * @return array [success, data, error]
     */
    private function makeRequest($method, $url, $data = []) {
        try {
            // Inicializar cURL
            $curl = curl_init();
            
            // Opciones básicas
            curl_setopt_array($curl, [
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT => $this->timeout,
                CURLOPT_CUSTOMREQUEST => $method,
                CURLOPT_HTTPHEADER => $this->getHeaders(),
            ]);
            
            // Agregar datos si POST o PUT
            if (in_array($method, ['POST', 'PUT']) && !empty($data)) {
                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
            }
            
            // Ejecutar request
            $response = curl_exec($curl);
            $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            $error = curl_error($curl);
            
            curl_close($curl);
            
            // Manejar errores de cURL
            if ($error) {
                return [
                    'success' => false,
                    'data' => null,
                    'error' => 'Error de conexión: ' . $error,
                    'code' => 0
                ];
            }
            
            // Decodificar respuesta
            $decoded = json_decode($response, true);
            
            // Verificar código HTTP
            if ($httpCode >= 200 && $httpCode < 300) {
                return [
                    'success' => true,
                    'data' => $decoded,
                    'error' => null,
                    'code' => $httpCode
                ];
            } else {
                return [
                    'success' => false,
                    'data' => $decoded,
                    'error' => 'Error HTTP ' . $httpCode,
                    'code' => $httpCode
                ];
            }
            
        } catch (Exception $e) {
            return [
                'success' => false,
                'data' => null,
                'error' => $e->getMessage(),
                'code' => -1
            ];
        }
    }
    
    /**
     * Obtener headers para request
     * 
     * @return array
     */
    private function getHeaders() {
        $headers = [
            'Content-Type: application/json',
            'Accept: application/json',
        ];
        
        // Agregar token si existe
        if (!empty($this->token)) {
            $authType = env('API_AUTH_TYPE', 'bearer');
            
            if ($authType === 'bearer') {
                $headers[] = 'Authorization: Bearer ' . $this->token;
            } elseif ($authType === 'api_key') {
                $headers[] = 'X-API-Key: ' . $this->token;
            }
        }
        
        return $headers;
    }
    
    /**
     * Set token de autenticación
     * 
     * @param string $token
     */
    public function setToken($token) {
        $this->token = $token;
    }
}

/**
 * Instancia global del cliente API
 * Usar: $api->get('contactos')
 */
$api = new ApiClient();

?>
