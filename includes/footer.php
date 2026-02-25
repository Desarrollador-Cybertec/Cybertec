<?php
/**
 * Seccion Tecnologias y CTA Final
 * Tech Stack y Footer con formulario de contacto
 */
?>

<!-- Trusted By / Tech Stack -->
<section class="py-8 lg:py-12 bg-slate-900 border-y border-slate-800 overflow-hidden">
    <div class="container mx-auto px-6 text-center">
        <p class="text-slate-500 text-xs font-bold uppercase tracking-widest mb-8">Tecnologías que implementamos</p>
        <div class="flex flex-wrap justify-center items-center gap-x-8 gap-y-5 sm:gap-x-12 sm:gap-y-6 opacity-50 grayscale hover:grayscale-0 transition-all duration-500" data-aos="zoom-in">
            <i class="fab fa-microsoft text-3xl sm:text-4xl hover:text-blue-500 transition-colors" title="Microsoft"></i>
            <img src="assets/icons/fortinet.png" alt="Fortinet" title="Fortinet" class="h-7 sm:h-9 w-auto object-contain hover:scale-110 hover:brightness-125 transition-all">
            <i class="fab fa-aws text-3xl sm:text-4xl hover:text-orange-500 transition-colors" title="AWS"></i>
            <img src="assets/icons/hikvision.png" alt="Hikvision" title="Hikvision" class="h-7 sm:h-9 w-auto object-contain hover:scale-110 hover:brightness-125 transition-all">
            <i class="fab fa-linux text-3xl sm:text-4xl hover:text-yellow-500 transition-colors" title="Linux"></i>
            <img src="assets/icons/nextcloud.png" alt="Nextcloud" title="Nextcloud" class="h-7 sm:h-9 w-auto object-contain hover:scale-110 hover:brightness-125 transition-all">
            <i class="fab fa-google text-3xl sm:text-4xl hover:text-red-500 transition-colors" title="Google"></i>
            <img src="assets/icons/mikrotik.png" alt="MikroTik" title="MikroTik" class="h-7 sm:h-9 w-auto object-contain hover:scale-110 hover:brightness-125 transition-all">
            <i class="fab fa-docker text-3xl sm:text-4xl hover:text-blue-400 transition-colors" title="Docker"></i>
            <img src="assets/icons/glpi.png" alt="GLPI" title="GLPI" class="h-7 sm:h-9 w-auto object-contain hover:scale-110 hover:brightness-125 transition-all">
            <i class="fab fa-plex text-3xl sm:text-4xl hover:text-orange-400 transition-colors" title="Plex"></i>
        </div>
    </div>
</section>

