<?php
/**
 * Hub de Soluciones — Problema-primero, impulsa a landings
 */
?>

<!-- Soluciones -->
<section id="soluciones" class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
    <div class="absolute inset-0 cyber-grid opacity-5"></div>

    <div class="container mx-auto px-4 sm:px-6 relative z-10 max-w-6xl">

        <div class="text-center mb-6 lg:mb-8" data-aos="fade-up">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-display font-bold text-white mb-3">
                Soluciones diseñadas para empresas que <span class="text-neon">no pueden permitirse fallar.</span>
            </h2>
        </div>

        <!-- 5 problem-first cards — grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-5">

            <!-- 1 Seguridad Física -->
            <a href="seguridad-fisica/"
               class="group relative rounded-2xl bg-slate-900/80 border border-slate-800 hover:border-violet-500/50 p-5 sm:p-6 transition-all duration-300 glass-card-hover overflow-hidden" data-aos="fade-up" data-aos-delay="0">
                <div class="absolute top-0 right-0 w-32 h-32 bg-violet-500/10 rounded-full blur-[60px] group-hover:bg-violet-500/25 transition-all"></div>
                <p class="text-red-400 text-xs font-bold uppercase tracking-wider mb-3">
                    <i class="bi bi-exclamation-triangle-fill mr-1"></i> Problema
                </p>
                <p class="text-slate-300 text-sm mb-4">Tus <span class="text-white font-semibold">instalaciones están desprotegidas</span>. Sin cámaras, sin control de acceso, sin alarmas. Un intruso entra y no te enteras.</p>
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 rounded-lg bg-violet-500/10 border border-violet-500/20 flex items-center justify-center text-violet-400 flex-shrink-0 group-hover:scale-110 transition-transform">
                        <i class="bi bi-camera-video-fill text-lg"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-display font-bold text-white">Seguridad Física</h3>
                </div>
                <div class="flex flex-wrap gap-1.5 mb-4">
                    <span class="px-2 py-0.5 text-[10px] rounded-full bg-slate-800 text-slate-400 border border-slate-700">CCTV inteligente</span>
                    <span class="px-2 py-0.5 text-[10px] rounded-full bg-slate-800 text-slate-400 border border-slate-700">Control de acceso biométrico</span>
                    <span class="px-2 py-0.5 text-[10px] rounded-full bg-slate-800 text-slate-400 border border-slate-700">Alarmas digitales</span>
                </div>
                <span class="inline-flex items-center gap-1.5 text-violet-400 text-sm font-bold group-hover:gap-3 transition-all">
                    Cotizar seguridad física <i class="bi bi-arrow-right"></i>
                </span>
            </a>

            <!-- 2 Seguridad Digital -->
            <a href="seguridad-digital/"
               class="group relative rounded-2xl bg-slate-900/80 border border-slate-800 hover:border-[rgb(27,146,208)]/50 p-5 sm:p-6 transition-all duration-300 glass-card-hover overflow-hidden" data-aos="fade-up" data-aos-delay="80">
                <div class="absolute top-0 right-0 w-32 h-32 bg-[rgb(27,146,208)]/10 rounded-full blur-[60px] group-hover:bg-[rgb(27,146,208)]/25 transition-all"></div>
                <p class="text-red-400 text-xs font-bold uppercase tracking-wider mb-3">
                    <i class="bi bi-exclamation-triangle-fill mr-1"></i> Problema
                </p>
                <p class="text-slate-300 text-sm mb-4">Un <span class="text-white font-semibold">ransomware puede cifrar toda tu información</span> en minutos. Sin firewall ni antivirus, no hay forma de recuperarla.</p>
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 rounded-lg bg-[rgb(27,146,208)]/10 border border-[rgb(27,146,208)]/20 flex items-center justify-center text-[rgb(27,146,208)] flex-shrink-0 group-hover:scale-110 transition-transform">
                        <i class="bi bi-shield-lock-fill text-lg"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-display font-bold text-white">Seguridad Digital</h3>
                </div>
                <div class="flex flex-wrap gap-1.5 mb-4">
                    <span class="px-2 py-0.5 text-[10px] rounded-full bg-slate-800 text-slate-400 border border-slate-700">Firewall empresarial</span>
                    <span class="px-2 py-0.5 text-[10px] rounded-full bg-slate-800 text-slate-400 border border-slate-700">Antivirus corporativo</span>
                    <span class="px-2 py-0.5 text-[10px] rounded-full bg-slate-800 text-slate-400 border border-slate-700">ISO 27000</span>
                </div>
                <span class="inline-flex items-center gap-1.5 text-[rgb(27,146,208)] text-sm font-bold group-hover:gap-3 transition-all">
                    Evaluación de seguridad gratuita <i class="bi bi-arrow-right"></i>
                </span>
            </a>

            <!-- 3 Soporte TI -->
            <a href="soporte-ti/"
               class="group relative rounded-2xl bg-slate-900/80 border border-slate-800 hover:border-emerald-500/50 p-5 sm:p-6 transition-all duration-300 glass-card-hover overflow-hidden" data-aos="fade-up" data-aos-delay="160">
                <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/10 rounded-full blur-[60px] group-hover:bg-emerald-500/25 transition-all"></div>
                <p class="text-red-400 text-xs font-bold uppercase tracking-wider mb-3">
                    <i class="bi bi-exclamation-triangle-fill mr-1"></i> Problema
                </p>
                <p class="text-slate-300 text-sm mb-4">Un equipo caído <span class="text-white font-semibold">paraliza toda tu operación</span>. Sin soporte técnico confiable, cada falla cuesta horas de productividad.</p>
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 rounded-lg bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 flex-shrink-0 group-hover:scale-110 transition-transform">
                        <i class="bi bi-headset text-lg"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-display font-bold text-white">Soporte TI y Service Desk</h3>
                </div>
                <div class="flex flex-wrap gap-1.5 mb-4">
                    <span class="px-2 py-0.5 text-[10px] rounded-full bg-slate-800 text-slate-400 border border-slate-700">Service desk presencial</span>
                    <span class="px-2 py-0.5 text-[10px] rounded-full bg-slate-800 text-slate-400 border border-slate-700">Soporte remoto</span>
                    <span class="px-2 py-0.5 text-[10px] rounded-full bg-slate-800 text-slate-400 border border-slate-700">Outsourcing TI</span>
                </div>
                <span class="inline-flex items-center gap-1.5 text-emerald-400 text-sm font-bold group-hover:gap-3 transition-all">
                    Contratar soporte TI <i class="bi bi-arrow-right"></i>
                </span>
            </a>

            <!-- 4 Soluciones Cloud -->
            <a href="soluciones-cloud/"
               class="group relative rounded-2xl bg-slate-900/80 border border-slate-800 hover:border-amber-500/50 p-5 sm:p-6 transition-all duration-300 glass-card-hover overflow-hidden" data-aos="fade-up" data-aos-delay="240">
                <div class="absolute top-0 right-0 w-32 h-32 bg-amber-500/10 rounded-full blur-[60px] group-hover:bg-amber-500/25 transition-all"></div>
                <p class="text-red-400 text-xs font-bold uppercase tracking-wider mb-3">
                    <i class="bi bi-exclamation-triangle-fill mr-1"></i> Problema
                </p>
                <p class="text-slate-300 text-sm mb-4">Si tu servidor falla, <span class="text-white font-semibold">¿puedes recuperar toda tu información?</span> Sin backups ni hosting confiable, un fallo destruye años de datos.</p>
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 rounded-lg bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 flex-shrink-0 group-hover:scale-110 transition-transform">
                        <i class="bi bi-cloud-fill text-lg"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-display font-bold text-white">Soluciones Cloud y Software</h3>
                </div>
                <div class="flex flex-wrap gap-1.5 mb-4">
                    <span class="px-2 py-0.5 text-[10px] rounded-full bg-slate-800 text-slate-400 border border-slate-700">Hosting y correo</span>
                    <span class="px-2 py-0.5 text-[10px] rounded-full bg-slate-800 text-slate-400 border border-slate-700">Backups en nube</span>
                    <span class="px-2 py-0.5 text-[10px] rounded-full bg-slate-800 text-slate-400 border border-slate-700">Desarrollo a medida</span>
                </div>
                <span class="inline-flex items-center gap-1.5 text-amber-400 text-sm font-bold group-hover:gap-3 transition-all">
                    Cotizar solución cloud <i class="bi bi-arrow-right"></i>
                </span>
            </a>

            <!-- 5 Infraestructura — full width -->
            <a href="infraestructura/"
               class="lg:col-span-2 group relative rounded-2xl bg-slate-900/80 border border-slate-800 hover:border-cyan-500/50 p-5 sm:p-6 transition-all duration-300 glass-card-hover overflow-hidden" data-aos="fade-up" data-aos-delay="320">
                <div class="absolute top-0 right-0 w-32 h-32 bg-cyan-500/10 rounded-full blur-[60px] group-hover:bg-cyan-500/25 transition-all"></div>
                <div class="lg:flex lg:items-center lg:gap-8">
                    <div class="flex-1">
                        <p class="text-red-400 text-xs font-bold uppercase tracking-wider mb-3">
                            <i class="bi bi-exclamation-triangle-fill mr-1"></i> Problema
                        </p>
                        <p class="text-slate-300 text-sm mb-4">Tu red es <span class="text-white font-semibold">lenta, inestable y obsoleta</span>. Cableado deteriorado, WiFi que se cae y telefonía sin funcionalidades frena a todo tu equipo.</p>
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-lg bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i class="bi bi-hdd-network-fill text-lg"></i>
                            </div>
                            <h3 class="text-base sm:text-lg font-display font-bold text-white">Infraestructura Tecnológica</h3>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex flex-wrap gap-1.5 mb-4">
                            <span class="px-2 py-0.5 text-[10px] rounded-full bg-slate-800 text-slate-400 border border-slate-700">Telefonía IP</span>
                            <span class="px-2 py-0.5 text-[10px] rounded-full bg-slate-800 text-slate-400 border border-slate-700">Redes LAN/WAN</span>
                            <span class="px-2 py-0.5 text-[10px] rounded-full bg-slate-800 text-slate-400 border border-slate-700">Cableado estructurado</span>
                            <span class="px-2 py-0.5 text-[10px] rounded-full bg-slate-800 text-slate-400 border border-slate-700">Servidores y UPS</span>
                        </div>
                        <span class="inline-flex items-center gap-1.5 text-cyan-400 text-sm font-bold group-hover:gap-3 transition-all">
                            Cotizar infraestructura <i class="bi bi-arrow-right"></i>
                        </span>
                    </div>
                </div>
            </a>
        </div>

        <!-- Micro-CTA -->
        <div class="text-center mt-8 lg:mt-10" data-aos="fade-up" data-aos-delay="100">
            <p class="text-slate-500 text-xs mb-3">¿No sabes qué necesitas?</p>
            <a href="#diagnostico" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-[rgb(27,146,208)]/10 border border-[rgb(27,146,208)]/30 text-[rgb(27,146,208)] font-bold text-sm hover:bg-[rgb(27,146,208)] hover:text-white transition-all duration-300">
                <i class="bi bi-clipboard-data"></i> Solicitar diagnóstico gratuito
            </a>
        </div>
    </div>
</section>
