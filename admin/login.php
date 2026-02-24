<?php
/**
 * ============================================
 * LOGIN - Página de Autenticación Admin
 * ============================================
 * 
 * Formulario de login para acceso a panel admin
 * 
 * @author Cybertec Team
 * @version 1.0
 * @since 2026-02-24
 */

// Cargar configuración y autenticación
require_once __DIR__ . '/../config/env-loader.php';
require_once __DIR__ . '/../config/auth.php';

// Si ya está autenticado, redirigir a dashboard
if (isAdmin()) {
    header('Location: ' . env('APP_URL') . '/admin/dashboard.php');
    exit;
}

// Procesar formulario de login
$error = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Validar datos
    if (empty($email) || empty($password)) {
        $error = 'Por favor completa todos los campos.';
    } else {
        // Intentar login
        if (AuthManager::login($email, $password)) {
            header('Location: ' . env('APP_URL') . '/admin/dashboard.php');
            exit;
        } else {
            $error = 'Email o contraseña incorrectos.';
            // Limpiar contraseña por seguridad
            $password = '';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybertec - Admin Login</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            background-color: #020617;
            color: #f8fafc;
        }
        .login-container {
            background: rgba(15, 23, 42, 0.4);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
    </style>
</head>
<body class="antialiased font-sans overflow-x-hidden">
    
    <!-- Background decorativo -->
    <div class="fixed inset-0 -z-10">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-cyan-500/20 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-violet-600/20 rounded-full blur-[120px] translate-y-1/2 -translate-x-1/2"></div>
    </div>
    
    <!-- Login Container -->
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="w-full max-w-md">
            
            <!-- Header -->
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-cyan-500/10 rounded-lg flex items-center justify-center border border-cyan-500/20">
                        <i class="fas fa-shield-alt text-cyan-400 text-xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold font-display tracking-tighter text-white">
                        CYBER<span class="text-cyan-400">TEC</span>
                    </h1>
                </div>
                
                <h2 class="text-3xl font-display font-bold text-white mb-2">Panel Admin</h2>
                <p class="text-slate-400 text-sm">Acceso restringido para administradores</p>
            </div>
            
            <!-- Error Message -->
            <?php if (!empty($error)): ?>
            <div class="mb-6 p-4 rounded-lg bg-red-500/10 border border-red-500/30 text-red-300 text-sm">
                <i class="fas fa-exclamation-circle mr-2"></i>
                <?php echo htmlspecialchars($error); ?>
            </div>
            <?php endif; ?>
            
            <!-- Login Form -->
            <form method="POST" class="login-container rounded-2xl p-8 space-y-6">
                
                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-300 mb-2">
                        <i class="fas fa-envelope mr-2"></i>Email
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        value="<?php echo htmlspecialchars($email); ?>"
                        placeholder="admin@cybertec.local"
                        required
                        class="w-full px-4 py-3 rounded-lg bg-slate-900/50 border border-slate-700 text-white placeholder-slate-500 focus:outline-none focus:border-cyan-500 transition-colors"
                    >
                </div>
                
                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-sm font-medium text-slate-300 mb-2">
                        <i class="fas fa-lock mr-2"></i>Contraseña
                    </label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        placeholder="••••••••"
                        required
                        class="w-full px-4 py-3 rounded-lg bg-slate-900/50 border border-slate-700 text-white placeholder-slate-500 focus:outline-none focus:border-cyan-500 transition-colors"
                    >
                </div>
                
                <!-- Remember Me -->
                <div class="flex items-center">
                    <input 
                        type="checkbox" 
                        id="remember" 
                        name="remember" 
                        class="w-4 h-4 rounded border-slate-600 text-cyan-500 focus:ring-cyan-500"
                    >
                    <label for="remember" class="ml-2 text-sm text-slate-400">
                        Recuérdame en este dispositivo
                    </label>
                </div>
                
                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full py-3 rounded-lg bg-cyan-500 text-slate-900 font-bold hover:bg-cyan-400 transition-colors shadow-lg shadow-cyan-500/25 flex items-center justify-center gap-2"
                >
                    <i class="fas fa-sign-in-alt"></i>
                    Iniciar Sesión
                </button>
                
            </form>
            
            <!-- Info Box -->
            <div class="mt-8 p-4 rounded-lg bg-slate-900/50 border border-slate-800 text-slate-400 text-xs">
                <i class="fas fa-info-circle text-cyan-400 mr-2"></i>
                <strong>Credentials de desarrollo:</strong><br>
                Email: <?php echo htmlspecialchars(env('ADMIN_EMAIL', 'admin@cybertec.local')); ?><br>
                Password: <em>(ver .env file)</em>
            </div>
            
            <!-- Back to Site -->
            <div class="text-center mt-6">
                <a href="<?php echo env('APP_URL'); ?>" class="text-cyan-400 hover:text-cyan-300 text-sm font-medium transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i>Volver al sitio principal
                </a>
            </div>
            
        </div>
    </div>
    
</body>
</html>
