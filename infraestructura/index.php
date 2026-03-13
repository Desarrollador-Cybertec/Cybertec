<?php
/**
 * Landing Page — Infraestructura Tecnológica
 * High-Conversion 12-Element Framework
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
    <div class="nav-laser-line fixed top-[44px] sm:top-[48px] w-full z-50"></div>

    <!-- ======================== 1. HERO ======================== -->
    <section class="relative min-h-[55vh] sm:min-h-[65vh] flex items-center pt-16 pb-8 overflow-hidden">
        <div class="absolute inset-0 cyber-grid opacity-[0.03]"></div>
        <div class="absolute top-1/3 right-0 w-[500px] h-[500px] bg-cyan-500/10 rounded-full blur-[150px]"></div>

        <div class="container mx-auto px-4 sm:px-6 relative z-10 max-w-5xl">
            <div class="text-center" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-500/10 border border-red-500/20 text-red-400 text-xs font-bold uppercase tracking-widest mb-6">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    Riesgo de conectividad
                </span>

                <h1 class="text-[1.55rem] sm:text-4xl lg:text-5xl font-display font-bold leading-tight mb-4">
                    Una red lenta e inestable <span class="text-red-400">paraliza a todo tu equipo.</span>
                </h1>

                <p class="text-slate-400 text-base sm:text-lg max-w-2xl mx-auto mb-4">
                    Cableado deteriorado, WiFi que se cae, telefonía obsoleta. <strong class="text-white">Tu infraestructura define la velocidad de tu negocio.</strong>
                </p>

                <!-- Trust Row -->
                <div class="flex flex-wrap items-center justify-center gap-4 sm:gap-6 mb-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-cyan-500/5 border border-cyan-500/20">
                        <i class="bi bi-diagram-3-fill text-cyan-400 text-sm"></i>
                        <span class="text-white text-xs font-bold">+100 redes instaladas</span>
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-cyan-500/5 border border-cyan-500/20">
                        <i class="bi bi-award-fill text-cyan-400 text-sm"></i>
                        <span class="text-white text-xs font-bold">MikroTik certified</span>
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-cyan-500/5 border border-cyan-500/20">
                        <i class="bi bi-shield-check text-cyan-400 text-sm"></i>
                        <span class="text-white text-xs font-bold">Garantía en instalación</span>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="#contacto" class="cta-pulse inline-flex items-center justify-center gap-2 px-5 py-3 sm:px-7 sm:py-3.5 rounded-xl bg-[rgb(27,146,208)] text-white font-bold hover:bg-[rgb(27,146,208)]/80 transition-all text-sm shadow-lg shadow-[rgb(27,146,208)]/20">
                        <i class="bi bi-hdd-network"></i> Modernizar mi infraestructura
                    </a>
                    <a href="#solucion" class="inline-flex items-center justify-center gap-2 px-5 py-3 sm:px-7 sm:py-3.5 rounded-xl bg-slate-900 border border-slate-700 text-slate-300 font-bold hover:border-[rgb(27,146,208)]/40 transition-all text-sm">
                        <i class="bi bi-arrow-down-circle"></i> Ver soluciones
                    </a>
                </div>

                <div class="mt-6 flex justify-center gap-4 opacity-40" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-slate-900/80 border border-slate-800 flex items-center justify-center text-cyan-400">
                        <i class="bi bi-telephone-fill text-2xl sm:text-3xl"></i>
                    </div>
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-slate-900/80 border border-slate-800 flex items-center justify-center text-cyan-400">
                        <i class="bi bi-diagram-3-fill text-2xl sm:text-3xl"></i>
                    </div>
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-slate-900/80 border border-slate-800 flex items-center justify-center text-cyan-400">
                        <i class="bi bi-ethernet text-2xl sm:text-3xl"></i>
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
                    <i class="bi bi-speedometer text-red-400 text-lg flex-shrink-0"></i>
                    <div>
                        <h4 class="text-white font-bold text-sm">Red lenta y saturada</h4>
                        <p class="text-slate-500 text-xs">Archivos que no cargan, videollamadas cortadas, sistemas que no responden.</p>
                    </div>
                </div>
                <div class="pain-item">
                    <i class="bi bi-wifi-off text-red-400 text-lg flex-shrink-0"></i>
                    <div>
                        <h4 class="text-white font-bold text-sm">WiFi inestable</h4>
                        <p class="text-slate-500 text-xs">Zonas sin cobertura, desconexiones frecuentes y equipos sin acceso a red.</p>
                    </div>
                </div>
                <div class="pain-item">
                    <i class="bi bi-ethernet text-red-400 text-lg flex-shrink-0"></i>
                    <div>
                        <h4 class="text-white font-bold text-sm">Cableado viejo o improvisado</h4>
                        <p class="text-slate-500 text-xs">Cables visibles, empalmes peligrosos y puntos de red que no funcionan.</p>
                    </div>
                </div>
                <div class="pain-item">
                    <i class="bi bi-telephone-x-fill text-red-400 text-lg flex-shrink-0"></i>
                    <div>
                        <h4 class="text-white font-bold text-sm">Telefonía obsoleta</h4>
                        <p class="text-slate-500 text-xs">Líneas analógicas costosas sin extensiones, grabación ni funcionalidades modernas.</p>
                    </div>
                </div>
                <div class="pain-item">
                    <i class="bi bi-cpu text-red-400 text-lg flex-shrink-0"></i>
                    <div>
                        <h4 class="text-white font-bold text-sm">Equipos sin mantenimiento</h4>
                        <p class="text-slate-500 text-xs">Computadores lentos, servidores al límite y UPS que no sostienen ni 10 minutos.</p>
                    </div>
                </div>
                <div class="pain-item">
                    <i class="bi bi-exclamation-triangle text-red-400 text-lg flex-shrink-0"></i>
                    <div>
                        <h4 class="text-white font-bold text-sm">Sin redundancia ni monitoreo</h4>
                        <p class="text-slate-500 text-xs">Un solo punto de falla puede dejar a toda la empresa sin conectividad por horas.</p>
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
                    <div class="stat-number text-red-400 font-display">$3.6M</div>
                    <p class="text-slate-400 text-xs font-bold">COP/hora pierde una empresa de 20 personas por caída de red</p>
                </div>
                <div class="bg-slate-900/60 border border-red-500/20 rounded-xl stat-card text-center">
                    <div class="stat-number text-red-400 font-display">45%</div>
                    <p class="text-slate-400 text-xs font-bold">de caídas de productividad se deben a infraestructura deficiente</p>
                </div>
                <div class="bg-slate-900/60 border border-red-500/20 rounded-xl stat-card text-center">
                    <div class="stat-number text-red-400 font-display">70%</div>
                    <p class="text-slate-400 text-xs font-bold">de las PYMES no tienen cableado certificado ni redundancia</p>
                </div>
            </div>
            <div class="mid-cta" data-aos="fade-up" data-aos-delay="80">
                <a href="#contacto" class="cta-pulse inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-[rgb(27,146,208)] text-white font-bold hover:bg-[rgb(27,146,208)]/80 transition-all text-sm shadow-lg shadow-[rgb(27,146,208)]/20">
                    <i class="bi bi-hdd-network-fill"></i> Modernizar mi infraestructura →
                </a>
            </div>
        </div>
    </section>

    <!-- ======================== 4. SOLUCIÓN ======================== -->
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
                <p class="text-slate-400 text-sm max-w-xl mx-auto mt-3">Diseñamos, implementamos y mantenemos la infraestructura que tu empresa necesita para operar sin interrupciones.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Telefonía IP -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-cyan-500/40 rounded-xl p-5 transition-all duration-300 landing-card-hover" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-telephone-fill text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-1">Telefonía IP</h3>
                    <p class="text-slate-500 text-xs mb-3">Comunicaciones modernas que reducen costos y mejoran la atención al cliente.</p>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Centrales telefónicas escalables (Asterisk/FreePBX)</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Extensiones ilimitadas, IVR y buzón de voz</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Grabación de llamadas con búsqueda</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Comunicaciones unificadas (chat, correo, voz)</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Integración con sedes remotas vía VPN</li>
                    </ul>
                </div>

                <!-- Redes -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-cyan-500/40 rounded-xl p-5 transition-all duration-300 landing-card-hover" data-aos="fade-up" data-aos-delay="80">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-diagram-3-fill text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-1">Redes y Comunicaciones</h3>
                    <p class="text-slate-500 text-xs mb-3">Redes profesionales con equipos MikroTik que escalan con tu negocio.</p>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Redes LAN / WAN / MAN empresariales</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> WiFi corporativo con Access Points profesionales</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Portales cautivos para clientes y visitantes</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Segmentación de red y VLANs</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Enlaces dedicados entre sedes</li>
                    </ul>
                </div>

                <!-- Cableado -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-cyan-500/40 rounded-xl p-5 transition-all duration-300 landing-card-hover" data-aos="fade-up" data-aos-delay="160">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-ethernet text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-1">Cableado Estructurado</h3>
                    <p class="text-slate-500 text-xs mb-3">Instalación certificada con estándares internacionales y garantía de rendimiento.</p>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Diseño e instalación Cat 6/6A certificada</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Canalización y organización profesional</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Certificación de puntos con Fluke</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Redes eléctricas reguladas y no reguladas</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Racks, patch panels y etiquetado completo</li>
                    </ul>
                </div>

                <!-- Equipamiento -->
                <div class="group bg-slate-900/80 border border-slate-800 hover:border-cyan-500/40 rounded-xl p-5 transition-all duration-300 landing-card-hover" data-aos="fade-up" data-aos-delay="240">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 mb-4 group-hover:scale-110 transition-transform">
                        <i class="bi bi-cpu-fill text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold mb-1">Equipamiento Tecnológico</h3>
                    <p class="text-slate-500 text-xs mb-3">Suministro, configuración y mantenimiento de todo el hardware que necesitas.</p>
                    <ul class="space-y-2 text-slate-400 text-xs">
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Equipos de cómputo empresariales</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Servidores rack y torre configurados</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> UPS y reguladores de voltaje</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Switches, routers y firewalls MikroTik</li>
                        <li class="flex items-start gap-2"><i class="bi bi-check-circle-fill text-cyan-400 mt-0.5"></i> Mantenimiento preventivo programado</li>
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
                    Resultados que <span class="text-cyan-400">obtendrás</span>
                </h2>
                <p class="text-slate-400 text-sm max-w-xl mx-auto mt-3">No solo instalamos cables y equipos. Diseñamos infraestructuras que transforman la productividad de tu empresa.</p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-slate-900/60 border border-slate-800 rounded-xl stat-card">
                    <div class="stat-number text-cyan-400 font-display">99.5%</div>
                    <h4 class="text-white font-bold text-sm mb-1">Uptime de red</h4>
                    <p class="text-slate-500 text-xs">Conectividad estable con redundancia y monitoreo</p>
                </div>
                <div class="bg-slate-900/60 border border-slate-800 rounded-xl stat-card">
                    <div class="stat-number text-cyan-400 font-display">35%</div>
                    <h4 class="text-white font-bold text-sm mb-1">Más productividad</h4>
                    <p class="text-slate-500 text-xs">Infraestructura actualizada = equipo más eficiente</p>
                </div>
                <div class="bg-slate-900/60 border border-slate-800 rounded-xl stat-card">
                    <div class="stat-number text-cyan-400 font-display">60%</div>
                    <h4 class="text-white font-bold text-sm mb-1">Ahorro en telefonía</h4>
                    <p class="text-slate-500 text-xs">VoIP vs. líneas analógicas tradicionales</p>
                </div>
                <div class="bg-slate-900/60 border border-slate-800 rounded-xl stat-card">
                    <div class="stat-number text-cyan-400 font-display">10x</div>
                    <h4 class="text-white font-bold text-sm mb-1">Velocidad de red</h4>
                    <p class="text-slate-500 text-xs">Cableado Cat 6A vs. instalaciones sin certificar</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 6. PRUEBA SOCIAL — LOGOS CLIENTES ======================== -->
    <section class="relative py-8 lg:py-10 overflow-hidden border-t border-white/5">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">
            <p class="text-center text-slate-500 text-xs uppercase tracking-widest font-bold mb-6" data-aos="fade-up">Empresas que confían su infraestructura a Cybertec</p>
            <div class="flex flex-wrap items-center justify-center gap-8 sm:gap-12" data-aos="fade-up" data-aos-delay="80">
                <img src="../assets/icons/iconos-clientes/blanco/TGI-EN.png" alt="TGI" class="h-8 sm:h-10 object-contain trust-logo">
                <img src="../assets/icons/iconos-clientes/blanco/PARAGUITAS-AL.png" alt="Paraguitas" class="h-8 sm:h-10 object-contain trust-logo">
                <img src="../assets/icons/iconos-clientes/blanco/TRANSPIEDECUESTA-TR.png" alt="TransPiedecuesta" class="h-8 sm:h-10 object-contain trust-logo">
                <img src="../assets/icons/iconos-clientes/blanco/INGESEP-CN.png" alt="Ingesep" class="h-8 sm:h-10 object-contain trust-logo">
                <img src="../assets/icons/iconos-clientes/blanco/MAYORAUTOS-AU.png" alt="Mayorautos" class="h-8 sm:h-10 object-contain trust-logo">
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
                    <div class="stat-number text-[rgb(27,146,208)] font-display">+100</div>
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Redes implementadas</p>
                </div>
                <div class="text-center p-4 bg-slate-900/50 border border-slate-800 rounded-xl">
                    <div class="stat-number text-[rgb(27,146,208)] font-display">+500</div>
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Puntos certificados</p>
                </div>
                <div class="text-center p-4 bg-slate-900/50 border border-slate-800 rounded-xl">
                    <div class="stat-number text-[rgb(27,146,208)] font-display">+50</div>
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Centrales VoIP activas</p>
                </div>
            </div>
            <!-- Partner -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <p class="text-slate-600 text-[0.65rem] uppercase tracking-widest mb-3">Partner tecnológico</p>
                <div class="flex items-center justify-center gap-8">
                    <img src="../assets/icons/mikrotik.png" alt="MikroTik" class="h-6 sm:h-7 object-contain trust-logo">
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 8. CASO DE ÉXITO ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 right-0 w-[400px] h-[400px] bg-cyan-500/5 rounded-full blur-[120px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl relative z-10">
            <div class="text-center mb-6" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 text-[0.65rem] font-bold uppercase tracking-widest">
                    <i class="bi bi-star-fill"></i> Caso real
                </span>
            </div>

            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-6 sm:p-8" data-aos="fade-up" data-aos-delay="80">
                <div class="flex items-center gap-4 mb-5">
                    <img src="../assets/icons/iconos-clientes/blanco/TGI-EN.png" alt="TGI" class="h-8 object-contain opacity-70">
                    <div>
                        <p class="text-white font-bold text-sm">Sector Energético e Hidrocarburos</p>
                        <p class="text-slate-500 text-xs">Operación en Santander y nivel nacional</p>
                    </div>
                </div>

                <div class="case-quote mb-5">
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Operaban con una red plana sin segmentación, WiFi doméstico y cableado sin certificar, lo que generaba caídas constantes en estaciones de trabajo y fallas en las comunicaciones entre sedes. Cybertec diseñó e implementó una red segmentada con equipos MikroTik, cableado Cat 6A certificado y telefonía IP con grabación de llamadas. <strong class="text-white">Las caídas de red se redujeron en un 95% y los costos de telefonía bajaron un 60%.</strong>
                    </p>
                </div>

                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-full bg-cyan-500/10 text-cyan-400 text-[0.65rem] font-bold">MikroTik</span>
                    <span class="px-3 py-1 rounded-full bg-cyan-500/10 text-cyan-400 text-[0.65rem] font-bold">Cableado Cat 6A</span>
                    <span class="px-3 py-1 rounded-full bg-cyan-500/10 text-cyan-400 text-[0.65rem] font-bold">Telefonía IP</span>
                    <span class="px-3 py-1 rounded-full bg-cyan-500/10 text-cyan-400 text-[0.65rem] font-bold">VLANs</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 9. OFERTA IRRESISTIBLE ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-cyan-500/5 rounded-full blur-[180px]"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-center">
                <!-- Left: Offer -->
                <div data-aos="fade-right">
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 text-xs font-bold uppercase tracking-widest mb-6">
                        <i class="bi bi-gift"></i> Sin costo
                    </span>

                    <h2 class="text-2xl sm:text-3xl font-display font-bold text-white mb-4">
                        Diseño de Red Básico <span class="text-neon">Gratuito</span>
                    </h2>

                    <p class="text-slate-400 text-sm mb-5 leading-relaxed">
                        Visitamos tu empresa, evaluamos tu infraestructura actual y te entregamos un diseño de red profesional sin costo ni compromiso. Sabrás exactamente qué necesitas mejorar.
                    </p>

                    <ul class="space-y-4 mb-6">
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-cyan-500/10 flex items-center justify-center text-cyan-400 mt-0.5">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm">Visita técnica en sitio</h4>
                                <p class="text-slate-400 text-xs">Un ingeniero evalúa tu infraestructura actual en tus instalaciones.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-cyan-500/10 flex items-center justify-center text-cyan-400 mt-0.5">
                                <i class="bi bi-rulers"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm">Diseño de red a tu medida</h4>
                                <p class="text-slate-400 text-xs">Plano con puntos de red, distribución de equipos y topología propuesta.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-cyan-500/10 flex items-center justify-center text-cyan-400 mt-0.5">
                                <i class="bi bi-file-earmark-bar-graph"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm">Cotización detallada</h4>
                                <p class="text-slate-400 text-xs">Presupuesto desglosado con materiales, equipos y mano de obra.</p>
                            </div>
                        </li>
                    </ul>

                    <div class="bg-red-500/5 border border-red-500/15 rounded-xl p-4">
                        <p class="text-red-400 text-xs font-bold uppercase tracking-widest mb-2">
                            <i class="bi bi-exclamation-triangle-fill mr-1"></i> No ignores las señales
                        </p>
                        <p class="text-white text-sm font-bold">Si tu WiFi se cae <span class="text-red-400">más de 1 vez por semana</span>, tu red necesita intervención profesional.</p>
                        <p class="text-slate-400 text-xs mt-1">No esperes a que deje de funcionar por completo.</p>
                    </div>
                </div>

                <!-- Right: Visual -->
                <div class="flex flex-col items-center justify-center gap-6" data-aos="fade-left">
                    <div class="bg-slate-900/80 border border-cyan-500/20 rounded-2xl p-6 sm:p-8 text-center w-full">
                        <div class="w-16 h-16 rounded-2xl bg-cyan-500/10 flex items-center justify-center text-cyan-400 mx-auto mb-4">
                            <i class="bi bi-diagram-3 text-3xl"></i>
                        </div>
                        <h3 class="text-white font-display font-bold text-lg mb-2">Diseño de red gratuito</h3>
                        <p class="text-slate-400 text-sm mb-4">Sin costo · Sin compromiso · Visita en sitio</p>
                        <div class="space-y-2 text-left mb-6">
                            <div class="flex items-center gap-2 text-sm text-slate-300">
                                <i class="bi bi-check-lg text-cyan-400"></i> Evaluación de infraestructura actual
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-300">
                                <i class="bi bi-check-lg text-cyan-400"></i> Diseño de topología de red
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-300">
                                <i class="bi bi-check-lg text-cyan-400"></i> Recomendaciones de equipamiento
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-300">
                                <i class="bi bi-check-lg text-cyan-400"></i> Cotización detallada sin compromiso
                            </div>
                        </div>
                        <a href="#contacto" class="cta-pulse w-full flex items-center justify-center gap-2 bg-[rgb(27,146,208)] text-white font-bold px-6 py-3.5 rounded-xl hover:bg-[rgb(27,146,208)]/80 transition-all text-sm">
                            <i class="bi bi-rulers"></i> Solicitar diseño gratuito
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
                        No dejes que la red <span class="text-red-400">frene tu empresa.</span>
                    </h2>
                    <p class="text-slate-400 text-sm mb-5">
                        Tu infraestructura tecnológica es la base sobre la que opera todo. Modernízala antes de que las caídas y la lentitud te cuesten más de lo que vale la inversión.
                    </p>

                    <div class="space-y-3 mb-5">
                        <div class="flex items-center gap-3">
                            <i class="bi bi-check-circle-fill text-cyan-400"></i>
                            <p class="text-slate-300 text-sm">Diseño de red gratuito con visita en sitio</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="bi bi-check-circle-fill text-cyan-400"></i>
                            <p class="text-slate-300 text-sm">Equipos MikroTik con garantía y soporte</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="bi bi-check-circle-fill text-cyan-400"></i>
                            <p class="text-slate-300 text-sm">Cableado certificado con estándares internacionales</p>
                        </div>
                    </div>

                    <div class="bg-red-500/5 border border-red-500/15 rounded-xl p-4">
                        <p class="text-red-400 text-xs font-bold uppercase tracking-widest mb-2">
                            <i class="bi bi-exclamation-triangle-fill mr-1"></i> Dato real
                        </p>
                        <p class="text-white text-sm font-bold">Empresas con infraestructura actualizada reportan un aumento del <span class="text-cyan-400">35%</span> en productividad operativa.</p>
                    </div>
                </div>

                <!-- Right: Form -->
                <div class="rounded-2xl bg-slate-900/80 border border-slate-800 p-5 sm:p-6 backdrop-blur" data-aos="fade-left">
                    <h3 class="text-lg font-display font-bold text-white mb-1 text-center">Cotizar infraestructura</h3>
                    <p class="text-slate-500 text-xs text-center mb-4">Más de 100 redes implementadas en empresas de la región</p>
                    
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
                                <option value="Diseño de red gratuito">Diseño de red gratuito</option>
                            </select>
                        </div>

                        <button type="submit" class="cta-pulse w-full flex items-center justify-center gap-2 bg-cyan-500 text-white font-bold px-6 py-4 rounded-xl hover:bg-cyan-600 transition-all text-sm sm:text-base mt-2">
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

                        <a href="https://wa.me/573175133375?text=Hola%20Cybertec%2C%20necesito%20mejorar%20la%20infraestructura%20tecnol%C3%B3gica%20de%20mi%20empresa." class="w-full flex items-center justify-center gap-2 mt-3 px-6 py-3.5 rounded-xl bg-slate-950 border border-slate-700 text-white font-bold hover:border-green-500/40 hover:bg-slate-900 transition-all text-sm" target="_blank" rel="noopener noreferrer">
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
                    Preguntas <span class="text-cyan-400">frecuentes</span>
                </h2>
            </div>

            <div class="space-y-3" data-aos="fade-up" data-aos-delay="80">
                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Cuánto tarda la implementación de una red completa?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">Depende del tamaño del proyecto. Para una oficina de 20-50 puntos, la implementación completa (cableado + equipos + configuración) tarda entre <strong class="text-white">1 y 2 semanas</strong>. Proyectos más grandes o con múltiples sedes se planifican por fases para minimizar interrupciones.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Por qué MikroTik y no otra marca?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">MikroTik ofrece rendimiento de grado empresarial a un <strong class="text-white">costo significativamente menor</strong> que Cisco o Ubiquiti. Sus equipos son robustos, configurables y escalables. Cybertec es partner certificado, lo que garantiza configuraciones optimizadas y soporte especializado.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿El cableado incluye certificación?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">Sí. Todos nuestros puntos de red se certifican con equipo <strong class="text-white">Fluke Networks</strong>. Recibes un informe de certificación por punto que garantiza que tu cableado cumple estándares Cat 6/6A y funcionará a máxima velocidad durante años.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Qué ventajas tiene la telefonía IP sobre la analógica?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">La telefonía IP <strong class="text-white">reduce costos hasta un 60%</strong>, permite extensiones ilimitadas, grabación de llamadas, IVR profesional, integración con sedes remotas y movilidad. No requiere líneas físicas adicionales y escala sin inversión en hardware.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-trigger">
                        <span class="text-white text-sm font-bold">¿Ofrecen mantenimiento posterior a la instalación?</span>
                        <i class="bi bi-plus-lg text-[rgb(27,146,208)] faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p class="text-slate-400 text-sm">Sí. Ofrecemos planes de <strong class="text-white">mantenimiento preventivo</strong> que incluyen revisión periódica de equipos, actualización de firmware, monitoreo de rendimiento de red y soporte técnico ante incidencias. También puedes combinar con nuestro servicio de soporte TI.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== 12. CIERRE EMOCIONAL ======================== -->
    <section class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
        <div class="absolute inset-0 bg-gradient-to-b from-cyan-500/[0.02] to-transparent"></div>
        <div class="container mx-auto px-4 sm:px-6 max-w-3xl relative z-10 text-center" data-aos="fade-up">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-display font-bold text-white mb-4">
                Tu red es el sistema nervioso de tu empresa. <span class="text-cyan-400">Fortalécelo.</span>
            </h2>
            <p class="text-slate-400 text-sm sm:text-base max-w-xl mx-auto mb-6">
                Las empresas más competitivas tienen algo en común: <strong class="text-white">infraestructura que nunca falla.</strong> No esperes a que una caída de red te cueste clientes, contratos o reputación.
            </p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="#contacto" class="cta-pulse inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl bg-[rgb(27,146,208)] text-white font-bold hover:bg-[rgb(27,146,208)]/80 transition-all text-sm shadow-lg shadow-[rgb(27,146,208)]/20">
                    <i class="bi bi-hdd-network"></i> Modernizar mi red ahora
                </a>
                <a href="https://wa.me/573175133375?text=Hola%20Cybertec%2C%20necesito%20mejorar%20la%20infraestructura%20tecnol%C3%B3gica%20de%20mi%20empresa." class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl bg-slate-900 border border-slate-700 text-white font-bold hover:border-green-500/40 transition-all text-sm" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-whatsapp text-green-400"></i> Hablar por WhatsApp
                </a>
            </div>
            <div class="mt-5">
                <span class="guarantee-badge"><i class="bi bi-shield-lock-fill"></i> Diseño de red gratuito · Sin compromiso · Visita técnica incluida</span>
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
    <a href="https://wa.me/573175133375?text=Hola%20Cybertec%2C%20necesito%20mejorar%20la%20infraestructura%20tecnol%C3%B3gica%20de%20mi%20empresa." class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Contactar por WhatsApp">
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
