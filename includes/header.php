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
    <nav class="fixed w-full z-50 glass-panel border-b-0 border-white/5 transition-all duration-300">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-display font-black tracking-tighter text-white flex items-center gap-3 group">
                <img src="assets/media/Logo-Banner.png" alt="Cybertec" class="h-10 object-contain group-hover:scale-105 transition-transform">
            </a>
            
            <div class="hidden md:flex items-center space-x-8 text-sm font-medium tracking-wide text-slate-400">
                <a href="#inicio" class="hover:text-radar-400 transition-colors">Inicio</a>
                <a href="#servicios" class="hover:text-radar-400 transition-colors">Soluciones</a>
                <a href="#nosotros" class="hover:text-radar-400 transition-colors">Nosotros</a>
                <a href="#contacto" class="px-6 py-2.5 rounded-full bg-[ rgb(27,146,208)]/10 text-[rgb(27,146,208)] border border-[rgb(27,146,208)]/20 hover:bg-[rgb(27,146,208)] hover:text-white transition-all shadow-lg" style="--tw-shadow-colored: 0 10px 15px -3px rgba(27,146,208,0.2); box-shadow: var(--tw-shadow-colored);">
                    Contactar
                </a>
            </div>
        </div>
    </nav>
</body>
</html>
