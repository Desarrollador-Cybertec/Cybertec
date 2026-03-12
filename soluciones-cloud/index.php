<?php
/**
 * Landing Page — Soluciones Cloud y Servicios Digitales
 * Hosting, Backups, Licenciamiento, Desarrollo de Software
 */
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <title>Soluciones Cloud y Servicios Digitales para Empresas | Cybertec</title>
    <meta name="description" content="Hosting empresarial, backups en nube, licenciamiento y desarrollo de software a medida para empresas en Piedecuesta, Bucaramanga y Santander. Cybertec cloud.">
    <meta name="keywords" content="hosting empresarial Bucaramanga, backup nube Santander, desarrollo software Piedecuesta, licenciamiento empresarial, cloud Colombia, Nextcloud, correo corporativo, Cybertec">
    <meta name="author" content="Cybertec Informática & Telecomunicaciones SAS">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.cybertec.com.co/soluciones-cloud/">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.cybertec.com.co/soluciones-cloud/">
    <meta property="og:title" content="Soluciones Cloud y Servicios Digitales | Cybertec">
    <meta property="og:description" content="¿Sin backups? ¿Sin hosting confiable? Soluciones cloud, desarrollo de software y licenciamiento empresarial con Cybertec en Santander.">
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
        <div class="absolute top-1/3 left-0 w-[500px] h-[500px] bg-amber-500/10 rounded-full blur-[150px]"></div>

        <div class="container mx-auto px-4 sm:px-6 relative z-10 max-w-5xl">
            <div class="text-center" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-500/10 border border-red-500/20 text-red-400 text-xs font-bold uppercase tracking-widest mb-6">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    Riesgo de datos
                </span>

                <h1 class="text-[1.55rem] sm:text-4xl lg:text-5xl font-display font-bold leading-tight mb-4">
                    Si tu servidor se cae hoy, <span class="text-red-400">¿puedes recuperar todo?</span>
                </h1>

                <p class="text-slate-400 text-base sm:text-lg max-w-2xl mx-auto mb-4">
                    Sin backups, sin hosting confiable, sin licencias legales. <strong class="text-white">Un fallo y pierdes años de información.</strong>
                </p>

                <div class="flex items-center gap-3 bg-slate-900/80 border border-slate-800 rounded-xl px-4 sm:px-5 py-3 mb-6 max-w-xl mx-auto" data-aos="zoom-in" data-aos-delay="150">
                    <i class="bi bi-database-fill-x text-red-400 text-xl"></i>
                    <p class="text-sm text-slate-300">El <span class="text-red-400 font-bold">93%</span> de las empresas que pierden datos críticos sin respaldo cierran en menos de un año.</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="#contacto" class="inline-flex items-center justify-center gap-2 px-5 py-3 sm:px-7 sm:py-3.5 rounded-xl bg-[rgb(27,146,208)] text-white font-bold hover:bg-[rgb(27,146,208)]/80 transition-all text-sm shadow-lg shadow-[rgb(27,146,208)]/20">
                        <i class="bi bi-cloud-check"></i> Proteger mis datos ahora
                    </a>
                    <a href="#solucion" class="inline-flex items-center justify-center gap-2 px-5 py-3 sm:px-7 sm:py-3.5 rounded-xl bg-slate-900 border border-slate-700 text-slate-300 font-bold hover:border-[rgb(27,146,208)]/40 transition-all text-sm">
                        <i class="bi bi-arrow-down-circle"></i> Ver soluciones
                    </a>
                </div>

                <div class="mt-6 flex justify-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative">
                        <img src="../assets/media/software.png" alt="Soluciones Cloud" class="h-16 sm:h-24 object-contain opacity-60 drop-shadow-[0_0_20px_rgba(245,158,11,0.3)]">
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
                    Lo que pasa cuando <span class="text-red-400">no tienes soluciones cloud</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4" data-aos="fade-up" data-aos-delay="80">
                <div class="bg-slate-900/80 border border-slate-800 rounded-xl p-5 relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-[2px] bg-gradient-to-r from-transparent via-red-500/60 to-transparent"></div>
                    <div class="w-10 h-10 rounded-lg bg-red-500/10 flex items-center justify-center text-red-400 mb-3">
                        <i class="bi bi-database-fill-x text-lg"></i>
                    </div>
                    <h3 class="text-white font-bold text-sm mb-2">Datos irrecuperables</h3>
                    <p class="text-slate-400 text-xs">Sin backups automatizados, un fallo de hardware o un virus pueden destruir años de contabilidad, contratos y archivos críticos.</p>
                </div>
                <div class="bg-slate-900/80 border border-slate-800 rounded-xl p-5 relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-[2px] bg-gradient-to-r from-transparent via-red-500/60 to-transparent"></div>
                    <div class="w-10 h-10 rounded-lg bg-red-500/10 flex items-center justify-center text-red-400 mb-3">
                        <i class="bi bi-globe2 text-lg"></i>
                    </div>
                    <h3 class="text-white font-bold text-sm mb-2">Web y correo inestables</h3>
                    <p class="text-slate-400 text-xs">Un hosting genérico se cae en momentos críticos. Correos corporativos con dominios gratuitos proyectan falta de profesionalismo.</p>
                </div>
                <div class="bg-slate-900/80 border border-slate-800 rounded-xl p-5 relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-[2px] bg-gradient-to-r from-transparent via-red-500/60 to-transparent"></div>
                    <div class="w-10 h-10 rounded-lg bg-red-500/10 flex items-center justify-center text-red-400 mb-3">
                        <i class="bi bi-exclamation-diamond-fill text-lg"></i>
                    </div>
                    <h3 class="text-white font-bold text-sm mb-2">Software pirata</h3>
                    <p class="text-slate-400 text-xs">Licencias ilegales exponen tu empresa a multas, vulnerabilidades de seguridad y auditorías legales.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SOLUCIÓN -->
    <section id="solucion" class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-amber-500/5 rounded-full blur-[150px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl relative z-10">

            <div class="text-center mb-8" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-400 text-xs font-bold uppercase tracking-widest mb-4">
                    <i class="bi bi-cloud-fill"></i> Solución Cybertec
                </span>
                <h2 class="text-2xl sm:text-3xl font-display font-bold text-white">
                    Soluciones Cloud y <span class="text-amber-400">Servicios Digitales</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Hosting & Correo -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-amber-500/40 rounded-xl p-5 transition-all duration-300" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-12 h-12 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-globe2 text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Hosting y Correo Corporativo</h3>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Hosting web de alta disponibilidad</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Soporte 24/7</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Registro y renovación de dominios</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Correos corporativos personalizados</li>
                    </ul>
                </div>

                <!-- Backups -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-amber-500/40 rounded-xl p-5 transition-all duration-300" data-aos="fade-up" data-aos-delay="80">
                    <div class="w-12 h-12 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-cloud-arrow-up-fill text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Backups y Recuperación</h3>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Backups en nube y físicos (Nextcloud)</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Recuperación ante desastres</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Copias para aplicaciones críticas</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Automatización de respaldos</li>
                    </ul>
                </div>

                <!-- Licenciamiento -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-amber-500/40 rounded-xl p-5 transition-all duration-300" data-aos="fade-up" data-aos-delay="160">
                    <div class="w-12 h-12 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-patch-check-fill text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Licenciamiento de Software</h3>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Sistemas operativos originales</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Software ofimático (Microsoft 365)</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Aplicaciones corporativas</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Cumplimiento legal garantizado</li>
                    </ul>
                </div>

                <!-- Desarrollo -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-amber-500/40 rounded-xl p-5 transition-all duration-300" data-aos="fade-up" data-aos-delay="240">
                    <div class="w-12 h-12 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-code-slash text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Desarrollo de Software</h3>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Apps web y móviles a medida</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Integración entre sistemas</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Automatización de procesos</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Optimización operativa</li>
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
                    <div class="w-12 h-12 rounded-full bg-amber-500/10 flex items-center justify-center text-amber-400 mx-auto mb-3">
                        <i class="bi bi-cloud-check-fill text-xl"></i>
                    </div>
                    <h4 class="text-white font-bold text-sm mb-1">Nextcloud propio</h4>
                    <p class="text-slate-500 text-xs">Nube privada segura para tu empresa</p>
                </div>
                <div class="text-center p-4">
                    <div class="w-12 h-12 rounded-full bg-amber-500/10 flex items-center justify-center text-amber-400 mx-auto mb-3">
                        <i class="bi bi-arrow-clockwise text-xl"></i>
                    </div>
                    <h4 class="text-white font-bold text-sm mb-1">Backups automáticos</h4>
                    <p class="text-slate-500 text-xs">Recuperación garantizada</p>
                </div>
                <div class="text-center p-4">
                    <div class="w-12 h-12 rounded-full bg-amber-500/10 flex items-center justify-center text-amber-400 mx-auto mb-3">
                        <i class="bi bi-code-square text-xl"></i>
                    </div>
                    <h4 class="text-white font-bold text-sm mb-1">Software a medida</h4>
                    <p class="text-slate-500 text-xs">Desarrollo personalizado para tu negocio</p>
                </div>
                <div class="text-center p-4">
                    <div class="w-12 h-12 rounded-full bg-amber-500/10 flex items-center justify-center text-amber-400 mx-auto mb-3">
                        <i class="bi bi-shield-check text-xl"></i>
                    </div>
                    <h4 class="text-white font-bold text-sm mb-1">Licencias legales</h4>
                    <p class="text-slate-500 text-xs">Sin riesgo de multas o auditorías</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PARTNERS -->
    <div class="py-6 border-t border-white/5">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">
            <p class="text-center text-slate-600 text-[0.65rem] uppercase tracking-widest mb-3">Trabajamos con</p>
            <div class="flex items-center justify-center gap-8">
                <img src="../assets/icons/nextcloud.png" alt="Nextcloud" class="h-5 sm:h-6 object-contain grayscale opacity-30 hover:opacity-60 transition-opacity">
                <img src="../assets/icons/plesk.png" alt="Plesk" class="h-5 sm:h-6 object-contain grayscale opacity-30 hover:opacity-60 transition-opacity">
            </div>
        </div>
    </div>

    <!-- CTA + FORMULARIO -->
    <section id="contacto" class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-amber-500/5 rounded-full blur-[150px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-center">

                <!-- Left -->
                <div data-aos="fade-right">
                    <h2 class="text-2xl sm:text-3xl font-display font-bold text-white mb-4">
                        No esperes a <span class="text-red-400">perder tus datos.</span>
                    </h2>
                    <p class="text-slate-400 text-sm mb-5">
                        Un disco duro dañado, un virus o un error humano puede borrar todo. Implementa una solución cloud profesional antes de que sea demasiado tarde.
                    </p>
                    <div class="bg-red-500/5 border border-red-500/15 rounded-xl p-4">
                        <p class="text-red-400 text-xs font-bold uppercase tracking-widest mb-2">
                            <i class="bi bi-exclamation-triangle-fill mr-1"></i> Dato real
                        </p>
                        <p class="text-white text-sm font-bold">El costo de recuperar datos de un disco dañado puede superar los <span class="text-red-400">$15 millones COP</span> — si es que se pueden recuperar.</p>
                    </div>
                </div>

                <!-- Right: Form -->
                <div class="rounded-2xl bg-slate-900/80 border border-slate-800 p-5 sm:p-6 backdrop-blur" data-aos="fade-left">
                    <h3 class="text-lg font-display font-bold text-white mb-4 text-center">Cotizar solución cloud</h3>
                    
                    <form id="formCloud" class="space-y-4">
                        <div>
                            <label class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Nombre</label>
                            <input type="text" id="clNombre" placeholder="Tu nombre" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-amber-500 transition-colors placeholder:text-slate-600 text-sm" required>
                        </div>
                        <div>
                            <label class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Empresa</label>
                            <input type="text" id="clEmpresa" placeholder="Nombre de tu empresa" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-amber-500 transition-colors placeholder:text-slate-600 text-sm" required>
                        </div>
                        <div>
                            <label class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Teléfono</label>
                            <input type="tel" id="clTelefono" placeholder="+57 300 000 0000" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-amber-500 transition-colors placeholder:text-slate-600 text-sm" required>
                        </div>
                        <div>
                            <label class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">¿Qué necesitas?</label>
                            <select id="clServicio" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-amber-500 transition-colors text-sm" required>
                                <option value="" selected disabled>Seleccionar servicio</option>
                                <option value="Hosting y correo corporativo">Hosting y correo corporativo</option>
                                <option value="Backups en nube">Backups en nube</option>
                                <option value="Licenciamiento de software">Licenciamiento de software</option>
                                <option value="Desarrollo de software a medida">Desarrollo de software a medida</option>
                                <option value="Solución integral cloud">Solución integral cloud</option>
                            </select>
                        </div>

                        <button type="submit" class="w-full flex items-center justify-center gap-2 bg-amber-500 text-white font-bold px-6 py-4 rounded-xl hover:bg-amber-600 transition-all text-sm sm:text-base mt-2">
                            <i class="bi bi-whatsapp text-lg"></i> Solicitar cotización
                        </button>

                        <div class="relative flex items-center gap-3 mt-4">
                            <div class="flex-1 h-px bg-slate-700"></div>
                            <span class="text-slate-500 text-xs">o si prefieres</span>
                            <div class="flex-1 h-px bg-slate-700"></div>
                        </div>

                        <a href="https://wa.me/573175133375?text=Hola%20Cybertec%2C%20me%20interesan%20las%20soluciones%20cloud%20para%20mi%20empresa." class="w-full flex items-center justify-center gap-2 mt-3 px-6 py-3.5 rounded-xl bg-slate-950 border border-slate-700 text-white font-bold hover:border-green-500/40 hover:bg-slate-900 transition-all text-sm" target="_blank" rel="noopener noreferrer">
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

        window.addEventListener('scroll', function() {
            var nav = document.getElementById('main-nav');
            nav.querySelector('.absolute').style.background = window.scrollY > 40 ? 'rgba(2,6,23,0.92)' : '';
        });

        document.getElementById('formCloud').addEventListener('submit', function(e) {
            e.preventDefault();
            var nombre = document.getElementById('clNombre').value.trim();
            var empresa = document.getElementById('clEmpresa').value.trim();
            var telefono = document.getElementById('clTelefono').value.trim();
            var servicio = document.getElementById('clServicio').value;
            if (!nombre || !empresa || !telefono || !servicio) return;
            var msg = 'Hola Cybertec, me interesan Soluciones Cloud y Servicios Digitales.\n\n' +
                'Nombre: ' + nombre + '\n' +
                'Empresa: ' + empresa + '\n' +
                'Teléfono: ' + telefono + '\n' +
                'Servicio: ' + servicio;
            window.open('https://wa.me/573175133375?text=' + encodeURIComponent(msg), '_blank');
        });
    </script>
</body>
</html>