<!-- CTA / Footer -->
<footer id="contacto" class="relative bg-slate-950 pt-20 lg:pt-28 pb-10 border-t border-slate-900">
    <div class="container mx-auto px-4 sm:px-6 relative z-10">
        
        <div class="bg-gradient-to-r from-[rgb(24,29,94)]/20 to-[rgb(27,146,208)]/10 rounded-2xl sm:rounded-3xl p-6 sm:p-12 border border-white/5 text-center mb-10 sm:mb-16 backdrop-blur relative overflow-hidden" data-aos="fade-up">
            <div class="absolute top-0 right-0 p-32 bg-[rgb(27,146,208)]/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
            
            <h2 class="text-2xl sm:text-4xl font-display font-bold text-white mb-4 sm:mb-6" data-aos="fade-up" data-aos-delay="100">¿Listo para blindar su empresa?</h2>
            <p class="text-slate-400 text-sm sm:text-base max-w-2xl mx-auto mb-6 sm:mb-10" data-aos="fade-up" data-aos-delay="150">
                Agende una auditoría gratuita de seguridad e infraestructura hoy mismo. Sin compromisos, solo expertos analizando sus necesidades.
            </p>
            <div class="max-w-sm mx-auto space-y-4 sm:space-y-3" data-aos="zoom-in" data-aos-delay="200">
                <!-- Email Input -->
                <div>
                    <input type="email" id="emailCotizacion" placeholder="Su correo corporativo" class="w-full bg-slate-900 border border-slate-700 text-white px-4 py-4 rounded-xl focus:outline-none focus:border-[rgb(27,146,208)] transition-colors placeholder:text-slate-500 text-sm sm:text-base" required aria-label="Correo corporativo">
                </div>

                <!-- Select Cotización (oculto hasta llenar email) -->
                <div id="divSelectCotizacion" class="hidden opacity-0 transition-opacity duration-300">
                    <select id="selectCotizacion" class="w-full bg-slate-900 border border-slate-700 text-white px-4 py-4 rounded-xl focus:outline-none focus:border-[rgb(27,146,208)] transition-colors placeholder:text-slate-500 text-sm sm:text-base" required aria-label="Tipo de cotización">
                        <option value="" selected disabled>Selecciona el tipo de cotización</option>
                        <option value="Seguridad Física">Seguridad Física - CCTV y Control de Acceso</option>
                        <option value="Seguridad Digital">Seguridad Digital - Firewalls y Antivirus</option>
                        <option value="Soporte TI">Soporte TI - Mantenimiento y Service Desk</option>
                        <option value="Infraestructura">Infraestructura - Redes y Telecomunicaciones</option>
                        <option value="Cloud y Software">Cloud y Software - Soluciones en Nube</option>
                        <option value="Auditoría Integral">Auditoría Integral - Evaluación Completa</option>
                    </select>
                </div>

                <!-- Teléfono (oculto hasta seleccionar cotización) -->
                <div id="divTelefono" class="hidden opacity-0 transition-opacity duration-300">
                    <input type="tel" id="telefonoCotizacion" placeholder="Su número de teléfono" class="w-full bg-slate-900 border border-slate-700 text-white px-4 py-4 rounded-xl focus:outline-none focus:border-[rgb(27,146,208)] transition-colors placeholder:text-slate-500 text-sm sm:text-base" required aria-label="Número de teléfono">
                </div>

                <!-- Botón Enviar (deshabilitado hasta completar formulario) -->
                <button type="button" id="btnEnviarCotizacion" disabled class="w-full flex items-center justify-center gap-2 bg-slate-700 text-slate-400 font-bold px-6 py-4 rounded-xl opacity-50 cursor-not-allowed transition-all" style="box-shadow: 0 10px 15px -3px rgba(27,146,208,0.15);">
                    <i class="bi bi-whatsapp text-base sm:text-lg"></i> Solicitar Cotización por WhatsApp
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 sm:gap-10 border-t border-slate-900 pt-10 sm:pt-14">
            <div class="col-span-1 sm:col-span-2" data-aos="fade-right">
            <div class="text-2xl font-display font-black text-white mb-6">
                <img src="assets/media/Logo-Banner.png" alt="Cybertec Logo" class="h-12 object-contain mb-4">
            </div>
                <p class="text-slate-500 max-w-sm mb-6">
                    Transformamos retos tecnológicos en oportunidades de crecimiento seguro.
                </p>
                <div class="flex gap-4">
                    <a href="https://co.linkedin.com/in/cybertec-informática-y-telecomunicaciones-sas-b62a2a397" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-lg bg-slate-900 flex items-center justify-center text-slate-400 hover:bg-[rgb(27,146,208)] hover:text-white transition-all"><i class="bi bi-linkedin"></i></a>
                    <a href="https://www.instagram.com/cybertec.sas" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-lg bg-slate-900 flex items-center justify-center text-slate-400 hover:bg-[rgb(27,146,208)] hover:text-white transition-all"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.facebook.com/share/1GKSJvkgE4/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-lg bg-slate-900 flex items-center justify-center text-slate-400 hover:bg-[rgb(27,146,208)] hover:text-white transition-all"><i class="bi bi-facebook"></i></a>
                </div>
            </div>
            
            <div data-aos="fade-up" data-aos-delay="100">
                <h4 class="text-white font-bold mb-6">Líneas de Negocio</h4>
                <ul class="space-y-3 text-slate-500 text-sm">
                    <li><a href="#servicios" class="hover:text-[rgb(27,146,208)] transition-colors">Seguridad Física</a></li>
                    <li><a href="#servicios" class="hover:text-[rgb(27,146,208)] transition-colors">Seguridad Digital</a></li>
                    <li><a href="#servicios" class="hover:text-[rgb(27,146,208)] transition-colors">Soporte Técnico & TIC</a></li>
                    <li><a href="#servicios" class="hover:text-[rgb(27,146,208)] transition-colors">Soluciones Cloud & Software</a></li>
                    <li><a href="#servicios" class="hover:text-[rgb(27,146,208)] transition-colors">Infraestructura Tecnológica</a></li>
                </ul>
            </div>

            <div data-aos="fade-up" data-aos-delay="150">
                <h4 class="text-white font-bold mb-6">Contacto</h4>
                <ul class="space-y-3 text-slate-500 text-sm">
                    <li><a href="https://maps.app.goo.gl/YDavJhYEC3ZXAX55A" target="_blank" rel="noopener noreferrer" class="hover:text-[rgb(27,146,208)] transition-colors"><i class="bi bi-geo-alt-fill text-[rgb(27,146,208)] w-5"></i> Piedecuesta, Santander, Colombia</a></li>
                    <li><a href="https://wa.me/573175133375" target="_blank" rel="noopener noreferrer" class="hover:text-[rgb(27,146,208)] transition-colors"><i class="bi bi-whatsapp text-[rgb(27,146,208)] w-5"></i> +57 (317) 513-3375</a></li>
                    <li><a href="mailto:ventas@cybertec.com.co" class="hover:text-[rgb(27,146,208)] transition-colors"><i class="bi bi-envelope-fill text-[rgb(27,146,208)] w-5"></i> ventas@cybertec.com.co</a></li>
                </ul>
            </div>
        </div>

        <div class="text-center pt-12 mt-12 border-t border-slate-900 text-slate-500 text-xs">
            &copy; <?php echo date('Y'); ?> Cybertec Informatica & Telecomunicaciones SAS. Todos los derechos reservados.
        </div>
    </div>
