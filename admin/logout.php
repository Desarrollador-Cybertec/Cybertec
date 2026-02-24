<?php
/**
 * ============================================
 * LOGOUT - Cerrar Sesión
 * ============================================
 * 
 * Cierra la sesión y redirige a login
 */

require_once __DIR__ . '/../config/env-loader.php';
require_once __DIR__ . '/../config/auth.php';

// Logout
AuthManager::logout();

// Redirigir a login
header('Location: ' . env('APP_URL') . '/admin/login.php?logout=1');
exit;
?>
