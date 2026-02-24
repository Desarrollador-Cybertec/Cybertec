<?php
/**
 * Header y Navegacion
 * Componente que incluye el <head> y la navegación principal
 */
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybertec Informatica & Telecomunicaciones</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Estilos Personalizados -->
    <link rel="stylesheet" href="assets/styles.css">
    
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        cyber: {
                            base: '#020617',     // Slate 950 base
                            surface: '#0f172a',  // Slate 900
                            highlight: '#1e293b', // Slate 800
                            neon: '#06b6d4',     // Cyan
                            purple: '#8b5cf6',   // Violet
                            success: '#10b981',  // Emerald
                        }
                    },
                    backgroundImage: {
                        'neon-glow': 'radial-gradient(circle at center, rgba(6,182,212,0.15) 0%, rgba(0,0,0,0) 70%)',
                        'grid-pattern': "linear-gradient(to right, #1e293b 1px, transparent 1px), linear-gradient(to bottom, #1e293b 1px, transparent 1px)",
                    },
                    animation: {
                        'pulse-glow': 'pulseGlow 3s infinite',
                        'float-slow': 'float 8s ease-in-out infinite',
                        'grid-move': 'gridMove 20s linear infinite',
                    },
                    keyframes: {
                        pulseGlow: {
                            '0%, 100%': { boxShadow: '0 0 15px rgba(6,182,212,0.2)' },
                            '50%': { boxShadow: '0 0 30px rgba(6,182,212,0.5)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        gridMove: {
                            '0%': { transform: 'translateY(0)' },
                            '100%': { transform: 'translateY(50px)' },
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="antialiased font-sans overflow-x-hidden">
    <!-- Navbar -->
    <nav class="fixed w-full z-50 glass-panel border-b-0 border-white/5 transition-all duration-300">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-display font-black tracking-tighter text-white flex items-center gap-3 group">
                <div class="w-10 h-10 bg-cyan-500/10 rounded-lg flex items-center justify-center border border-cyan-500/20 group-hover:bg-cyan-500/20 transition-all">
                    <i class="fas fa-network-wired text-cyan-400 group-hover:rotate-180 transition-transform duration-700"></i>
                </div>
                <span>CYBERTEC</span>
            </a>
            
            <div class="hidden md:flex items-center space-x-8 text-sm font-medium tracking-wide text-slate-400">
                <a href="#inicio" class="hover:text-cyan-400 transition-colors">Inicio</a>
                <a href="#servicios" class="hover:text-cyan-400 transition-colors">Soluciones</a>
                <a href="#nosotros" class="hover:text-cyan-400 transition-colors">Nosotros</a>
                <a href="#contacto" class="px-6 py-2.5 rounded-full bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 hover:bg-cyan-500 hover:text-white transition-all shadow-lg shadow-cyan-500/20">
                    Contactar
                </a>
            </div>
        </div>
    </nav>
</body>
</html>
