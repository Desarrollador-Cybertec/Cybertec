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
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-cyan-500/20 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-violet-600/20 rounded-full blur-[120px] translate-y-1/2 -translate-x-1/2"></div>

    <div class="container mx-auto px-6 relative z-10 text-center">
        
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-slate-800/50 border border-slate-700 text-cyan-400 text-xs font-bold uppercase tracking-widest mb-8 backdrop-blur animate-fade-up">
            <span class="w-2 h-2 rounded-full bg-cyan-500 animate-pulse"></span>
            System Secure Status: Active
        </div>

        <h1 class="text-5xl md:text-7xl lg:text-8xl font-display font-bold leading-tight mb-8 tracking-tight">
            CYBERTEC <br>
            <span class="text-neon relative">
                Seguridad en la que Confias
                <!-- Underline Decoration -->
                <svg class="absolute w-full h-3 -bottom-2 left-0 text-cyan-500 opacity-50" viewBox="0 0 100 10" preserveAspectRatio="none">
                    <path d="M0 5 Q 50 10 100 5" stroke="currentColor" stroke-width="2" fill="none" />
                </svg>
            </span>
        </h1>

        <p class="text-xl text-slate-400 max-w-2xl mx-auto mb-12 font-light leading-relaxed">
            Cybertec integra seguridad informática, infraestructura resiliente y soporte 24/7 para empresas que no pueden detenerse.
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-6">
            <a href="#servicios" class="group relative px-8 py-4 rounded-xl bg-cyan-500 text-slate-900 font-bold overflow-hidden transition-all hover:scale-105">
                <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-transparent via-white/30 to-transparent -translate-x-full group-hover:animate-[shimmer_1.5s_infinite]"></div>
                Explorar Soluciones
            </a>
            <a href="#contacto" class="px-8 py-4 rounded-xl bg-slate-900 border border-slate-700 text-white font-bold hover:bg-slate-800 hover:border-cyan-500/50 transition-all">
                Agendar Consultoría
            </a>
        </div>
    </div>
</header>
