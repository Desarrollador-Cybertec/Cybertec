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
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/media/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/favicon.ico">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts (Polymath + Bahnschrift substitutes) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;600;700&family=Roboto+Condensed:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    
    <!-- AOS (Animate on Scroll) CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    
    <!-- Estilos Personalizados -->
    <link rel="stylesheet" href="assets/styles.css">
    
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Bahnschrift', 'Roboto Condensed', 'sans-serif'],
                        display: ['Polymath', 'IBM Plex Mono', 'monospace'],
                    },
                    colors: {
                        cyber: {
                            base: '#020617',        // Dark Base
                            surface: '#0f172a',     // Surface
                            highlight: '#1e293b',   // Highlight
                            radar: '#1B92D0',       // Radar Blue (Primary)
                            navy: '#181D5E',        // Command Navy (Institutional)
                            graphite: '#2B2F36',    // Grafito Táctico (Secondary)
                            purple: '#8b5cf6',      // Violet accent
                            success: '#10b981',     // Emerald
                        }
                    },
                    backgroundImage: {
                        'radar-glow': 'radial-gradient(circle at center, rgba(27,146,208,0.15) 0%, rgba(0,0,0,0) 70%)',
                        'navy-glow': 'radial-gradient(circle at center, rgba(24,29,94,0.1) 0%, rgba(0,0,0,0) 70%)',
                        'grid-pattern': "linear-gradient(to right, #1e293b 1px, transparent 1px), linear-gradient(to bottom, #1e293b 1px, transparent 1px)",
                    },
                    animation: {
                        'pulse-glow': 'pulseGlow 3s infinite',
                        'float-slow': 'float 8s ease-in-out infinite',
                        'grid-move': 'gridMove 20s linear infinite',
                    },
                    keyframes: {
                        pulseGlow: {
                            '0%, 100%': { boxShadow: '0 0 15px rgba(27,146,208,0.2)' },
                            '50%': { boxShadow: '0 0 30px rgba(27,146,208,0.5)' },
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
    <nav class="fixed w-full z-50 transition-all duration-500" id="main-nav">
        <!-- Glass Background -->
        <div class="absolute inset-0 bg-slate-950/70 backdrop-blur-xl border-b border-white/5"></div>

        <div class="relative container mx-auto px-6 py-4 flex justify-between items-center">
            
            <!-- Logo con laser line -->
            <a href="#" class="relative group">
                <img src="assets/media/Logo-Banner.png" alt="Cybertec" class="h-16 object-contain group-hover:scale-[1.03] transition-transform duration-300 drop-shadow-[0_0_8px_rgba(27,146,208,0.3)] group-hover:drop-shadow-[0_0_14px_rgba(139,92,246,0.5)]">
                <!-- Laser line debajo del logo -->
                <div class="nav-laser-line w-full mt-1"></div>
            </a>
            
            <!-- Desktop Nav Links -->
            <div class="hidden md:flex items-center gap-8 text-base font-semibold tracking-wide text-slate-400">
                <a href="#inicio" class="nav-link hover:text-white transition-colors duration-200">Inicio</a>
                <a href="#servicios" class="nav-link hover:text-white transition-colors duration-200">Soluciones</a>
                <a href="#nosotros" class="nav-link hover:text-white transition-colors duration-200">Nosotros</a>
                <a href="#contacto" class="relative px-7 py-3 rounded-full text-base font-bold text-[rgb(27,146,208)] border border-[rgb(27,146,208)]/30 overflow-hidden group/btn transition-all duration-300 hover:text-white hover:border-[rgb(27,146,208)]" style="background: rgba(27,146,208,0.08);">
                    <span class="absolute inset-0 bg-[rgb(27,146,208)] scale-x-0 group-hover/btn:scale-x-100 origin-left transition-transform duration-300 rounded-full"></span>
                    <span class="relative">Contactar</span>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden relative flex flex-col gap-1.5 p-2 group/ham" id="mobile-menu-btn" aria-label="Menu">
                <span class="w-6 h-0.5 bg-slate-400 group-hover/ham:bg-[rgb(27,146,208)] transition-all duration-300 group-hover/ham:w-7"></span>
                <span class="w-4 h-0.5 bg-violet-400 transition-all duration-300 group-hover/ham:w-7"></span>
                <span class="w-6 h-0.5 bg-slate-400 group-hover/ham:bg-[rgb(27,146,208)] transition-all duration-300 group-hover/ham:w-7"></span>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="hidden md:hidden" id="mobile-menu">
            <div class="border-t border-white/5 bg-slate-950/90 backdrop-blur-xl px-6 py-6 flex flex-col gap-5 text-sm font-medium text-slate-400">
                <a href="#inicio" class="hover:text-white hover:pl-2 transition-all duration-200"><i class="bi bi-house-fill text-[rgb(27,146,208)] mr-2"></i>Inicio</a>
                <a href="#servicios" class="hover:text-white hover:pl-2 transition-all duration-200"><i class="bi bi-grid-fill text-[rgb(27,146,208)] mr-2"></i>Soluciones</a>
                <a href="#nosotros" class="hover:text-white hover:pl-2 transition-all duration-200"><i class="bi bi-people-fill text-violet-400 mr-2"></i>Nosotros</a>
                <a href="#contacto" class="mt-2 text-center py-3 rounded-xl bg-[rgb(27,146,208)]/10 border border-[rgb(27,146,208)]/30 text-[rgb(27,146,208)] font-bold hover:bg-[rgb(27,146,208)] hover:text-white transition-all duration-300">Contactar</a>
            </div>
        </div>
    </nav>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
        // Nav scroll effect
        window.addEventListener('scroll', function() {
            const nav = document.getElementById('main-nav');
            if (window.scrollY > 40) {
                nav.querySelector('.absolute').style.background = 'rgba(2,6,23,0.92)';
            } else {
                nav.querySelector('.absolute').style.background = '';
            }
        });
    </script>
</body>
</html>
