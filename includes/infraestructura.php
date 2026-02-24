<?php
/**
 * Seccion Infraestructura
 * Infrastructure Technology (Redesigned)
 */
?>

<!-- Infrastructure Technology -->
<section class="py-24 bg-[#0B1120] relative overflow-hidden">
    <!-- Floating Elements Background -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-96 h-96 bg-orange-500/10 rounded-full blur-3xl animate-pulse" style="animation-duration: 4s;"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-6xl font-display font-bold text-white mb-6 tracking-tight">
                Infraestructura <span class="bg-gradient-to-r from-orange-400 to-amber-600 bg-clip-text text-transparent">Hiperconectada</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-orange-400 to-amber-600 mx-auto rounded-full mb-8"></div>
            <p class="text-slate-400 text-lg max-w-2xl mx-auto leading-relaxed">
                Construimos la autopista digital de su negocio. Desde el cableado físico hasta la gestión lógica de redes, garantizamos velocidad y estabilidad.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-stretch">
            
            <!-- Col 1: Visual Feature (Network Map concept) -->
            <div class="relative bg-slate-900/50 rounded-3xl border border-white/5 p-8 flex flex-col justify-center min-h-[500px] overflow-hidden group">
                <!-- Decor image -->
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1544197150-b99a580bb7a8?q=80&w=800')] bg-cover bg-center opacity-40 mix-blend-luminosity group-hover:scale-105 transition-transform duration-1000"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/80 to-transparent"></div>
                
                <div class="relative z-10 p-4">
                    <div class="w-16 h-16 rounded-2xl bg-orange-500 flex items-center justify-center text-3xl text-white mb-6 shadow-[0_0_30px_rgba(249,115,22,0.4)]">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3 class="text-3xl font-display font-bold text-white mb-4">Redes y Comunicaciones</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4 p-4 rounded-xl bg-white/5 border border-white/5 hover:bg-white/10 transition-colors backdrop-blur-sm">
                            <i class="fas fa-wifi text-orange-400 mt-1"></i>
                            <div>
                                <strong class="block text-white">Wireless Corporativo</strong>
                                <span class="text-slate-400 text-sm">Controladoras, Access Points y Portales Cautivos.</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-4 p-4 rounded-xl bg-white/5 border border-white/5 hover:bg-white/10 transition-colors backdrop-blur-sm">
                            <i class="fas fa-route text-orange-400 mt-1"></i>
                            <div>
                                <strong class="block text-white">Diseño LAN / WAN</strong>
                                <span class="text-slate-400 text-sm">Segmentación de redes y control de tráfico.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Col 2: Interactive Modules Grid -->
            <div class="grid gap-6 content-start">
                
                <!-- Module: Telefonía -->
                <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-orange-500/30 hover:bg-slate-800 transition-all group cursor-pointer">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-slate-950 border border-slate-800 flex items-center justify-center text-orange-400 group-hover:text-white group-hover:bg-orange-500 transition-colors">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <h4 class="text-xl font-bold text-white">Telefonía IP</h4>
                        </div>
                        <i class="fas fa-chevron-right text-slate-600 group-hover:text-orange-400 transition-transform group-hover:translate-x-1"></i>
                    </div>
                    <p class="text-slate-400 text-sm ml-16 mb-2">Centrales escalables con IVR, grabación y movilidad unificada.</p>
                </div>

                <!-- Module: Cableado -->
                <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-orange-500/30 hover:bg-slate-800 transition-all group cursor-pointer">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-slate-950 border border-slate-800 flex items-center justify-center text-amber-400 group-hover:text-white group-hover:bg-amber-500 transition-colors">
                                <i class="fas fa-bezier-curve"></i>
                            </div>
                            <h4 class="text-xl font-bold text-white">Cableado Estructurado</h4>
                        </div>
                        <i class="fas fa-chevron-right text-slate-600 group-hover:text-amber-400 transition-transform group-hover:translate-x-1"></i>
                    </div>
                    <p class="text-slate-400 text-sm ml-16 mb-2">Certificación de puntos de red y diseño de datacenters.</p>
                </div>

                <!-- Module: Energía -->
                <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-orange-500/30 hover:bg-slate-800 transition-all group cursor-pointer">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-slate-950 border border-slate-800 flex items-center justify-center text-yellow-400 group-hover:text-white group-hover:bg-yellow-500 transition-colors">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <h4 class="text-xl font-bold text-white">Energía Regulada</h4>
                        </div>
                        <i class="fas fa-chevron-right text-slate-600 group-hover:text-yellow-400 transition-transform group-hover:translate-x-1"></i>
                    </div>
                    <p class="text-slate-400 text-sm ml-16 mb-2">Sistemas UPS de respaldo y protección eléctrica.</p>
                </div>

                <!-- Module: Suministros -->
                <div class="bg-gradient-to-r from-slate-900 to-slate-800 border border-slate-700 rounded-2xl p-6 flex flex-col md:flex-row items-center gap-6 mt-2 relative overflow-hidden">
                    <div class="absolute right-0 top-0 opacity-10 text-9xl -mr-10 -mt-10 pointer-events-none transform rotate-12">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-lg font-bold text-white mb-1"><i class="fas fa-cart-plus text-orange-400 mr-2"></i> Supply Chain TI</h4>
                        <p class="text-slate-400 text-xs">Suministro corporativo de Servidores, PCs y Licenciamiento.</p>
                    </div>
                    <a href="#contacto" class="px-6 py-2 bg-white/10 hover:bg-white/20 text-white text-sm font-bold rounded-lg transition-colors backdrop-blur">
                        Solicitar Catálogo
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
