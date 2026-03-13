<?php
/**
 * Landing Page — Seguridad Física (High-Conversion 12-Element Framework)
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

    <!-- ======================== 1. HERO ======================== -->
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

                <div class="flex flex-col sm:flex-row gap-3 justify-center mb-6">
                    <a href="#contacto" class="cta-pulse inline-flex items-center justify-center gap-2 px-5 py-3 sm:px-7 sm:py-3.5 rounded-xl bg-[rgb(27,146,208)] text-white font-bold hover:bg-[rgb(27,146,208)]/80 transition-all text-sm shadow-lg shadow-[rgb(27,146,208)]/20">
                        <i class="bi bi-shield-check"></i> Proteger mi empresa ahora
                    </a>
                    <a href="#solucion" class="inline-flex items-center justify-center gap-2 px-5 py-3 sm:px-7 sm:py-3.5 rounded-xl bg-slate-900 border border-slate-700 text-slate-300 font-bold hover:border-[rgb(27,146,208)]/40 transition-all text-sm">
                        <i class="bi bi-arrow-down-circle"></i> Ver soluciones
                    </a>
                </div>

                <!-- Trust Row -->
                <div class="flex flex-wrap justify-center gap-x-5 gap-y-2 text-slate-500 text-[10px] sm:text-xs uppercase tracking-wider font-semibold mb-5" data-aos="fade-up" data-aos-delay="200">
                    <span><i class="bi bi-patch-check-fill text-[rgb(27,146,208)] mr-1"></i>+10 años protegiendo empresas</span>
                    <span><i class="bi bi-patch-check-fill text-[rgb(27,146,208)] mr-1"></i>+200 instalaciones</span>
                    <span><i class="bi bi-patch-check-fill text-[rgb(27,146,208)] mr-1"></i>Soporte técnico 24/7</span>
                </div>

                <div class="flex justify-center" data-aos="fade-up" data-aos-delay="250">
                    <div class="relative">
                        <img src="../assets/media/cctv.png" alt="CCTV Empresarial" class="h-16 sm:h-24 object-contain opacity-60 drop-shadow-[0_0_20px_rgba(139,92,246,0.3)]">
                        <div class="absolute inset-0 bg-gradient-to-t from-cyber-base via-transparent to-transparent"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 2. DOLOR — CHECKLIST ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl">
            <div class="text-center mb-8" data-aos="fade-up">
                <h2 class="text-2xl sm:text-3xl font-display font-bold text-white mb-3">
                    ¿Tu empresa tiene <span class="text-red-400">estos problemas</span>?
                </h2>
                <p class="text-slate-400 text-sm max-w-xl mx-auto">Si marcas aunque sea uno, tu empresa está en riesgo. Y lo peor: probablemente no lo sabes.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3" data-aos="fade-up" data-aos-delay="80">
                <div class="pain-item">
                    <i class="bi bi-check-square text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                    <p class="text-slate-300 text-sm">No tienes cámaras o <strong class="text-white">las que tienes no graban en la noche</strong></p>
                </div>
                <div class="pain-item">
                    <i class="bi bi-check-square text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                    <p class="text-slate-300 text-sm"><strong class="text-white">Cualquier persona entra a tu empresa</strong> sin registro ni identificación</p>
                </div>
                <div class="pain-item">
                    <i class="bi bi-check-square text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                    <p class="text-slate-300 text-sm">Has tenido <strong class="text-white">pérdidas o hurtos</strong> y no pudiste demostrar nada</p>
                </div>
                <div class="pain-item">
                    <i class="bi bi-check-square text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                    <p class="text-slate-300 text-sm">Tus empleados manejan áreas sensibles <strong class="text-white">sin supervisión</strong> ni control</p>
                </div>
                <div class="pain-item">
                    <i class="bi bi-check-square text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                    <p class="text-slate-300 text-sm">De noche y en fines de semana, <strong class="text-white">nadie vigila tus instalaciones</strong></p>
                </div>
                <div class="pain-item">
                    <i class="bi bi-check-square text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                    <p class="text-slate-300 text-sm">Tu seguro <strong class="text-white">no cubre incidentes</strong> sin evidencia de videovigilancia</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 3. AMPLIFICACIÓN DE RIESGO ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute inset-0 bg-gradient-to-b from-red-500/[0.02] to-transparent"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl relative z-10">
            <div class="text-center mb-8" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-red-500/10 border border-red-500/20 text-red-400 text-[0.65rem] font-bold uppercase tracking-widest mb-4">
                    <i class="bi bi-graph-down-arrow"></i> Lo que está en juego
                </span>
                <h2 class="text-2xl sm:text-3xl font-display font-bold text-white">
                    Cada día sin seguridad <span class="text-red-400">te cuesta más de lo que crees</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4" data-aos="fade-up" data-aos-delay="80">
                <div class="bg-slate-900/80 border border-red-500/10 rounded-xl p-5 text-center">
                    <div class="stat-number text-red-400 font-display">$85M</div>
                    <p class="text-slate-300 text-xs font-bold uppercase tracking-wider mb-2">COP en promedio</p>
                    <p class="text-slate-500 text-xs">Costo promedio de un robo a empresa en Colombia sin evidencia para reclamar al seguro.</p>
                </div>
                <div class="bg-slate-900/80 border border-red-500/10 rounded-xl p-5 text-center">
                    <div class="stat-number text-red-400 font-display">45%</div>
                    <p class="text-slate-300 text-xs font-bold uppercase tracking-wider mb-2">de robos son internos</p>
                    <p class="text-slate-500 text-xs">Casi la mitad de los hurtos empresariales son cometidos por personal de la propia empresa.</p>
                </div>
                <div class="bg-slate-900/80 border border-red-500/10 rounded-xl p-5 text-center">
                    <div class="stat-number text-red-400 font-display">72h</div>
                    <p class="text-slate-300 text-xs font-bold uppercase tracking-wider mb-2">sin detectar</p>
                    <p class="text-slate-500 text-xs">Una intrusión puede pasar hasta 3 días sin ser detectada en empresas sin alarmas ni CCTV.</p>
                </div>
            </div>

            <!-- Mid CTA -->
            <div class="mid-cta mt-8" data-aos="fade-up" data-aos-delay="150">
                <p class="text-white text-sm font-bold mb-3">¿Cuánto más estás dispuesto a arriesgar?</p>
                <a href="#contacto" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-[rgb(27,146,208)] text-white font-bold hover:bg-[rgb(27,146,208)]/80 transition-all text-sm">
                    <i class="bi bi-shield-check"></i> Proteger mi empresa →
                </a>
            </div>
        </div>
    </section>

    <!-- ======================== 4. SOLUCIÓN ======================== -->
    <section id="solucion" class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-violet-500/5 rounded-full blur-[150px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl relative z-10">

            <div class="text-center mb-8" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-violet-500/10 border border-violet-500/20 text-violet-400 text-xs font-bold uppercase tracking-widest mb-4">
                    <i class="bi bi-shield-fill-check"></i> Así es como lo resolvemos
                </span>
                <h2 class="text-2xl sm:text-3xl font-display font-bold text-white">
                    Seguridad Física <span class="text-violet-400">Empresarial Integral</span>
                </h2>
                <p class="text-slate-400 text-sm max-w-xl mx-auto mt-3">Diseñamos e implementamos sistemas de seguridad a la medida de tu empresa, con tecnología de nivel corporativo y soporte local permanente.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                <!-- CCTV -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-violet-500/40 rounded-xl p-5 transition-all duration-300 landing-card-hover" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-12 h-12 rounded-xl bg-violet-500/10 border border-violet-500/20 flex items-center justify-center text-violet-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-camera-video-fill text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Videovigilancia CCTV</h3>
                    <p class="text-slate-400 text-xs mb-3">Sistema completo de videovigilancia con cámaras IP profesionales y grabación continua.</p>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Cámaras IP de alta resolución 4K/2K</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Grabación automática 24/7 con respaldo</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Visión nocturna y detección de movimiento</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Monitoreo remoto desde celular o PC</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Almacenamiento local y en nube</li>
                    </ul>
                </div>

                <!-- Control Acceso -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-violet-500/40 rounded-xl p-5 transition-all duration-300 landing-card-hover" data-aos="fade-up" data-aos-delay="80">
                    <div class="w-12 h-12 rounded-xl bg-violet-500/10 border border-violet-500/20 flex items-center justify-center text-violet-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-fingerprint text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Control de Acceso Biométrico</h3>
                    <p class="text-slate-400 text-xs mb-3">Controla quién entra, a qué hora y a qué áreas con registro digital completo.</p>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Huella, facial, tarjeta y PIN</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Diseño adaptado a tu operación</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Integración con cámaras y alarmas</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Registro y reportes de ingresos</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Control por zonas y horarios</li>
                    </ul>
                </div>

                <!-- Alarmas -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-violet-500/40 rounded-xl p-5 transition-all duration-300 landing-card-hover" data-aos="fade-up" data-aos-delay="160">
                    <div class="w-12 h-12 rounded-xl bg-violet-500/10 border border-violet-500/20 flex items-center justify-center text-violet-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-bell-fill text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Alarmas Digitales</h3>
                    <p class="text-slate-400 text-xs mb-3">Detección inmediata de intrusiones con alertas automáticas a tu celular y equipo.</p>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Sensores de movimiento, humo y gas</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Sirenas audibles de alta potencia</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Alertas push, email y SMS</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Integración con CCTV y control de acceso</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-violet-400 mt-0.5"></i> Armado/desarmado remoto</li>
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
                    Resultados que <span class="text-violet-400">obtendrás</span>
                </h2>
                <p class="text-slate-400 text-sm max-w-xl mx-auto mt-3">No solo instalamos equipos. Transformamos la seguridad de tu empresa con resultados medibles.</p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-slate-900/60 border border-slate-800 rounded-xl stat-card">
                    <div class="stat-number text-violet-400 font-display">90%</div>
                    <h4 class="text-white font-bold text-sm mb-1">Menos incidentes</h4>
                    <p class="text-slate-500 text-xs">Reducción de intrusiones y robos internos con CCTV activo</p>
                </div>
                <div class="bg-slate-900/60 border border-slate-800 rounded-xl stat-card">
                    <div class="stat-number text-violet-400 font-display">24/7</div>
                    <h4 class="text-white font-bold text-sm mb-1">Vigilancia total</h4>
                    <p class="text-slate-500 text-xs">Monitoreo continuo desde tu celular, sin interrupciones</p>
                </div>
                <div class="bg-slate-900/60 border border-slate-800 rounded-xl stat-card">
                    <div class="stat-number text-violet-400 font-display">100%</div>
                    <h4 class="text-white font-bold text-sm mb-1">Evidencia legal</h4>
                    <p class="text-slate-500 text-xs">Grabaciones válidas para seguros y procesos legales</p>
                </div>
                <div class="bg-slate-900/60 border border-slate-800 rounded-xl stat-card">
                    <div class="stat-number text-violet-400 font-display">&lt;3s</div>
                    <h4 class="text-white font-bold text-sm mb-1">Alerta inmediata</h4>
                    <p class="text-slate-500 text-xs">Notificación instantánea ante cualquier evento sospechoso</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 6. PRUEBA SOCIAL — LOGOS CLIENTES ======================== -->
    <section class="relative py-8 lg:py-10 overflow-hidden border-t border-white/5">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">
            <p class="text-center text-slate-500 text-xs uppercase tracking-widest font-bold mb-6" data-aos="fade-up">Empresas que ya confían en nuestra seguridad</p>
            <div class="flex flex-wrap items-center justify-center gap-8 sm:gap-12" data-aos="fade-up" data-aos-delay="80">
                <img src="../assets/icons/iconos-clientes/blanco/TERPEL-HC.png" alt="Terpel" class="h-8 sm:h-10 object-contain trust-logo">
                <img src="../assets/icons/iconos-clientes/blanco/PIEDECUESTANA-TR.png" alt="TransPiedecuesta" class="h-8 sm:h-10 object-contain trust-logo">
                <img src="../assets/icons/iconos-clientes/blanco/INGESEP-HC.png" alt="Ingesep" class="h-8 sm:h-10 object-contain trust-logo">
                <img src="../assets/icons/iconos-clientes/blanco/CONCRESA-CN.png" alt="Concresa" class="h-8 sm:h-10 object-contain trust-logo">
                <img src="../assets/icons/iconos-clientes/blanco/MAYORAUTOS-VH.png" alt="Mayorautos" class="h-8 sm:h-10 object-contain trust-logo">
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
                    <div class="stat-number text-[rgb(27,146,208)] font-display">+200</div>
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Proyectos realizados</p>
                </div>
                <div class="text-center p-4 bg-slate-900/50 border border-slate-800 rounded-xl">
                    <div class="stat-number text-[rgb(27,146,208)] font-display">+50</div>
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Empresas protegidas</p>
                </div>
                <div class="text-center p-4 bg-slate-900/50 border border-slate-800 rounded-xl">
                    <div class="stat-number text-[rgb(27,146,208)] font-display">24/7</div>
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Soporte disponible</p>
                </div>
            </div>
            <!-- Partner -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <p class="text-slate-600 text-[0.65rem] uppercase tracking-widest mb-3">Alianza tecnológica</p>
                <div class="flex items-center justify-center gap-8">
                    <img src="../assets/icons/hikvision.png" alt="Hikvision Partner" class="h-6 sm:h-7 object-contain trust-logo">
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 8. CASO DE ÉXITO ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 right-0 w-[400px] h-[400px] bg-violet-500/5 rounded-full blur-[120px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl relative z-10">
            <div class="text-center mb-6" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-violet-500/10 border border-violet-500/20 text-violet-400 text-[0.65rem] font-bold uppercase tracking-widest">
                    <i class="bi bi-star-fill"></i> Caso real
                </span>
            </div>

            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-6 sm:p-8" data-aos="fade-up" data-aos-delay="80">
                <div class="flex items-center gap-4 mb-5">
                    <img src="../assets/icons/iconos-clientes/blanco/TERPEL-HC.png" alt="Terpel" class="h-8 object-contain opacity-70">
                    <div>
                        <p class="text-white font-bold text-sm">Sector Hidrocarburos</p>
                        <p class="text-slate-500 text-xs">Bucaramanga, Santander</p>
                    </div>
                </div>

                <div class="case-quote mb-5">
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Necesitaban un sistema integral de videovigilancia y control de acceso para múltiples puntos de operación. Cybertec implementó cámaras IP de alta resolución con monitoreo centralizado, control biométrico por turnos y alarmas perimetrales. <strong class="text-white">En los primeros 6 meses, redujeron los incidentes de seguridad en un 85% y optimizaron el control de personal en horarios nocturnos.</strong>
                    </p>
                </div>

                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-full bg-violet-500/10 text-violet-400 text-[0.65rem] font-bold">CCTV 4K</span>
                    <span class="px-3 py-1 rounded-full bg-violet-500/10 text-violet-400 text-[0.65rem] font-bold">Control biométrico</span>
                    <span class="px-3 py-1 rounded-full bg-violet-500/10 text-violet-400 text-[0.65rem] font-bold">Alarmas perimetrales</span>
                    <span class="px-3 py-1 rounded-full bg-violet-500/10 text-violet-400 text-[0.65rem] font-bold">Monitoreo remoto</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 9. OFERTA IRRESISTIBLE ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-violet-500/5 rounded-full blur-[180px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-center">
                <!-- Left: Offer -->
                <div data-aos="fade-right">
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-violet-500/10 border border-violet-500/20 text-violet-400 text-xs font-bold uppercase tracking-widest mb-6">
                        <i class="bi bi-gift"></i> Sin costo
                    </span>

                    <h2 class="text-2xl sm:text-3xl font-display font-bold text-white mb-4">
                        Auditoría de Seguridad Física <span class="text-neon">Gratuita</span>
                    </h2>

                    <p class="text-slate-400 text-sm mb-5 leading-relaxed">
                        Nuestro equipo visitará tus instalaciones, identificará vulnerabilidades y te entregará un informe con recomendaciones técnicas personalizadas. Sin compromiso.
                    </p>

                    <ul class="space-y-4 mb-6">
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-violet-500/10 flex items-center justify-center text-violet-400 mt-0.5">
                                <i class="bi bi-building-check"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm">Inspección de instalaciones</h4>
                                <p class="text-slate-400 text-xs">Evaluamos puntos ciegos, accesos vulnerables y zonas de riesgo.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-violet-500/10 flex items-center justify-center text-violet-400 mt-0.5">
                                <i class="bi bi-file-earmark-bar-graph"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm">Informe de vulnerabilidades</h4>
                                <p class="text-slate-400 text-xs">Documento con hallazgos y nivel de riesgo por zona.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-violet-500/10 flex items-center justify-center text-violet-400 mt-0.5">
                                <i class="bi bi-map"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm">Plan de seguridad a medida</h4>
                                <p class="text-slate-400 text-xs">Propuesta técnica con equipos, ubicaciones y presupuesto.</p>
                            </div>
                        </li>
                    </ul>

                    <div class="bg-red-500/5 border border-red-500/15 rounded-xl p-4">
                        <p class="text-red-400 text-xs font-bold uppercase tracking-widest mb-2">
                            <i class="bi bi-exclamation-triangle-fill mr-1"></i> No esperes a que pase
                        </p>
                        <p class="text-white text-sm font-bold">El mayor riesgo es <span class="text-red-400">no saber qué tan expuesto estás.</span></p>
                        <p class="text-slate-400 text-xs mt-1">Una auditoría a tiempo puede evitar pérdidas millonarias.</p>
                    </div>
                </div>

                <!-- Right: Visual -->
                <div class="flex flex-col items-center justify-center gap-6" data-aos="fade-left">
                    <div class="bg-slate-900/80 border border-violet-500/20 rounded-2xl p-6 sm:p-8 text-center w-full">
                        <div class="w-16 h-16 rounded-2xl bg-violet-500/10 flex items-center justify-center text-violet-400 mx-auto mb-4">
                            <i class="bi bi-clipboard2-check text-3xl"></i>
                        </div>
                        <h3 class="text-white font-display font-bold text-lg mb-2">Diagnóstico completo</h3>
                        <p class="text-slate-400 text-sm mb-4">Sin costo · Sin compromiso · Presencial</p>
                        <div class="space-y-2 text-left mb-6">
                            <div class="flex items-center gap-2 text-sm text-slate-300">
                                <i class="bi bi-check-lg text-emerald-400"></i> Inspección presencial de instalaciones
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-300">
                                <i class="bi bi-check-lg text-emerald-400"></i> Informe escrito de vulnerabilidades
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-300">
                                <i class="bi bi-check-lg text-emerald-400"></i> Propuesta técnica y económica
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-300">
                                <i class="bi bi-check-lg text-emerald-400"></i> Reunión de presentación incluida
                            </div>
                        </div>
                        <a href="#contacto" class="cta-pulse w-full flex items-center justify-center gap-2 bg-[rgb(27,146,208)] text-white font-bold px-6 py-3.5 rounded-xl hover:bg-[rgb(27,146,208)]/80 transition-all text-sm">
                            <i class="bi bi-calendar-check"></i> Solicitar auditoría gratuita
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
                        No esperes a que <span class="text-red-400">ocurra un incidente.</span>
                    </h2>
                    <p class="text-slate-400 text-sm mb-5">
                        Cada día sin videovigilancia, sin control de acceso y sin alarmas es un día que tu empresa queda expuesta. Solicita una cotización sin compromiso.
                    </p>

                    <div class="space-y-3 mb-5">
                        <div class="flex items-center gap-3">
                            <i class="bi bi-check-circle-fill text-emerald-400"></i>
                            <p class="text-slate-300 text-sm">Cotización personalizada en menos de 24 horas</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="bi bi-check-circle-fill text-emerald-400"></i>
                            <p class="text-slate-300 text-sm">Sin compromiso — evalúa sin presión</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="bi bi-check-circle-fill text-emerald-400"></i>
                            <p class="text-slate-300 text-sm">Asesoría técnica incluida sin costo</p>
                        </div>
                    </div>

                    <div class="bg-red-500/5 border border-red-500/15 rounded-xl p-4">
                        <p class="text-red-400 text-xs font-bold uppercase tracking-widest mb-2">
                            <i class="bi bi-exclamation-triangle-fill mr-1"></i> Dato real
                        </p>
                        <p class="text-white text-sm font-bold">Las empresas sin CCTV tienen <span class="text-red-400">4x más probabilidad</span> de sufrir pérdidas por robo interno.</p>
                    </div>
                </div>

                <!-- Right: Form -->
                <div class="rounded-2xl bg-slate-900/80 border border-slate-800 p-5 sm:p-6 backdrop-blur" data-aos="fade-left">
                    <h3 class="text-lg font-display font-bold text-white mb-1 text-center">Cotizar seguridad física</h3>
                    <p class="text-slate-500 text-xs text-center mb-4">Más de 50 empresas ya protegen sus instalaciones con Cybertec</p>
                    
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
                                <option value="Auditoría de seguridad física (gratuita)">Auditoría de seguridad física (gratuita)</option>
                                <option value="Solución integral (todas)">Solución integral (todas)</option>
                            </select>
                        </div>

                        <button type="submit" class="cta-pulse w-full flex items-center justify-center gap-2 bg-[rgb(27,146,208)] text-white font-bold px-6 py-4 rounded-xl hover:bg-[rgb(27,146,208)]/80 transition-all text-sm sm:text-base mt-2">
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

                        <a href="https://wa.me/573175133375?text=Hola%20Cybertec%2C%20me%20interesa%20cotizar%20un%20sistema%20de%20seguridad%20f%C3%ADsica%20para%20mi%20empresa." class="w-full flex items-center justify-center gap-2 mt-3 px-6 py-3.5 rounded-xl bg-slate-950 border border-slate-700 text-white font-bold hover:border-green-500/40 hover:bg-slate-900 transition-all text-sm" target="_blank" rel="noopener noreferrer">
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
                    Preguntas <span class="text-violet-400">frecuentes</span>
                </h2>
            </div>

            <div class="space-y-3" data-aos="fade-up" data-aos-delay="80">
                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Qué marcas de cámaras y equipos utilizan?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">Trabajamos con marcas líderes mundiales como <strong class="text-white">Hikvision</strong> y Dahua, con garantía de fábrica y soporte local. Todos los equipos son de grado empresarial con certificación internacional.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Incluyen instalación y configuración?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">Sí. El servicio incluye levantamiento técnico, diseño del sistema, instalación física, configuración de red, capacitación al personal y puesta en marcha completa. No pagas extras ocultos.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Cuánto tiempo toma la implementación?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">Depende del tamaño del proyecto. Una instalación típica para una empresa mediana se completa entre <strong class="text-white">3 a 7 días hábiles</strong>, incluyendo pruebas y capacitación.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Ofrecen mantenimiento y garantía?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">Todos nuestros proyectos incluyen <strong class="text-white">garantía de equipos y mano de obra</strong>. Además ofrecemos planes de mantenimiento preventivo y correctivo con soporte 24/7.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Puedo ver las cámaras desde mi celular?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">Sí. Configuramos el acceso remoto para que puedas ver las cámaras en vivo y revisar grabaciones desde tu <strong class="text-white">celular, tablet o PC</strong>, desde cualquier lugar con internet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 12. CIERRE EMOCIONAL ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute inset-0 bg-gradient-to-b from-violet-500/[0.02] to-transparent"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-3xl relative z-10 text-center" data-aos="fade-up">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-display font-bold text-white mb-4">
                No esperes a que sea <span class="text-red-400">demasiado tarde.</span>
            </h2>
            <p class="text-slate-400 text-sm sm:text-base max-w-xl mx-auto mb-6">
                Cada empresa que protegimos empezó con la misma pregunta: <strong class="text-white">"¿Por qué no lo hice antes?"</strong> Hoy es el mejor día para actuar.
            </p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="#contacto" class="cta-pulse inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl bg-[rgb(27,146,208)] text-white font-bold hover:bg-[rgb(27,146,208)]/80 transition-all text-sm shadow-lg shadow-[rgb(27,146,208)]/20">
                    <i class="bi bi-shield-check"></i> Solicitar cotización ahora
                </a>
                <a href="https://wa.me/573175133375?text=Hola%20Cybertec%2C%20me%20interesa%20cotizar%20un%20sistema%20de%20seguridad%20f%C3%ADsica%20para%20mi%20empresa." class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl bg-slate-900 border border-slate-700 text-white font-bold hover:border-green-500/40 transition-all text-sm" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-whatsapp text-green-400"></i> Hablar por WhatsApp
                </a>
            </div>
            <div class="mt-5">
                <span class="guarantee-badge"><i class="bi bi-shield-lock-fill"></i> Diagnóstico gratuito · Sin compromiso · Respuesta en 24h</span>
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
    <a href="https://wa.me/573175133375?text=Hola%20Cybertec%2C%20me%20interesa%20cotizar%20seguridad%20f%C3%ADsica%20para%20mi%20empresa." class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Contactar por WhatsApp">
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
