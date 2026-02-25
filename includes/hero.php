<?php
/**
 * Seccion Hero
 * Banner principal con CTA (Call To Action)
 */
?>

<!-- Hero Section -->
<header id="inicio" class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0 cyber-grid opacity-20 animate-grid-move"></div>
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-[rgb(27,146,208)]/20 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-[rgb(24,29,94)]/20 rounded-full blur-[120px] translate-y-1/2 -translate-x-1/2"></div>

    <div class="container mx-auto px-4 sm:px-6 relative z-10 text-center flex flex-col items-center">
        
        <!-- Badge -->
        <br>
        <div class="inline-flex items-center gap-2 px-3 sm:px-4 py-1.5 rounded-full bg-slate-800/50 border border-slate-700 text-[rgb(27,146,208)] text-[10px] sm:text-xs font-bold uppercase tracking-widest mb-6 sm:mb-8 backdrop-blur" data-aos="fade-down">
            <span class="w-2 h-2 rounded-full bg-[rgb(27,146,208)] animate-pulse"></span>
            System Status: Online
        </div>

        <!-- Hero Logo con Slogan -->
        <div class="relative w-full max-w-lg md:max-w-2xl lg:max-w-3xl mb-3 sm:mb-4" data-aos="fade-up" data-aos-delay="150">
            <!-- Laser sweep sobre el logo -->
            <div class="hero-laser-sweep"></div>
            <img src="assets/media/hero-logo.png" alt="Cybertec - Seguridad en la que Confías" class="w-full drop-shadow-[0_0_40px_rgba(27,146,208,0.3)]">
            <!-- Línea laser debajo del logo hero -->
            <div class="hero-laser-underline mt-2"></div>
        </div>

        <p class="text-sm sm:text-lg md:text-xl text-slate-400 max-w-3xl md:max-w-4xl mx-auto mb-8 sm:mb-12 font-light leading-relaxed" data-aos="fade-up" data-aos-delay="300">
            En Cybertec creemos que las organizaciones merecen operar con total confianza y seguridad. Por eso transformamos la forma en que nuestros clientes protegen su información y gestionan su infraestructura tecnológica, ofreciéndoles soluciones integrales diseñadas para fortalecer su operación y garantizar continuidad en cada proceso.
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-4 sm:gap-6 w-full sm:w-auto px-2 sm:px-0" data-aos="zoom-in" data-aos-delay="450">
            <a href="#servicios" class="group relative px-6 sm:px-8 py-3.5 sm:py-4 rounded-xl bg-[rgb(27,146,208)] text-slate-900 font-bold overflow-hidden transition-all hover:scale-105 text-center">
                <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-transparent via-white/30 to-transparent -translate-x-full group-hover:animate-[shimmer_1.5s_infinite]"></div>
                Explorar Soluciones
            </a>
            <a href="#contacto" class="px-6 sm:px-8 py-3.5 sm:py-4 rounded-xl bg-slate-900 border border-slate-700 text-white font-bold hover:bg-slate-800 hover:border-[rgb(27,146,208)]/50 transition-all text-center">
                Agendar Consultoría
            </a>
        </div>
    </div>
</header>