</footer>

<!-- AOS (Animate on Scroll) JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    // Inicializar AOS con configuración personalizada
    AOS.init({
        duration: 800,          // Duración de la animación (ms)
        delay: 0,               // Delay antes de la animación (ms)
        offset: 100,            // Offset de píxeles para disparar la animación
        easing: 'ease-in-out-quad', // Tipo de easing
        once: false,            // Si la animación debe ocurrir solo una vez
        mirror: false,          // Si los elementos se deben animar cuando salen de la vista
        anchorPlacement: 'top-bottom' // Posición del ancla para disparar la animación
    });

    // Flujo de cotización dinámico
    const emailInput = document.getElementById('emailCotizacion');
    const selectDiv = document.getElementById('divSelectCotizacion');
    const selectCotizacion = document.getElementById('selectCotizacion');
    const telefonoDiv = document.getElementById('divTelefono');
    const telefonoInput = document.getElementById('telefonoCotizacion');
    const btnEnviar = document.getElementById('btnEnviarCotizacion');

    // Cuando se llena el email, mostrar select
    emailInput.addEventListener('input', function() {
        if (this.value.trim() !== '' && isValidEmail(this.value)) {
            selectDiv.classList.remove('hidden');
            setTimeout(() => selectDiv.classList.remove('opacity-0'), 10);
        } else {
            selectDiv.classList.add('opacity-0');
            setTimeout(() => selectDiv.classList.add('hidden'), 300);
            selectCotizacion.value = '';
            telefonoDiv.classList.add('opacity-0');
            setTimeout(() => telefonoDiv.classList.add('hidden'), 300);
            telefonoInput.value = '';
            btnEnviar.disabled = true;
            btnEnviar.classList.add('opacity-50', 'cursor-not-allowed');
            btnEnviar.classList.remove('opacity-100', 'cursor-pointer');
            btnEnviar.style.backgroundColor = '#334155';
            btnEnviar.style.color = '#94a3b8';
        }
    });

    // Cuando se selecciona cotización, mostrar teléfono
    selectCotizacion.addEventListener('change', function() {
        if (this.value !== '') {
            telefonoDiv.classList.remove('hidden');
            setTimeout(() => telefonoDiv.classList.remove('opacity-0'), 10);
        } else {
            telefonoDiv.classList.add('opacity-0');
            setTimeout(() => telefonoDiv.classList.add('hidden'), 300);
            telefonoInput.value = '';
            btnEnviar.disabled = true;
            btnEnviar.classList.add('opacity-50', 'cursor-not-allowed');
            btnEnviar.classList.remove('opacity-100', 'cursor-pointer');
            btnEnviar.style.backgroundColor = '#334155';
            btnEnviar.style.color = '#94a3b8';
        }
    });

    // Cuando se llena el teléfono, habilitar botón
    telefonoInput.addEventListener('input', function() {
        if (this.value.trim() !== '') {
            btnEnviar.disabled = false;
            btnEnviar.classList.remove('opacity-50', 'cursor-not-allowed');
            btnEnviar.classList.add('opacity-100', 'cursor-pointer');
            btnEnviar.style.backgroundColor = 'rgb(27,146,208)';
            btnEnviar.style.color = 'white';
        } else {
            btnEnviar.disabled = true;
            btnEnviar.classList.add('opacity-50', 'cursor-not-allowed');
            btnEnviar.classList.remove('opacity-100', 'cursor-pointer');
            btnEnviar.style.backgroundColor = '#334155';
            btnEnviar.style.color = '#94a3b8';
        }
    });

    // Cuando se hace clic en enviar
    btnEnviar.addEventListener('click', function() {
        if (btnEnviar.disabled) return;

        const email = emailInput.value;
        const cotizacion = selectCotizacion.value;
        const telefono = telefonoInput.value;

        if (!email || !cotizacion || !telefono) {
            alert('Por favor completa todos los campos');
            return;
        }

        // Generar mensaje pre-cargado para WhatsApp
        const mensajeWhatsApp = `Hola Cybertec, me gustaría solicitar una cotización para:\n\nTipo de servicio: ${cotizacion}\nCorreo: ${email}\nTeléfono: ${telefono}\n\n¿Podrían proporcionarme más información?`;
        const urlWhatsApp = `https://wa.me/573175133375?text=${encodeURIComponent(mensajeWhatsApp)}`;

        // Abrir WhatsApp
        window.open(urlWhatsApp, '_blank');
    });

    // Función para validar email
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
</script>

</body>
</html>
