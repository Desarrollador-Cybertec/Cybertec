<?php
/**
 * ============================================
 * DASHBOARD - Panel de Control Admin
 * ============================================
 * 
 * Muestra lista de contactos desde la API
 * Consume datos de Laravel API
 * 
 * @author Cybertec Team
 * @version 1.0
 * @since 2026-02-24
 */

// Cargar configuración
require_once __DIR__ . '/../config/env-loader.php';
require_once __DIR__ . '/../config/auth.php';
require_once __DIR__ . '/../config/api-client.php';

// Proteger esta página - solo admin
requireAdmin();

// Obtener usuario actual
$user = currentUser();

// Obtener contactos de la API
$contactos = [];
$error = null;
$total = 0;

// Intentar obtener contactos de la API
$response = $api->get('contactos');

if ($response['success']) {
    // Asumiendo que la API retorna: { success: true, data: [...], total: x }
    $contactos = $response['data']['data'] ?? $response['data'] ?? [];
    $total = $response['data']['total'] ?? count($contactos);
} else {
    $error = 'No fue posible conectar con la API: ' . ($response['error'] ?? 'Error desconocido');
    // En desarrollo, mostrar error
    if (isDevelopment()) {
        $error .= ' (Code: ' . $response['code'] . ')';
    }
}

// Función para formatear fecha
function formatDate($date) {
    if (empty($date)) return '-';
    $timestamp = strtotime($date);
    return $timestamp ? date('d/m/Y H:i', $timestamp) : $date;
}

// Función para obtener estado badge
function getStatusBadge($status) {
    $badges = [
        'nuevo' => ['bg-blue-500/20', 'text-blue-300', 'Nuevo'],
        'leido' => ['bg-slate-500/20', 'text-slate-300', 'Leído'],
        'respondido' => ['bg-green-500/20', 'text-green-300', 'Respondido'],
    ];
    
    $badge = $badges[$status] ?? $badges['nuevo'];
    return "<span class=\"px-2 py-1 rounded text-xs font-medium {$badge[0]} {$badge[1]}\">{$badge[2]}</span>";
}

?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Cybertec</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    
    <style>
        body {
            background-color: #020617;
            color: #f8fafc;
        }
    </style>
