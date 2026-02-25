<?php
/**
 * Header y Navegacion
 * Componente que incluye el <head> y la navegación principal
 */
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Primary -->
    <title>Cybertec | Seguridad, Infraestructura TI y Telecomunicaciones en Piedecuesta, Santander</title>
    <meta name="description" content="Cybertec Informática & Telecomunicaciones SAS: expertos en CCTV, control de acceso, firewalls, soporte TI 24/7, soluciones cloud y desarrollo de software. Piedecuesta, Santander, Colombia.">
    <meta name="keywords" content="seguridad CCTV Santander, control de acceso biométrico, firewall empresarial Colombia, soporte TI Piedecuesta, outsourcing TI, hosting empresarial, desarrollo software Santander, telecomunicaciones Colombia, alarmas digitales, Cybertec">
    <meta name="author" content="Cybertec Informática & Telecomunicaciones SAS">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="CO-SAN">
    <meta name="geo.placename" content="Piedecuesta, Santander, Colombia">
    <link rel="canonical" href="https://www.cybertec.com.co/">
    <link rel="sitemap" type="application/xml" title="Sitemap" href="https://www.cybertec.com.co/sitemap.xml">

    <!-- Open Graph (Facebook / LinkedIn / WhatsApp) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.cybertec.com.co/">
    <meta property="og:title" content="Cybertec | Seguridad, Infraestructura TI y Telecomunicaciones">
    <meta property="og:description" content="Expertos en CCTV, control de acceso, firewalls, soporte TI 24/7, soluciones cloud y desarrollo de software para empresas en Colombia.">
    <meta property="og:image" content="https://www.cybertec.com.co/assets/media/og-preview.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="es_CO">
    <meta property="og:site_name" content="Cybertec">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Cybertec | Seguridad e Infraestructura TI">
    <meta name="twitter:description" content="Expertos en seguridad física, digital, soporte TI, cloud y desarrollo de software. Piedecuesta, Santander.">
    <meta name="twitter:image" content="https://www.cybertec.com.co/assets/media/og-preview.png">

    <!-- Structured Data: LocalBusiness -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Cybertec Informática & Telecomunicaciones SAS",
      "description": "Expertos en seguridad física (CCTV, control de acceso), seguridad digital, soporte TI 24/7, soluciones cloud, infraestructura de redes y desarrollo de software.",
      "url": "https://www.cybertec.com.co",
      "telephone": "+573175133375",
      "email": "ventas@cybertec.com.co",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Piedecuesta",
        "addressRegion": "Santander",
        "addressCountry": "CO"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "6.9986",
        "longitude": "-73.0577"
      },
      "openingHours": "Mo-Fr 08:00-18:00",
      "sameAs": [
        "https://co.linkedin.com/in/cybertec-inform%C3%A1tica-y-telecomunicaciones-sas-b62a2a397",
        "https://www.instagram.com/cybertec.sas",
        "https://www.facebook.com/share/1GKSJvkgE4/"
      ],
      "serviceType": [
        "Seguridad Física y CCTV",
        "Seguridad Digital y Firewalls",
        "Soporte TI y Service Desk",
        "Infraestructura de Redes",
        "Soluciones Cloud y Software"
      ]
    }
    </script>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/media/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/favicon.ico">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Preload Brand Fonts -->
    <link rel="preload" href="assets/fonts/Bahnschrift/BAHNSCHRIFT.TTF" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="assets/fonts/Polymath/PolymathDispDemo-Bold.otf" as="font" type="font/otf" crossorigin>
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    
    <!-- AOS (Animate on Scroll) CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    
    <!-- Estilos Personalizados -->
    <link rel="stylesheet" href="assets/styles.css">
    
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Bahnschrift', 'sans-serif'],
                        display: ['Polymath', 'Bahnschrift', 'sans-serif'],
                    },
                    colors: {
                        cyber: {
                            base: '#020617',        // Dark Base
                            surface: '#0f172a',     // Surface
                            highlight: '#1e293b',   // Highlight
                            radar: '#1B92D0',       // Radar Blue (Primary)
                            navy: '#181D5E',        // Command Navy (Institutional)
                            graphite: '#202020',    // Grafito Táctico (Secondary)
                            success: '#10b981',     // Emerald
                        }
                    },
                    backgroundImage: {
                        'radar-glow': 'radial-gradient(circle at center, rgba(27,146,208,0.15) 0%, rgba(0,0,0,0) 70%)',
                        'navy-glow': 'radial-gradient(circle at center, rgba(24,29,94,0.1) 0%, rgba(0,0,0,0) 70%)',
                        'grid-pattern': "linear-gradient(to right, #1e293b 1px, transparent 1px), linear-gradient(to bottom, #1e293b 1px, transparent 1px)",
                    },
                    animation: {
                        'pulse-glow': 'pulseGlow 3s infinite',
                        'float-slow': 'float 8s ease-in-out infinite',
                        'grid-move': 'gridMove 20s linear infinite',
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
                        gridMove: {
                            '0%': { transform: 'translateY(0)' },
                            '100%': { transform: 'translateY(50px)' },
                        }
                    }
                }
            }
        }
    </script>
