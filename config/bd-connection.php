<?php
/**
 * ============================================
 * CONFIGURACIÓN DE BASE DE DATOS
 * ============================================
 * 
 * Archivo de conexión a MySQL/PhpMyAdmin
 * Credenciales y configuración del servidor
 * 
 * @author Cybertec Team
 * @version 1.0
 * @since 2026-02-24
 */

// ============================================
// PARÁMETROS DE CONEXIÓN
// ============================================

// Host del servidor MySQL
$DB_HOST = 'localhost';

// Usuario de MySQL (por defecto en XAMPP)
$DB_USER = 'root';

// Contraseña de MySQL (en blanco por defecto en XAMPP)
$DB_PASSWORD = '';

// Nombre de la base de datos
$DB_NAME = 'cybertec';

// Puerto de conexión (3306 es el puerto por defecto de MySQL)
$DB_PORT = 3306;

// Charset para la conexión
$DB_CHARSET = 'utf8mb4';

// ============================================
// CREAR CONEXIÓN CON MySQLi
// ============================================

try {
    // Crear conexión usando mysqli
    $connection = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME, $DB_PORT);
    
    // Verificar si la conexión fue exitosa
    if ($connection->connect_error) {
        throw new Exception("Error de conexión a la BD: " . $connection->connect_error);
    }
    
    // Establecer el charset
    $connection->set_charset($DB_CHARSET);
    
    // Variable global para usar en toda la aplicación
    define('DB_CONNECTION', $connection);
    define('DB_NAME_CONST', $DB_NAME);
    
} catch (Exception $e) {
    // En desarrollo, mostrar el error. En producción, loguear sin mostrar
    if ($_ENV['APP_ENV'] === 'production') {
        error_log('Database Connection Error: ' . $e->getMessage());
        die('Error de conexión a la base de datos.');
    } else {
        die('❌ ' . $e->getMessage());
    }
}

// ============================================
// ALTERNATIVA: Usar PDO (Más seguro y moderno)
// ============================================
// Descomenta esta sección si prefieres usar PDO en lugar de MySQLi

/*
try {
    $dsn = "mysql:host={$DB_HOST};port={$DB_PORT};dbname={$DB_NAME};charset={$DB_CHARSET}";
    $pdo = new PDO($dsn, $DB_USER, $DB_PASSWORD);
    
    // Configurar atributos PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    define('DB_CONNECTION', $pdo);
    
} catch (PDOException $e) {
    die('Error de conexión PDO: ' . $e->getMessage());
}
*/

// ============================================
// HELPER FUNCTIONS PARA CONSULTAS
// ============================================

/**
 * Ejecutar una consulta SELECT
 * 
 * @param string $query La consulta SQL
 * @param array $params Parámetros para prepared statement
 * @return array Resultado de la consulta
 */
function selectQuery($query, $params = []) {
    global $connection;
    
    if (!empty($params)) {
        $stmt = $connection->prepare($query);
        $stmt->bind_param(str_repeat('s', count($params)), ...$params);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        $result = $connection->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}

/**
 * Ejecutar una consulta INSERT/UPDATE/DELETE
 * 
 * @param string $query La consulta SQL
 * @param array $params Parámetros para prepared statement
 * @return bool Éxito o fallo
 */
function executeQuery($query, $params = []) {
    global $connection;
    
    if (!empty($params)) {
        $stmt = $connection->prepare($query);
        $stmt->bind_param(str_repeat('s', count($params)), ...$params);
        return $stmt->execute();
    } else {
        return $connection->query($query);
    }
}

/**
 * Obtener el último ID insertado
 * 
 * @return int El ID del último registro insertado
 */
function getLastInsertId() {
    global $connection;
    return $connection->insert_id;
}

/**
 * Escapar una cadena para prevenir inyección SQL
 * 
 * @param string $string La cadena a escapar
 * @return string La cadena escapada
 */
function escapeString($string) {
    global $connection;
    return $connection->real_escape_string($string);
}

// ============================================
// CONFIGURACIÓN DE SESIÓN
// ============================================

// Iniciar sesión si no está iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ============================================
// CONSTANTES ÚTILES
// ============================================

// Nivel de ambiente
define('APP_ENV', $_ENV['APP_ENV'] ?? 'development');

// URL base de la aplicación
define('APP_URL', (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/Page1');

// ============================================
// LOGS Y MONITOREO
// ============================================

/**
 * Registrar un error en el archivo de log
 * 
 * @param string $message Mensaje de error
 * @param string $level Nivel (ERROR, WARNING, INFO)
 */
function logMessage($message, $level = 'INFO') {
    $timestamp = date('Y-m-d H:i:s');
    $logFile = __DIR__ . '/logs/app.log';
    
    // Crear directorio de logs si no existe
    if (!is_dir(dirname($logFile))) {
        mkdir(dirname($logFile), 0755, true);
    }
    
    $logEntry = "[{$timestamp}] [{$level}] {$message}" . PHP_EOL;
    file_put_contents($logFile, $logEntry, FILE_APPEND);
}

// ============================================
// MANEJO DE ERRORES
// ============================================

// En desarrollo, mostrar errores
if (APP_ENV === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    // En producción, ocultar errores y loguear
    error_reporting(E_ALL);
    ini_set('display_errors', 0);
    ini_set('log_errors', 1);
}

// ============================================
// NOTAS DE CONFIGURACIÓN
// ============================================

/*
╔════════════════════════════════════════════════════════════════════╗
║                    INSTRUCCIONES DE SETUP                         ║
╠════════════════════════════════════════════════════════════════════╣
║                                                                    ║
║ 1. CREAR LA BASE DE DATOS:                                        ║
║    En PhpMyAdmin, crea una nueva BD llamada "cybertec"            ║
║    O ejecuta en MySQL:                                            ║
║    CREATE DATABASE cybertec CHARACTER SET utf8mb4;                ║
║                                                                    ║
║ 2. CAMBIAR CREDENCIALES SI ES NECESARIO:                          ║
║    - $DB_HOST   : Host del servidor (localhost por defecto)       ║
║    - $DB_USER   : Usuario MySQL (root en XAMPP)                  ║
║    - $DB_PASSWORD : Contraseña (vacía en XAMPP por defecto)      ║
║    - $DB_NAME   : Nombre de la base de datos (cybertec)          ║
║                                                                    ║
║ 3. CREAR TABLAS (Ejecutar en PhpMyAdmin):                        ║
║                                                                    ║
║    CREATE TABLE usuarios (                                        ║
║        id INT AUTO_INCREMENT PRIMARY KEY,                         ║
║        nombre VARCHAR(100) NOT NULL,                              ║
║        email VARCHAR(100) UNIQUE NOT NULL,                        ║
║        telefono VARCHAR(20),                                      ║
║        empresa VARCHAR(100),                                      ║
║        mensaje TEXT,                                              ║
║        fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP         ║
║    );                                                             ║
║                                                                    ║
║ 4. USAR EN OTROS ARCHIVOS:                                        ║
║    require_once __DIR__ . '/../config/bd-connection.php';        ║
║    $consulta = selectQuery("SELECT * FROM usuarios");            ║
║                                                                    ║
║ 5. VARIABLES DISPONIBLES:                                         ║
║    $connection : Objeto de conexión MySQLi                       ║
║    DB_CONNECTION : Constante con la conexión                     ║
║                                                                    ║
╚════════════════════════════════════════════════════════════════════╝
*/
?>