</head>
<body class="antialiased font-sans overflow-x-hidden">
    
    <!-- Navbar -->
    <nav class="bg-slate-900 border-b border-slate-800 sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-[rgb(27,146,208)]/10 rounded-lg flex items-center justify-center border border-[rgb(27,146,208)]/20">
                    <i class="bi bi-shield-check text-[rgb(27,146,208)] text-lg"></i>
                </div>
                <h1 class="text-xl font-bold text-white">
                    CYBER<span class="text-[rgb(27,146,208)]">TEC</span> Admin
                </h1>
            </div>
            
            <div class="flex items-center gap-6">
                <span class="text-sm text-slate-400">
                    <i class="bi bi-person-circle mr-2 text-[rgb(27,146,208)]"></i>
                    <?php echo htmlspecialchars($user['email']); ?>
                </span>
                
                <form method="POST" action="logout.php" style="display: inline;">
                    <button 
                        type="submit" 
                        class="px-4 py-2 rounded-lg bg-red-500/10 text-red-400 text-sm font-medium hover:bg-red-500/20 transition-colors border border-red-500/30"
                    >
                        <i class="bi bi-box-arrow-right mr-2"></i>Salir
                    </button>
                </form>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-6 py-12">
        
        <!-- Header Stats -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
            
            <!-- Total Contactos -->
            <div class="bg-slate-900 rounded-xl border border-slate-800 p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-slate-400 text-sm font-medium">Total Contactos</p>
                        <p class="text-4xl font-bold text-white mt-2"><?php echo $total; ?></p>
                    </div>
                    <div class="w-12 h-12 rounded-lg bg-[rgb(27,146,208)]/10 flex items-center justify-center text-2xl text-[rgb(27,146,208)]">
                        <i class="bi bi-envelope text-lg text-[rgb(27,146,208)]"></i>
                    </div>
                </div>
            </div>
            
            <!-- Nuevos -->
            <div class="bg-slate-900 rounded-xl border border-slate-800 p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-slate-400 text-sm font-medium">Nuevos</p>
                        <p class="text-4xl font-bold text-white mt-2">
                            <?php echo count(array_filter($contactos, fn($c) => ($c['estado'] ?? 'nuevo') === 'nuevo')); ?>
                        </p>
                    </div>
                    <div class="w-12 h-12 rounded-lg bg-blue-500/10 flex items-center justify-center text-2xl text-blue-400">
                        <i class="bi bi-inbox text-lg"></i>
                    </div>
                </div>
            </div>
            
            <!-- Respondidos -->
            <div class="bg-slate-900 rounded-xl border border-slate-800 p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-slate-400 text-sm font-medium">Respondidos</p>
                        <p class="text-4xl font-bold text-white mt-2">
                            <?php echo count(array_filter($contactos, fn($c) => ($c['estado'] ?? 'nuevo') === 'respondido')); ?>
                        </p>
                    </div>
                    <div class="w-12 h-12 rounded-lg bg-green-500/10 flex items-center justify-center text-2xl text-green-400">
                        <i class="bi bi-check-circle-fill text-lg"></i>
                    </div>
                </div>
            </div>
            
            <!-- API Status -->
            <div class="bg-slate-900 rounded-xl border border-slate-800 p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-slate-400 text-sm font-medium">Estado API</p>
                        <p class="text-white mt-2 font-bold">
                            <?php if ($response['success']): ?>
                                <span class="text-green-400"><i class="bi bi-circle-fill text-xs mr-1"></i>Conectada</span>
                            <?php else: ?>
                                <span class="text-red-400"><i class="bi bi-circle-fill text-xs mr-1"></i>Error</span>
                            <?php endif; ?>
                        </p>
                    </div>
                    <div class="w-12 h-12 rounded-lg <?php echo $response['success'] ? 'bg-green-500/10' : 'bg-red-500/10'; ?> flex items-center justify-center text-2xl <?php echo $response['success'] ? 'text-green-400' : 'text-red-400'; ?>">
                        <i class="bi bi-server text-lg"></i>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- Tabla de Contactos -->
        <div class="bg-slate-900 rounded-xl border border-slate-800 overflow-hidden">
            
            <!-- Header -->
            <div class="px-6 py-4 border-b border-slate-800 flex justify-between items-center bg-slate-800/50">
                <h2 class="text-xl font-bold text-white flex items-center gap-2">
                    <i class="bi bi-list text-lg text-[rgb(27,146,208)]"></i>
                    Lista de Contactos
                </h2>
                <button 
                    onclick="location.reload()"
                    class="px-4 py-2 rounded-lg bg-[rgb(27,146,208)]/10 text-[rgb(27,146,208)] text-sm font-medium hover:bg-[rgb(27,146,208)]/20 transition-colors border border-[rgb(27,146,208)]/30"
                >
                    <i class="bi bi-arrow-clockwise mr-2"></i>Recargar
                </button>
            </div>
            
            <!-- Error Message -->
            <?php if (!empty($error) && !$response['success']): ?>
            <div class="p-6 bg-red-500/10 border-b border-red-500/30 text-red-300 text-sm">
                <i class="bi bi-exclamation-triangle text-yellow-500 mr-2"></i>
                <?php echo htmlspecialchars($error); ?>
            </div>
            <?php endif; ?>
            
            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-slate-800/50 text-left text-sm font-semibold text-slate-400">
                        <tr>
                            <th class="px-6 py-3">Nombre</th>
                            <th class="px-6 py-3">Email</th>
                            <th class="px-6 py-3">Empresa</th>
                            <th class="px-6 py-3">Asunto</th>
                            <th class="px-6 py-3">Fecha</th>
                            <th class="px-6 py-3">Estado</th>
                            <th class="px-6 py-3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800">
                        <?php if (empty($contactos)): ?>
                        <tr>
                            <td colspan="7" class="px-6 py-8 text-center text-slate-400">
                                <i class="bi bi-inbox text-2xl mb-2 block text-[rgb(27,146,208)]"></i>
                                No hay contactos para mostrar
                            </td>
                        </tr>
                        <?php else: ?>
                            <?php foreach ($contactos as $contacto): ?>
                            <tr class="hover:bg-slate-800/50 transition-colors">
                                <td class="px-6 py-4 text-sm text-white font-medium">
                                    <?php echo htmlspecialchars($contacto['nombre'] ?? 'N/A'); ?>
                                </td>
                                <td class="px-6 py-4 text-sm text-slate-300">
                                    <a href="mailto:<?php echo htmlspecialchars($contacto['email'] ?? ''); ?>" class="text-[rgb(27,146,208)] hover:underline">
                                        <?php echo htmlspecialchars($contacto['email'] ?? 'N/A'); ?>
                                    </a>
                                </td>
                                <td class="px-6 py-4 text-sm text-slate-400">
                                    <?php echo htmlspecialchars($contacto['empresa'] ?? '-'); ?>
                                </td>
                                <td class="px-6 py-4 text-sm text-slate-400">
                                    <?php echo htmlspecialchars($contacto['asunto'] ?? $contacto['mensaje'] ?? '-'); ?>
                                </td>
                                <td class="px-6 py-4 text-sm text-slate-400">
                                    <?php echo formatDate($contacto['fecha_creacion'] ?? $contacto['created_at'] ?? ''); ?>
                                </td>
                                <td class="px-6 py-4 text-sm">
                                    <?php echo getStatusBadge($contacto['estado'] ?? 'nuevo'); ?>
                                </td>
                                <td class="px-6 py-4 text-sm">
                                    <button 
                                        class="text-[rgb(27,146,208)] hover:text-[rgb(27,146,208)] transition-colors"
                                        onclick="viewContact(<?php echo json_encode($contacto); ?>)"
                                    >
                                        <i class="bi bi-eye mr-1 text-[rgb(27,146,208)]"></i>Ver
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            
        </div>
        
        <!-- Info Box -->
        <div class="mt-8 p-4 rounded-lg bg-slate-900 border border-slate-800 text-slate-400 text-sm">
            <i class="bi bi-info-circle text-[rgb(27,146,208)] mr-2"></i>
            <strong>Información API:</strong> Los datos se cargan de la API Laravel en <?php echo getApiUrl('contactos'); ?>
        </div>
        
    </div>
    
    <!-- Modal para Ver Contacto -->
    <div id="contactModal" class="hidden fixed inset-0 bg-black/50 backdrop-blur flex items-center justify-center z-50 p-4">
        <div class="bg-slate-900 rounded-2xl border border-slate-800 max-w-2xl w-full p-8">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-2xl font-bold text-white" id="modalTitle">Detalles del Contacto</h3>
                <button onclick="closeModal()" class="text-slate-400 hover:text-white text-2xl">
                    <i class="bi bi-x text-lg"></i>
                </button>
            </div>
            
            <div id="modalContent" class="space-y-4 text-slate-300">
                <!-- Contenido será inyectado por JS -->
            </div>
            
            <div class="mt-8 flex gap-3 justify-end">
                <button 
                    onclick="closeModal()"
                    class="px-6 py-2 rounded-lg bg-slate-800 text-white hover:bg-slate-700 transition-colors"
                >
                    Cerrar
                </button>
                <button 
                    onclick="markAsRead()"
                    class="px-6 py-2 rounded-lg bg-[rgb(27,146,208)] text-slate-900 font-medium hover:bg-[rgb(27,146,208)] transition-colors"
                >
                    <i class="bi bi-check-circle mr-2"></i>Marcar como Leído
                </button>
            </div>
        </div>
    </div>
    
    <script>
        let currentContact = null;
        
        function viewContact(contact) {
            currentContact = contact;
            
            const content = `
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-slate-500 text-xs uppercase tracking-wider">Nombre</p>
                        <p class="text-white font-medium mt-1">${contact.nombre || 'N/A'}</p>
                    </div>
                    <div>
                        <p class="text-slate-500 text-xs uppercase tracking-wider">Email</p>
                        <p class="text-[rgb(27,146,208)] mt-1"><a href="mailto:${contact.email}">${contact.email || 'N/A'}</a></p>
                    </div>
                    <div>
                        <p class="text-slate-500 text-xs uppercase tracking-wider">Teléfono</p>
                        <p class="text-white font-medium mt-1">${contact.telefono || '-'}</p>
                    </div>
                    <div>
                        <p class="text-slate-500 text-xs uppercase tracking-wider">Empresa</p>
                        <p class="text-white font-medium mt-1">${contact.empresa || '-'}</p>
                    </div>
                </div>
                
                <div class="mt-6">
                    <p class="text-slate-500 text-xs uppercase tracking-wider">Asunto</p>
                    <p class="text-white font-medium mt-1">${contact.asunto || 'Sin asunto'}</p>
                </div>
                
                <div class="mt-6">
                    <p class="text-slate-500 text-xs uppercase tracking-wider">Mensaje</p>
                    <p class="text-slate-300 mt-2 p-4 rounded-lg bg-slate-800 whitespace-pre-wrap">${contact.mensaje || 'Sin mensaje'}</p>
                </div>
            `;
            
            document.getElementById('modalContent').innerHTML = content;
            document.getElementById('contactModal').classList.remove('hidden');
        }
        
        function closeModal() {
            document.getElementById('contactModal').classList.add('hidden');
        }
        
        function markAsRead() {
            alert('Funcionalidad disponible cuando la API esté implementada en Laravel');
            // Aquí irá la llamada a la API para marcar como leído
        }
        
        // Cerrar modal con ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeModal();
        });
    </script>
    
</body>
</html>
