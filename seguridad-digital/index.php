<?php
/**
 * Landing Page — Seguridad Digital y Defensa Perimetral (High-Conversion 12-Element Framework)
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
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preload" href="../assets/fonts/Bahnschrift/BAHNSCHRIFT.TTF" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="../assets/fonts/Polymath/PolymathDispDemo-Bold.otf" as="font" type="font/otf" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
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
                            base: '#020617', surface: '#0f172a', highlight: '#1e293b',
                            radar: '#1B92D0', navy: '#181D5E', graphite: '#202020', success: '#10b981',
                        }
                    },
                    animation: { 'pulse-glow': 'pulseGlow 3s infinite', 'float-slow': 'float 8s ease-in-out infinite' },
                    keyframes: {
                        pulseGlow: { '0%, 100%': { boxShadow: '0 0 15px rgba(27,146,208,0.2)' }, '50%': { boxShadow: '0 0 30px rgba(27,146,208,0.5)' } },
                        float: { '0%, 100%': { transform: 'translateY(0)' }, '50%': { transform: 'translateY(-20px)' } },
                    }
                }
            }
        }
    </script>

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
        <div class="absolute top-1/3 left-0 w-[500px] h-[500px] bg-[rgb(27,146,208)]/10 rounded-full blur-[150px]"></div>

        <div class="container mx-auto px-4 sm:px-6 relative z-10 max-w-5xl">
            <div class="text-center" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-500/10 border border-red-500/20 text-red-400 text-xs font-bold uppercase tracking-widest mb-6">
                    <i class="bi bi-exclamation-triangle-fill"></i> Amenaza digital
                </span>

                <h1 class="text-[1.55rem] sm:text-4xl lg:text-5xl font-display font-bold leading-tight mb-4">
                    Un ransomware puede cifrar <span class="text-red-400">toda tu información en minutos.</span>
                </h1>

                <p class="text-slate-400 text-base sm:text-lg max-w-2xl mx-auto mb-4">
                    Sin firewall, sin antivirus corporativo, sin políticas de seguridad. <strong class="text-white">Tu empresa es un blanco fácil.</strong>
                </p>

                <div class="flex items-center gap-3 bg-slate-900/80 border border-slate-800 rounded-xl px-4 sm:px-5 py-3 mb-6 max-w-xl mx-auto" data-aos="zoom-in" data-aos-delay="150">
                    <i class="bi bi-bug-fill text-red-400 text-xl"></i>
                    <p class="text-sm text-slate-300">El <span class="text-red-400 font-bold">60%</span> de las PYMES atacadas por ransomware cierran en menos de 6 meses.</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-3 justify-center mb-6">
                    <a href="#contacto" class="cta-pulse inline-flex items-center justify-center gap-2 px-5 py-3 sm:px-7 sm:py-3.5 rounded-xl bg-[rgb(27,146,208)] text-white font-bold hover:bg-[rgb(27,146,208)]/80 transition-all text-sm shadow-lg shadow-[rgb(27,146,208)]/20">
                        <i class="bi bi-shield-lock"></i> Blindar mi empresa ahora
                    </a>
                    <a href="#solucion" class="inline-flex items-center justify-center gap-2 px-5 py-3 sm:px-7 sm:py-3.5 rounded-xl bg-slate-900 border border-slate-700 text-slate-300 font-bold hover:border-[rgb(27,146,208)]/40 transition-all text-sm">
                        <i class="bi bi-arrow-down-circle"></i> Ver soluciones
                    </a>
                </div>

                <div class="flex flex-wrap justify-center gap-x-5 gap-y-2 text-slate-500 text-[10px] sm:text-xs uppercase tracking-wider font-semibold mb-5" data-aos="fade-up" data-aos-delay="200">
                    <span><i class="bi bi-patch-check-fill text-[rgb(27,146,208)] mr-1"></i>Partner Fortinet</span>
                    <span><i class="bi bi-patch-check-fill text-[rgb(27,146,208)] mr-1"></i>+200 proyectos</span>
                    <span><i class="bi bi-patch-check-fill text-[rgb(27,146,208)] mr-1"></i>Monitoreo 24/7</span>
                </div>

                <div class="flex justify-center gap-4 opacity-40" data-aos="fade-up" data-aos-delay="250">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-slate-900/80 border border-slate-800 flex items-center justify-center text-[rgb(27,146,208)]">
                        <i class="bi bi-shield-lock-fill text-2xl sm:text-3xl"></i>
                    </div>
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-slate-900/80 border border-slate-800 flex items-center justify-center text-[rgb(27,146,208)]">
                        <i class="bi bi-bricks text-2xl sm:text-3xl"></i>
                    </div>
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-slate-900/80 border border-slate-800 flex items-center justify-center text-[rgb(27,146,208)]">
                        <i class="bi bi-file-earmark-lock-fill text-2xl sm:text-3xl"></i>
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
                <p class="text-slate-400 text-sm max-w-xl mx-auto">Si reconoces aunque sea uno, un ciberataque es cuestión de tiempo. No de probabilidad.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3" data-aos="fade-up" data-aos-delay="80">
                <div class="pain-item">
                    <i class="bi bi-check-square text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                    <p class="text-slate-300 text-sm">No tienes firewall o <strong class="text-white">el que tienes nunca se actualizó</strong></p>
                </div>
                <div class="pain-item">
                    <i class="bi bi-check-square text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                    <p class="text-slate-300 text-sm">Tus empleados <strong class="text-white">usan la misma contraseña</strong> para todo</p>
                </div>
                <div class="pain-item">
                    <i class="bi bi-check-square text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                    <p class="text-slate-300 text-sm">No sabes si tu red <strong class="text-white">ya fue comprometida</strong></p>
                </div>
                <div class="pain-item">
                    <i class="bi bi-check-square text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                    <p class="text-slate-300 text-sm">Tu antivirus es <strong class="text-white">gratuito o doméstico</strong>, no corporativo</p>
                </div>
                <div class="pain-item">
                    <i class="bi bi-check-square text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                    <p class="text-slate-300 text-sm">No tienes <strong class="text-white">políticas de seguridad</strong> ni capacitación al personal</p>
                </div>
                <div class="pain-item">
                    <i class="bi bi-check-square text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                    <p class="text-slate-300 text-sm">Tus datos críticos <strong class="text-white">no tienen backup cifrado</strong></p>
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
                    Un ciberataque no es una posibilidad. <span class="text-red-400">Es una certeza.</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4" data-aos="fade-up" data-aos-delay="80">
                <div class="bg-slate-900/80 border border-red-500/10 rounded-xl p-5 text-center">
                    <div class="stat-number text-red-400 font-display">$200M+</div>
                    <p class="text-slate-300 text-xs font-bold uppercase tracking-wider mb-2">COP en pérdidas</p>
                    <p class="text-slate-500 text-xs">Costo promedio de un ciberataque para una PYME en Colombia, sin contar daño reputacional.</p>
                </div>
                <div class="bg-slate-900/80 border border-red-500/10 rounded-xl p-5 text-center">
                    <div class="stat-number text-red-400 font-display">23 días</div>
                    <p class="text-slate-300 text-xs font-bold uppercase tracking-wider mb-2">de parálisis</p>
                    <p class="text-slate-500 text-xs">Tiempo promedio de inactividad después de un ataque de ransomware exitoso.</p>
                </div>
                <div class="bg-slate-900/80 border border-red-500/10 rounded-xl p-5 text-center">
                    <div class="stat-number text-red-400 font-display">300%</div>
                    <p class="text-slate-300 text-xs font-bold uppercase tracking-wider mb-2">más ataques</p>
                    <p class="text-slate-500 text-xs">El cibercrimen en Colombia creció un 300% en los últimos 5 años. Las PYMES son el objetivo principal.</p>
                </div>
            </div>

            <div class="mid-cta mt-8" data-aos="fade-up" data-aos-delay="150">
                <p class="text-white text-sm font-bold mb-3">¿Cuánto vale la información de tu empresa?</p>
                <a href="#contacto" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-[rgb(27,146,208)] text-white font-bold hover:bg-[rgb(27,146,208)]/80 transition-all text-sm">
                    <i class="bi bi-shield-lock"></i> Blindar mi empresa →
                </a>
            </div>
        </div>
    </section>

    <!-- ======================== 4. SOLUCIÓN ======================== -->
    <section id="solucion" class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-[rgb(27,146,208)]/5 rounded-full blur-[150px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl relative z-10">

            <div class="text-center mb-8" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[rgb(27,146,208)]/10 border border-[rgb(27,146,208)]/20 text-[rgb(27,146,208)] text-xs font-bold uppercase tracking-widest mb-4">
                    <i class="bi bi-shield-lock-fill"></i> Así es como lo resolvemos
                </span>
                <h2 class="text-2xl sm:text-3xl font-display font-bold text-white">
                    Seguridad Digital y <span class="text-[rgb(27,146,208)]">Defensa Perimetral</span>
                </h2>
                <p class="text-slate-400 text-sm max-w-xl mx-auto mt-3">Implementamos capas de protección que blindan tu red, tus datos y tus operaciones contra cualquier amenaza digital.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-[rgb(27,146,208)]/40 rounded-xl p-5 transition-all duration-300 landing-card-hover" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-12 h-12 rounded-xl bg-[rgb(27,146,208)]/10 border border-[rgb(27,146,208)]/20 flex items-center justify-center text-[rgb(27,146,208)] mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-bricks text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Seguridad Perimetral</h3>
                    <p class="text-slate-400 text-xs mb-3">Primera línea de defensa: firewalls empresariales que filtran todo el tráfico malicioso antes de que llegue a tu red.</p>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Firewalls Fortinet de última generación</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Segmentación y control de red</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> VPN corporativa segura</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Filtrado web y de contenido</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Detección de intrusiones (IDS/IPS)</li>
                    </ul>
                </div>

                <div class="group bg-slate-900/80 border border-slate-800 hover:border-[rgb(27,146,208)]/40 rounded-xl p-5 transition-all duration-300 landing-card-hover" data-aos="fade-up" data-aos-delay="80">
                    <div class="w-12 h-12 rounded-xl bg-[rgb(27,146,208)]/10 border border-[rgb(27,146,208)]/20 flex items-center justify-center text-[rgb(27,146,208)] mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-shield-fill-check text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Antivirus Corporativo</h3>
                    <p class="text-slate-400 text-xs mb-3">Protección activa en cada equipo de tu empresa con gestión centralizada y reportes ejecutivos.</p>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Detección y eliminación de malware</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Protección en tiempo real</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Consola de gestión centralizada</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Reportes de incidentes y amenazas</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Actualizaciones automáticas</li>
                    </ul>
                </div>

                <div class="group bg-slate-900/80 border border-slate-800 hover:border-[rgb(27,146,208)]/40 rounded-xl p-5 transition-all duration-300 landing-card-hover" data-aos="fade-up" data-aos-delay="160">
                    <div class="w-12 h-12 rounded-xl bg-[rgb(27,146,208)]/10 border border-[rgb(27,146,208)]/20 flex items-center justify-center text-[rgb(27,146,208)] mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-file-earmark-lock-fill text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Seguridad de la Información</h3>
                    <p class="text-slate-400 text-xs mb-3">Políticas, procesos y cultura de seguridad alineados con estándares internacionales.</p>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Políticas de seguridad empresarial</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Protección de información crítica</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Alineación con ISO 27000</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Capacitación en ciberseguridad</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)] mt-0.5"></i> Plan de respuesta a incidentes</li>
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
                    Resultados que <span class="text-[rgb(27,146,208)]">obtendrás</span>
                </h2>
                <p class="text-slate-400 text-sm max-w-xl mx-auto mt-3">No solo instalamos tecnología. Creamos un escudo digital que protege tu operación y tu tranquilidad.</p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-slate-900/60 border border-slate-800 rounded-xl stat-card">
                    <div class="stat-number text-[rgb(27,146,208)] font-display">99.9%</div>
                    <h4 class="text-white font-bold text-sm mb-1">Amenazas bloqueadas</h4>
                    <p class="text-slate-500 text-xs">Firewalls de nueva generación que filtran el tráfico malicioso</p>
                </div>
                <div class="bg-slate-900/60 border border-slate-800 rounded-xl stat-card">
                    <div class="stat-number text-[rgb(27,146,208)] font-display">0</div>
                    <h4 class="text-white font-bold text-sm mb-1">Ransomware exitosos</h4>
                    <p class="text-slate-500 text-xs">Protección multicapa que detiene ataques antes de cifrar</p>
                </div>
                <div class="bg-slate-900/60 border border-slate-800 rounded-xl stat-card">
                    <div class="stat-number text-[rgb(27,146,208)] font-display">24/7</div>
                    <h4 class="text-white font-bold text-sm mb-1">Monitoreo activo</h4>
                    <p class="text-slate-500 text-xs">Detección continua de amenazas y alertas en tiempo real</p>
                </div>
                <div class="bg-slate-900/60 border border-slate-800 rounded-xl stat-card">
                    <div class="stat-number text-[rgb(27,146,208)] font-display">100%</div>
                    <h4 class="text-white font-bold text-sm mb-1">Visibilidad total</h4>
                    <p class="text-slate-500 text-xs">Reportes ejecutivos del estado de seguridad de tu red</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 6. PRUEBA SOCIAL — LOGOS CLIENTES ======================== -->
    <section class="relative py-8 lg:py-10 overflow-hidden border-t border-white/5">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">
            <p class="text-center text-slate-500 text-xs uppercase tracking-widest font-bold mb-6" data-aos="fade-up">Empresas que ya protegen su información con Cybertec</p>
            <div class="flex flex-wrap items-center justify-center gap-8 sm:gap-12" data-aos="fade-up" data-aos-delay="80">
                <img src="../assets/icons/iconos-clientes/blanco/OBLEAS-AL.png" alt="Obleas Floridablanca" class="h-8 sm:h-10 object-contain trust-logo">
                <img src="../assets/icons/iconos-clientes/blanco/ALCAMPO-AL.png" alt="Alcampo" class="h-8 sm:h-10 object-contain trust-logo">
                <img src="../assets/icons/iconos-clientes/blanco/CONCRESA-CN.png" alt="Concresa" class="h-8 sm:h-10 object-contain trust-logo">
                <img src="../assets/icons/iconos-clientes/blanco/INS-HC.png" alt="INS" class="h-8 sm:h-10 object-contain trust-logo">
                <img src="../assets/icons/iconos-clientes/blanco/ECOMTRANS-TR.png" alt="Ecomtrans" class="h-8 sm:h-10 object-contain trust-logo">
            </div>
        </div>
    </section>

    <!-- ======================== 7. AUTORIDAD + CREDIBILIDAD ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8" data-aos="fade-up">
                <div class="text-center p-4 bg-slate-900/50 border border-slate-800 rounded-xl">
                    <div class="stat-number text-[rgb(27,146,208)] font-display">+10</div>
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Años en ciberseguridad</p>
                </div>
                <div class="text-center p-4 bg-slate-900/50 border border-slate-800 rounded-xl">
                    <div class="stat-number text-[rgb(27,146,208)] font-display">+200</div>
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Proyectos realizados</p>
                </div>
                <div class="text-center p-4 bg-slate-900/50 border border-slate-800 rounded-xl">
                    <div class="stat-number text-[rgb(27,146,208)] font-display">+50</div>
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Redes protegidas</p>
                </div>
                <div class="text-center p-4 bg-slate-900/50 border border-slate-800 rounded-xl">
                    <div class="stat-number text-[rgb(27,146,208)] font-display">24/7</div>
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Soporte disponible</p>
                </div>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <p class="text-slate-600 text-[0.65rem] uppercase tracking-widest mb-3">Alianza tecnológica</p>
                <div class="flex items-center justify-center gap-8">
                    <img src="../assets/icons/fortinet.png" alt="Fortinet Partner" class="h-6 sm:h-7 object-contain trust-logo">
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 8. CASO DE ÉXITO ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 right-0 w-[400px] h-[400px] bg-[rgb(27,146,208)]/5 rounded-full blur-[120px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl relative z-10">
            <div class="text-center mb-6" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[rgb(27,146,208)]/10 border border-[rgb(27,146,208)]/20 text-[rgb(27,146,208)] text-[0.65rem] font-bold uppercase tracking-widest">
                    <i class="bi bi-star-fill"></i> Caso real
                </span>
            </div>

            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-6 sm:p-8" data-aos="fade-up" data-aos-delay="80">
                <div class="flex items-center gap-4 mb-5">
                    <img src="../assets/icons/iconos-clientes/blanco/OBLEAS-AL.png" alt="Obleas Floridablanca" class="h-8 object-contain opacity-70">
                    <div>
                        <p class="text-white font-bold text-sm">Sector Alimentos</p>
                        <p class="text-slate-500 text-xs">Floridablanca, Santander</p>
                    </div>
                </div>

                <div class="case-quote mb-5">
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Después de un intento de ransomware que cifró parcialmente sus sistemas de facturación, contactaron a Cybertec para blindar su infraestructura digital. Implementamos firewall Fortinet, antivirus corporativo centralizado y políticas de seguridad para todo el personal. <strong class="text-white">En 12 meses, cero incidentes de seguridad y control total de su red.</strong>
                    </p>
                </div>

                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-full bg-[rgb(27,146,208)]/10 text-[rgb(27,146,208)] text-[0.65rem] font-bold">Firewall Fortinet</span>
                    <span class="px-3 py-1 rounded-full bg-[rgb(27,146,208)]/10 text-[rgb(27,146,208)] text-[0.65rem] font-bold">Antivirus centralizado</span>
                    <span class="px-3 py-1 rounded-full bg-[rgb(27,146,208)]/10 text-[rgb(27,146,208)] text-[0.65rem] font-bold">Políticas de seguridad</span>
                    <span class="px-3 py-1 rounded-full bg-[rgb(27,146,208)]/10 text-[rgb(27,146,208)] text-[0.65rem] font-bold">Capacitación</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 9. OFERTA IRRESISTIBLE ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-[rgb(27,146,208)]/5 rounded-full blur-[180px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-center">
                <div data-aos="fade-right">
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[rgb(27,146,208)]/10 border border-[rgb(27,146,208)]/20 text-[rgb(27,146,208)] text-xs font-bold uppercase tracking-widest mb-6">
                        <i class="bi bi-gift"></i> Sin costo
                    </span>

                    <h2 class="text-2xl sm:text-3xl font-display font-bold text-white mb-4">
                        Análisis de Vulnerabilidades <span class="text-neon">Gratuito</span>
                    </h2>

                    <p class="text-slate-400 text-sm mb-5 leading-relaxed">
                        Escaneamos tu red, identificamos brechas de seguridad y te entregamos un informe con el nivel de riesgo real de tu empresa. Sin compromiso.
                    </p>

                    <ul class="space-y-4 mb-6">
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-[rgb(27,146,208)]/10 flex items-center justify-center text-[rgb(27,146,208)] mt-0.5">
                                <i class="bi bi-radar"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm">Escaneo de red</h4>
                                <p class="text-slate-400 text-xs">Identificamos puertos abiertos, servicios expuestos y configuraciones inseguras.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-[rgb(27,146,208)]/10 flex items-center justify-center text-[rgb(27,146,208)] mt-0.5">
                                <i class="bi bi-exclamation-diamond"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm">Mapa de vulnerabilidades</h4>
                                <p class="text-slate-400 text-xs">Clasificación por nivel de riesgo: crítico, alto, medio y bajo.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-[rgb(27,146,208)]/10 flex items-center justify-center text-[rgb(27,146,208)] mt-0.5">
                                <i class="bi bi-clipboard-data"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm">Plan de remediación</h4>
                                <p class="text-slate-400 text-xs">Recomendaciones técnicas priorizadas para cerrar brechas.</p>
                            </div>
                        </li>
                    </ul>

                    <div class="bg-red-500/5 border border-red-500/15 rounded-xl p-4">
                        <p class="text-red-400 text-xs font-bold uppercase tracking-widest mb-2">
                            <i class="bi bi-exclamation-triangle-fill mr-1"></i> No esperes a que pase
                        </p>
                        <p class="text-white text-sm font-bold">El <span class="text-red-400">95% de los ciberataques</span> explotan vulnerabilidades conocidas que pudieron cerrarse a tiempo.</p>
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center gap-6" data-aos="fade-left">
                    <div class="bg-slate-900/80 border border-[rgb(27,146,208)]/20 rounded-2xl p-6 sm:p-8 text-center w-full">
                        <div class="w-16 h-16 rounded-2xl bg-[rgb(27,146,208)]/10 flex items-center justify-center text-[rgb(27,146,208)] mx-auto mb-4">
                            <i class="bi bi-shield-fill-exclamation text-3xl"></i>
                        </div>
                        <h3 class="text-white font-display font-bold text-lg mb-2">Análisis completo</h3>
                        <p class="text-slate-400 text-sm mb-4">Sin costo · Sin compromiso · Remoto o presencial</p>
                        <div class="space-y-2 text-left mb-6">
                            <div class="flex items-center gap-2 text-sm text-slate-300">
                                <i class="bi bi-check-lg text-emerald-400"></i> Escaneo completo de red y sistemas
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-300">
                                <i class="bi bi-check-lg text-emerald-400"></i> Informe ejecutivo de vulnerabilidades
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-300">
                                <i class="bi bi-check-lg text-emerald-400"></i> Plan de remediación priorizado
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-300">
                                <i class="bi bi-check-lg text-emerald-400"></i> Reunión de presentación incluida
                            </div>
                        </div>
                        <a href="#contacto" class="cta-pulse w-full flex items-center justify-center gap-2 bg-[rgb(27,146,208)] text-white font-bold px-6 py-3.5 rounded-xl hover:bg-[rgb(27,146,208)]/80 transition-all text-sm">
                            <i class="bi bi-radar"></i> Solicitar análisis gratuito
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
                <div data-aos="fade-right">
                    <h2 class="text-2xl sm:text-3xl font-display font-bold text-white mb-4">
                        No esperes al <span class="text-red-400">próximo ataque.</span>
                    </h2>
                    <p class="text-slate-400 text-sm mb-5">
                        Cada día sin protección digital es una invitación abierta a ciberdelincuentes. Solicita una evaluación de seguridad sin costo.
                    </p>

                    <div class="space-y-3 mb-5">
                        <div class="flex items-center gap-3">
                            <i class="bi bi-check-circle-fill text-emerald-400"></i>
                            <p class="text-slate-300 text-sm">Evaluación técnica en menos de 48 horas</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="bi bi-check-circle-fill text-emerald-400"></i>
                            <p class="text-slate-300 text-sm">Sin compromiso — evalúa sin presión</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="bi bi-check-circle-fill text-emerald-400"></i>
                            <p class="text-slate-300 text-sm">Asesoría de especialistas en ciberseguridad</p>
                        </div>
                    </div>

                    <div class="bg-red-500/5 border border-red-500/15 rounded-xl p-4">
                        <p class="text-red-400 text-xs font-bold uppercase tracking-widest mb-2">
                            <i class="bi bi-exclamation-triangle-fill mr-1"></i> Dato real
                        </p>
                        <p class="text-white text-sm font-bold">El costo promedio de un ciberataque para una PYME supera los <span class="text-red-400">$200 millones COP</span> en pérdidas directas.</p>
                    </div>
                </div>

                <div class="rounded-2xl bg-slate-900/80 border border-slate-800 p-5 sm:p-6 backdrop-blur" data-aos="fade-left">
                    <h3 class="text-lg font-display font-bold text-white mb-1 text-center">Evaluación de seguridad</h3>
                    <p class="text-slate-500 text-xs text-center mb-4">Más de 50 empresas ya protegen su información con Cybertec</p>
                    
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
                                <option value="Análisis de vulnerabilidades (gratuito)">Análisis de vulnerabilidades (gratuito)</option>
                                <option value="Evaluación completa de seguridad">Evaluación completa de seguridad</option>
                            </select>
                        </div>

                        <button type="submit" class="cta-pulse w-full flex items-center justify-center gap-2 bg-[rgb(27,146,208)] text-white font-bold px-6 py-4 rounded-xl hover:bg-[rgb(27,146,208)]/80 transition-all text-sm sm:text-base mt-2">
                            <i class="bi bi-whatsapp text-lg"></i> Solicitar evaluación
                        </button>

                        <div class="text-center">
                            <span class="guarantee-badge"><i class="bi bi-shield-lock-fill"></i> Tus datos están seguros · No spam</span>
                        </div>

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

    <!-- ======================== 11. FAQ ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="container mx-auto px-4 sm:px-6 max-w-3xl">
            <div class="text-center mb-8" data-aos="fade-up">
                <h2 class="text-2xl sm:text-3xl font-display font-bold text-white">
                    Preguntas <span class="text-[rgb(27,146,208)]">frecuentes</span>
                </h2>
            </div>

            <div class="space-y-3" data-aos="fade-up" data-aos-delay="80">
                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Qué es un firewall y por qué mi empresa lo necesita?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">Un firewall es la primera línea de defensa de tu red. Filtra todo el tráfico entrante y saliente, bloqueando accesos no autorizados, malware y ataques. Sin firewall, tu red está <strong class="text-white">completamente expuesta a internet.</strong></p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Qué pasa si ya sufrí un ataque de ransomware?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">Actuamos como equipo de respuesta: contenemos el ataque, evaluamos el daño, recuperamos lo posible y blindamos tu infraestructura para que <strong class="text-white">no vuelva a ocurrir</strong>. Lo más importante es actuar rápido.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Necesito ISO 27000 si soy una PYME?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">No necesitas la certificación completa, pero sí implementar <strong class="text-white">buenas prácticas de seguridad</strong>. Te ayudamos a diseñar políticas adaptadas a tu tamaño y presupuesto, alineadas con los estándares internacionales.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿El antivirus gratuito no es suficiente?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">No. Los antivirus gratuitos están diseñados para uso doméstico. Un antivirus corporativo ofrece <strong class="text-white">gestión centralizada, reportes, protección avanzada contra ransomware</strong> y soporte prioritario que un producto gratuito nunca incluirá.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Cuánto tiempo toma implementar la seguridad?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">Un firewall se configura en <strong class="text-white">1-3 días</strong>. El antivirus corporativo en <strong class="text-white">1-2 días</strong>. Políticas de seguridad completas requieren <strong class="text-white">2-4 semanas</strong> según el tamaño de la organización.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 12. CIERRE EMOCIONAL ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute inset-0 bg-gradient-to-b from-[rgb(27,146,208)]/[0.02] to-transparent"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-3xl relative z-10 text-center" data-aos="fade-up">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-display font-bold text-white mb-4">
                La pregunta no es si te van a atacar. <span class="text-red-400">Es cuándo.</span>
            </h2>
            <p class="text-slate-400 text-sm sm:text-base max-w-xl mx-auto mb-6">
                El mejor momento para blindar tu empresa fue hace un año. El segundo mejor momento es <strong class="text-white">ahora.</strong>
            </p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="#contacto" class="cta-pulse inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl bg-[rgb(27,146,208)] text-white font-bold hover:bg-[rgb(27,146,208)]/80 transition-all text-sm shadow-lg shadow-[rgb(27,146,208)]/20">
                    <i class="bi bi-shield-lock"></i> Solicitar evaluación ahora
                </a>
                <a href="https://wa.me/573175133375?text=Hola%20Cybertec%2C%20necesito%20evaluar%20la%20seguridad%20digital%20de%20mi%20empresa." class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl bg-slate-900 border border-slate-700 text-white font-bold hover:border-green-500/40 transition-all text-sm" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-whatsapp text-green-400"></i> Hablar por WhatsApp
                </a>
            </div>
            <div class="mt-5">
                <span class="guarantee-badge"><i class="bi bi-shield-lock-fill"></i> Análisis gratuito · Sin compromiso · Respuesta en 48h</span>
            </div>
        </div>
    </section>

    <!-- Footer mini -->
    <footer class="bg-slate-950 border-t border-slate-900 py-8">
        <div class="container mx-auto px-4 sm:px-6 text-center">
            <a href="../"><img src="../assets/media/Logo-Banner.png" alt="Cybertec" class="h-10 object-contain mx-auto mb-4"></a>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-2 sm:gap-4 mb-4">
                <a href="https://wa.me/573175133375" target="_blank" rel="noopener noreferrer" class="text-slate-500 hover:text-[rgb(27,146,208)] transition-colors text-xs sm:text-sm"><i class="bi bi-whatsapp mr-1"></i> +57 317 513 3375</a>
                <a href="mailto:ventas@cybertec.com.co" class="text-slate-500 hover:text-[rgb(27,146,208)] transition-colors text-xs sm:text-sm"><i class="bi bi-envelope-fill mr-1"></i> ventas@cybertec.com.co</a>
            </div>
            <p class="text-slate-600 text-xs">&copy; <?php echo date('Y'); ?> Cybertec Informática & Telecomunicaciones SAS</p>
        </div>
    </footer>

    <!-- Floating WhatsApp -->
    <a href="https://wa.me/573175133375?text=Hola%20Cybertec%2C%20necesito%20evaluar%20la%20seguridad%20digital%20de%20mi%20empresa." class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Contactar por WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({ duration: 700, offset: 40, easing: 'ease-out-cubic', once: true });

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
