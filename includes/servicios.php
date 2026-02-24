<?php
/**
 * Seccion Servicios
 * Bento grid con los servicios principales
 */

// Incluir configuración de servicios
require_once __DIR__ . '/../config/servicios.php';
?>

<!-- Services Bento Grid -->
<section id="servicios" class="py-32 relative">
    <div class="container mx-auto px-6">
        <div class="text-center mb-20 max-w-3xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-display font-bold mb-6">Arquitectura Integral</h2>
            <p class="text-slate-400 text-lg">Soluciones diseñadas para escalar con su negocio, garantizando seguridad, velocidad y fiabilidad en cada capa.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 auto-rows-fr">
            <?php foreach ($servicios as $index => $s): ?>
            <div class="relative group rounded-3xl overflow-hidden glass-panel glass-card-hover <?php echo $s['span']; ?>">
                
                <!-- Background Image (Low Opacity) -->
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110 opacity-30 mix-blend-overlay" style="background-image: url('<?php echo $s['img']; ?>');"></div>
                
                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t <?php echo $s['bg_gradient']; ?> opacity-90"></div>
                
                <!-- Content -->
                <div class="relative p-8 h-full flex flex-col justify-between z-10">
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-2xl mb-6 backdrop-blur <?php echo $s['color']; ?>">
                            <i class="fas <?php echo $s['icon']; ?>"></i>
                        </div>
                        
                        <h3 class="text-3xl font-display font-bold text-white mb-2"><?php echo $s['titulo']; ?></h3>
                        <p class="<?php echo $s['color']; ?> font-medium tracking-wide mb-6 uppercase text-sm"><?php echo $s['subtitulo']; ?></p>
                        
                        <ul class="space-y-3 mb-8">
                            <?php foreach ($s['puntos'] as $punto): ?>
                            <li class="flex items-start gap-3 text-slate-300 text-sm leading-relaxed">
                                <i class="fas fa-check-circle mt-1 <?php echo $s['color']; ?> opacity-80"></i>
                                <span><?php echo $punto; ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <a href="#" class="inline-flex items-center gap-2 text-white font-bold group-hover:translate-x-2 transition-transform">
                        Conocer más <i class="fas fa-arrow-right <?php echo $s['color']; ?>"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
