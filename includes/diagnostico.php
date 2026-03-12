<?php
/**
 * Sección Diagnóstico Tecnológico
 * Lead Magnet - Formulario de captación
 */
?>

<!-- Diagnóstico / Lead Magnet Section -->
<section id="diagnostico" class="relative py-10 lg:py-14 overflow-hidden border-t border-white/5">
    <!-- Background -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-[rgb(27,146,208)]/5 rounded-full blur-[180px]"></div>

    <div class="container mx-auto px-4 sm:px-6 relative z-10">
        <div class="max-w-4xl mx-auto">
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-center">
                
                <!-- Left: Info -->
                <div data-aos="fade-right">
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[rgb(27,146,208)]/10 border border-[rgb(27,146,208)]/20 text-[rgb(27,146,208)] text-xs font-bold uppercase tracking-widest mb-6">
                        <i class="bi bi-gift"></i>
                        Sin costo
                    </span>

                    <h2 class="text-2xl sm:text-3xl font-display font-bold text-white mb-4">
                        Diagnóstico Tecnológico Empresarial <span class="text-neon">Gratuito</span>
                    </h2>

                    <p class="text-slate-400 text-sm mb-5 leading-relaxed">
                        Nuestro equipo de expertos evaluará tu infraestructura tecnológica y te entregará un informe con recomendaciones técnicas personalizadas.
                    </p>

                    <ul class="space-y-4 mb-6">
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-[rgb(27,146,208)]/10 flex items-center justify-center text-[rgb(27,146,208)] mt-0.5">
                                <i class="bi bi-server"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm">Evaluación de infraestructura</h4>
                                <p class="text-slate-400 text-xs">Análisis del estado actual de tus sistemas y redes.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-[rgb(27,146,208)]/10 flex items-center justify-center text-[rgb(27,146,208)] mt-0.5">
                                <i class="bi bi-shield-exclamation"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm">Análisis de seguridad</h4>
                                <p class="text-slate-400 text-xs">Identificación de vulnerabilidades y riesgos críticos.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-[rgb(27,146,208)]/10 flex items-center justify-center text-[rgb(27,146,208)] mt-0.5">
                                <i class="bi bi-clipboard-check"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm">Recomendaciones técnicas</h4>
                                <p class="text-slate-400 text-xs">Plan de acción priorizado para tu empresa.</p>
                            </div>
                        </li>
                    </ul>

                    <!-- Urgencia (integrado de CTA final) -->
                    <div class="bg-red-500/5 border border-red-500/15 rounded-xl p-4 mb-4">
                        <p class="text-red-400 text-xs font-bold uppercase tracking-widest mb-2">
                            <i class="bi bi-exclamation-triangle-fill mr-1"></i> No esperes a que pase
                        </p>
                        <p class="text-white text-sm font-bold mb-1">El mayor riesgo tecnológico es <span class="text-red-400">no saber que tienes uno.</span></p>
                        <p class="text-slate-400 text-xs">Un diagnóstico a tiempo puede evitar pérdidas millonarias.</p>
                    </div>
                </div>

                <!-- Right: Form -->
                <div class="rounded-2xl bg-slate-900/80 border border-slate-800 p-5 sm:p-6 backdrop-blur" data-aos="fade-left">
                    <h3 class="text-lg font-display font-bold text-white mb-4 text-center">Solicitar diagnóstico</h3>
                    
                    <form id="formDiagnostico" class="space-y-4">
                        <div>
                            <label for="diagNombre" class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Nombre completo</label>
                            <input type="text" id="diagNombre" placeholder="Tu nombre" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-[rgb(27,146,208)] transition-colors placeholder:text-slate-600 text-sm" required>
                        </div>

                        <div>
                            <label for="diagEmpresa" class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Empresa</label>
                            <input type="text" id="diagEmpresa" placeholder="Nombre de tu empresa" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-[rgb(27,146,208)] transition-colors placeholder:text-slate-600 text-sm" required>
                        </div>

                        <div>
                            <label for="diagCorreo" class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Correo corporativo</label>
                            <input type="email" id="diagCorreo" placeholder="correo@empresa.com" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-[rgb(27,146,208)] transition-colors placeholder:text-slate-600 text-sm" required>
                        </div>

                        <div>
                            <label for="diagTelefono" class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Teléfono</label>
                            <input type="tel" id="diagTelefono" placeholder="+57 300 000 0000" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-[rgb(27,146,208)] transition-colors placeholder:text-slate-600 text-sm" required>
                        </div>

                        <div>
                            <label for="diagEmpleados" class="block text-slate-400 text-xs font-bold uppercase tracking-wider mb-2">Número de empleados</label>
                            <select id="diagEmpleados" class="w-full bg-slate-950 border border-slate-700 text-white px-4 py-3.5 rounded-xl focus:outline-none focus:border-[rgb(27,146,208)] transition-colors text-sm" required>
                                <option value="" selected disabled class="text-slate-600">Seleccionar rango</option>
                                <option value="1-10">1 - 10 empleados</option>
                                <option value="11-50">11 - 50 empleados</option>
                                <option value="51-200">51 - 200 empleados</option>
                                <option value="201-500">201 - 500 empleados</option>
                                <option value="500+">Más de 500 empleados</option>
                            </select>
                        </div>

                        <button type="submit" class="w-full flex items-center justify-center gap-2 bg-[rgb(27,146,208)] text-white font-bold px-6 py-4 rounded-xl hover:bg-[rgb(27,146,208)]/80 transition-all text-sm sm:text-base mt-2">
                            <i class="bi bi-whatsapp text-lg"></i>
                            Solicitar diagnóstico
                        </button>

                        <div class="relative flex items-center gap-3 mt-4">
                            <div class="flex-1 h-px bg-slate-700"></div>
                            <span class="text-slate-500 text-xs">o si prefieres</span>
                            <div class="flex-1 h-px bg-slate-700"></div>
                        </div>

                        <a href="https://wa.me/573175133375?text=Hola%20Cybertec%2C%20necesito%20evaluar%20la%20seguridad%20tecnol%C3%B3gica%20de%20mi%20empresa." class="w-full flex items-center justify-center gap-2 mt-3 px-6 py-3.5 rounded-xl bg-slate-950 border border-slate-700 text-white font-bold hover:border-green-500/40 hover:bg-slate-900 transition-all text-sm" target="_blank" rel="noopener noreferrer">
                            <i class="bi bi-whatsapp text-green-400 text-lg"></i>
                            Hablar directamente por WhatsApp
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.getElementById('formDiagnostico').addEventListener('submit', function(e) {
    e.preventDefault();

    var nombre = document.getElementById('diagNombre').value.trim();
    var empresa = document.getElementById('diagEmpresa').value.trim();
    var correo = document.getElementById('diagCorreo').value.trim();
    var telefono = document.getElementById('diagTelefono').value.trim();
    var empleados = document.getElementById('diagEmpleados').value;

    if (!nombre || !empresa || !correo || !telefono || !empleados) {
        return;
    }

    var mensaje = 'Hola Cybertec, solicito un Diagnóstico Tecnológico Empresarial Gratuito.\n\n' +
        'Nombre: ' + nombre + '\n' +
        'Empresa: ' + empresa + '\n' +
        'Correo: ' + correo + '\n' +
        'Teléfono: ' + telefono + '\n' +
        'Empleados: ' + empleados;

    var url = 'https://wa.me/573175133375?text=' + encodeURIComponent(mensaje);
    window.open(url, '_blank');
});
</script>
