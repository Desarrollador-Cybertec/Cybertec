<?php
/**
 * Landing Page — Soporte Técnico Especializado y Gestión de TIC (High-Conversion 12-Element Framework)
 * Service Desk, Soporte Remoto, Outsourcing TI
 */
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <title>Soporte Técnico TI y Service Desk para Empresas | Cybertec</title>
    <meta name="description" content="Soporte técnico presencial y remoto para empresas en Piedecuesta, Bucaramanga y Santander. Service desk, outsourcing TI, gestión de incidentes y mantenimiento. Cybertec.">
    <meta name="keywords" content="soporte técnico empresas Bucaramanga, service desk Piedecuesta, outsourcing TI Santander, soporte TI remoto, gestión TIC empresarial, mantenimiento equipos, Cybertec soporte">
    <meta name="author" content="Cybertec Informática & Telecomunicaciones SAS">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.cybertec.com.co/soporte-ti/">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.cybertec.com.co/soporte-ti/">
    <meta property="og:title" content="Soporte Técnico TI y Service Desk | Cybertec">
    <meta property="og:description" content="¿Tu empresa se paraliza cuando falla un equipo? Soporte técnico presencial y remoto, outsourcing TI y service desk con Cybertec.">
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
        <div class="absolute top-1/3 right-0 w-[500px] h-[500px] bg-emerald-500/10 rounded-full blur-[150px]"></div>

        <div class="container mx-auto px-4 sm:px-6 relative z-10 max-w-5xl">
            <div class="text-center" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-500/10 border border-red-500/20 text-red-400 text-xs font-bold uppercase tracking-widest mb-6">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    Riesgo operativo
                </span>

                <h1 class="text-[1.55rem] sm:text-4xl lg:text-5xl font-display font-bold leading-tight mb-4">
                    Un equipo caído puede <span class="text-red-400">paralizar toda tu operación.</span>
                </h1>

                <p class="text-slate-400 text-base sm:text-lg max-w-2xl mx-auto mb-4">
                    Sin soporte técnico confiable, cada falla se convierte en horas de productividad perdida. <strong class="text-white">¿Quién responde cuando algo falla?</strong>
                </p>

                <div class="flex items-center gap-3 bg-slate-900/80 border border-slate-800 rounded-xl px-4 sm:px-5 py-3 mb-6 max-w-xl mx-auto" data-aos="zoom-in" data-aos-delay="150">
                    <i class="bi bi-hourglass-split text-red-400 text-xl"></i>
                    <p class="text-sm text-slate-300">Una hora de inactividad le cuesta a una PYME entre <span class="text-red-400 font-bold">$500.000 y $5.000.000 COP</span> en productividad.</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-3 justify-center mb-6">
                    <a href="#contacto" class="cta-pulse inline-flex items-center justify-center gap-2 px-5 py-3 sm:px-7 sm:py-3.5 rounded-xl bg-[rgb(27,146,208)] text-white font-bold hover:bg-[rgb(27,146,208)]/80 transition-all text-sm shadow-lg shadow-[rgb(27,146,208)]/20">
                        <i class="bi bi-headset"></i> Contratar soporte ahora
                    </a>
                    <a href="#solucion" class="inline-flex items-center justify-center gap-2 px-5 py-3 sm:px-7 sm:py-3.5 rounded-xl bg-slate-900 border border-slate-700 text-slate-300 font-bold hover:border-[rgb(27,146,208)]/40 transition-all text-sm">
                        <i class="bi bi-arrow-down-circle"></i> Ver planes
                    </a>
                </div>

                <!-- Trust Row -->
                <div class="flex flex-wrap justify-center gap-x-5 gap-y-2 text-slate-500 text-[10px] sm:text-xs uppercase tracking-wider font-semibold mb-5" data-aos="fade-up" data-aos-delay="200">
                    <span><i class="bi bi-patch-check-fill text-[rgb(27,146,208)] mr-1"></i>+10 años de experiencia</span>
                    <span><i class="bi bi-patch-check-fill text-[rgb(27,146,208)] mr-1"></i>+300 incidentes resueltos/mes</span>
                    <span><i class="bi bi-patch-check-fill text-[rgb(27,146,208)] mr-1"></i>ANS garantizados</span>
                </div>

                <div class="flex justify-center" data-aos="fade-up" data-aos-delay="250">
                    <div class="relative">
                        <img src="../assets/media/soporte.png" alt="Soporte TI" class="h-16 sm:h-24 object-contain opacity-60 drop-shadow-[0_0_20px_rgba(16,185,129,0.3)]">
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
                <p class="text-slate-400 text-sm max-w-xl mx-auto">Si marcas aunque sea uno, cada día estás perdiendo dinero en productividad.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3" data-aos="fade-up" data-aos-delay="80">
                <div class="pain-item">
                    <i class="bi bi-check-square text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                    <p class="text-slate-300 text-sm">Tus empleados <strong class="text-white">pierden horas esperando que alguien resuelva</strong> un problema técnico</p>
                </div>
                <div class="pain-item">
                    <i class="bi bi-check-square text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                    <p class="text-slate-300 text-sm">No tienes un equipo de TI y dependes de <strong class="text-white">"el que sabe de sistemas"</strong> en la oficina</p>
                </div>
                <div class="pain-item">
                    <i class="bi bi-check-square text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                    <p class="text-slate-300 text-sm">Los <strong class="text-white">mismos problemas se repiten</strong> una y otra vez porque nadie los documenta</p>
                </div>
                <div class="pain-item">
                    <i class="bi bi-check-square text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                    <p class="text-slate-300 text-sm">Computadores lentos, impresoras que fallan y <strong class="text-white">software desactualizado</strong> en toda la empresa</p>
                </div>
                <div class="pain-item">
                    <i class="bi bi-check-square text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                    <p class="text-slate-300 text-sm">No hay <strong class="text-white">registro ni trazabilidad</strong> de los incidentes técnicos que ocurren</p>
                </div>
                <div class="pain-item">
                    <i class="bi bi-check-square text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                    <p class="text-slate-300 text-sm">Cuando algo falla fuera de horario, <strong class="text-white">nadie responde</strong> hasta el día siguiente</p>
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
                    Sin soporte técnico, <span class="text-red-400">tu empresa pierde más de lo que crees</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4" data-aos="fade-up" data-aos-delay="80">
                <div class="bg-slate-900/80 border border-red-500/10 rounded-xl p-5 text-center">
                    <div class="stat-number text-red-400 font-display">$5M</div>
                    <p class="text-slate-300 text-xs font-bold uppercase tracking-wider mb-2">COP por hora</p>
                    <p class="text-slate-500 text-xs">Costo máximo de inactividad para una PYME por cada hora que un sistema no funciona.</p>
                </div>
                <div class="bg-slate-900/80 border border-red-500/10 rounded-xl p-5 text-center">
                    <div class="stat-number text-red-400 font-display">65%</div>
                    <p class="text-slate-300 text-xs font-bold uppercase tracking-wider mb-2">de fallas son evitables</p>
                    <p class="text-slate-500 text-xs">Más de la mitad de las fallas técnicas se previenen con mantenimiento y soporte proactivo.</p>
                </div>
                <div class="bg-slate-900/80 border border-red-500/10 rounded-xl p-5 text-center">
                    <div class="stat-number text-red-400 font-display">3.2h</div>
                    <p class="text-slate-300 text-xs font-bold uppercase tracking-wider mb-2">promedio de espera</p>
                    <p class="text-slate-500 text-xs">Tiempo promedio que un empleado espera solución sin un service desk estructurado.</p>
                </div>
            </div>

            <!-- Mid CTA -->
            <div class="mid-cta mt-8" data-aos="fade-up" data-aos-delay="150">
                <p class="text-white text-sm font-bold mb-3">¿Cuántas horas de productividad pierde tu equipo cada semana?</p>
                <a href="#contacto" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-[rgb(27,146,208)] text-white font-bold hover:bg-[rgb(27,146,208)]/80 transition-all text-sm">
                    <i class="bi bi-headset"></i> Contratar soporte TI →
                </a>
            </div>
        </div>
    </section>

    <!-- ======================== 4. SOLUCIÓN ======================== -->
    <section id="solucion" class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-emerald-500/5 rounded-full blur-[150px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl relative z-10">

            <div class="text-center mb-8" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-bold uppercase tracking-widest mb-4">
                    <i class="bi bi-headset"></i> Así es como lo resolvemos
                </span>
                <h2 class="text-2xl sm:text-3xl font-display font-bold text-white">
                    Soporte Técnico Especializado y <span class="text-emerald-400">Gestión de TIC</span>
                </h2>
                <p class="text-slate-400 text-sm max-w-xl mx-auto mt-3">Un equipo técnico dedicado que gestiona, resuelve y previene todos los problemas tecnológicos de tu empresa.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                <!-- Service Desk Presencial -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-emerald-500/40 rounded-xl p-5 transition-all duration-300 landing-card-hover" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-person-badge-fill text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Service Desk Presencial</h3>
                    <p class="text-slate-400 text-xs mb-3">Personal técnico dedicado directamente en tus instalaciones para atención inmediata.</p>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Técnicos en sitio en tu empresa</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Atención a equipos de cómputo y periféricos</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Gestión de incidentes y problemas</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Registro y trazabilidad ITIL de tickets</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Mantenimiento preventivo de equipos</li>
                    </ul>
                </div>

                <!-- Service Desk Remoto -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-emerald-500/40 rounded-xl p-5 transition-all duration-300 landing-card-hover" data-aos="fade-up" data-aos-delay="80">
                    <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-display text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Service Desk Remoto</h3>
                    <p class="text-slate-400 text-xs mb-3">Soporte técnico inmediato sin necesidad de esperar a un técnico presencial.</p>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Soporte telefónico y por escritorio remoto</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Atención remota en menos de 15 minutos</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Plataforma de tickets con portal GLPI</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Cumplimiento de acuerdos de nivel de servicio</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Reportes mensuales de gestión</li>
                    </ul>
                </div>

                <!-- Outsourcing -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-emerald-500/40 rounded-xl p-5 transition-all duration-300 landing-card-hover" data-aos="fade-up" data-aos-delay="160">
                    <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-people-fill text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Outsourcing de TI Completo</h3>
                    <p class="text-slate-400 text-xs mb-3">Terceriza toda tu gestión tecnológica con un equipo experto dedicado.</p>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Personal técnico dedicado a tu operación</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Outsourcing de impresión y suministros</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Administración de firewalls y red</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Suministro de tóners y repuestos</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Gestión integral de infraestructura TI</li>
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
                    Resultados que <span class="text-emerald-400">obtendrás</span>
                </h2>
                <p class="text-slate-400 text-sm max-w-xl mx-auto mt-3">No solo resolvemos problemas. Transformamos la operación tecnológica de tu empresa con resultados medibles.</p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-slate-900/60 border border-slate-800 rounded-xl stat-card">
                    <div class="stat-number text-emerald-400 font-display">72%</div>
                    <h4 class="text-white font-bold text-sm mb-1">Menos inactividad</h4>
                    <p class="text-slate-500 text-xs">Reducción drástica de tiempos de parada con soporte proactivo</p>
                </div>
                <div class="bg-slate-900/60 border border-slate-800 rounded-xl stat-card">
                    <div class="stat-number text-emerald-400 font-display">&lt;15m</div>
                    <h4 class="text-white font-bold text-sm mb-1">Tiempo de respuesta</h4>
                    <p class="text-slate-500 text-xs">Primera respuesta garantizada en menos de 15 minutos</p>
                </div>
                <div class="bg-slate-900/60 border border-slate-800 rounded-xl stat-card">
                    <div class="stat-number text-emerald-400 font-display">100%</div>
                    <h4 class="text-white font-bold text-sm mb-1">Trazabilidad</h4>
                    <p class="text-slate-500 text-xs">Todos los incidentes registrados, documentados y medidos</p>
                </div>
                <div class="bg-slate-900/60 border border-slate-800 rounded-xl stat-card">
                    <div class="stat-number text-emerald-400 font-display">40%</div>
                    <h4 class="text-white font-bold text-sm mb-1">Ahorro en costos TI</h4>
                    <p class="text-slate-500 text-xs">Más económico que contratar un departamento de TI interno</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 6. PRUEBA SOCIAL — LOGOS CLIENTES ======================== -->
    <section class="relative py-8 lg:py-10 overflow-hidden border-t border-white/5">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">
            <p class="text-center text-slate-500 text-xs uppercase tracking-widest font-bold mb-6" data-aos="fade-up">Empresas que confían su soporte TI en Cybertec</p>
            <div class="flex flex-wrap items-center justify-center gap-8 sm:gap-12" data-aos="fade-up" data-aos-delay="80">
                <img src="../assets/icons/iconos-clientes/blanco/INSUMMA-PC.png" alt="Insumma" class="h-8 sm:h-10 object-contain trust-logo">
                <img src="../assets/icons/iconos-clientes/blanco/LUBRIXEL-LB.png" alt="Lubrixel" class="h-8 sm:h-10 object-contain trust-logo">
                <img src="../assets/icons/iconos-clientes/blanco/INS-HC.png" alt="INS" class="h-8 sm:h-10 object-contain trust-logo">
                <img src="../assets/icons/iconos-clientes/blanco/COLAVES-PC.png" alt="Colaves" class="h-8 sm:h-10 object-contain trust-logo">
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
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Años de experiencia</p>
                </div>
                <div class="text-center p-4 bg-slate-900/50 border border-slate-800 rounded-xl">
                    <div class="stat-number text-[rgb(27,146,208)] font-display">+300</div>
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Incidentes resueltos/mes</p>
                </div>
                <div class="text-center p-4 bg-slate-900/50 border border-slate-800 rounded-xl">
                    <div class="stat-number text-[rgb(27,146,208)] font-display">+30</div>
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Empresas con outsourcing</p>
                </div>
                <div class="text-center p-4 bg-slate-900/50 border border-slate-800 rounded-xl">
                    <div class="stat-number text-[rgb(27,146,208)] font-display">98%</div>
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Cumplimiento de ANS</p>
                </div>
            </div>
            <!-- Partner -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <p class="text-slate-600 text-[0.65rem] uppercase tracking-widest mb-3">Plataforma de gestión</p>
                <div class="flex items-center justify-center gap-8">
                    <img src="../assets/icons/glpi.png" alt="GLPI" class="h-6 sm:h-7 object-contain trust-logo">
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 8. CASO DE ÉXITO ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 right-0 w-[400px] h-[400px] bg-emerald-500/5 rounded-full blur-[120px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl relative z-10">
            <div class="text-center mb-6" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-[0.65rem] font-bold uppercase tracking-widest">
                    <i class="bi bi-star-fill"></i> Caso real
                </span>
            </div>

            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-6 sm:p-8" data-aos="fade-up" data-aos-delay="80">
                <div class="flex items-center gap-4 mb-5">
                    <img src="../assets/icons/iconos-clientes/blanco/INSUMMA-PC.png" alt="Insumma" class="h-8 object-contain opacity-70">
                    <div>
                        <p class="text-white font-bold text-sm">Sector Producción y Comercialización</p>
                        <p class="text-slate-500 text-xs">Área Metropolitana de Bucaramanga</p>
                    </div>
                </div>

                <div class="case-quote mb-5">
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Dependían de un solo "técnico de confianza" para resolver todos los problemas de TI. Cada falla significaba esperas de horas y problemas recurrentes sin solución de raíz. Cybertec implementó un service desk con GLPI, técnicos dedicados y mantenimiento preventivo. <strong class="text-white">En los primeros 3 meses, los tiempos de resolución bajaron un 68% y los incidentes recurrentes se redujeron en un 80%.</strong>
                    </p>
                </div>

                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-400 text-[0.65rem] font-bold">Service Desk GLPI</span>
                    <span class="px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-400 text-[0.65rem] font-bold">Técnicos en sitio</span>
                    <span class="px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-400 text-[0.65rem] font-bold">Mantenimiento preventivo</span>
                    <span class="px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-400 text-[0.65rem] font-bold">ANS garantizados</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 9. OFERTA IRRESISTIBLE ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-emerald-500/5 rounded-full blur-[180px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-center">
                <!-- Left: Offer -->
                <div data-aos="fade-right">
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-bold uppercase tracking-widest mb-6">
                        <i class="bi bi-gift"></i> Sin costo
                    </span>

                    <h2 class="text-2xl sm:text-3xl font-display font-bold text-white mb-4">
                        Primera Semana de Soporte <span class="text-neon">Sin Costo</span>
                    </h2>

                    <p class="text-slate-400 text-sm mb-5 leading-relaxed">
                        Prueba nuestro service desk durante una semana completa sin compromiso. Experimenta la diferencia de tener soporte profesional antes de decidir.
                    </p>

                    <ul class="space-y-4 mb-6">
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-emerald-500/10 flex items-center justify-center text-emerald-400 mt-0.5">
                                <i class="bi bi-headset"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm">Soporte técnico real</h4>
                                <p class="text-slate-400 text-xs">Atención presencial o remota durante 5 días hábiles completos.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-emerald-500/10 flex items-center justify-center text-emerald-400 mt-0.5">
                                <i class="bi bi-clipboard-data"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm">Diagnóstico de tu infraestructura</h4>
                                <p class="text-slate-400 text-xs">Evaluación del estado de equipos, red y software de tu empresa.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-emerald-500/10 flex items-center justify-center text-emerald-400 mt-0.5">
                                <i class="bi bi-file-earmark-bar-graph"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm">Informe de recomendaciones</h4>
                                <p class="text-slate-400 text-xs">Al finalizar la semana, recibes un informe con hallazgos y mejoras sugeridas.</p>
                            </div>
                        </li>
                    </ul>

                    <div class="bg-red-500/5 border border-red-500/15 rounded-xl p-4">
                        <p class="text-red-400 text-xs font-bold uppercase tracking-widest mb-2">
                            <i class="bi bi-exclamation-triangle-fill mr-1"></i> No esperes a que pase
                        </p>
                        <p class="text-white text-sm font-bold">Cada día sin soporte profesional, <span class="text-red-400">tu equipo pierde productividad.</span></p>
                        <p class="text-slate-400 text-xs mt-1">Prueba sin riesgo y decide con resultados reales.</p>
                    </div>
                </div>

                <!-- Right: Visual -->
                <div class="flex flex-col items-center justify-center gap-6" data-aos="fade-left">
                    <div class="bg-slate-900/80 border border-emerald-500/20 rounded-2xl p-6 sm:p-8 text-center w-full">
                        <div class="w-16 h-16 rounded-2xl bg-emerald-500/10 flex items-center justify-center text-emerald-400 mx-auto mb-4">
                            <i class="bi bi-calendar-week text-3xl"></i>
                        </div>
                        <h3 class="text-white font-display font-bold text-lg mb-2">1 semana de prueba</h3>
                        <p class="text-slate-400 text-sm mb-4">Sin costo · Sin compromiso · Sin letra pequeña</p>
                        <div class="space-y-2 text-left mb-6">
                            <div class="flex items-center gap-2 text-sm text-slate-300">
                                <i class="bi bi-check-lg text-emerald-400"></i> 5 días hábiles de soporte real
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-300">
                                <i class="bi bi-check-lg text-emerald-400"></i> Atención presencial o remota
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-300">
                                <i class="bi bi-check-lg text-emerald-400"></i> Diagnóstico de tu infraestructura
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-300">
                                <i class="bi bi-check-lg text-emerald-400"></i> Informe de recomendaciones
                            </div>
                        </div>
                        <a href="#contacto" class="cta-pulse w-full flex items-center justify-center gap-2 bg-[rgb(27,146,208)] text-white font-bold px-6 py-3.5 rounded-xl hover:bg-[rgb(27,146,208)]/80 transition-all text-sm">
                            <i class="bi bi-calendar-check"></i> Solicitar semana de prueba
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
                        No esperes a que <span class="text-red-400">todo se detenga.</span>
                    </h2>
                    <p class="text-slate-400 text-sm mb-5">
                        Cada minuto sin soporte técnico confiable pone en riesgo tu productividad. Terceriza tu TI con profesionales que garantizan continuidad operativa.
                    </p>

                    <div class="space-y-3 mb-5">
                        <div class="flex items-center gap-3">
                            <i class="bi bi-check-circle-fill text-emerald-400"></i>
                            <p class="text-slate-300 text-sm">Respuesta garantizada en menos de 15 minutos</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="bi bi-check-circle-fill text-emerald-400"></i>
                            <p class="text-slate-300 text-sm">Primera semana de prueba sin costo</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="bi bi-check-circle-fill text-emerald-400"></i>
                            <p class="text-slate-300 text-sm">Sin contratos de permanencia obligatorios</p>
                        </div>
                    </div>

                    <div class="bg-red-500/5 border border-red-500/15 rounded-xl p-4">
                        <p class="text-red-400 text-xs font-bold uppercase tracking-widest mb-2">
                            <i class="bi bi-exclamation-triangle-fill mr-1"></i> Dato real
                        </p>
                        <p class="text-white text-sm font-bold">Las empresas que tercerizan su soporte TI reducen los tiempos de inactividad en un <span class="text-emerald-400">72%</span>.</p>
                    </div>
                </div>

                <!-- Right: Form -->
                <div class="rounded-2xl bg-slate-900/80 border border-slate-800 p-5 sm:p-6 backdrop-blur" data-aos="fade-left">
                    <h3 class="text-lg font-display font-bold text-white mb-1 text-center">Cotizar soporte TI</h3>
                    <p class="text-slate-500 text-xs text-center mb-4">Más de 30 empresas ya gestionan su TI con Cybertec</p>
                    
                    <form id="formSoporte" class="space-y-4">
                        <div>
                            <label class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Nombre</label>
                            <input type="text" id="stNombre" placeholder="Tu nombre" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-emerald-500 transition-colors placeholder:text-slate-600 text-sm" required>
                        </div>
                        <div>
                            <label class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Empresa</label>
                            <input type="text" id="stEmpresa" placeholder="Nombre de tu empresa" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-emerald-500 transition-colors placeholder:text-slate-600 text-sm" required>
                        </div>
                        <div>
                            <label class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Teléfono</label>
                            <input type="tel" id="stTelefono" placeholder="+57 300 000 0000" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-emerald-500 transition-colors placeholder:text-slate-600 text-sm" required>
                        </div>
                        <div>
                            <label class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">¿Qué necesitas?</label>
                            <select id="stServicio" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-emerald-500 transition-colors text-sm" required>
                                <option value="" selected disabled>Seleccionar servicio</option>
                                <option value="Service Desk presencial">Service Desk presencial</option>
                                <option value="Soporte remoto">Soporte remoto</option>
                                <option value="Outsourcing de TI completo">Outsourcing de TI completo</option>
                                <option value="Mantenimiento preventivo">Mantenimiento preventivo</option>
                                <option value="Semana de prueba gratuita">Semana de prueba gratuita</option>
                            </select>
                        </div>

                        <button type="submit" class="cta-pulse w-full flex items-center justify-center gap-2 bg-emerald-500 text-white font-bold px-6 py-4 rounded-xl hover:bg-emerald-600 transition-all text-sm sm:text-base mt-2">
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

                        <a href="https://wa.me/573175133375?text=Hola%20Cybertec%2C%20necesito%20soporte%20t%C3%A9cnico%20para%20mi%20empresa." class="w-full flex items-center justify-center gap-2 mt-3 px-6 py-3.5 rounded-xl bg-slate-950 border border-slate-700 text-white font-bold hover:border-green-500/40 hover:bg-slate-900 transition-all text-sm" target="_blank" rel="noopener noreferrer">
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
                    Preguntas <span class="text-emerald-400">frecuentes</span>
                </h2>
            </div>

            <div class="space-y-3" data-aos="fade-up" data-aos-delay="80">
                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Cuál es el tiempo de respuesta ante un incidente?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">Nuestro ANS garantiza primera respuesta en <strong class="text-white">menos de 15 minutos</strong> para incidentes críticos. Para incidentes generales, el tiempo de atención es de máximo 1 hora. Todo queda registrado y medido en nuestra plataforma GLPI.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿El soporte es presencial o remoto?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">Ofrecemos ambas modalidades. El <strong class="text-white">service desk presencial</strong> incluye técnicos dedicados en tu empresa. El <strong class="text-white">soporte remoto</strong> permite resolver el 70% de los incidentes sin necesidad de desplazamiento, con conexión inmediata por escritorio remoto.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Qué incluye el outsourcing de TI?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">El outsourcing completo incluye: personal técnico dedicado, service desk (presencial y/o remoto), mantenimiento preventivo y correctivo de equipos, administración de firewalls y red, outsourcing de impresión, suministro de tóners y repuestos, y <strong class="text-white">reportes mensuales de gestión</strong>.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Hay contrato de permanencia?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">No exigimos permanencia mínima obligatoria. Trabajamos con contratos flexibles porque confiamos en la calidad del servicio. <strong class="text-white">Te quedas porque quieres, no porque tienes que hacerlo.</strong> Ofrecemos una semana de prueba sin costo para que evalúes antes de comprometerte.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Cómo se gestionan los tickets?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">Utilizamos <strong class="text-white">GLPI</strong>, una plataforma profesional de gestión de servicios de TI. Cada incidente se registra, se le asigna prioridad, se da seguimiento y se cierra con documentación. Tienes un portal web donde puedes crear tickets y ver el estado de tus solicitudes en tiempo real.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 12. CIERRE EMOCIONAL ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute inset-0 bg-gradient-to-b from-emerald-500/[0.02] to-transparent"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-3xl relative z-10 text-center" data-aos="fade-up">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-display font-bold text-white mb-4">
                Deja de apagar incendios. <span class="text-emerald-400">Empieza a prevenir.</span>
            </h2>
            <p class="text-slate-400 text-sm sm:text-base max-w-xl mx-auto mb-6">
                Las empresas más productivas no resuelven más problemas — <strong class="text-white">tienen menos problemas porque tienen soporte profesional.</strong> Hoy es el mejor día para dar ese paso.
            </p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="#contacto" class="cta-pulse inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl bg-[rgb(27,146,208)] text-white font-bold hover:bg-[rgb(27,146,208)]/80 transition-all text-sm shadow-lg shadow-[rgb(27,146,208)]/20">
                    <i class="bi bi-headset"></i> Solicitar cotización ahora
                </a>
                <a href="https://wa.me/573175133375?text=Hola%20Cybertec%2C%20necesito%20soporte%20t%C3%A9cnico%20para%20mi%20empresa." class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl bg-slate-900 border border-slate-700 text-white font-bold hover:border-green-500/40 transition-all text-sm" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-whatsapp text-green-400"></i> Hablar por WhatsApp
                </a>
            </div>
            <div class="mt-5">
                <span class="guarantee-badge"><i class="bi bi-shield-lock-fill"></i> Semana de prueba gratis · Sin compromiso · Respuesta en 15 min</span>
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
    <a href="https://wa.me/573175133375?text=Hola%20Cybertec%2C%20necesito%20soporte%20t%C3%A9cnico%20para%20mi%20empresa." class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Contactar por WhatsApp">
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
        document.getElementById('formSoporte').addEventListener('submit', function(e) {
            e.preventDefault();
            var nombre = document.getElementById('stNombre').value.trim();
            var empresa = document.getElementById('stEmpresa').value.trim();
            var telefono = document.getElementById('stTelefono').value.trim();
            var servicio = document.getElementById('stServicio').value;
            if (!nombre || !empresa || !telefono || !servicio) return;
            var msg = 'Hola Cybertec, me interesa Soporte Técnico y Gestión de TIC.\n\n' +
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
