<?php
/**
 * Seccion Tecnologias y CTA Final
 * Tech Stack y Footer con formulario de contacto
 */
?>

<!-- Trusted By / Tech Stack -->
<section class="py-10 bg-slate-900 border-y border-slate-800 overflow-hidden">
    <div class="container mx-auto px-6 text-center">
        <p class="text-slate-500 text-xs font-bold uppercase tracking-widest mb-8">Tecnologías que implementamos</p>
        <div class="flex flex-wrap justify-center gap-12 opacity-50 grayscale hover:grayscale-0 transition-all duration-500">
            <i class="fab fa-microsoft text-4xl hover:text-blue-500"></i>
            <i class="fab fa-aws text-4xl hover:text-orange-500"></i>
            <i class="fas fa-server text-4xl hover:text-green-500"></i>
            <i class="fab fa-linux text-4xl hover:text-yellow-500"></i>
            <i class="fab fa-google text-4xl hover:text-red-500"></i>
            <i class="fab fa-docker text-4xl hover:text-blue-400"></i>
        </div>
    </div>
</section>

<!-- CTA / Footer -->
<footer id="contacto" class="relative bg-slate-950 pt-32 pb-10 border-t border-slate-900">
    <div class="container mx-auto px-6 relative z-10">
        
        <div class="bg-gradient-to-r from-cyan-900/20 to-violet-900/20 rounded-3xl p-12 border border-white/5 text-center mb-24 backdrop-blur relative overflow-hidden">
            <div class="absolute top-0 right-0 p-32 bg-cyan-500/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
            
            <h2 class="text-4xl font-display font-bold text-white mb-6">¿Listo para blindar su empresa?</h2>
            <p class="text-slate-400 max-w-2xl mx-auto mb-10">
                Agende una auditoría gratuita de seguridad e infraestructura hoy mismo. Sin compromisos, solo expertos analizando sus necesidades.
            </p>
            <form class="max-w-md mx-auto flex gap-4">
                <input type="email" placeholder="Su correo corporativo" class="flex-1 bg-slate-900 border border-slate-700 text-white px-6 py-4 rounded-xl focus:outline-none focus:border-cyan-500 transition-colors placeholder:text-slate-600">
                <button type="button" class="bg-cyan-500 text-slate-900 font-bold px-8 py-4 rounded-xl hover:bg-cyan-400 transition-colors shadow-lg shadow-cyan-500/25">
                    Iniciar
                </button>
            </form>
        </div>

        <div class="grid md:grid-cols-4 gap-12 border-t border-slate-900 pt-16">
            <div class="col-span-1 md:col-span-2">
                <div class="text-2xl font-display font-black text-white mb-6">CYBER<span class="text-cyan-500">TEC</span></div>
                <p class="text-slate-500 max-w-sm mb-6">
                    Expertos en Informática y Telecomunicaciones SAS. <br>
                    Transformando retos tecnológicos en oportunidades de crecimiento seguro.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-lg bg-slate-900 flex items-center justify-center text-slate-400 hover:bg-cyan-500 hover:text-white transition-all"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="w-10 h-10 rounded-lg bg-slate-900 flex items-center justify-center text-slate-400 hover:bg-cyan-500 hover:text-white transition-all"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            
            <div>
                <h4 class="text-white font-bold mb-6">Servicios</h4>
                <ul class="space-y-3 text-slate-500 text-sm">
                    <li><a href="#" class="hover:text-cyan-400 transition-colors">Ciberseguridad</a></li>
                    <li><a href="#" class="hover:text-cyan-400 transition-colors">Infraestructura Cloud</a></li>
                    <li><a href="#" class="hover:text-cyan-400 transition-colors">Soporte Técnico</a></li>
                    <li><a href="#" class="hover:text-cyan-400 transition-colors">Consultoría IT</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold mb-6">Contacto</h4>
                <ul class="space-y-3 text-slate-500 text-sm">
                    <li><i class="fas fa-map-marker-alt text-cyan-500 w-5"></i> Piedecuesta, Santander, Colombia</li>
                    <li><i class="fas fa-phone text-cyan-500 w-5"></i> +57 (316) 123-0123</li>
                    <li><i class="fas fa-envelope text-cyan-500 w-5"></i> info@cybertec.com.co</li>
                </ul>
            </div>
        </div>

        <div class="text-center pt-12 mt-12 border-t border-slate-900 text-slate-600 text-xs">
            &copy; <?php echo date('Y'); ?> Cybertec Informatica & Telecomunicaciones SAS. Todos los derechos reservados.
        </div>
    </div>
</footer>

</body>
</html>
