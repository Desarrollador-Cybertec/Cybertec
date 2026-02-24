<?php
/**
 * ============================================
 * AUTENTICACIÓN - Sistema de Admin
 * ============================================
 * 
 * Maneja login, sesiones y protección de rutas
 * Sistema temporal hasta migrar a Laravel
 * 
 * @author Cybertec Team
 * @version 1.0
 * @since 2026-02-24
 */

// Cargar configuración
if (!defined('APP_ENV')) {
    require_once __DIR__ . '/env-loader.php';
}

// Iniciar sesión si no está activa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class AuthManager {
    
    /**
     * Verificar si el usuario está autenticado
     * 
     * @return bool
     */
    public static function isAuthenticated() {
        return isset($_SESSION['admin_authenticated']) && $_SESSION['admin_authenticated'] === true;
    }
    
    /**
     * Obtener usuario actual
     * 
     * @return array|null
     */
    public static function getCurrentUser() {
        return $_SESSION['admin_user'] ?? null;
    }
    
    /**
     * Login - Autenticar usuario
     * 
     * @param string $email
     * @param string $password
     * @return bool
     */
    public static function login($email, $password) {
        // TEMPORAL: Verificar contra credenciales en .env
        // En producción, esto vendría de una API/BD
        
        $adminEmail = env('ADMIN_EMAIL', '');
        $adminPassword = env('ADMIN_PASSWORD', '');
        
        if ($email === $adminEmail && $password === $adminPassword) {
            // Crear sesión
            $_SESSION['admin_authenticated'] = true;
            $_SESSION['admin_user'] = [
                'email' => $email,
                'name' => 'Administrador Cybertec',
                'login_time' => time(),
                'ip' => $_SERVER['REMOTE_ADDR'] ?? '',
            ];
            
            // Log del acceso
            self::logAccess('LOGIN_SUCCESS', $email);
            
            return true;
        }
        
        // Log del intento fallido
        self::logAccess('LOGIN_FAILED', $email);
        
        return false;
    }
    
    /**
     * Logout - Cerrar sesión
     */
    public static function logout() {
        if (self::isAuthenticated()) {
            $email = $_SESSION['admin_user']['email'] ?? 'unknown';
            self::logAccess('LOGOUT', $email);
        }
        
        $_SESSION['admin_authenticated'] = false;
        $_SESSION['admin_user'] = null;
        session_destroy();
    }
    
    /**
     * Verificar sesión activa y timeout
     * 
     * @return bool
     */
    public static function isSessionValid() {
        if (!self::isAuthenticated()) {
            return false;
        }
        
        $sessionTimeout = (int) env('SESSION_TIMEOUT', 60) * 60; // Convertir a segundos
        $loginTime = $_SESSION['admin_user']['login_time'] ?? 0;
        
        // Verificar si la sesión ha expirado
        if (time() - $loginTime > $sessionTimeout) {
            self::logout();
            return false;
        }
        
        // Actualizar último acceso
        $_SESSION['admin_user']['last_activity'] = time();
        
        return true;
    }
    
    /**
     * Registrar acceso en log
     * 
     * @param string $action La acción (LOGIN_SUCCESS, LOGIN_FAILED, etc)
     * @param string $email Email del usuario
     */
    private static function logAccess($action, $email) {
        $timestamp = date('Y-m-d H:i:s');
        $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
        $logDir = ROOT_PATH . 'logs';
        
        // Crear directorio si no existe
        if (!is_dir($logDir)) {
            mkdir($logDir, 0755, true);
        }
        
        $logFile = $logDir . '/auth.log';
        $logEntry = "[{$timestamp}] {$action} | Email: {$email} | IP: {$ip}" . PHP_EOL;
        
        file_put_contents($logFile, $logEntry, FILE_APPEND);
    }
}

/**
 * Middleware - Proteger rutas que requieren autenticación
 * 
 * USO:
 *   <?php
 *   requireAdmin();
 *   // ... código protegido
 * 
 * @param bool $redirect Si redirigir a login (true) o mostrar error (false)
 */
function requireAdmin($redirect = true) {
    // Cargar configuración si no existe
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    // Verificar autenticación y timeout
    if (!AuthManager::isSessionValid()) {
        if ($redirect) {
            header('Location: ' . env('APP_URL', '') . '/admin/login.php');
            exit;
        } else {
            http_response_code(401);
            die('❌ No autorizado. Debe iniciar sesión.');
        }
    }
}

/**
 * Función helper - Obtener usuario actual
 * 
 * @return array|null
 */
function currentUser() {
    return AuthManager::getCurrentUser();
}

/**
 * Función helper - Verificar si está autenticado
 * 
 * @return bool
 */
function isAdmin() {
    return AuthManager::isSessionValid();
}

?>
