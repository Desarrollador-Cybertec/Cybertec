<?php
/**
 * Seccion Estadisticas
 * Sección que muestra stats/números clave de la empresa
 */

// Incluir configuración de estadísticas
require_once __DIR__ . '/../config/estadisticas.php';
?>

<!-- Stats Review Section -->
<section id="nosotros" class="py-12 lg:py-20 border-y border-white/5 bg-slate-900/50 backdrop-blur">
    <div class="container mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-8">
            <?php foreach($stats as $index => $stat): ?>
            <div class="text-center group" data-aos="zoom-in" data-aos-delay="<?php echo $index * 80; ?>">
                <div class="text-3xl sm:text-5xl text-[rgb(27,146,208)] mb-3 sm:mb-4 group-hover:scale-110 transition-transform">
                    <i class="<?php echo $stat['icon']; ?>"></i>
                </div>
                <div class="text-2xl sm:text-4xl font-display font-bold text-white mb-1"><?php echo $stat['val']; ?></div>
                <div class="text-xs sm:text-sm font-medium text-slate-400 uppercase tracking-wider"><?php echo $stat['label']; ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
