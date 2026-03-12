<?php
/**
 * Landing Page — Seguridad Física
 * CCTV, Control de Acceso Biométrico, Alarmas Digitales
 */
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <title>Seguridad Física para Empresas | CCTV, Control de Acceso y Alarmas | Cybertec</title>
    <meta name="description" content="Protege tu empresa con sistemas de videovigilancia CCTV, control de acceso biométrico y alarmas digitales en Piedecuesta, Bucaramanga y Santander. Cybertec: seguridad física empresarial.">
    <meta name="keywords" content="CCTV Piedecuesta, cámaras de seguridad Bucaramanga, control de acceso biométrico Santander, alarmas digitales empresas, videovigilancia empresarial, seguridad física Colombia, Cybertec seguridad">
    <meta name="author" content="Cybertec Informática & Telecomunicaciones SAS">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.cybertec.com.co/seguridad-fisica/">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.cybertec.com.co/seguridad-fisica/">
    <meta property="og:title" content="Seguridad Física Empresarial | CCTV, Control de Acceso y Alarmas | Cybertec">
    <meta property="og:description" content="¿Tu empresa está desprotegida? Sistemas de CCTV, control de acceso biométrico y alarmas digitales en Santander. Cotiza con Cybertec.">
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
    <div class="nav-laser-line fixed top-[44px] sm:top-[48px] w-full z-50"></div>

    <!-- HERO -->
    <section class="relative min-h-[55vh] sm:min-h-[65vh] flex items-center pt-16 pb-8 overflow-hidden">
        <div class="absolute inset-0 cyber-grid opacity-[0.03]"></div>
        <div class="absolute top-1/3 right-0 w-[500px] h-[500px] bg-violet-500/10 rounded-full blur-[150px]"></div>

        <div class="container mx-auto px-4 sm:px-6 relative z-10 max-w-5xl">
            <div class="text-center" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-500/10 border border-red-500/20 text-red-400 text-xs font-bold uppercase tracking-widest mb-6">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    Riesgo físico
                </span>

                <h1 class="text-[1.55rem] sm:text-4xl lg:text-5xl font-display font-bold leading-tight mb-4">
                    Un intruso puede entrar a tu empresa <span class="text-red-400">y tú no te vas a enterar.</span>
                </h1>

                <p class="text-slate-400 text-base sm:text-lg max-w-2xl mx-auto mb-4">
                    Sin cámaras, sin control de acceso, sin alarmas. <strong class="text-white">¿Quién vigila tu empresa cuando tú no estás?</strong>
                </p>

                <div class="flex items-center gap-3 bg-slate-900/80 border border-slate-800 rounded-xl px-4 sm:px-5 py-3 mb-6 max-w-xl mx-auto" data-aos="zoom-in" data-aos-delay="150">
                    <i class="bi bi-camera-video-off text-red-400 text-xl"></i>
                    <p class="text-sm text-slate-300">El <span class="text-red-400 font-bold">73%</span> de los robos internos no dejan evidencia sin videovigilancia.</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="#contacto" class="inline-flex items-center justify-center gap-2 px-5 py-3 sm:px-7 sm:py-3.5 rounded-xl bg-[rgb(27,146,208)] text-white font-bold hover:bg-[rgb(27,146,208)]/80 transition-all text-sm shadow-lg shadow-[rgb(27,146,208)]/20">
                        <i class="bi bi-shield-check"></i> Proteger mi empresa ahora
                    </a>
                    <a href="#solucion" class="inline-flex items-center justify-center gap-2 px-5 py-3 sm:px-7 sm:py-3.5 rounded-xl bg-slate-900 border border-slate-700 text-slate-300 font-bold hover:border-[rgb(27,146,208)]/40 transition-all text-sm">
                        <i class="bi bi-arrow-down-circle"></i> Ver soluciones
                    </a>
                </div>

                <div class="mt-6 flex justify-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative">
                        <img src="../assets/media/cctv.png" alt="CCTV Empresarial" class="h-16 sm:h-24 object-contain opacity-60 drop-shadow-[0_0_20px_rgba(139,92,246,0.3)]">
                        <div class="absolute inset-0 bg-gradient-to-t from-cyber-base via-transparent to-transparent"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROBLEMA -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">
            <div class="text-center mb-8" data-aos="fade-up">
                <h2 class="text-2xl sm:text-3xl font-display font-bold text-white mb-3">
                    Lo que pasa cuando <span class="text-red-400">no tienes seguridad física</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4" data-aos="fade-up" data-aos-delay="80">
                <div class="bg-slate-900/80 border border-slate-800 rounded-xl p-5 relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-[2px] bg-gradient-to-r from-transparent via-red-500/60 to-transparent"></div>
                    <div class="w-10 h-10 rounded-lg bg-red-500/10 flex items-center justify-center text-red-400 mb-3">
                        <i class="bi bi-eye-slash-fill text-lg"></i>
                    </div>
                    <h3 class="text-white font-bold text-sm mb-2">Robos sin evidencia</h3>
                    <p class="text-slate-400 text-xs">Sin cámaras no hay pruebas. No puedes reclamar al seguro ni identificar al responsable.</p>
                </div>
                <div class="bg-slate-900/80 border border-slate-800 rounded-xl p-5 relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-[2px] bg-gradient-to-r from-transparent via-red-500/60 to-transparent"></div>
                    <div class="w-10 h-10 rounded-lg bg-red-500/10 flex items-center justify-center text-red-400 mb-3">
                        <i class="bi bi-door-open-fill text-lg"></i>
                    </div>
                    <h3 class="text-white font-bold text-sm mb-2">Accesos no controlados</h3>
                    <p class="text-slate-400 text-xs">Cualquier persona entra y sale sin registro. Áreas sensibles quedan expuestas a empleados y desconocidos.</p>
                </div>
                <div class="bg-slate-900/80 border border-slate-800 rounded-xl p-5 relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-[2px] bg-gradient-to-r from-transparent via-red-500/60 to-transparent"></div>
                    <div class="w-10 h-10 rounded-lg bg-red-500/10 flex items-center justify-center text-red-400 mb-3">
                        <i class="bi bi-bell-slash-fill text-lg"></i>
                    </div>
                    <h3 class="text-white font-bold text-sm mb-2">Intrusiones silenciosas</h3>
                    <p class="text-slate-400 text-xs">Sin alarmas, un intruso puede operar horas dentro de tu empresa antes de que alguien lo note.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SOLUCIÓN -->
    <section id="solucion" class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-violet-500/5 rounded-full blur-[150px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl relative z-10">

            <div class="text-center mb-8" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-violet-500/10 border border-violet-500/20 text-violet-400 text-xs font-bold uppercase tracking-widest mb-4">
                    <i class="bi bi-shield-fill-check"></i> Solución Cybertec
                </span>
                <h2 class="text-2xl sm:text-3xl font-display font-bold text-white">
                    Seguridad Física <span class="text-violet-400">Empresarial</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                <!-- CCTV -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-violet-500/40 rounded-xl p-5 transition-all duration-300" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-12 h-12 rounded-xl bg-violet-500/10 border border-violet-500/20 flex items-center justify-center text-violet-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-camera-video-fill text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Videovigilancia CCTV</h3>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Cámaras IP de alta resolución</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Grabación automática 24/7</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Detección avanzada de movimiento</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Monitoreo remoto desde cualquier dispositivo</li>
                    </ul>
                </div>

                <!-- Control Acceso -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-violet-500/40 rounded-xl p-5 transition-all duration-300" data-aos="fade-up" data-aos-delay="80">
                    <div class="w-12 h-12 rounded-xl bg-violet-500/10 border border-violet-500/20 flex items-center justify-center text-violet-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-fingerprint text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Control de Acceso Biométrico</h3>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Biometría, tarjetas, PIN y móvil</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Diseño según entorno del cliente</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Integración con cámaras y alarmas</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Registro digital de ingresos</li>
                    </ul>
                </div>

                <!-- Alarmas -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-violet-500/40 rounded-xl p-5 transition-all duration-300" data-aos="fade-up" data-aos-delay="160">
                    <div class="w-12 h-12 rounded-xl bg-violet-500/10 border border-violet-500/20 flex items-center justify-center text-violet-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-bell-fill text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Alarmas Digitales</h3>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Sensores de movimiento, humo y gas</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Alarmas audibles y sonoras</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Notificaciones en app, email y SMS</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Integración con sistemas existentes</li>
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
                        <i class="bi bi-award-fill text-xl"></i>
                    </div>
                    <h4 class="text-white font-bold text-sm mb-1">Marcas líderes</h4>
                    <p class="text-slate-500 text-xs">Hikvision, Dahua y más</p>
                </div>
                <div class="text-center p-4">
                    <div class="w-12 h-12 rounded-full bg-[rgb(27,146,208)]/10 flex items-center justify-center text-[rgb(27,146,208)] mx-auto mb-3">
                        <i class="bi bi-tools text-xl"></i>
                    </div>
                    <h4 class="text-white font-bold text-sm mb-1">Instalación certificada</h4>
                    <p class="text-slate-500 text-xs">Técnicos especializados en campo</p>
                </div>
                <div class="text-center p-4">
                    <div class="w-12 h-12 rounded-full bg-[rgb(27,146,208)]/10 flex items-center justify-center text-[rgb(27,146,208)] mx-auto mb-3">
                        <i class="bi bi-phone-fill text-xl"></i>
                    </div>
                    <h4 class="text-white font-bold text-sm mb-1">Monitoreo remoto</h4>
                    <p class="text-slate-500 text-xs">Vigila desde tu celular 24/7</p>
                </div>
                <div class="text-center p-4">
                    <div class="w-12 h-12 rounded-full bg-[rgb(27,146,208)]/10 flex items-center justify-center text-[rgb(27,146,208)] mx-auto mb-3">
                        <i class="bi bi-headset text-xl"></i>
                    </div>
                    <h4 class="text-white font-bold text-sm mb-1">Soporte continuo</h4>
                    <p class="text-slate-500 text-xs">Mantenimiento y garantía</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PARTNERS -->
    <div class="py-6 border-t border-white/5">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">
            <p class="text-center text-slate-600 text-[0.65rem] uppercase tracking-widest mb-3">Trabajamos con</p>
            <div class="flex items-center justify-center gap-8">
                <img src="../assets/icons/hikvision.png" alt="Hikvision" class="h-5 sm:h-6 object-contain grayscale opacity-30 hover:opacity-60 transition-opacity">
            </div>
        </div>
    </div>

    <!-- CTA + FORMULARIO -->
    <section id="contacto" class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-[rgb(27,146,208)]/5 rounded-full blur-[150px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-center">

                <!-- Left: Urgencia -->
                <div data-aos="fade-right">
                    <h2 class="text-2xl sm:text-3xl font-display font-bold text-white mb-4">
                        No esperes a que <span class="text-red-400">ocurra un incidente.</span>
                    </h2>
                    <p class="text-slate-400 text-sm mb-5">
                        Cada día sin videovigilancia, sin control de acceso y sin alarmas es un día que tu empresa queda expuesta. Solicita una cotización sin compromiso.
                    </p>
                    <div class="bg-red-500/5 border border-red-500/15 rounded-xl p-4">
                        <p class="text-red-400 text-xs font-bold uppercase tracking-widest mb-2">
                            <i class="bi bi-exclamation-triangle-fill mr-1"></i> Dato real
                        </p>
                        <p class="text-white text-sm font-bold">Las empresas sin CCTV tienen <span class="text-red-400">4x más probabilidad</span> de sufrir pérdidas por robo interno.</p>
                    </div>
                </div>

                <!-- Right: Form -->
                <div class="rounded-2xl bg-slate-900/80 border border-slate-800 p-5 sm:p-6 backdrop-blur" data-aos="fade-left">
                    <h3 class="text-lg font-display font-bold text-white mb-4 text-center">Cotizar seguridad física</h3>
                    
                    <form id="formSegFisica" class="space-y-4">
                        <div>
                            <label class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Nombre</label>
                            <input type="text" id="sfNombre" placeholder="Tu nombre" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-[rgb(27,146,208)] transition-colors placeholder:text-slate-600 text-sm" required>
                        </div>
                        <div>
                            <label class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Empresa</label>
                            <input type="text" id="sfEmpresa" placeholder="Nombre de tu empresa" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-[rgb(27,146,208)] transition-colors placeholder:text-slate-600 text-sm" required>
                        </div>
                        <div>
                            <label class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Teléfono</label>
                            <input type="tel" id="sfTelefono" placeholder="+57 300 000 0000" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-[rgb(27,146,208)] transition-colors placeholder:text-slate-600 text-sm" required>
                        </div>
                        <div>
                            <label class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">¿Qué necesitas?</label>
                            <select id="sfServicio" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-[rgb(27,146,208)] transition-colors text-sm" required>
                                <option value="" selected disabled>Seleccionar servicio</option>
                                <option value="CCTV / Videovigilancia">CCTV / Videovigilancia</option>
                                <option value="Control de Acceso Biométrico">Control de Acceso Biométrico</option>
                                <option value="Alarmas Digitales">Alarmas Digitales</option>
                                <option value="Solución integral (todas)">Solución integral (todas)</option>
                            </select>
                        </div>

                        <button type="submit" class="w-full flex items-center justify-center gap-2 bg-[rgb(27,146,208)] text-white font-bold px-6 py-4 rounded-xl hover:bg-[rgb(27,146,208)]/80 transition-all text-sm sm:text-base mt-2">
                            <i class="bi bi-whatsapp text-lg"></i> Solicitar cotización
                        </button>

                        <div class="relative flex items-center gap-3 mt-4">
                            <div class="flex-1 h-px bg-slate-700"></div>
                            <span class="text-slate-500 text-xs">o si prefieres</span>
                            <div class="flex-1 h-px bg-slate-700"></div>
                        </div>

                        <a href="https://wa.me/573175133375?text=Hola%20Cybertec%2C%20me%20interesa%20cotizar%20un%20sistema%20de%20seguridad%20f%C3%ADsica%20para%20mi%20empresa." class="w-full flex items-center justify-center gap-2 mt-3 px-6 py-3.5 rounded-xl bg-slate-950 border border-slate-700 text-white font-bold hover:border-green-500/40 hover:bg-slate-900 transition-all text-sm" target="_blank" rel="noopener noreferrer">
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
            <div class="flex flex-col sm:flex-row justify-center items-center gap-2 sm:gap-4 mb-4">
                <a href="https://wa.me/573175133375" target="_blank" rel="noopener noreferrer" class="text-slate-500 hover:text-[rgb(27,146,208)] transition-colors text-xs sm:text-sm"><i class="bi bi-whatsapp mr-1"></i> +57 317 513 3375</a>
                <a href="mailto:ventas@cybertec.com.co" class="text-slate-500 hover:text-[rgb(27,146,208)] transition-colors text-xs sm:text-sm"><i class="bi bi-envelope-fill mr-1"></i> ventas@cybertec.com.co</a>
            </div>
            <p class="text-slate-600 text-xs">&copy; <?php echo date('Y'); ?> Cybertec Informática & Telecomunicaciones SAS</p>
        </div>
    </footer>

    <!-- AOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({ duration: 700, offset: 40, easing: 'ease-out-cubic', once: true });

        // Nav scroll
        window.addEventListener('scroll', function() {
            var nav = document.getElementById('main-nav');
            nav.querySelector('.absolute').style.background = window.scrollY > 40 ? 'rgba(2,6,23,0.92)' : '';
        });

        // Form → WhatsApp
        document.getElementById('formSegFisica').addEventListener('submit', function(e) {
            e.preventDefault();
            var nombre = document.getElementById('sfNombre').value.trim();
            var empresa = document.getElementById('sfEmpresa').value.trim();
            var telefono = document.getElementById('sfTelefono').value.trim();
            var servicio = document.getElementById('sfServicio').value;
            if (!nombre || !empresa || !telefono || !servicio) return;
            var msg = 'Hola Cybertec, me interesa cotizar Seguridad Física.\n\n' +
                'Nombre: ' + nombre + '\n' +
                'Empresa: ' + empresa + '\n' +
                'Teléfono: ' + telefono + '\n' +
                'Servicio: ' + servicio;
            window.open('https://wa.me/573175133375?text=' + encodeURIComponent(msg), '_blank');
        });
    </script>
</body>
</html>
