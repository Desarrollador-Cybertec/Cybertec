<?php
/**
 * Landing Page — Soporte Técnico Especializado y Gestión de TIC
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

    <!-- HERO -->
    <section class="relative min-h-[80vh] flex items-center pt-14 pb-6 overflow-hidden">
        <div class="absolute inset-0 cyber-grid opacity-[0.03]"></div>
        <div class="absolute top-1/3 right-0 w-[500px] h-[500px] bg-emerald-500/10 rounded-full blur-[150px]"></div>

        <div class="container mx-auto px-4 sm:px-6 relative z-10 max-w-5xl">
            <div class="text-center" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-500/10 border border-red-500/20 text-red-400 text-xs font-bold uppercase tracking-widest mb-6">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    Riesgo operativo
                </span>

                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold leading-tight mb-5">
                    Un equipo caído puede <span class="text-red-400">paralizar toda tu operación.</span>
                </h1>

                <p class="text-slate-400 text-base sm:text-lg max-w-2xl mx-auto mb-4">
                    Sin soporte técnico confiable, cada falla se convierte en horas de productividad perdida. <strong class="text-white">¿Quién responde cuando algo falla?</strong>
                </p>

                <div class="inline-flex items-center gap-3 bg-slate-900/80 border border-slate-800 rounded-xl px-5 py-3 mb-8" data-aos="zoom-in" data-aos-delay="200">
                    <i class="bi bi-hourglass-split text-red-400 text-xl"></i>
                    <p class="text-sm text-slate-300">Una hora de inactividad le cuesta a una PYME entre <span class="text-red-400 font-bold">$500.000 y $5.000.000 COP</span> en productividad.</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="#contacto" class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl bg-[rgb(27,146,208)] text-white font-bold hover:bg-[rgb(27,146,208)]/80 transition-all text-sm">
                        <i class="bi bi-headset"></i> Contratar soporte ahora
                    </a>
                    <a href="#solucion" class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl bg-slate-900 border border-slate-700 text-slate-300 font-bold hover:border-[rgb(27,146,208)]/40 transition-all text-sm">
                        <i class="bi bi-arrow-down-circle"></i> Ver planes
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
                    Lo que pasa cuando <span class="text-red-400">no tienes soporte TI</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-slate-900/80 border border-slate-800 rounded-xl p-5">
                    <div class="w-10 h-10 rounded-lg bg-red-500/10 flex items-center justify-center text-red-400 mb-3">
                        <i class="bi bi-pc-display-horizontal text-lg"></i>
                    </div>
                    <h3 class="text-white font-bold text-sm mb-2">Equipos sin mantenimiento</h3>
                    <p class="text-slate-400 text-xs">Computadores lentos, impresoras que fallan, servidores sin actualizar. La productividad se desploma.</p>
                </div>
                <div class="bg-slate-900/80 border border-slate-800 rounded-xl p-5">
                    <div class="w-10 h-10 rounded-lg bg-red-500/10 flex items-center justify-center text-red-400 mb-3">
                        <i class="bi bi-telephone-x-fill text-lg"></i>
                    </div>
                    <h3 class="text-white font-bold text-sm mb-2">Sin a quién llamar</h3>
                    <p class="text-slate-400 text-xs">Cuando algo falla, no hay un equipo técnico que responda. Las soluciones dependen de "el que sabe de sistemas".</p>
                </div>
                <div class="bg-slate-900/80 border border-slate-800 rounded-xl p-5">
                    <div class="w-10 h-10 rounded-lg bg-red-500/10 flex items-center justify-center text-red-400 mb-3">
                        <i class="bi bi-clipboard-x-fill text-lg"></i>
                    </div>
                    <h3 class="text-white font-bold text-sm mb-2">Sin trazabilidad</h3>
                    <p class="text-slate-400 text-xs">No hay registro de incidentes ni requerimientos. Los mismos problemas se repiten una y otra vez.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SOLUCIÓN -->
    <section id="solucion" class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-emerald-500/5 rounded-full blur-[150px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl relative z-10">

            <div class="text-center mb-8" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-bold uppercase tracking-widest mb-4">
                    <i class="bi bi-headset"></i> Solución Cybertec
                </span>
                <h2 class="text-2xl sm:text-3xl font-display font-bold text-white">
                    Soporte Técnico Especializado y <span class="text-emerald-400">Gestión de TIC</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                <!-- Service Desk Presencial -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-emerald-500/40 rounded-xl p-5 transition-all duration-300" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-person-badge-fill text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Service Desk Presencial</h3>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Técnicos en sitio en tu empresa</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Atención a equipos y periféricos</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Gestión de incidentes y problemas</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Registro y trazabilidad de tickets</li>
                    </ul>
                </div>

                <!-- Service Desk Remoto -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-emerald-500/40 rounded-xl p-5 transition-all duration-300" data-aos="fade-up" data-aos-delay="80">
                    <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-display text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Service Desk Remoto</h3>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Soporte telefónico y virtual</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Atención remota inmediata</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Plataforma de tickets (GLPI)</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Cumplimiento de ANS</li>
                    </ul>
                </div>

                <!-- Outsourcing -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-emerald-500/40 rounded-xl p-5 transition-all duration-300" data-aos="fade-up" data-aos-delay="160">
                    <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-people-fill text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Outsourcing de TI</h3>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Personal técnico dedicado</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Outsourcing de impresión</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Administración de firewalls</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-emerald-400 mt-0.5"></i> Suministro de tóners y repuestos</li>
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
                    <div class="w-12 h-12 rounded-full bg-emerald-500/10 flex items-center justify-center text-emerald-400 mx-auto mb-3">
                        <i class="bi bi-stopwatch-fill text-xl"></i>
                    </div>
                    <h4 class="text-white font-bold text-sm mb-1">Respuesta rápida</h4>
                    <p class="text-slate-500 text-xs">ANS definidos, tiempos de respuesta garantizados</p>
                </div>
                <div class="text-center p-4">
                    <div class="w-12 h-12 rounded-full bg-emerald-500/10 flex items-center justify-center text-emerald-400 mx-auto mb-3">
                        <i class="bi bi-kanban-fill text-xl"></i>
                    </div>
                    <h4 class="text-white font-bold text-sm mb-1">Plataforma GLPI</h4>
                    <p class="text-slate-500 text-xs">Trazabilidad total de incidentes</p>
                </div>
                <div class="text-center p-4">
                    <div class="w-12 h-12 rounded-full bg-emerald-500/10 flex items-center justify-center text-emerald-400 mx-auto mb-3">
                        <i class="bi bi-building-fill text-xl"></i>
                    </div>
                    <h4 class="text-white font-bold text-sm mb-1">Personal en sitio</h4>
                    <p class="text-slate-500 text-xs">Técnicos dedicados en tu empresa</p>
                </div>
                <div class="text-center p-4">
                    <div class="w-12 h-12 rounded-full bg-emerald-500/10 flex items-center justify-center text-emerald-400 mx-auto mb-3">
                        <i class="bi bi-arrow-repeat text-xl"></i>
                    </div>
                    <h4 class="text-white font-bold text-sm mb-1">Mantenimiento preventivo</h4>
                    <p class="text-slate-500 text-xs">Evita fallas antes de que ocurran</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA + FORMULARIO -->
    <section id="contacto" class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-emerald-500/5 rounded-full blur-[150px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-center">

                <!-- Left -->
                <div data-aos="fade-right">
                    <h2 class="text-2xl sm:text-3xl font-display font-bold text-white mb-4">
                        No esperes a que <span class="text-red-400">todo se detenga.</span>
                    </h2>
                    <p class="text-slate-400 text-sm mb-5">
                        Cada minuto sin soporte técnico confiable pone en riesgo tu productividad. Terceriza tu TI con profesionales que garantizan continuidad operativa.
                    </p>
                    <div class="bg-red-500/5 border border-red-500/15 rounded-xl p-4">
                        <p class="text-red-400 text-xs font-bold uppercase tracking-widest mb-2">
                            <i class="bi bi-exclamation-triangle-fill mr-1"></i> Dato real
                        </p>
                        <p class="text-white text-sm font-bold">Las empresas que tercerizan su soporte TI reducen los tiempos de inactividad en un <span class="text-emerald-400">72%</span>.</p>
                    </div>
                </div>

                <!-- Right: Form -->
                <div class="rounded-2xl bg-slate-900/80 border border-slate-800 p-5 sm:p-6 backdrop-blur" data-aos="fade-left">
                    <h3 class="text-lg font-display font-bold text-white mb-4 text-center">Cotizar soporte TI</h3>
                    
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
                            </select>
                        </div>

                        <button type="submit" class="w-full flex items-center justify-center gap-2 bg-emerald-500 text-white font-bold px-6 py-4 rounded-xl hover:bg-emerald-600 transition-all text-sm sm:text-base mt-2">
                            <i class="bi bi-whatsapp text-lg"></i> Solicitar cotización
                        </button>

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
    </script>
</body>
</html>
