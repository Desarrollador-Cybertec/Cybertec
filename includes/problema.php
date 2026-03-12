<?php
/**
 * Sección Impacto + Problemas Críticos + Solución
 * Dolor real → checklist de riesgo → solución Cybertec
 */
?>

<!-- Impacto + Problemas + Solución -->
<section id="riesgo" class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-red-500/5 rounded-full blur-[150px]"></div>

    <div class="container mx-auto px-4 sm:px-6 relative z-10 max-w-5xl">

        <!-- Impacto -->
        <div class="text-center mb-6 lg:mb-8" data-aos="fade-up">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-display font-bold text-white mb-3">
                Esto ya le está pasando a empresas <span class="text-red-400">como la tuya.</span>
            </h2>
        </div>

        <!-- Datos de impacto grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4 mb-6" data-aos="fade-up" data-aos-delay="50">
            <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-900/60 border border-red-500/15 hover:border-red-500/30 transition-colors">
                <i class="bi bi-exclamation-diamond-fill text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                <p class="text-slate-300 text-sm">Empresas pierden <span class="text-white font-semibold">información crítica</span> por ataques de ransomware</p>
            </div>
            <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-900/60 border border-red-500/15 hover:border-red-500/30 transition-colors">
                <i class="bi bi-exclamation-diamond-fill text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                <p class="text-slate-300 text-sm">Redes empresariales <span class="text-white font-semibold">colapsan</span> por infraestructura mal diseñada</p>
            </div>
            <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-900/60 border border-red-500/15 hover:border-red-500/30 transition-colors">
                <i class="bi bi-exclamation-diamond-fill text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                <p class="text-slate-300 text-sm">Sistemas de seguridad <span class="text-white font-semibold">obsoletos</span> permiten accesos no autorizados</p>
            </div>
            <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-900/60 border border-red-500/15 hover:border-red-500/30 transition-colors">
                <i class="bi bi-exclamation-diamond-fill text-red-400 text-lg mt-0.5 flex-shrink-0"></i>
                <p class="text-slate-300 text-sm">Servidores sin respaldo generan <span class="text-white font-semibold">pérdidas irreversibles</span> de datos</p>
            </div>
        </div>

        <!-- Impacto banner -->
        <div class="bg-gradient-to-r from-red-500/10 to-red-500/5 border border-red-500/20 rounded-xl p-3 sm:p-4 text-center mb-6 lg:mb-8" data-aos="fade-up" data-aos-delay="100">
            <p class="text-red-400 text-sm sm:text-base font-semibold">
                <i class="bi bi-lightning-charge-fill mr-1"></i> Una falla tecnológica puede detener completamente la operación de una empresa <span class="font-bold">durante días.</span>
            </p>
        </div>

        <!-- Checklist de riesgo -->
        <div class="bg-slate-900/70 border border-slate-800 rounded-2xl p-5 sm:p-6 mb-6 lg:mb-8" data-aos="fade-up" data-aos-delay="150">
            <h3 class="text-lg sm:text-xl font-display font-bold text-white mb-1 text-center">
                Si alguno de estos problemas ocurre en tu empresa,
            </h3>
            <p class="text-red-400 font-bold text-center mb-6 text-sm sm:text-base">tu operación está en riesgo.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 max-w-3xl mx-auto mb-6">
                <label class="risk-check flex items-center gap-3 p-3 rounded-lg bg-slate-950/50 border border-slate-800 hover:border-red-500/30 cursor-pointer transition-colors">
                    <input type="checkbox" class="accent-red-500 w-4 h-4 flex-shrink-0">
                    <span class="text-slate-300 text-xs sm:text-sm">No sabes si tu red tiene vulnerabilidades</span>
                </label>
                <label class="risk-check flex items-center gap-3 p-3 rounded-lg bg-slate-950/50 border border-slate-800 hover:border-red-500/30 cursor-pointer transition-colors">
                    <input type="checkbox" class="accent-red-500 w-4 h-4 flex-shrink-0">
                    <span class="text-slate-300 text-xs sm:text-sm">No tienes respaldo seguro de información</span>
                </label>
                <label class="risk-check flex items-center gap-3 p-3 rounded-lg bg-slate-950/50 border border-slate-800 hover:border-red-500/30 cursor-pointer transition-colors">
                    <input type="checkbox" class="accent-red-500 w-4 h-4 flex-shrink-0">
                    <span class="text-slate-300 text-xs sm:text-sm">Tus sistemas no están protegidos contra ransomware</span>
                </label>
                <label class="risk-check flex items-center gap-3 p-3 rounded-lg bg-slate-950/50 border border-slate-800 hover:border-red-500/30 cursor-pointer transition-colors">
                    <input type="checkbox" class="accent-red-500 w-4 h-4 flex-shrink-0">
                    <span class="text-slate-300 text-xs sm:text-sm">No tienes monitoreo de seguridad activo</span>
                </label>
                <label class="risk-check flex items-center gap-3 p-3 rounded-lg bg-slate-950/50 border border-slate-800 hover:border-red-500/30 cursor-pointer transition-colors sm:col-span-2 sm:max-w-sm sm:mx-auto">
                    <input type="checkbox" class="accent-red-500 w-4 h-4 flex-shrink-0">
                    <span class="text-slate-300 text-xs sm:text-sm">Tus cámaras no están integradas a tu seguridad digital</span>
                </label>
            </div>

            <!-- Dynamic result -->
            <div id="riskResult" class="hidden text-center">
                <div class="bg-red-500/10 border border-red-500/30 rounded-xl p-4 mb-4 max-w-md mx-auto">
                    <p class="text-red-400 font-bold text-sm" id="riskText"></p>
                </div>
            </div>

            <div class="text-center">
                <a href="#diagnostico" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-red-500/10 border border-red-500/30 text-red-400 font-bold text-sm hover:bg-red-500 hover:text-white transition-all duration-300">
                    <i class="bi bi-search"></i> Detectar vulnerabilidades
                </a>
            </div>
        </div>

        <!-- Solución Cybertec (compacta) -->
        <div class="text-center" data-aos="fade-up" data-aos-delay="200">
            <h3 class="text-xl sm:text-2xl lg:text-3xl font-display font-bold text-white mb-3">
                Cybertec protege la infraestructura tecnológica <span class="text-neon">de tu empresa.</span>
            </h3>
            <p class="text-slate-400 text-sm max-w-2xl mx-auto mb-6">
                Diseñamos sistemas tecnológicos que previenen ataques, fallas operativas y pérdidas de información.
            </p>
            <div class="flex flex-wrap justify-center gap-3 mb-6">
                <span class="px-3 py-1.5 rounded-full bg-[rgb(27,146,208)]/10 border border-[rgb(27,146,208)]/20 text-[rgb(27,146,208)] text-xs font-semibold"><i class="bi bi-shield-lock mr-1"></i>Ciberseguridad empresarial</span>
                <span class="px-3 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-semibold"><i class="bi bi-hdd-network mr-1"></i>Infraestructura TI segura</span>
                <span class="px-3 py-1.5 rounded-full bg-violet-500/10 border border-violet-500/20 text-violet-400 text-xs font-semibold"><i class="bi bi-camera-video mr-1"></i>Seguridad electrónica</span>
                <span class="px-3 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-400 text-xs font-semibold"><i class="bi bi-gear-wide mr-1"></i>Automatización tecnológica</span>
            </div>
            <a href="#soluciones" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-xl bg-[rgb(27,146,208)] text-slate-900 font-bold text-sm hover:scale-105 transition-all">
                Proteger mi empresa <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<script>
(function(){
    var checks = document.querySelectorAll('.risk-check input[type="checkbox"]');
    var resultDiv = document.getElementById('riskResult');
    var resultText = document.getElementById('riskText');

    checks.forEach(function(cb) {
        cb.addEventListener('change', function() {
            var checked = document.querySelectorAll('.risk-check input:checked').length;
            if (checked > 0) {
                resultDiv.classList.remove('hidden');
                if (checked <= 2) {
                    resultText.textContent = 'Tu empresa tiene vulnerabilidades que deben atenderse.';
                } else if (checked <= 4) {
                    resultText.textContent = '⚠ Tu empresa está en riesgo medio-alto. Necesitas actuar ahora.';
                } else {
                    resultText.textContent = '🚨 RIESGO CRÍTICO — Tu empresa es altamente vulnerable a un ataque.';
                }
            } else {
                resultDiv.classList.add('hidden');
            }
        });
    });
})();
</script>
