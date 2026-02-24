<?php
/**
 * Seccion Infraestructura
 * Infrastructure Technology (Redesigned)
 */
?>

<!-- Infrastructure Technology -->
<section class="py-24 bg-[#0B1120] relative overflow-hidden">
    <!-- Floating Elements Background -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-[rgb(27,146,208)]/10 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-96 h-96 bg-[rgb(24,29,94)]/10 rounded-full blur-3xl animate-pulse" style="animation-duration: 4s;"></div>

    <div class="container mx-auto px-4 sm:px-6 relative z-10">
        <div class="text-center mb-12 sm:mb-20">
            <h2 class="text-3xl sm:text-4xl md:text-6xl font-display font-bold text-white mb-4 sm:mb-6 tracking-tight" data-aos="fade-up">
                Infraestructura <span class="bg-gradient-to-r from-[rgb(27,146,208)] to-[rgb(43,47,54)] bg-clip-text text-transparent">Hiperconectada</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-[rgb(27,146,208)] to-cyan-400 mx-auto rounded-full mb-8"></div>
            <p class="text-slate-400 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
                Construimos la autopista digital de su negocio. Desde el cableado físico hasta la gestión lógica de redes, telefonía IP y equipamiento tecnológico.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 sm:gap-12 items-stretch">
            
            <!-- Col 1: Visual Feature (Network Map concept) -->
            <div class="relative bg-slate-900/50 rounded-2xl sm:rounded-3xl border border-white/5 p-5 sm:p-8 flex flex-col justify-center min-h-[350px] sm:min-h-[500px] overflow-hidden group" data-aos="fade-right">
                <!-- Decor image -->
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1544197150-b99a580bb7a8?q=80&w=800')] bg-cover bg-center opacity-40 mix-blend-luminosity group-hover:scale-105 transition-transform duration-1000"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/80 to-transparent"></div>
                
                <div class="relative z-10 p-2 sm:p-4">
                <div class="w-14 sm:w-16 h-14 sm:h-16 rounded-2xl bg-[rgb(27,146,208)] flex items-center justify-center text-2xl sm:text-3xl text-white mb-4 sm:mb-6 shadow-[0_0_30px_rgba(27,146,208,0.4)]">
                        <i class="bi bi-hdd-network"></i>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-display font-bold text-white mb-4">Redes y Comunicaciones</h3>
                    <ul class="space-y-3 sm:space-y-4">
                        <li class="flex items-start gap-3 sm:gap-4 p-3 sm:p-4 rounded-xl bg-white/5 border border-white/5 hover:bg-white/10 transition-colors backdrop-blur-sm">
                            <i class="bi bi-wifi text-[rgb(27,146,208)] mt-1"></i>
                            <div>
                                <strong class="block text-white">Wireless Corporativo</strong>
                                <span class="text-slate-400 text-sm">Controladoras, Access Points y Portales Cautivos.</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-3 sm:gap-4 p-3 sm:p-4 rounded-xl bg-white/5 border border-white/5 hover:bg-white/10 transition-colors backdrop-blur-sm">
                            <i class="bi bi-signpost-split text-[rgb(27,146,208)] mt-1"></i>
                            <div>
                                <strong class="block text-white">Diseño LAN / WAN / MAN</strong>
                                <span class="text-slate-400 text-sm">Segmentación de redes y enlaces de comunicaciones.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Col 2: Interactive Modules Grid -->
            <div class="grid gap-5 content-start" data-aos="fade-left">
                
                <!-- Module: Telefonía -->
                <div class="bg-slate-900 border border-slate-800 rounded-xl sm:rounded-2xl p-4 sm:p-6 hover:border-[rgb(27,146,208)]/30 hover:bg-slate-800 transition-all group cursor-pointer">
                    <div class="flex items-center justify-between mb-3 sm:mb-4">
                        <div class="flex items-center gap-3 sm:gap-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-slate-950 border border-slate-800 flex items-center justify-center text-[rgb(27,146,208)] group-hover:text-white group-hover:bg-[rgb(27,146,208)] transition-colors">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <h4 class="text-lg sm:text-xl font-bold text-white">Telefonía IP</h4>
                        </div>
                        <i class="bi bi-chevron-right text-slate-400 group-hover:text-[rgb(27,146,208)] transition-transform group-hover:translate-x-1"></i>
                    </div>
                    <p class="text-slate-400 text-sm ml-0 sm:ml-16 mb-2">Centrales escalables con IVR, grabación, extensiones y comunicaciones unificadas (chat, correo, voz).</p>
                </div>

                <!-- Module: Cableado -->
                <div class="bg-slate-900 border border-slate-800 rounded-xl sm:rounded-2xl p-4 sm:p-6 hover:border-[rgb(27,146,208)]/30 hover:bg-slate-800 transition-all group cursor-pointer">
                    <div class="flex items-center justify-between mb-3 sm:mb-4">
                        <div class="flex items-center gap-3 sm:gap-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-slate-950 border border-slate-800 flex items-center justify-center text-cyan-400 group-hover:text-white group-hover:bg-cyan-500 transition-colors">
                                <i class="bi bi-ethernet"></i>
                            </div>
                            <h4 class="text-lg sm:text-xl font-bold text-white">Cableado Estructurado</h4>
                        </div>
                        <i class="bi bi-chevron-right text-slate-400 group-hover:text-cyan-400 transition-transform group-hover:translate-x-1"></i>
                    </div>
                    <p class="text-slate-400 text-sm ml-0 sm:ml-16 mb-2">Diseño e instalación certificada de redes internas y externas. Energía regulada y no regulada.</p>
                </div>

                <!-- Module: Energía -->
                <div class="bg-slate-900 border border-slate-800 rounded-xl sm:rounded-2xl p-4 sm:p-6 hover:border-[rgb(27,146,208)]/30 hover:bg-slate-800 transition-all group cursor-pointer">
                    <div class="flex items-center justify-between mb-3 sm:mb-4">
                        <div class="flex items-center gap-3 sm:gap-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-slate-950 border border-slate-800 flex items-center justify-center text-indigo-400 group-hover:text-white group-hover:bg-indigo-500 transition-colors">
                                <i class="bi bi-lightning-fill"></i>
                            </div>
                            <h4 class="text-lg sm:text-xl font-bold text-white">Energía Regulada</h4>
                        </div>
                        <i class="bi bi-chevron-right text-slate-400 group-hover:text-indigo-400 transition-transform group-hover:translate-x-1"></i>
                    </div>
                    <p class="text-slate-400 text-sm ml-0 sm:ml-16 mb-2">Sistemas UPS de respaldo, protección eléctrica regulada y no regulada.</p>
                </div>

                <!-- Module: Suministros -->
                <div class="bg-gradient-to-r from-slate-900 to-slate-800 border border-slate-700 rounded-xl sm:rounded-2xl p-4 sm:p-6 flex flex-col md:flex-row items-center gap-4 sm:gap-6 mt-2 relative overflow-hidden">
                    <div class="absolute right-0 top-0 opacity-10 text-9xl -mr-10 -mt-10 pointer-events-none transform rotate-12">
                        <i class="bi bi-boxes"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-lg font-bold text-white mb-1"><i class="bi bi-cart-plus text-[rgb(27,146,208)] mr-2"></i> Equipamiento & Mantenimiento TI</h4>
                        <p class="text-slate-400 text-xs">Suministro de servidores, PCs, UPS y accesorios TI corporativos. Mantenimiento preventivo y correctivo.</p>
                    </div>
                    <a href="#contacto" class="px-6 py-2 bg-white/10 hover:bg-white/20 text-white text-sm font-bold rounded-lg transition-colors backdrop-blur">
                        Solicitar Catálogo
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