</head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KGJ2SFT4EJ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-KGJ2SFT4EJ');
    </script>
<body class="antialiased font-sans overflow-x-hidden">
    <!-- Navbar -->
    <nav class="fixed w-full z-50 transition-all duration-500" id="main-nav">
        <!-- Glass Background -->
        <div class="absolute inset-0 bg-slate-950/70 backdrop-blur-xl border-b border-white/5"></div>

        <div class="relative container mx-auto px-4 sm:px-6 py-3 sm:py-4 flex justify-between items-center">
            
            <!-- Logo con laser line -->
            <a href="#" class="relative group">
                <img src="assets/media/Logo-Banner.png" alt="Cybertec" class="h-10 sm:h-12 md:h-16 object-contain group-hover:scale-[1.03] transition-transform duration-300 drop-shadow-[0_0_8px_rgba(27,146,208,0.3)] group-hover:drop-shadow-[0_0_14px_rgba(27,146,208,0.5)]">
                <!-- Laser line debajo del logo -->
                <div class="nav-laser-line w-full mt-1"></div>
            </a>
            
            <!-- Desktop Nav Links -->
            <div class="hidden md:flex items-center gap-8 text-base font-semibold tracking-wide text-slate-400">
                <a href="#inicio" class="nav-link hover:text-white transition-colors duration-200">Inicio</a>
                <a href="#servicios" class="nav-link hover:text-white transition-colors duration-200">Soluciones</a>
                <a href="#nosotros" class="nav-link hover:text-white transition-colors duration-200">Nosotros</a>
                <button onclick="document.getElementById('modalTrabaja').classList.remove('hidden')" class="nav-link hover:text-white transition-colors duration-200 cursor-pointer">Trabaja con nosotros</button>
                
                <!-- Accesos Directos (Iconos) -->
                <div class="flex items-center gap-4 pl-4 border-l border-white/10">
                    <a href="https://helpdesk.cybertecit.com" target="_blank" rel="noreferrer" class="relative group">
                        <img src="assets/icons/GLPII.png" alt="GLPI" class="h-8 w-8 object-contain opacity-70 hover:opacity-100 transition-opacity duration-200">
                        <span class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 bg-slate-800/95 text-white text-xs px-3 py-1 rounded whitespace-nowrap opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-200">GLPI - Soporte</span>
                    </a>
                    <a href="https://webmail.cybertec.com.co" target="_blank" rel="noreferrer" class="relative group">
                        <img src="assets/icons/Correo.png" alt="Correo" class="h-8 w-8 object-contain opacity-70 hover:opacity-100 transition-opacity duration-200">
                        <span class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 bg-slate-800/95 text-white text-xs px-3 py-1 rounded whitespace-nowrap opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-200">Correo Corporativo</span>
                    </a>
                    <a href="https://nextcloud.net.co" target="_blank" rel="noreferrer" class="relative group">
                        <img src="assets/icons/Nextcloudd.png" alt="Nextcloud" class="h-8 w-8 object-contain opacity-70 hover:opacity-100 transition-opacity duration-200">
                        <span class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 bg-slate-800/95 text-white text-xs px-3 py-1 rounded whitespace-nowrap opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-200">Nextcloud - Nube</span>
                    </a>
                </div>
                
                <a href="#contacto" class="relative px-7 py-3 rounded-full text-base font-bold text-[rgb(27,146,208)] border border-[rgb(27,146,208)]/30 overflow-hidden group/btn transition-all duration-300 hover:text-white hover:border-[rgb(27,146,208)]" style="background: rgba(27,146,208,0.08);">
                    <span class="absolute inset-0 bg-[rgb(27,146,208)] scale-x-0 group-hover/btn:scale-x-100 origin-left transition-transform duration-300 rounded-full"></span>
                    <span class="relative">Contactar</span>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden relative flex flex-col gap-1.5 p-2 group/ham" id="mobile-menu-btn" aria-label="Menu">
                <span class="w-6 h-0.5 bg-slate-400 group-hover/ham:bg-[rgb(27,146,208)] transition-all duration-300 group-hover/ham:w-7"></span>
                <span class="w-4 h-0.5 bg-[rgb(27,146,208)] transition-all duration-300 group-hover/ham:w-7"></span>
                <span class="w-6 h-0.5 bg-slate-400 group-hover/ham:bg-[rgb(27,146,208)] transition-all duration-300 group-hover/ham:w-7"></span>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="hidden md:hidden" id="mobile-menu">
            <div class="border-t border-white/5 bg-slate-950/90 backdrop-blur-xl px-6 py-6 flex flex-col gap-5 text-sm font-medium text-slate-400">
                <a href="#inicio" class="hover:text-white hover:pl-2 transition-all duration-200"><i class="bi bi-house-fill text-[rgb(27,146,208)] mr-2"></i>Inicio</a>
                <a href="#servicios" class="hover:text-white hover:pl-2 transition-all duration-200"><i class="bi bi-grid-fill text-[rgb(27,146,208)] mr-2"></i>Soluciones</a>
                <a href="#nosotros" class="hover:text-white hover:pl-2 transition-all duration-200"><i class="bi bi-people-fill text-[rgb(27,146,208)] mr-2"></i>Nosotros</a>
                <button onclick="document.getElementById('modalTrabaja').classList.remove('hidden')" class="hover:text-white hover:pl-2 transition-all duration-200"><i class="bi bi-envelope-fill text-[rgb(27,146,208)] mr-2"></i>Trabaja con nosotros</button>
                
                <!-- Accesos Directos Móvil -->
                <div class="flex items-center gap-4 pt-3 mt-3 border-t border-white/10">
                    <a href="https://glpi.cybertec.com.co" target="_blank" rel="noreferrer" class="relative group">
                        <img src="assets/icons/glpi.png" alt="GLPI" class="h-8 w-8 object-contain opacity-70 hover:opacity-100 transition-opacity duration-200">
                        <span class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 bg-slate-800/95 text-white text-xs px-3 py-1 rounded whitespace-nowrap opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-200">GLPI - Soporte</span>
                    </a>
                    <a href="https://mail.cybertec.com.co" target="_blank" rel="noreferrer" class="relative group">
                        <img src="assets/icons/mail.svg" alt="Correo" class="h-8 w-8 object-contain opacity-70 hover:opacity-100 transition-opacity duration-200">
                        <span class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 bg-slate-800/95 text-white text-xs px-3 py-1 rounded whitespace-nowrap opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-200">Correo Corporativo</span>
                    </a>
                    <a href="https://nube.cybertec.com.co" target="_blank" rel="noreferrer" class="relative group">
                        <img src="assets/icons/nextcloud.png" alt="Nextcloud" class="h-8 w-8 object-contain opacity-70 hover:opacity-100 transition-opacity duration-200">
                        <span class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 bg-slate-800/95 text-white text-xs px-3 py-1 rounded whitespace-nowrap opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-200">Nextcloud - Nube</span>
                    </a>
                </div>
                
                <a href="#contacto" class="mt-2 text-center py-3 rounded-xl bg-[rgb(27,146,208)]/10 border border-[rgb(27,146,208)]/30 text-[rgb(27,146,208)] font-bold hover:bg-[rgb(27,146,208)] hover:text-white transition-all duration-300">Contactar</a>
            </div>
        </div>
    </nav>

    <!-- Modal Trabaja con Nosotros -->
    <div id="modalTrabaja" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm transition-opacity duration-300">
        <div class="bg-slate-900 border border-slate-700 rounded-2xl p-8 max-w-md w-full mx-4 shadow-2xl">
            <!-- Cerrar Modal -->
            <button onclick="document.getElementById('modalTrabaja').classList.add('hidden')" class="absolute top-4 right-4 text-slate-400 hover:text-white transition-colors">
                <i class="bi bi-x-lg text-xl"></i>
            </button>
            
            <!-- Contenido Modal -->
            <div class="text-center">
                <i class="bi bi-briefcase text-[rgb(27,146,208)] text-4xl mb-4 block"></i>
                <h2 class="text-2xl font-bold text-white mb-4">¿Quieres formar parte del equipo?</h2>
                
                <div class="bg-slate-800/50 border border-slate-700 rounded-lg p-6 mb-6 text-left">
                    <p class="text-slate-300 text-sm mb-4">
                        ¡Nos encantaría conocerte! Si te interesa formar parte de nuestro equipo en Cybertec, envíanos tu CV al siguiente correo:
                    </p>
                    
                    <div class="bg-slate-900 border border-[rgb(27,146,208)]/30 rounded-lg p-4 mb-4">
                        <p class="text-xs text-slate-400 mb-1">Correo para candidaturas:</p>
                        <a href="mailto:gestionhumana@cybertec.com.co" class="text-[rgb(27,146,208)] font-bold text-lg hover:text-white transition-colors break-all">
                            gestionhumana@cybertec.com.co
                        </a>
                    </div>
                    
                    <p class="text-slate-300 text-sm">
                        En el asunto incluye la posición de interés y adjunta tu CV en formato PDF o Word.
                    </p>
                </div>
                
                <div class="space-y-3">
                    <a href="mailto:gestionhumana@cybertec.com.co?subject=Candidatura%20Cybertec" class="inline-block w-full py-3 px-4 bg-[rgb(27,146,208)] text-white font-bold rounded-lg hover:bg-[rgb(27,146,208)]/80 transition-colors duration-200">
                        <i class="bi bi-envelope mr-2"></i>Enviar Candidatura
                    </a>
                    <button onclick="document.getElementById('modalTrabaja').classList.add('hidden')" class="w-full py-3 px-4 bg-slate-800 text-slate-300 font-bold rounded-lg hover:bg-slate-700 transition-colors duration-200">
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
        // Nav scroll effect
        window.addEventListener('scroll', function() {
            const nav = document.getElementById('main-nav');
            if (window.scrollY > 40) {
                nav.querySelector('.absolute').style.background = 'rgba(2,6,23,0.92)';
            } else {
                nav.querySelector('.absolute').style.background = '';
            }
        });
        // Cerrar modal al hacer clic fuera de él
        document.getElementById('modalTrabaja').addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.add('hidden');
            }
        });
    </script>
</body>
</html>