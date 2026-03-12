<?php
/**
 * Sección Casos de Éxito (compacta)
 * 2 casos reales con problema → solución → resultado
 */
?>

<!-- Casos Reales -->
<section id="casos" class="relative py-14 lg:py-20 overflow-hidden border-t border-white/5">
    <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-[rgb(27,146,208)]/5 rounded-full blur-[150px]"></div>

    <div class="container mx-auto px-4 sm:px-6 relative z-10 max-w-5xl">

        <div class="text-center mb-10 lg:mb-12" data-aos="fade-up">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-display font-bold text-white mb-3">
                Empresas que ya protegen su operación <span class="text-neon">con Cybertec</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-5 mb-10" data-aos="fade-up" data-aos-delay="50">

            <!-- Caso 1: Industrial -->
            <div class="rounded-2xl bg-slate-900/80 border border-slate-800 hover:border-[rgb(27,146,208)]/30 p-5 sm:p-6 transition-all duration-300">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-xl bg-[rgb(27,146,208)]/10 flex items-center justify-center flex-shrink-0">
                        <i class="bi bi-building text-[rgb(27,146,208)] text-lg"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-bold text-sm">Empresa Industrial</h4>
                        <p class="text-slate-500 text-xs">Manufactura · Operación 24/7</p>
                    </div>
                </div>
                <div class="space-y-2 mb-4">
                    <div class="flex items-start gap-2">
                        <span class="text-red-400 text-xs font-bold mt-0.5 flex-shrink-0">PROBLEMA:</span>
                        <p class="text-slate-400 text-xs">Red inestable y servidores sin monitoreo exponían la operación a fallas constantes.</p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-[rgb(27,146,208)] text-xs font-bold mt-0.5 flex-shrink-0">SOLUCIÓN:</span>
                        <p class="text-slate-400 text-xs">Infraestructura segura + monitoreo TI continuo + firewall perimetral.</p>
                    </div>
                </div>
                <div class="flex items-center gap-2 px-3 py-2 rounded-lg bg-emerald-500/10 border border-emerald-500/20">
                    <i class="bi bi-shield-check text-emerald-400 text-sm"></i>
                    <span class="text-emerald-400 font-bold text-xs">0 incidentes de seguridad en 24 meses</span>
                </div>
            </div>

            <!-- Caso 2: Logística -->
            <div class="rounded-2xl bg-slate-900/80 border border-slate-800 hover:border-violet-500/30 p-5 sm:p-6 transition-all duration-300">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-xl bg-violet-500/10 flex items-center justify-center flex-shrink-0">
                        <i class="bi bi-truck text-violet-400 text-lg"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-bold text-sm">Empresa de Logística</h4>
                        <p class="text-slate-500 text-xs">Transporte · Múltiples sedes</p>
                    </div>
                </div>
                <div class="space-y-2 mb-4">
                    <div class="flex items-start gap-2">
                        <span class="text-red-400 text-xs font-bold mt-0.5 flex-shrink-0">PROBLEMA:</span>
                        <p class="text-slate-400 text-xs">Cámaras desactualizadas y accesos sin control permitían pérdidas recurrentes de mercancía.</p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="text-violet-400 text-xs font-bold mt-0.5 flex-shrink-0">SOLUCIÓN:</span>
                        <p class="text-slate-400 text-xs">CCTV inteligente + control de acceso biométrico + monitoreo remoto centralizado.</p>
                    </div>
                </div>
                <div class="flex items-center gap-2 px-3 py-2 rounded-lg bg-violet-500/10 border border-violet-500/20">
                    <i class="bi bi-camera-video text-violet-400 text-sm"></i>
                    <span class="text-violet-400 font-bold text-xs">Reducción del 85% en incidentes de seguridad</span>
                </div>
            </div>
        </div>

        <!-- Tech logos -->
        <div class="text-center" data-aos="fade-up" data-aos-delay="100">
            <p class="text-slate-500 text-[10px] font-bold uppercase tracking-widest mb-4">Tecnologías que implementamos</p>
            <div class="flex flex-wrap justify-center items-center gap-x-6 gap-y-4 sm:gap-x-10 opacity-40 grayscale hover:grayscale-0 hover:opacity-60 transition-all duration-500">
                <i class="fab fa-microsoft text-2xl sm:text-3xl hover:text-blue-500 transition-colors" title="Microsoft"></i>
                <img src="assets/icons/fortinet.png" alt="Fortinet" title="Fortinet" class="h-5 sm:h-7 w-auto object-contain hover:scale-110 hover:brightness-125 transition-all">
                <i class="fab fa-aws text-2xl sm:text-3xl hover:text-orange-500 transition-colors" title="AWS"></i>
                <img src="assets/icons/hikvision.png" alt="Hikvision" title="Hikvision" class="h-5 sm:h-7 w-auto object-contain hover:scale-110 hover:brightness-125 transition-all">
                <i class="fab fa-linux text-2xl sm:text-3xl hover:text-yellow-500 transition-colors" title="Linux"></i>
                <img src="assets/icons/mikrotik.png" alt="MikroTik" title="MikroTik" class="h-5 sm:h-7 w-auto object-contain hover:scale-110 hover:brightness-125 transition-all">
                <i class="fab fa-docker text-2xl sm:text-3xl hover:text-blue-400 transition-colors" title="Docker"></i>
            </div>
        </div>
    </div>
</section>
