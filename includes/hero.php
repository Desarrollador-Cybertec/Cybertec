<?php
/**
 * Hero — Impacto inmediato, miedo racional, urgencia
 */
?>

<!-- Hero -->
<header id="inicio" class="relative min-h-[90vh] flex items-center justify-center pt-20 pb-10 overflow-hidden">
    <div class="absolute inset-0 cyber-grid opacity-20 animate-grid-move"></div>
    <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-red-500/8 rounded-full blur-[140px] -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-[rgb(27,146,208)]/10 rounded-full blur-[120px] translate-y-1/2 -translate-x-1/2"></div>

    <div class="container mx-auto px-4 sm:px-6 relative z-10 text-center flex flex-col items-center">

        <!-- Logo -->
        <div class="relative w-full max-w-sm md:max-w-lg lg:max-w-xl mb-6" data-aos="fade-up">
            <div class="hero-laser-sweep"></div>
            <img src="assets/media/hero-logo.png" alt="Cybertec" class="w-full drop-shadow-[0_0_30px_rgba(27,146,208,0.25)]">
            <div class="hero-laser-underline mt-1.5"></div>
        </div>

        <!-- Headline -->
        <h1 class="text-xl sm:text-3xl md:text-4xl lg:text-5xl font-display font-bold text-white max-w-4xl mx-auto mb-3 sm:mb-5 leading-tight" data-aos="fade-up" data-aos-delay="100">
            Un ataque informático puede detener tu empresa <span class="text-red-400">en menos de 10 minutos.</span>
        </h1>

        <!-- Subheadline -->
        <p class="text-xs sm:text-base md:text-lg text-slate-400 max-w-2xl mx-auto mb-3 font-light leading-relaxed" data-aos="fade-up" data-aos-delay="200">
            Cada día cientos de empresas pierden información, dinero y operaciones por no proteger su infraestructura tecnológica.
        </p>
        <p class="text-sm sm:text-base md:text-lg text-[rgb(27,146,208)] font-semibold max-w-2xl mx-auto mb-6 sm:mb-8" data-aos="fade-up" data-aos-delay="250">
            Cybertec protege tu empresa antes de que ocurra.
        </p>

        <!-- CTAs -->
        <div class="flex flex-col sm:flex-row justify-center gap-3 sm:gap-4 w-full sm:w-auto px-2 sm:px-0 mb-6" data-aos="zoom-in" data-aos-delay="300">
            <a href="#diagnostico" class="group relative px-6 py-3 sm:py-3.5 rounded-xl bg-[rgb(27,146,208)] text-slate-900 font-bold overflow-hidden transition-all hover:scale-105 text-center text-sm">
                <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-transparent via-white/30 to-transparent -translate-x-full group-hover:animate-[shimmer_1.5s_infinite]"></div>
                <i class="bi bi-shield-exclamation mr-1"></i> Solicitar diagnóstico tecnológico
            </a>
            <a href="#riesgo" class="inline-flex items-center justify-center gap-2 px-6 py-3 sm:py-3.5 rounded-xl bg-red-500/10 border border-red-500/30 text-red-400 font-bold hover:bg-red-500 hover:text-white transition-all text-center text-sm">
                <i class="bi bi-exclamation-triangle"></i> Evaluar vulnerabilidades ahora
            </a>
        </div>

        <!-- Stat de impacto -->
        <div class="bg-slate-900/60 border border-red-500/20 rounded-xl px-5 py-3 mb-6 max-w-lg" data-aos="fade-up" data-aos-delay="350">
            <p class="text-red-400/90 text-xs sm:text-sm font-medium">
                <i class="bi bi-graph-down-arrow mr-1"></i> El 60% de las empresas que sufren un ataque de ransomware <span class="font-bold text-red-400">cierran en menos de 6 meses.</span>
            </p>
        </div>

        <!-- Trust row -->
        <div class="flex flex-wrap justify-center gap-x-5 gap-y-2 text-slate-500 text-[10px] sm:text-xs uppercase tracking-wider font-semibold" data-aos="fade-up" data-aos-delay="400">
            <span><i class="bi bi-patch-check-fill text-[rgb(27,146,208)] mr-1"></i>+10 años protegiendo empresas</span>
            <span><i class="bi bi-patch-check-fill text-[rgb(27,146,208)] mr-1"></i>+500 implementaciones</span>
            <span><i class="bi bi-patch-check-fill text-[rgb(27,146,208)] mr-1"></i>Especialistas en seguridad</span>
            <span><i class="bi bi-patch-check-fill text-[rgb(27,146,208)] mr-1"></i>Soporte técnico 24/7</span>
        </div>
    </div>
</header>
