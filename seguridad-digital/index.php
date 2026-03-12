<?php
/**
 * Landing Page — Seguridad Digital y Defensa Perimetral
 * Firewalls, Antivirus, Políticas de Seguridad, ISO 27000
 */
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <title>Seguridad Digital Empresarial | Firewalls, Antivirus y Ciberseguridad | Cybertec</title>
    <meta name="description" content="Protege la información de tu empresa con firewalls empresariales, antivirus corporativo y consultoría en seguridad informática. Cybertec en Piedecuesta, Bucaramanga y Santander.">
    <meta name="keywords" content="firewall empresarial Bucaramanga, antivirus corporativo Santander, ciberseguridad Piedecuesta, seguridad informática empresas, defensa perimetral, ISO 27000, Cybertec">
    <meta name="author" content="Cybertec Informática & Telecomunicaciones SAS">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.cybertec.com.co/seguridad-digital/">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.cybertec.com.co/seguridad-digital/">
    <meta property="og:title" content="Seguridad Digital Empresarial | Firewalls y Ciberseguridad | Cybertec">
    <meta property="og:description" content="Un ransomware puede paralizar tu empresa en minutos. Firewalls, antivirus corporativo y seguridad perimetral con Cybertec en Santander.">
    <meta property="og:image" content="https://www.cybertec.com.co/assets/media/og-preview.png">
    <meta property="og:locale" content="es_CO">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/media/favicon.ico">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Fonts -->
    <link rel="preload" href="../assets/fonts/Bahnschrift/BAHNSCHRIFT.TTF" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="../assets/fonts/Polymath/PolymathDispDemo-Bold.otf" as="font" type="font/otf" crossorigin>
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    
    <!-- AOS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    
    <!-- Estilos -->
    <link rel="stylesheet" href="../assets/styles.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Bahnschrift', 'sans-serif'],
                        display: ['Polymath', 'Bahnschrift', 'sans-serif'],
                    },
                    colors: {
                        cyber: {
                            base: '#020617',
                            surface: '#0f172a',
                            highlight: '#1e293b',
                            radar: '#1B92D0',
                            navy: '#181D5E',
                            graphite: '#202020',
                            success: '#10b981',
                        }
                    },
                    animation: {
                        'pulse-glow': 'pulseGlow 3s infinite',
                        'float-slow': 'float 8s ease-in-out infinite',
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
                    }
                }
            }
        }
    </script>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KGJ2SFT4EJ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-KGJ2SFT4EJ');
    </script>
