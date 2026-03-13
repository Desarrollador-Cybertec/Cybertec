<?php
/**
 * Landing Page — Soluciones Cloud y Servicios Digitales
 * High-Conversion 12-Element Framework
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

    <!-- ======================== 1. HERO ======================== -->
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

                <!-- Trust Row -->
                <div class="flex flex-wrap items-center justify-center gap-4 sm:gap-6 mb-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-amber-500/5 border border-amber-500/20">
                        <i class="bi bi-cloud-check-fill text-amber-400 text-sm"></i>
                        <span class="text-white text-xs font-bold">+50 empresas</span>
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-amber-500/5 border border-amber-500/20">
                        <i class="bi bi-arrow-repeat text-amber-400 text-sm"></i>
                        <span class="text-white text-xs font-bold">Backups 24/7</span>
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-amber-500/5 border border-amber-500/20">
                        <i class="bi bi-shield-check text-amber-400 text-sm"></i>
                        <span class="text-white text-xs font-bold">99.9% uptime</span>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="#contacto" class="cta-pulse inline-flex items-center justify-center gap-2 px-5 py-3 sm:px-7 sm:py-3.5 rounded-xl bg-[rgb(27,146,208)] text-white font-bold hover:bg-[rgb(27,146,208)]/80 transition-all text-sm shadow-lg shadow-[rgb(27,146,208)]/20">
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

    <!-- ======================== 2. DOLOR — CHECKLIST ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">
            <div class="text-center mb-8" data-aos="fade-up">
                <h2 class="text-2xl sm:text-3xl font-display font-bold text-white mb-3">
                    ¿Te identificas con algo de <span class="text-red-400">esto?</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="80">
                <div class="pain-item">
                    <i class="bi bi-database-fill-x text-red-400 text-lg flex-shrink-0"></i>
                    <div>
                        <h4 class="text-white font-bold text-sm">Sin backups automatizados</h4>
                        <p class="text-slate-500 text-xs">Los respaldos dependen de alguien que "se acuerde" de copiar archivos a un USB.</p>
                    </div>
                </div>
                <div class="pain-item">
                    <i class="bi bi-globe2 text-red-400 text-lg flex-shrink-0"></i>
                    <div>
                        <h4 class="text-white font-bold text-sm">Hosting inestable y lento</h4>
                        <p class="text-slate-500 text-xs">Tu web se cae en momentos críticos y el soporte del hosting tarda días en responder.</p>
                    </div>
                </div>
                <div class="pain-item">
                    <i class="bi bi-exclamation-diamond-fill text-red-400 text-lg flex-shrink-0"></i>
                    <div>
                        <h4 class="text-white font-bold text-sm">Software pirata instalado</h4>
                        <p class="text-slate-500 text-xs">Licencias ilegales que ponen a tu empresa en riesgo de multas y vulnerabilidades.</p>
                    </div>
                </div>
                <div class="pain-item">
                    <i class="bi bi-envelope-x-fill text-red-400 text-lg flex-shrink-0"></i>
                    <div>
                        <h4 class="text-white font-bold text-sm">Correos con @gmail o @hotmail</h4>
                        <p class="text-slate-500 text-xs">Tu empresa proyecta falta de profesionalismo con correos gratuitos.</p>
                    </div>
                </div>
                <div class="pain-item">
                    <i class="bi bi-hdd-fill text-red-400 text-lg flex-shrink-0"></i>
                    <div>
                        <h4 class="text-white font-bold text-sm">Archivos en un solo disco</h4>
                        <p class="text-slate-500 text-xs">Toda la información crítica vive en un servidor viejo sin redundancia.</p>
                    </div>
                </div>
                <div class="pain-item">
                    <i class="bi bi-gear-wide-connected text-red-400 text-lg flex-shrink-0"></i>
                    <div>
                        <h4 class="text-white font-bold text-sm">Procesos manuales sin automatizar</h4>
                        <p class="text-slate-500 text-xs">Tareas repetitivas que podrían resolverse con software a medida, pero nadie las desarrolla.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 3. AMPLIFICACIÓN DE RIESGO ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5 bg-slate-900/30">
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6" data-aos="fade-up">
                <div class="bg-slate-900/60 border border-red-500/20 rounded-xl stat-card text-center">
                    <div class="stat-number text-red-400 font-display">$15M+</div>
                    <p class="text-slate-400 text-xs font-bold">COP puede costar recuperar datos de un disco dañado</p>
                </div>
                <div class="bg-slate-900/60 border border-red-500/20 rounded-xl stat-card text-center">
                    <div class="stat-number text-red-400 font-display">93%</div>
                    <p class="text-slate-400 text-xs font-bold">de empresas sin respaldo que pierden datos, cierran en &lt;1 año</p>
                </div>
                <div class="bg-slate-900/60 border border-red-500/20 rounded-xl stat-card text-center">
                    <div class="stat-number text-red-400 font-display">60%</div>
                    <p class="text-slate-400 text-xs font-bold">de las pymes no tienen un plan de respaldos funcional</p>
                </div>
            </div>
            <div class="mid-cta" data-aos="fade-up" data-aos-delay="80">
                <a href="#contacto" class="cta-pulse inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-[rgb(27,146,208)] text-white font-bold hover:bg-[rgb(27,146,208)]/80 transition-all text-sm shadow-lg shadow-[rgb(27,146,208)]/20">
                    <i class="bi bi-cloud-arrow-up-fill"></i> Proteger mi empresa ahora →
                </a>
            </div>
        </div>
    </section>

    <!-- ======================== 4. SOLUCIÓN ======================== -->
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
                <p class="text-slate-400 text-sm max-w-xl mx-auto mt-3">Protege tu información, profesionaliza tu presencia digital y automatiza procesos con tecnología que crece contigo.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Hosting & Correo -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-amber-500/40 rounded-xl p-5 transition-all duration-300 landing-card-hover" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-12 h-12 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-globe2 text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-1">Hosting y Correo Corporativo</h3>
                    <p class="text-slate-500 text-xs mb-3">Infraestructura web confiable y correo profesional con tu dominio.</p>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Hosting web de alta disponibilidad (99.9% uptime)</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Correos corporativos @tuempresa.com</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Registro y renovación de dominios</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Panel de administración Plesk</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Certificados SSL incluidos</li>
                    </ul>
                </div>

                <!-- Backups -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-amber-500/40 rounded-xl p-5 transition-all duration-300 landing-card-hover" data-aos="fade-up" data-aos-delay="80">
                    <div class="w-12 h-12 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-cloud-arrow-up-fill text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-1">Backups y Recuperación</h3>
                    <p class="text-slate-500 text-xs mb-3">Respaldo continuo en nube privada Nextcloud con recuperación garantizada.</p>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Backups automáticos en nube privada (Nextcloud)</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Copias físicas y offsite para redundancia</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Plan de recuperación ante desastres (DRP)</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Respaldos para aplicaciones críticas (ERP, contabilidad)</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Monitoreo y verificación de integridad</li>
                    </ul>
                </div>

                <!-- Licenciamiento -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-amber-500/40 rounded-xl p-5 transition-all duration-300 landing-card-hover" data-aos="fade-up" data-aos-delay="160">
                    <div class="w-12 h-12 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-patch-check-fill text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-1">Licenciamiento de Software</h3>
                    <p class="text-slate-500 text-xs mb-3">Legaliza tu empresa y elimina riesgos de auditorías con licencias originales.</p>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Sistemas operativos Windows originales</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Microsoft 365 (Word, Excel, Teams, OneDrive)</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Antivirus y software de seguridad</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Aplicaciones corporativas especializadas</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Cumplimiento legal y auditoría clean</li>
                    </ul>
                </div>

                <!-- Desarrollo -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-amber-500/40 rounded-xl p-5 transition-all duration-300 landing-card-hover" data-aos="fade-up" data-aos-delay="240">
                    <div class="w-12 h-12 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-code-slash text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-1">Desarrollo de Software</h3>
                    <p class="text-slate-500 text-xs mb-3">Aplicaciones a medida que automatizan procesos y optimizan tu negocio.</p>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Apps web y móviles personalizadas</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Integración entre sistemas (ERP, CRM, inventarios)</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Automatización de procesos operativos</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Dashboards y reportes en tiempo real</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-amber-400 mt-0.5"></i> Soporte y evolución continua</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 5. BENEFICIOS ORIENTADOS A RESULTADOS ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5 bg-slate-900/30">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">
            <div class="text-center mb-8" data-aos="fade-up">
                <h2 class="text-2xl sm:text-3xl font-display font-bold text-white">
                    Resultados que <span class="text-amber-400">obtendrás</span>
                </h2>
                <p class="text-slate-400 text-sm max-w-xl mx-auto mt-3">No solo implementamos tecnología. Entregamos tranquilidad, productividad y cumplimiento legal medible.</p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-slate-900/60 border border-slate-800 rounded-xl stat-card">
                    <div class="stat-number text-amber-400 font-display">99.9%</div>
                    <h4 class="text-white font-bold text-sm mb-1">Disponibilidad</h4>
                    <p class="text-slate-500 text-xs">Hosting y servicios cloud con uptime garantizado</p>
                </div>
                <div class="bg-slate-900/60 border border-slate-800 rounded-xl stat-card">
                    <div class="stat-number text-amber-400 font-display">100%</div>
                    <h4 class="text-white font-bold text-sm mb-1">Legalmente cubierto</h4>
                    <p class="text-slate-500 text-xs">Licencias originales que eliminan riesgos de auditoría</p>
                </div>
                <div class="bg-slate-900/60 border border-slate-800 rounded-xl stat-card">
                    <div class="stat-number text-amber-400 font-display">&lt;2h</div>
                    <h4 class="text-white font-bold text-sm mb-1">Recuperación</h4>
                    <p class="text-slate-500 text-xs">Tiempo máximo para restaurar datos desde backup</p>
                </div>
                <div class="bg-slate-900/60 border border-slate-800 rounded-xl stat-card">
                    <div class="stat-number text-amber-400 font-display">50%</div>
                    <h4 class="text-white font-bold text-sm mb-1">Ahorro en costos</h4>
                    <p class="text-slate-500 text-xs">Vs. construir infraestructura cloud propia</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 6. PRUEBA SOCIAL — LOGOS CLIENTES ======================== -->
    <section class="relative py-8 lg:py-10 overflow-hidden border-t border-white/5">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">
            <p class="text-center text-slate-500 text-xs uppercase tracking-widest font-bold mb-6" data-aos="fade-up">Empresas que confían su nube y datos a Cybertec</p>
            <div class="flex flex-wrap items-center justify-center gap-8 sm:gap-12" data-aos="fade-up" data-aos-delay="80">
                <img src="../assets/icons/iconos-clientes/blanco/OBLEAS-AL.png" alt="Obleas Floridablanca" class="h-8 sm:h-10 object-contain trust-logo">
                <img src="../assets/icons/iconos-clientes/blanco/ALCAMPO-AL.png" alt="Alcampo" class="h-8 sm:h-10 object-contain trust-logo">
                <img src="../assets/icons/iconos-clientes/blanco/TGI-EN.png" alt="TGI" class="h-8 sm:h-10 object-contain trust-logo">
                <img src="../assets/icons/iconos-clientes/blanco/PARAGUITAS-AL.png" alt="Paraguitas" class="h-8 sm:h-10 object-contain trust-logo">
                <img src="../assets/icons/iconos-clientes/blanco/CONCRESA-CN.png" alt="Concresa" class="h-8 sm:h-10 object-contain trust-logo">
            </div>
        </div>
    </section>

    <!-- ======================== 7. AUTORIDAD + CREDIBILIDAD ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8" data-aos="fade-up">
                <div class="text-center p-4 bg-slate-900/50 border border-slate-800 rounded-xl">
                    <div class="stat-number text-[rgb(27,146,208)] font-display">+10</div>
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Años de experiencia</p>
                </div>
                <div class="text-center p-4 bg-slate-900/50 border border-slate-800 rounded-xl">
                    <div class="stat-number text-[rgb(27,146,208)] font-display">+50</div>
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Empresas hospedadas</p>
                </div>
                <div class="text-center p-4 bg-slate-900/50 border border-slate-800 rounded-xl">
                    <div class="stat-number text-[rgb(27,146,208)] font-display">+200</div>
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Licencias gestionadas</p>
                </div>
                <div class="text-center p-4 bg-slate-900/50 border border-slate-800 rounded-xl">
                    <div class="stat-number text-[rgb(27,146,208)] font-display">0</div>
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Datos perdidos</p>
                </div>
            </div>
            <!-- Partners -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <p class="text-slate-600 text-[0.65rem] uppercase tracking-widest mb-3">Plataformas que utilizamos</p>
                <div class="flex items-center justify-center gap-8">
                    <img src="../assets/icons/nextcloud.png" alt="Nextcloud" class="h-6 sm:h-7 object-contain trust-logo">
                    <img src="../assets/icons/plesk.png" alt="Plesk" class="h-6 sm:h-7 object-contain trust-logo">
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 8. CASO DE ÉXITO ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 right-0 w-[400px] h-[400px] bg-amber-500/5 rounded-full blur-[120px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl relative z-10">
            <div class="text-center mb-6" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-400 text-[0.65rem] font-bold uppercase tracking-widest">
                    <i class="bi bi-star-fill"></i> Caso real
                </span>
            </div>

            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-6 sm:p-8" data-aos="fade-up" data-aos-delay="80">
                <div class="flex items-center gap-4 mb-5">
                    <img src="../assets/icons/iconos-clientes/blanco/OBLEAS-AL.png" alt="Obleas Floridablanca" class="h-8 object-contain opacity-70">
                    <div>
                        <p class="text-white font-bold text-sm">Sector Alimentos y Comercio</p>
                        <p class="text-slate-500 text-xs">Floridablanca, Santander</p>
                    </div>
                </div>

                <div class="case-quote mb-5">
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Sus archivos de contabilidad, inventarios y contratos vivían en un solo servidor sin respaldo. Un fallo eléctrico les hizo perder 2 semanas de facturación. Cybertec implementó Nextcloud con backups automáticos diarios, hosting para su web corporativa con correos @su-dominio, y licenciamiento legal en todas las estaciones. <strong class="text-white">En 6 meses, cero pérdidas de datos y reducción del 45% en costos de TI.</strong>
                    </p>
                </div>

                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-full bg-amber-500/10 text-amber-400 text-[0.65rem] font-bold">Nextcloud</span>
                    <span class="px-3 py-1 rounded-full bg-amber-500/10 text-amber-400 text-[0.65rem] font-bold">Hosting + correo</span>
                    <span class="px-3 py-1 rounded-full bg-amber-500/10 text-amber-400 text-[0.65rem] font-bold">Licenciamiento</span>
                    <span class="px-3 py-1 rounded-full bg-amber-500/10 text-amber-400 text-[0.65rem] font-bold">Backup diario</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 9. OFERTA IRRESISTIBLE ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-amber-500/5 rounded-full blur-[180px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-center">
                <!-- Left: Offer -->
                <div data-aos="fade-right">
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-400 text-xs font-bold uppercase tracking-widest mb-6">
                        <i class="bi bi-gift"></i> Sin costo
                    </span>

                    <h2 class="text-2xl sm:text-3xl font-display font-bold text-white mb-4">
                        Evaluación de Backup y Recuperación <span class="text-neon">Gratuita</span>
                    </h2>

                    <p class="text-slate-400 text-sm mb-5 leading-relaxed">
                        Analizamos el estado actual de tus respaldos, hosting y licenciamiento sin compromiso. Sabrás exactamente qué tan protegida (o vulnerable) está tu información.
                    </p>

                    <ul class="space-y-4 mb-6">
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-amber-500/10 flex items-center justify-center text-amber-400 mt-0.5">
                                <i class="bi bi-search"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm">Auditoría de respaldos</h4>
                                <p class="text-slate-400 text-xs">Verificamos si tus backups actuales funcionan y son recuperables.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-amber-500/10 flex items-center justify-center text-amber-400 mt-0.5">
                                <i class="bi bi-shield-exclamation"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm">Análisis de vulnerabilidad de datos</h4>
                                <p class="text-slate-400 text-xs">Identificamos puntos donde tu información está en riesgo.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-amber-500/10 flex items-center justify-center text-amber-400 mt-0.5">
                                <i class="bi bi-file-earmark-bar-graph"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm">Informe con plan de acción</h4>
                                <p class="text-slate-400 text-xs">Recibes un documento con recomendaciones priorizadas por urgencia.</p>
                            </div>
                        </li>
                    </ul>

                    <div class="bg-red-500/5 border border-red-500/15 rounded-xl p-4">
                        <p class="text-red-400 text-xs font-bold uppercase tracking-widest mb-2">
                            <i class="bi bi-exclamation-triangle-fill mr-1"></i> No puedes permitirte esperar
                        </p>
                        <p class="text-white text-sm font-bold">Un ransomware tarda <span class="text-red-400">45 segundos</span> en cifrar un servidor completo.</p>
                        <p class="text-slate-400 text-xs mt-1">¿Tus backups resistirían un ataque hoy?</p>
                    </div>
                </div>

                <!-- Right: Visual -->
                <div class="flex flex-col items-center justify-center gap-6" data-aos="fade-left">
                    <div class="bg-slate-900/80 border border-amber-500/20 rounded-2xl p-6 sm:p-8 text-center w-full">
                        <div class="w-16 h-16 rounded-2xl bg-amber-500/10 flex items-center justify-center text-amber-400 mx-auto mb-4">
                            <i class="bi bi-cloud-check text-3xl"></i>
                        </div>
                        <h3 class="text-white font-display font-bold text-lg mb-2">Evaluación gratuita</h3>
                        <p class="text-slate-400 text-sm mb-4">Sin costo · Sin compromiso · Resultados en 48h</p>
                        <div class="space-y-2 text-left mb-6">
                            <div class="flex items-center gap-2 text-sm text-slate-300">
                                <i class="bi bi-check-lg text-amber-400"></i> Auditoría completa de respaldos
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-300">
                                <i class="bi bi-check-lg text-amber-400"></i> Revisión de hosting y correo
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-300">
                                <i class="bi bi-check-lg text-amber-400"></i> Inventario de licenciamiento
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-300">
                                <i class="bi bi-check-lg text-amber-400"></i> Informe con plan de acción
                            </div>
                        </div>
                        <a href="#contacto" class="cta-pulse w-full flex items-center justify-center gap-2 bg-[rgb(27,146,208)] text-white font-bold px-6 py-3.5 rounded-xl hover:bg-[rgb(27,146,208)]/80 transition-all text-sm">
                            <i class="bi bi-clipboard-data"></i> Solicitar evaluación gratuita
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 10. FORMULARIO ======================== -->
    <section id="contacto" class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-[rgb(27,146,208)]/5 rounded-full blur-[150px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-center">

                <!-- Left: Urgencia -->
                <div data-aos="fade-right">
                    <h2 class="text-2xl sm:text-3xl font-display font-bold text-white mb-4">
                        No esperes a <span class="text-red-400">perder tus datos.</span>
                    </h2>
                    <p class="text-slate-400 text-sm mb-5">
                        Un disco duro dañado, un virus o un error humano puede borrar todo. Implementa una solución cloud profesional antes de que sea demasiado tarde.
                    </p>

                    <div class="space-y-3 mb-5">
                        <div class="flex items-center gap-3">
                            <i class="bi bi-check-circle-fill text-amber-400"></i>
                            <p class="text-slate-300 text-sm">Backups automáticos con verificación de integridad</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="bi bi-check-circle-fill text-amber-400"></i>
                            <p class="text-slate-300 text-sm">Evaluación de backup y recuperación sin costo</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="bi bi-check-circle-fill text-amber-400"></i>
                            <p class="text-slate-300 text-sm">Implementación en menos de 1 semana</p>
                        </div>
                    </div>

                    <div class="bg-red-500/5 border border-red-500/15 rounded-xl p-4">
                        <p class="text-red-400 text-xs font-bold uppercase tracking-widest mb-2">
                            <i class="bi bi-exclamation-triangle-fill mr-1"></i> Dato real
                        </p>
                        <p class="text-white text-sm font-bold">El costo de recuperar datos de un disco dañado puede superar los <span class="text-red-400">$15 millones COP</span> — si es que se pueden recuperar.</p>
                    </div>
                </div>

                <!-- Right: Form -->
                <div class="rounded-2xl bg-slate-900/80 border border-slate-800 p-5 sm:p-6 backdrop-blur" data-aos="fade-left">
                    <h3 class="text-lg font-display font-bold text-white mb-1 text-center">Cotizar solución cloud</h3>
                    <p class="text-slate-500 text-xs text-center mb-4">Más de 50 empresas ya protegen sus datos con Cybertec</p>
                    
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
                                <option value="Backups en nube (Nextcloud)">Backups en nube (Nextcloud)</option>
                                <option value="Licenciamiento de software">Licenciamiento de software</option>
                                <option value="Desarrollo de software a medida">Desarrollo de software a medida</option>
                                <option value="Solución integral cloud">Solución integral cloud</option>
                                <option value="Evaluación de backup gratuita">Evaluación de backup gratuita</option>
                            </select>
                        </div>

                        <button type="submit" class="cta-pulse w-full flex items-center justify-center gap-2 bg-amber-500 text-white font-bold px-6 py-4 rounded-xl hover:bg-amber-600 transition-all text-sm sm:text-base mt-2">
                            <i class="bi bi-whatsapp text-lg"></i> Solicitar cotización
                        </button>

                        <div class="text-center">
                            <span class="guarantee-badge"><i class="bi bi-shield-lock-fill"></i> Tus datos están seguros · No spam</span>
                        </div>

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

    <!-- ======================== 11. FAQ ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="container mx-auto px-4 sm:px-6 max-w-3xl">
            <div class="text-center mb-8" data-aos="fade-up">
                <h2 class="text-2xl sm:text-3xl font-display font-bold text-white">
                    Preguntas <span class="text-amber-400">frecuentes</span>
                </h2>
            </div>

            <div class="space-y-3" data-aos="fade-up" data-aos-delay="80">
                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Dónde se almacenan mis backups?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">Utilizamos <strong class="text-white">Nextcloud</strong>, una plataforma de nube privada que se aloja en servidores controlados por Cybertec. Tus datos no están en servidores públicos compartidos. Además, mantenemos copias offsite para máxima redundancia.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Cuánto tiempo toma restaurar datos de un backup?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">Depende del volumen de datos. Para restauraciones parciales (archivos o carpetas), el tiempo es de <strong class="text-white">minutos</strong>. Para restauraciones completas de servidor, nuestro objetivo es <strong class="text-white">menos de 2 horas</strong> según el plan de recuperación ante desastres.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Qué pasa si uso software pirata y me hacen auditoría?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">Las multas por software no licenciado en Colombia pueden alcanzar <strong class="text-white">hasta 10 salarios mínimos por licencia ilegal</strong>, además de sanciones penales. Nosotros te ayudamos a legalizar todo tu inventario de software con licencias originales a precios competitivos.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Puedo migrar mi hosting actual sin perder datos?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">Sí. Realizamos <strong class="text-white">migraciones transparentes</strong> sin tiempo de caída. Configuramos el nuevo hosting, migramos los datos, verificamos que todo funcione y luego hacemos el cambio de DNS. Tu web y correos siguen funcionando durante todo el proceso.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Cybertec desarrolla software a medida para cualquier sector?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">Sí. Hemos desarrollado aplicaciones web, apps móviles y automatizaciones para empresas de <strong class="text-white">producción, comercio, transporte y servicios</strong>. Trabajamos con metodología ágil, entregas parciales y soporte continuo posterior al lanzamiento.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 12. CIERRE EMOCIONAL ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute inset-0 bg-gradient-to-b from-amber-500/[0.02] to-transparent"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-3xl relative z-10 text-center" data-aos="fade-up">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-display font-bold text-white mb-4">
                Tu información es tu negocio. <span class="text-amber-400">Protégela hoy.</span>
            </h2>
            <p class="text-slate-400 text-sm sm:text-base max-w-xl mx-auto mb-6">
                Las empresas que sobreviven a las crisis son las que <strong class="text-white">se preparan antes de que pasen.</strong> Un backup, un hosting confiable y licencias legales son el mínimo. Nosotros te lo ponemos fácil.
            </p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="#contacto" class="cta-pulse inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl bg-[rgb(27,146,208)] text-white font-bold hover:bg-[rgb(27,146,208)]/80 transition-all text-sm shadow-lg shadow-[rgb(27,146,208)]/20">
                    <i class="bi bi-cloud-check"></i> Proteger mis datos ahora
                </a>
                <a href="https://wa.me/573175133375?text=Hola%20Cybertec%2C%20me%20interesan%20las%20soluciones%20cloud%20para%20mi%20empresa." class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl bg-slate-900 border border-slate-700 text-white font-bold hover:border-green-500/40 transition-all text-sm" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-whatsapp text-green-400"></i> Hablar por WhatsApp
                </a>
            </div>
            <div class="mt-5">
                <span class="guarantee-badge"><i class="bi bi-shield-lock-fill"></i> Evaluación gratuita · Sin compromiso · Resultados en 48h</span>
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

    <!-- Floating WhatsApp -->
    <a href="https://wa.me/573175133375?text=Hola%20Cybertec%2C%20me%20interesan%20las%20soluciones%20cloud%20para%20mi%20empresa." class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Contactar por WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

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

        // FAQ Accordion
        document.querySelectorAll('.faq-trigger').forEach(function(trigger) {
            trigger.addEventListener('click', function() {
                var item = this.closest('.faq-item');
                var isActive = item.classList.contains('active');
                document.querySelectorAll('.faq-item').forEach(function(el) { el.classList.remove('active'); });
                if (!isActive) item.classList.add('active');
            });
        });
    </script>
</body>
</html>
