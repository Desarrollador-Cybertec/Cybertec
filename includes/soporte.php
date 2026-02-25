<?php
/**
 * Seccion Soporte y Gestion TI
 * Support & Management (Command Center Style)
 */
?>

<!-- Support & Management -->
<section class="py-16 lg:py-20 bg-slate-950 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-5"></div>
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-[rgb(27,146,208)]/50 to-transparent"></div>
    
    <div class="container mx-auto px-4 sm:px-6 relative z-10">
        
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row items-start md:items-end justify-between mb-10 sm:mb-14 gap-4 sm:gap-6 border-b border-slate-800 pb-6 sm:pb-8">
            <div>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-display font-bold text-white mb-2" data-aos="fade-up">Soporte Técnico & <span class="text-[rgb(27,146,208)]">Gestión TIC</span></h2>
                <p class="text-slate-400 text-base sm:text-lg" data-aos="fade-up" data-aos-delay="100">Centro de Operaciones para la continuidad de su negocio.</p>
            </div>
            <div class="flex items-center gap-4 bg-slate-900/50 px-6 py-3 rounded-full border border-slate-800 backdrop-blur-sm">
                <span class="relative flex h-3 w-3">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                </span>
                <span class="text-green-500 font-mono text-sm tracking-wider">SYSTEMS_ONLINE</span>
            </div>
        </div>

        <!-- Bento Grid Layout for Support Services -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-5">
            
            <!-- Large Card: Service Desk -->
            <div class="md:col-span-2 bg-slate-900/60 border border-slate-800 rounded-2xl sm:rounded-3xl p-5 sm:p-8 hover:border-[rgb(27,146,208)]/30 transition-all group relative overflow-hidden" data-aos="fade-right">
                <div class="absolute inset-0 bg-blue-500/5 group-hover:bg-blue-500/10 transition-colors"></div>
                <div class="relative z-10">
                    <div class="flex items-center gap-3 sm:gap-4 mb-5 sm:mb-6">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-blue-600 text-white flex items-center justify-center text-lg sm:text-xl shadow-lg shadow-blue-500/20">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-white">Service Desk Integral</h3>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 sm:gap-8">
                        <div>
                            <h4 class="text-blue-400 font-bold mb-3 text-sm uppercase tracking-wider">Soporte Presencial</h4>
                            <ul class="space-y-2 text-slate-400 text-sm">
                                <li class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)]"></i> Atención a equipos de cómputo y periféricos</li>
                                <li class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)]"></i> Gestión de incidentes, requerimientos y problemas TI</li>
                                <li class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-[rgb(27,146,208)]"></i> Registro y trazabilidad de tickets</li>
                            </ul>
                        </div>
                        <div class="sm:border-l border-slate-800 sm:pl-8">
                            <h4 class="text-blue-400 font-bold mb-3 text-sm uppercase tracking-wider">Soporte Remoto</h4>
                            <ul class="space-y-2 text-slate-400 text-sm">
                                <li class="flex items-center gap-2"><i class="bi bi-wifi-2 text-[rgb(27,146,208)]"></i> Soporte telefónico y atención remota</li>
                                <li class="flex items-center gap-2"><i class="bi bi-clock-fill text-[rgb(27,146,208)]"></i> Gestión mediante plataformas de tickets 24/7</li>
                                <li class="flex items-center gap-2"><i class="bi bi-graph-up text-[rgb(27,146,208)]"></i> Cumplimiento de ANS establecidos</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tall Card: Cloud & Backup -->
            <div class="md:row-span-2 bg-gradient-to-b from-slate-900 to-slate-950 border border-slate-800 rounded-2xl sm:rounded-3xl p-5 sm:p-8 hover:border-indigo-500/30 transition-all group" data-aos="fade-left" data-aos-delay="100">
                <div class="w-12 h-12 rounded-xl bg-indigo-600 text-white flex items-center justify-center text-xl shadow-lg shadow-indigo-500/20 mb-6">
                    <i class="bi bi-cloud-upload"></i>
                </div>
                <h3 class="text-2xl font-bold text-white mb-2">Soluciones Cloud & Servicios Digitales</h3>
                <p class="text-slate-400 text-sm mb-6">Infraestructura digital elástica y segura.</p>
                
                <div class="space-y-6">
                    <div class="bg-slate-800/50 p-4 rounded-xl border border-slate-700/50">
                        <h4 class="text-indigo-400 font-bold text-sm mb-2">Hosting, Dominios & Correos</h4>
                        <p class="text-slate-400 text-xs">Hosting web de alta disponibilidad, registro de dominios (.com, .co, .net) y correos corporativos personalizados con soporte 24/7.</p>
                    </div>
                    <div class="bg-slate-800/50 p-4 rounded-xl border border-slate-700/50">
                        <h4 class="text-indigo-400 font-bold text-sm mb-2">Backups & Recuperación</h4>
                        <p class="text-slate-400 text-xs">Copias de seguridad en nube y físicas (Nextcloud). Recuperación ante desastres para aplicaciones críticas.</p>
                    </div>
                    <div class="bg-slate-800/50 p-4 rounded-xl border border-slate-700/50">
                        <h4 class="text-indigo-400 font-bold text-sm mb-2">Licenciamiento de Software</h4>
                        <p class="text-slate-400 text-xs">Suministro de licencias: sistemas operativos, software ofimático y aplicaciones corporativas.</p>
                    </div>
                </div>
            </div>

            <!-- Medium Card: Outsourcing -->
            <div class="md:col-span-2 bg-slate-900/60 border border-slate-800 rounded-2xl sm:rounded-3xl p-5 sm:p-8 hover:border-[rgb(27,146,208)]/30 transition-all group flex flex-col md:flex-row items-center gap-6 sm:gap-8" data-aos="fade-up" data-aos-delay="150">
                <div class="flex-1">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-10 h-10 rounded-lg bg-[rgb(27,146,208)]/20 text-[rgb(27,146,208)] flex items-center justify-center text-lg border border-[rgb(27,146,208)]/30">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white">Outsourcing TI</h3>
                    </div>
                    <p class="text-slate-400 text-sm mb-4">Personal técnico especializado para su operación. Optimizamos sus recursos tecnológicos.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full bg-slate-800 text-slate-300 text-xs border border-slate-700">Impresión empresarial</span>
                        <span class="px-3 py-1 rounded-full bg-slate-800 text-slate-300 text-xs border border-slate-700">Tóners y repuestos</span>
                        <span class="px-3 py-1 rounded-full bg-slate-800 text-slate-300 text-xs border border-slate-700">Equipos de red</span>
                        <span class="px-3 py-1 rounded-full bg-slate-800 text-slate-300 text-xs border border-slate-700">Firewalls</span>
                    </div>
                </div>
                <div class="w-full md:w-1/3">
                    <div class="bg-slate-950 rounded-xl p-4 border border-slate-800 text-center">
                        <span class="block text-4xl font-bold text-white mb-1">20%</span>
                        <span class="text-xs text-slate-500 uppercase tracking-widest">Ahorro en Costos</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Software Dev Banner -->
        <div class="mt-6 bg-gradient-to-r from-blue-900/80 to-[rgb(24,29,94)]/80 rounded-3xl p-1 p-[1px]" data-aos="zoom-in" data-aos-delay="200">
            <div class="bg-slate-950 rounded-[22px] px-5 sm:px-8 py-8 sm:py-10 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-[rgb(27,146,208)]/20 rounded-full blur-3xl -mr-16 -mt-16"></div>
                
                <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
                    <div>
                        <h3 class="text-xl sm:text-2xl md:text-3xl font-bold text-white mb-2">Desarrollo de Software a la Medida</h3>
                        <p class="text-slate-300 text-sm sm:text-base max-w-xl">Aplicaciones web y móviles, integración entre sistemas empresariales y automatización de procesos. Transformación digital real.</p>
                    </div>
                    <a href="#contacto" class="group flex items-center gap-3 px-6 py-3 bg-white text-slate-900 rounded-xl font-bold hover:bg-blue-50 transition-all">
                        <span>Iniciar Proyecto</span>
                        <i class="bi bi-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
