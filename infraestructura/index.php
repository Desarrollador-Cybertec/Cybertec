<?php
/**
 * Landing Page — Infraestructura Tecnológica
 * Telefonía IP, Redes LAN/WAN, Cableado Estructurado, Equipamiento
 */
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <title>Infraestructura Tecnológica Empresarial | Redes, Cableado y Telefonía IP | Cybertec</title>
    <meta name="description" content="Diseño e implementación de redes LAN/WAN, cableado estructurado, telefonía IP y equipamiento tecnológico para empresas en Piedecuesta, Bucaramanga y Santander. Cybertec.">
    <meta name="keywords" content="redes empresariales Bucaramanga, cableado estructurado Santander, telefonía IP Piedecuesta, infraestructura TI empresas, redes LAN WAN, servidores empresariales, Cybertec infraestructura">
    <meta name="author" content="Cybertec Informática & Telecomunicaciones SAS">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.cybertec.com.co/infraestructura/">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.cybertec.com.co/infraestructura/">
    <meta property="og:title" content="Infraestructura Tecnológica | Redes, Cableado y Telefonía IP | Cybertec">
    <meta property="og:description" content="¿Tu red es lenta, inestable o insegura? Redes LAN/WAN, cableado estructurado, telefonía IP y equipamiento empresarial con Cybertec.">
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
        <div class="absolute top-1/3 right-0 w-[500px] h-[500px] bg-cyan-500/10 rounded-full blur-[150px]"></div>

        <div class="container mx-auto px-4 sm:px-6 relative z-10 max-w-5xl">
            <div class="text-center" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-500/10 border border-red-500/20 text-red-400 text-xs font-bold uppercase tracking-widest mb-6">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    Riesgo de conectividad
                </span>

                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold leading-tight mb-5">
                    Una red lenta e inestable <span class="text-red-400">paraliza a todo tu equipo.</span>
                </h1>

                <p class="text-slate-400 text-base sm:text-lg max-w-2xl mx-auto mb-4">
                    Cableado deteriorado, WiFi que se cae, telefonía obsoleta. <strong class="text-white">Tu infraestructura define la velocidad de tu negocio.</strong>
                </p>

                <div class="inline-flex items-center gap-3 bg-slate-900/80 border border-slate-800 rounded-xl px-5 py-3 mb-8" data-aos="zoom-in" data-aos-delay="200">
                    <i class="bi bi-wifi-off text-red-400 text-xl"></i>
                    <p class="text-sm text-slate-300">El <span class="text-red-400 font-bold">45%</span> de las caídas de productividad en PYMES se deben a infraestructura de red deficiente.</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="#contacto" class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl bg-[rgb(27,146,208)] text-white font-bold hover:bg-[rgb(27,146,208)]/80 transition-all text-sm">
                        <i class="bi bi-hdd-network"></i> Modernizar mi infraestructura
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
                    Lo que pasa cuando tu <span class="text-red-400">infraestructura falla</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-slate-900/80 border border-slate-800 rounded-xl p-5">
                    <div class="w-10 h-10 rounded-lg bg-red-500/10 flex items-center justify-center text-red-400 mb-3">
                        <i class="bi bi-speedometer text-lg"></i>
                    </div>
                    <h3 class="text-white font-bold text-sm mb-2">Red lenta y saturada</h3>
                    <p class="text-slate-400 text-xs">Archivos que no cargan, videollamadas que se cortan, sistemas que no responden. Tu equipo pierde horas al día.</p>
                </div>
                <div class="bg-slate-900/80 border border-slate-800 rounded-xl p-5">
                    <div class="w-10 h-10 rounded-lg bg-red-500/10 flex items-center justify-center text-red-400 mb-3">
                        <i class="bi bi-ethernet text-lg"></i>
                    </div>
                    <h3 class="text-white font-bold text-sm mb-2">Cableado obsoleto</h3>
                    <p class="text-slate-400 text-xs">Un cableado viejo o mal instalado genera caídas constantes, interferencias y riesgos eléctricos.</p>
                </div>
                <div class="bg-slate-900/80 border border-slate-800 rounded-xl p-5">
                    <div class="w-10 h-10 rounded-lg bg-red-500/10 flex items-center justify-center text-red-400 mb-3">
                        <i class="bi bi-telephone-x-fill text-lg"></i>
                    </div>
                    <h3 class="text-white font-bold text-sm mb-2">Telefonía limitada</h3>
                    <p class="text-slate-400 text-xs">Líneas analógicas sin funcionalidades, sin grabación de llamadas ni extensiones. Comunicación costosa e ineficiente.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SOLUCIÓN -->
    <section id="solucion" class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-cyan-500/5 rounded-full blur-[150px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl relative z-10">

            <div class="text-center mb-8" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 text-xs font-bold uppercase tracking-widest mb-4">
                    <i class="bi bi-hdd-network-fill"></i> Solución Cybertec
                </span>
                <h2 class="text-2xl sm:text-3xl font-display font-bold text-white">
                    Infraestructura <span class="text-cyan-400">Tecnológica</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Telefonía IP -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-cyan-500/40 rounded-xl p-5 transition-all duration-300" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-telephone-fill text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Telefonía IP</h3>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Centrales telefónicas escalables</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Extensiones, IVR y buzón de voz</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Grabación de llamadas</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Comunicaciones unificadas (chat, correo, voz)</li>
                    </ul>
                </div>

                <!-- Redes -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-cyan-500/40 rounded-xl p-5 transition-all duration-300" data-aos="fade-up" data-aos-delay="80">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-diagram-3-fill text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Redes y Comunicaciones</h3>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Redes LAN / WAN empresariales</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> WiFi corporativo con Access Points</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Portales cautivos</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Segmentación y enlaces WAN / MAN</li>
                    </ul>
                </div>

                <!-- Cableado -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-cyan-500/40 rounded-xl p-5 transition-all duration-300" data-aos="fade-up" data-aos-delay="160">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-ethernet text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Cableado Estructurado</h3>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Diseño e instalación certificada</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Redes internas y externas</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Certificación de redes de datos</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Energía regulada y no regulada</li>
                    </ul>
                </div>

                <!-- Equipamiento -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-cyan-500/40 rounded-xl p-5 transition-all duration-300" data-aos="fade-up" data-aos-delay="240">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-cpu-fill text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Equipamiento Tecnológico</h3>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Equipos de cómputo empresariales</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Servidores y UPS</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Accesorios TI corporativos</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Mantenimiento preventivo y correctivo</li>
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
                    <div class="w-12 h-12 rounded-full bg-cyan-500/10 flex items-center justify-center text-cyan-400 mx-auto mb-3">
                        <i class="bi bi-award-fill text-xl"></i>
                    </div>
                    <h4 class="text-white font-bold text-sm mb-1">MikroTik certified</h4>
                    <p class="text-slate-500 text-xs">Equipos de red profesionales</p>
                </div>
                <div class="text-center p-4">
                    <div class="w-12 h-12 rounded-full bg-cyan-500/10 flex items-center justify-center text-cyan-400 mx-auto mb-3">
                        <i class="bi bi-rulers text-xl"></i>
                    </div>
                    <h4 class="text-white font-bold text-sm mb-1">Instalación certificada</h4>
                    <p class="text-slate-500 text-xs">Cableado con estándares internacionales</p>
                </div>
                <div class="text-center p-4">
                    <div class="w-12 h-12 rounded-full bg-cyan-500/10 flex items-center justify-center text-cyan-400 mx-auto mb-3">
                        <i class="bi bi-speedometer2 text-xl"></i>
                    </div>
                    <h4 class="text-white font-bold text-sm mb-1">Alto rendimiento</h4>
                    <p class="text-slate-500 text-xs">Redes diseñadas para escalar</p>
                </div>
                <div class="text-center p-4">
                    <div class="w-12 h-12 rounded-full bg-cyan-500/10 flex items-center justify-center text-cyan-400 mx-auto mb-3">
                        <i class="bi bi-wrench-adjustable text-xl"></i>
                    </div>
                    <h4 class="text-white font-bold text-sm mb-1">Soporte continuo</h4>
                    <p class="text-slate-500 text-xs">Mantenimiento preventivo incluido</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA + FORMULARIO -->
    <section id="contacto" class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-cyan-500/5 rounded-full blur-[150px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-center">

                <!-- Left -->
                <div data-aos="fade-right">
                    <h2 class="text-2xl sm:text-3xl font-display font-bold text-white mb-4">
                        No dejes que la red <span class="text-red-400">frene tu empresa.</span>
                    </h2>
                    <p class="text-slate-400 text-sm mb-5">
                        Tu infraestructura tecnológica es la base sobre la que opera todo. Modernízala antes de que las caídas y la lentitud te cuesten más de lo que vale la inversión.
                    </p>
                    <div class="bg-red-500/5 border border-red-500/15 rounded-xl p-4">
                        <p class="text-red-400 text-xs font-bold uppercase tracking-widest mb-2">
                            <i class="bi bi-exclamation-triangle-fill mr-1"></i> Dato real
                        </p>
                        <p class="text-white text-sm font-bold">Empresas con infraestructura actualizada reportan un aumento del <span class="text-cyan-400">35%</span> en productividad operativa.</p>
                    </div>
                </div>

                <!-- Right: Form -->
                <div class="rounded-2xl bg-slate-900/80 border border-slate-800 p-5 sm:p-6 backdrop-blur" data-aos="fade-left">
                    <h3 class="text-lg font-display font-bold text-white mb-4 text-center">Cotizar infraestructura</h3>
                    
                    <form id="formInfra" class="space-y-4">
                        <div>
                            <label class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Nombre</label>
                            <input type="text" id="inNombre" placeholder="Tu nombre" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-cyan-500 transition-colors placeholder:text-slate-600 text-sm" required>
                        </div>
                        <div>
                            <label class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Empresa</label>
                            <input type="text" id="inEmpresa" placeholder="Nombre de tu empresa" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-cyan-500 transition-colors placeholder:text-slate-600 text-sm" required>
                        </div>
                        <div>
                            <label class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Teléfono</label>
                            <input type="tel" id="inTelefono" placeholder="+57 300 000 0000" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-cyan-500 transition-colors placeholder:text-slate-600 text-sm" required>
                        </div>
                        <div>
                            <label class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">¿Qué necesitas?</label>
                            <select id="inServicio" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-cyan-500 transition-colors text-sm" required>
                                <option value="" selected disabled>Seleccionar servicio</option>
                                <option value="Telefonía IP">Telefonía IP</option>
                                <option value="Redes LAN / WAN / WiFi">Redes LAN / WAN / WiFi</option>
                                <option value="Cableado estructurado">Cableado estructurado</option>
                                <option value="Equipamiento (servidores, UPS, cómputo)">Equipamiento (servidores, UPS, cómputo)</option>
                                <option value="Solución integral de infraestructura">Solución integral de infraestructura</option>
                            </select>
                        </div>

                        <button type="submit" class="w-full flex items-center justify-center gap-2 bg-cyan-500 text-white font-bold px-6 py-4 rounded-xl hover:bg-cyan-600 transition-all text-sm sm:text-base mt-2">
                            <i class="bi bi-whatsapp text-lg"></i> Solicitar cotización
                        </button>

                        <div class="relative flex items-center gap-3 mt-4">
                            <div class="flex-1 h-px bg-slate-700"></div>
                            <span class="text-slate-500 text-xs">o si prefieres</span>
                            <div class="flex-1 h-px bg-slate-700"></div>
                        </div>

                        <a href="https://wa.me/573175133375?text=Hola%20Cybertec%2C%20necesito%20mejorar%20la%20infraestructura%20tecnol%C3%B3gica%20de%20mi%20empresa." class="w-full flex items-center justify-center gap-2 mt-3 px-6 py-3.5 rounded-xl bg-slate-950 border border-slate-700 text-white font-bold hover:border-green-500/40 hover:bg-slate-900 transition-all text-sm" target="_blank" rel="noopener noreferrer">
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

        document.getElementById('formInfra').addEventListener('submit', function(e) {
            e.preventDefault();
            var nombre = document.getElementById('inNombre').value.trim();
            var empresa = document.getElementById('inEmpresa').value.trim();
            var telefono = document.getElementById('inTelefono').value.trim();
            var servicio = document.getElementById('inServicio').value;
            if (!nombre || !empresa || !telefono || !servicio) return;
            var msg = 'Hola Cybertec, me interesa Infraestructura Tecnológica.\n\n' +
                'Nombre: ' + nombre + '\n' +
                'Empresa: ' + empresa + '\n' +
                'Teléfono: ' + telefono + '\n' +
                'Servicio: ' + servicio;
            window.open('https://wa.me/573175133375?text=' + encodeURIComponent(msg), '_blank');
        });
    </script>
</body>
</html>
