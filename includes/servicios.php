<?php
/**
 * Seccion Servicios
 * Bento grid con los servicios principales
 */

// Incluir configuración de servicios
require_once __DIR__ . '/../config/servicios.php';
?>

<!-- Services Bento Grid -->
<section id="servicios" class="py-20 lg:py-28 relative">
    <div class="container mx-auto px-4 sm:px-6">
        <div class="text-center mb-10 sm:mb-16 max-w-3xl mx-auto">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-display font-bold mb-4 sm:mb-6" data-aos="fade-up">Nuestras Líneas de Negocio</h2>
            <p class="text-slate-400 text-base sm:text-lg" data-aos="fade-up" data-aos-delay="100">Cinco pilares de soluciones diseñadas para escalar con su negocio, garantizando seguridad, velocidad y fiabilidad en cada capa.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 auto-rows-fr">
            <?php foreach ($servicios as $index => $s): ?>
            <div class="relative group rounded-3xl overflow-hidden glass-panel glass-card-hover <?php echo $s['span']; ?>" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                
                <!-- Background Image (Low Opacity) -->
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110 opacity-30 mix-blend-overlay" style="background-image: url('<?php echo $s['img']; ?>');"></div>
                
                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t <?php echo $s['bg_gradient']; ?> opacity-90"></div>
                
                <!-- Content -->
                <div class="relative p-6 sm:p-8 h-full flex flex-col justify-between z-10">
                    <div>
                        <div class="w-12 sm:w-16 h-12 sm:h-16 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-2xl sm:text-3xl mb-4 sm:mb-6 backdrop-blur <?php echo $s['color']; ?>">
                            <i class="<?php echo $s['icon']; ?>"></i>
                        </div>
                        
                        <h3 class="text-2xl sm:text-3xl font-display font-bold text-white mb-2"><?php echo $s['titulo']; ?></h3>
                        <p class="<?php echo $s['color']; ?> font-medium tracking-wide mb-4 sm:mb-6 uppercase text-xs sm:text-sm"><?php echo $s['subtitulo']; ?></p>
                        
                        <ul class="space-y-3 mb-8">
                            <?php foreach ($s['puntos'] as $punto): ?>
                            <li class="flex items-start gap-3 text-slate-300 text-sm leading-relaxed">
                                <i class="bi bi-check-circle mt-1 <?php echo $s['color']; ?>"></i>
                                <span><?php echo $punto; ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <a href="<?php echo $s['whatsapp']; ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-white font-bold group-hover:translate-x-2 transition-transform">
                        Conocer más <i class="bi bi-whatsapp <?php echo $s['color']; ?>"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