</head>
<body class="antialiased font-sans overflow-x-hidden bg-cyber-base text-white">

    <!-- Nav -->
    <nav class="fixed w-full z-50 transition-all duration-500" id="main-nav">
        <div class="absolute inset-0 bg-slate-950/70 backdrop-blur-xl border-b border-white/5"></div>
        <div class="relative container mx-auto px-4 sm:px-6 py-2 sm:py-2.5 flex justify-between items-center">
            <a href="../" class="relative group">
                <img src="../assets/media/Logo-Banner.png" alt="Cybertec" class="h-8 sm:h-9 md:h-11 object-contain group-hover:scale-[1.03] transition-transform duration-300 drop-shadow-[0_0_8px_rgba(27,146,208,0.3)]">
            </a>
            <div class="hidden md:flex items-center gap-5 text-sm font-semibold tracking-wide text-slate-400">
                <a href="../" class="hover:text-white transition-colors">Inicio</a>
                <a href="../#soluciones" class="hover:text-white transition-colors">Soluciones</a>
                <a href="#contacto" class="relative px-5 py-2 rounded-full text-sm font-bold text-[rgb(27,146,208)] border border-[rgb(27,146,208)]/30 overflow-hidden group/btn transition-all duration-300 hover:text-white hover:border-[rgb(27,146,208)]" style="background: rgba(27,146,208,0.08);">
                    <span class="absolute inset-0 bg-[rgb(27,146,208)] scale-x-0 group-hover/btn:scale-x-100 origin-left transition-transform duration-300 rounded-full"></span>
                    <span class="relative">Cotizar ahora</span>
                </a>
            </div>
            <a href="#contacto" class="md:hidden px-4 py-2 rounded-full text-xs font-bold text-[rgb(27,146,208)] border border-[rgb(27,146,208)]/30" style="background: rgba(27,146,208,0.08);">Cotizar</a>
        </div>
    </nav>

    <!-- HERO -->
    <section class="relative min-h-[80vh] flex items-center pt-14 pb-6 overflow-hidden">
        <div class="absolute inset-0 cyber-grid opacity-[0.03]"></div>
        <div class="absolute top-1/3 left-0 w-[500px] h-[500px] bg-[rgb(27,146,208)]/10 rounded-full blur-[150px]"></div>

        <div class="container mx-auto px-4 sm:px-6 relative z-10 max-w-5xl">
            <div class="text-center" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-500/10 border border-red-500/20 text-red-400 text-xs font-bold uppercase tracking-widest mb-6">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    Amenaza digital
                </span>

                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold leading-tight mb-5">
                    Un ransomware puede cifrar <span class="text-red-400">toda tu información en minutos.</span>
                </h1>

                <p class="text-slate-400 text-base sm:text-lg max-w-2xl mx-auto mb-4">
                    Sin firewall, sin antivirus corporativo, sin políticas de seguridad. <strong class="text-white">Tu empresa es un blanco fácil.</strong>
                </p>

                <div class="inline-flex items-center gap-3 bg-slate-900/80 border border-slate-800 rounded-xl px-5 py-3 mb-8" data-aos="zoom-in" data-aos-delay="200">
                    <i class="bi bi-bug-fill text-red-400 text-xl"></i>
                    <p class="text-sm text-slate-300">El <span class="text-red-400 font-bold">60%</span> de las PYMES atacadas por ransomware cierran en menos de 6 meses.</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="#contacto" class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl bg-[rgb(27,146,208)] text-white font-bold hover:bg-[rgb(27,146,208)]/80 transition-all text-sm">
                        <i class="bi bi-shield-lock"></i> Blindar mi empresa ahora
                    </a>
                    <a href="#solucion" class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl bg-slate-900 border border-slate-700 text-slate-300 font-bold hover:border-[rgb(27,146,208)]/40 transition-all text-sm">
                        <i class="bi bi-arrow-down-circle"></i> Ver soluciones
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- PROBLEMA -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">
            <div class="text-center mb-8" data-aos="fade-up">
                <h2 class="text-2xl sm:text-3xl font-display font-bold text-white mb-3">
                    Lo que pasa cuando <span class="text-red-400">no tienes defensa digital</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-slate-900/80 border border-slate-800 rounded-xl p-5">
                    <div class="w-10 h-10 rounded-lg bg-red-500/10 flex items-center justify-center text-red-400 mb-3">
                        <i class="bi bi-file-earmark-lock2-fill text-lg"></i>
                    </div>
                    <h3 class="text-white font-bold text-sm mb-2">Datos secuestrados</h3>
                    <p class="text-slate-400 text-xs">Un ransomware cifra archivos, bases de datos y contabilidad. Sin respaldo, desaparecen para siempre.</p>
                </div>
                <div class="bg-slate-900/80 border border-slate-800 rounded-xl p-5">
                    <div class="w-10 h-10 rounded-lg bg-red-500/10 flex items-center justify-center text-red-400 mb-3">
                        <i class="bi bi-unlock-fill text-lg"></i>
                    </div>
                    <h3 class="text-white font-bold text-sm mb-2">Red sin protección</h3>
                    <p class="text-slate-400 text-xs">Sin firewall ni segmentación, un atacante se mueve libremente por toda tu red empresarial.</p>
                </div>
                <div class="bg-slate-900/80 border border-slate-800 rounded-xl p-5">
                    <div class="w-10 h-10 rounded-lg bg-red-500/10 flex items-center justify-center text-red-400 mb-3">
                        <i class="bi bi-person-fill-slash text-lg"></i>
                    </div>
                    <h3 class="text-white font-bold text-sm mb-2">Fuga de información</h3>
                    <p class="text-slate-400 text-xs">Sin políticas de seguridad, empleados pueden filtrar datos sensibles sin que nadie lo detecte.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SOLUCIÓN -->
    <section id="solucion" class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-[rgb(27,146,208)]/5 rounded-full blur-[150px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl relative z-10">

            <div class="text-center mb-8" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[rgb(27,146,208)]/10 border border-[rgb(27,146,208)]/20 text-[rgb(27,146,208)] text-xs font-bold uppercase tracking-widest mb-4">
                    <i class="bi bi-shield-lock-fill"></i> Solución Cybertec
                </span>
                <h2 class="text-2xl sm:text-3xl font-display font-bold text-white">
                    Seguridad Digital y <span class="text-[rgb(27,146,208)]">Defensa Perimetral</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                <!-- Firewall -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-[rgb(27,146,208)]/40 rounded-xl p-5 transition-all duration-300" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-12 h-12 rounded-xl bg-[rgb(27,146,208)]/10 border border-[rgb(27,146,208)]/20 flex items-center justify-center text-[rgb(27,146,208)] mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-bricks text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Seguridad Perimetral</h3>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Firewalls empresariales (Fortinet)</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Segmentación de red</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Control de accesos a la red</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> VPN corporativa segura</li>
                    </ul>
                </div>

                <!-- Antivirus -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-[rgb(27,146,208)]/40 rounded-xl p-5 transition-all duration-300" data-aos="fade-up" data-aos-delay="80">
                    <div class="w-12 h-12 rounded-xl bg-[rgb(27,146,208)]/10 border border-[rgb(27,146,208)]/20 flex items-center justify-center text-[rgb(27,146,208)] mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-shield-fill-check text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Antivirus Corporativo</h3>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Detección y eliminación de malware</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Protección en tiempo real</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Reportes de incidentes</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Gestión centralizada</li>
                    </ul>
                </div>

                <!-- Políticas -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-[rgb(27,146,208)]/40 rounded-xl p-5 transition-all duration-300" data-aos="fade-up" data-aos-delay="160">
                    <div class="w-12 h-12 rounded-xl bg-[rgb(27,146,208)]/10 border border-[rgb(27,146,208)]/20 flex items-center justify-center text-[rgb(27,146,208)] mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-file-earmark-lock-fill text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Seguridad de la Información</h3>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Políticas de seguridad empresarial</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Protección de información crítica</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Consultoría en mejores prácticas</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Alineación con normas ISO 27000</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- BENEFICIOS -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5 bg-slate-900/30">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">
            <div class="text-center mb-8" data-aos="fade-up">
                <h2 class="text-2xl sm:text-3xl font-display font-bold text-white">
                    ¿Por qué elegir Cybertec?
                </h2>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center p-4">
                    <div class="w-12 h-12 rounded-full bg-[rgb(27,146,208)]/10 flex items-center justify-center text-[rgb(27,146,208)] mx-auto mb-3">
                        <i class="bi bi-patch-check-fill text-xl"></i>
                    </div>
                    <h4 class="text-white font-bold text-sm mb-1">Partner Fortinet</h4>
                    <p class="text-slate-500 text-xs">Firewalls líderes del mercado</p>
                </div>
                <div class="text-center p-4">
                    <div class="w-12 h-12 rounded-full bg-[rgb(27,146,208)]/10 flex items-center justify-center text-[rgb(27,146,208)] mx-auto mb-3">
                        <i class="bi bi-clock-history text-xl"></i>
                    </div>
                    <h4 class="text-white font-bold text-sm mb-1">Monitoreo 24/7</h4>
                    <p class="text-slate-500 text-xs">Detección de amenazas continua</p>
                </div>
                <div class="text-center p-4">
                    <div class="w-12 h-12 rounded-full bg-[rgb(27,146,208)]/10 flex items-center justify-center text-[rgb(27,146,208)] mx-auto mb-3">
                        <i class="bi bi-journal-check text-xl"></i>
                    </div>
                    <h4 class="text-white font-bold text-sm mb-1">ISO 27000</h4>
                    <p class="text-slate-500 text-xs">Consultoría en normatividad</p>
                </div>
                <div class="text-center p-4">
                    <div class="w-12 h-12 rounded-full bg-[rgb(27,146,208)]/10 flex items-center justify-center text-[rgb(27,146,208)] mx-auto mb-3">
                        <i class="bi bi-graph-up-arrow text-xl"></i>
                    </div>
                    <h4 class="text-white font-bold text-sm mb-1">Reportes ejecutivos</h4>
                    <p class="text-slate-500 text-xs">Visibilidad para gerencia</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA + FORMULARIO -->
    <section id="contacto" class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-[rgb(27,146,208)]/5 rounded-full blur-[150px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-center">

                <!-- Left -->
                <div data-aos="fade-right">
                    <h2 class="text-2xl sm:text-3xl font-display font-bold text-white mb-4">
                        No esperes al <span class="text-red-400">próximo ataque.</span>
                    </h2>
                    <p class="text-slate-400 text-sm mb-5">
                        Cada día sin protección digital es una invitación abierta a ciberdelincuentes. Solicita una evaluación de seguridad sin costo.
                    </p>
                    <div class="bg-red-500/5 border border-red-500/15 rounded-xl p-4">
                        <p class="text-red-400 text-xs font-bold uppercase tracking-widest mb-2">
                            <i class="bi bi-exclamation-triangle-fill mr-1"></i> Dato real
                        </p>
                        <p class="text-white text-sm font-bold">El costo promedio de un ciberataque para una PYME supera los <span class="text-red-400">$200 millones COP</span> en pérdidas directas.</p>
                    </div>
                </div>

                <!-- Right: Form -->
                <div class="rounded-2xl bg-slate-900/80 border border-slate-800 p-5 sm:p-6 backdrop-blur" data-aos="fade-left">
                    <h3 class="text-lg font-display font-bold text-white mb-4 text-center">Evaluación de seguridad</h3>
                    
                    <form id="formSegDigital" class="space-y-4">
                        <div>
                            <label class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Nombre</label>
                            <input type="text" id="sdNombre" placeholder="Tu nombre" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-[rgb(27,146,208)] transition-colors placeholder:text-slate-600 text-sm" required>
                        </div>
                        <div>
                            <label class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Empresa</label>
                            <input type="text" id="sdEmpresa" placeholder="Nombre de tu empresa" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-[rgb(27,146,208)] transition-colors placeholder:text-slate-600 text-sm" required>
                        </div>
                        <div>
                            <label class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Teléfono</label>
                            <input type="tel" id="sdTelefono" placeholder="+57 300 000 0000" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-[rgb(27,146,208)] transition-colors placeholder:text-slate-600 text-sm" required>
                        </div>
                        <div>
                            <label class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">¿Qué necesitas?</label>
                            <select id="sdServicio" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-[rgb(27,146,208)] transition-colors text-sm" required>
                                <option value="" selected disabled>Seleccionar servicio</option>
                                <option value="Firewall empresarial">Firewall empresarial</option>
                                <option value="Antivirus corporativo">Antivirus corporativo</option>
                                <option value="Políticas de seguridad / ISO 27000">Políticas de seguridad / ISO 27000</option>
                                <option value="Evaluación completa de seguridad">Evaluación completa de seguridad</option>
                            </select>
                        </div>

                        <button type="submit" class="w-full flex items-center justify-center gap-2 bg-[rgb(27,146,208)] text-white font-bold px-6 py-4 rounded-xl hover:bg-[rgb(27,146,208)]/80 transition-all text-sm sm:text-base mt-2">
                            <i class="bi bi-whatsapp text-lg"></i> Solicitar evaluación
                        </button>

                        <div class="relative flex items-center gap-3 mt-4">
                            <div class="flex-1 h-px bg-slate-700"></div>
                            <span class="text-slate-500 text-xs">o si prefieres</span>
                            <div class="flex-1 h-px bg-slate-700"></div>
                        </div>

                        <a href="https://wa.me/573175133375?text=Hola%20Cybertec%2C%20necesito%20evaluar%20la%20seguridad%20digital%20de%20mi%20empresa." class="w-full flex items-center justify-center gap-2 mt-3 px-6 py-3.5 rounded-xl bg-slate-950 border border-slate-700 text-white font-bold hover:border-green-500/40 hover:bg-slate-900 transition-all text-sm" target="_blank" rel="noopener noreferrer">
                            <i class="bi bi-whatsapp text-green-400 text-lg"></i> Hablar por WhatsApp
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer mini -->
    <footer class="bg-slate-950 border-t border-slate-900 py-8">
        <div class="container mx-auto px-4 sm:px-6 text-center">
            <a href="../">
                <img src="../assets/media/Logo-Banner.png" alt="Cybertec" class="h-10 object-contain mx-auto mb-4">
            </a>
            <div class="flex justify-center gap-4 mb-4">
                <a href="https://wa.me/573175133375" target="_blank" rel="noopener noreferrer" class="text-slate-500 hover:text-[rgb(27,146,208)] transition-colors text-sm"><i class="bi bi-whatsapp mr-1"></i> +57 317 513 3375</a>
                <a href="mailto:ventas@cybertec.com.co" class="text-slate-500 hover:text-[rgb(27,146,208)] transition-colors text-sm"><i class="bi bi-envelope-fill mr-1"></i> ventas@cybertec.com.co</a>
            </div>
            <p class="text-slate-600 text-xs">&copy; <?php echo date('Y'); ?> Cybertec Informática & Telecomunicaciones SAS</p>
        </div>
    </footer>

    <!-- AOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({ duration: 800, offset: 100, easing: 'ease-in-out-quad', once: false });

        window.addEventListener('scroll', function() {
            var nav = document.getElementById('main-nav');
            nav.querySelector('.absolute').style.background = window.scrollY > 40 ? 'rgba(2,6,23,0.92)' : '';
        });

        document.getElementById('formSegDigital').addEventListener('submit', function(e) {
            e.preventDefault();
            var nombre = document.getElementById('sdNombre').value.trim();
            var empresa = document.getElementById('sdEmpresa').value.trim();
            var telefono = document.getElementById('sdTelefono').value.trim();
            var servicio = document.getElementById('sdServicio').value;
            if (!nombre || !empresa || !telefono || !servicio) return;
            var msg = 'Hola Cybertec, me interesa Seguridad Digital y Defensa Perimetral.\n\n' +
                'Nombre: ' + nombre + '\n' +
                'Empresa: ' + empresa + '\n' +
                'Teléfono: ' + telefono + '\n' +
                'Servicio: ' + servicio;
            window.open('https://wa.me/573175133375?text=' + encodeURIComponent(msg), '_blank');
        });
    </script>
</body>
</html>
