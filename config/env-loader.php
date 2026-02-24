<?php
/**
 * ============================================
 * LOAD ENVIRONMENT VARIABLES (.env)
 * ============================================
 * 
 * Carga variables del archivo .env
 * Las hace disponibles en toda la aplicación
 * 
 * @author Cybertec Team
 * @version 1.0
 * @since 2026-02-24
 */

// Ruta del archivo .env
$envFile = __DIR__ . '/../.env';

// Verificar que el archivo existe
if (!file_exists($envFile)) {
    die('❌ Error: archivo .env no encontrado en ' . $envFile);
}

// Leer y parsear el archivo .env
$lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach ($lines as $line) {
    // Ignorar comentarios
    if (strpos(trim($line), '#') === 0) {
        continue;
    }
    
    // Parsear KEY=VALUE
    if (strpos($line, '=') !== false) {
        [$key, $value] = explode('=', $line, 2);
        
        $key = trim($key);
        $value = trim($value);
        
        // Remover comillas si existen
        $value = trim($value, '"\'');
        
        // Definir como constante
        define(strtoupper($key), $value);
        
        // También en $_ENV para compatibilidad
        $_ENV[$key] = $value;
    }
}

// ============================================
// CONSTANTES ADICIONALES DERIVADAS
// ============================================

// URL completa de API con versión
define('API_ENDPOINT', constant('API_URL') . '/' . constant('API_VERSION'));

// URL base del sitio
define('SITE_URL', constant('APP_URL'));

// Path del directorio raíz
define('ROOT_PATH', dirname(__DIR__) . '/');

// ============================================
// FUNCIONES ÚTILES
// ============================================

/**
 * Obtener valor de variable de entorno
 * 
 * @param string $key La clave
 * @param mixed $default Valor por defecto si no existe
 * @return mixed
 */
function env($key, $default = null) {
    return defined($key) ? constant($key) : $default;
}

/**
 * Verificar si estamos en modo desarrollo
 * 
 * @return bool
 */
function isDevelopment() {
    return strtolower(env('APP_ENV')) === 'development';
}

/**
 * Verificar si estamos en modo producción
 * 
 * @return bool
 */
function isProduction() {
    return strtolower(env('APP_ENV')) === 'production';
}

/**
 * Obtener URL de la API
 * 
 * @param string $endpoint El endpoint específico (ej: 'contactos')
 * @return string
 */
function getApiUrl($endpoint = '') {
    $baseUrl = constant('API_ENDPOINT');
    return $endpoint ? $baseUrl . '/' . ltrim($endpoint, '/') : $baseUrl;
}

// ============================================
// DEBUG MODE
// ============================================

if (isDevelopment()) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(E_ALL);
    ini_set('display_errors', 0);
}

?>
