<?php require_once '../includes/header.php'; ?>

<main>

    <section class="hero-nos">
        <div class="hero-img">
            <img src="/assets/img/hero-trat.jpg" alt="Tratamientos Clínica Nuvia">
        </div>

        <div class="hero-overlay"></div>

        <div class="hero-contenido">
            <h1>Tratamientos</h1>
        </div>
    </section>

    <section class="seccion">
        <div class="filosofia-card tarjeta">
            <div class="filosofia-contenido">
                <p class="texto-superior">Tratamientos personalizados</p>

                <h2 class="titulo-seccion izquierda">Un enfoque integral para cuidar tu bienestar</h2>

                <p class="filosofia-texto">
                    En Clínica Nuvia ofrecemos tratamientos orientados a mejorar la estética,
                    la salud y el bienestar físico de cada paciente. Nuestro enfoque combina
                    medicina estética facial, medicina deportiva, tratamientos articulares y
                    programas de bienestar desde una visión médica, segura y personalizada.
                </p>

                <p class="filosofia-texto">
                    Cada tratamiento se plantea de forma individualizada, teniendo en cuenta
                    las necesidades, objetivos y características de cada persona. Priorizamos
                    siempre la naturalidad, la seguridad y el equilibrio entre salud, estética
                    y confianza personal.
                </p>
            </div>
        </div>
    </section>

    <section class="banner-pequeno">
        <div class="banner-pequeno-img">
            <img src="/assets/img/hab1.png" alt="Instalaciones Clínica Nuvia">
        </div>

        <div class="banner-pequeno-texto">
            <p class="texto-superior">Tratamientos personalizados</p>

            <h2>Un enfoque médico adaptado a cada paciente</h2>

            <p>
                Cada tratamiento se plantea tras una valoración individualizada,
                priorizando la seguridad, la naturalidad y el bienestar.
            </p>
        </div>
    </section>

    <section class="categoria-tratamientos bg-[#C9A96A]" id="estetica">
        <div class="categoria-contenedor">
            <div class="categoria-info">
                <p class="texto-superior">Medicina estética</p>

                <h2>Tratamientos faciales y rejuvenecimiento</h2>

                <p>
                    Tratamientos médico-estéticos orientados a mejorar la armonía facial,
                    la calidad de la piel y el rejuvenecimiento del rostro mediante técnicas
                    poco invasivas y resultados naturales adaptados a cada paciente.
                </p>
            </div>

            <div class="categoria-lista" id="lista-estetica"></div>
        </div>
    </section>

    <section class="categoria-tratamientos reverse bg-[#f5f2eb]" id="deportiva">
        <div class="categoria-contenedor">
            <div class="categoria-info">
                <p class="texto-superior">Medicina deportiva</p>

                <h2>Rendimiento y recuperación física</h2>

                <p>
                    Servicios orientados a la recuperación muscular, prevención de lesiones,
                    readaptación funcional y mejora del rendimiento físico mediante un
                    enfoque personalizado y seguimiento profesional.
                </p>
            </div>

            <div class="categoria-lista" id="lista-deportiva"></div>
        </div>
    </section>

    <section class="categoria-tratamientos bg-[#C9A96A]" id="infiltraciones">
        <div class="categoria-contenedor">
            <div class="categoria-info">
                <p class="texto-superior">Tratamientos articulares</p>

                <h2>Infiltraciones y tratamiento del dolor</h2>

                <p>
                    Tratamientos orientados a aliviar dolor, mejorar movilidad y favorecer
                    la recuperación funcional mediante técnicas infiltrativas y tratamientos
                    articulares personalizados.
                </p>
            </div>

            <div class="categoria-lista" id="lista-infiltraciones"></div>
        </div>
    </section>

    <section class="categoria-tratamientos reverse bg-[#f5f2eb]" id="bienestar">
        <div class="categoria-contenedor">
            <div class="categoria-info">
                <p class="texto-superior">Bienestar integral</p>

                <h2>Salud, equilibrio y bienestar</h2>

                <p>
                    Programas orientados a mejorar hábitos saludables, recuperación,
                    bienestar físico y equilibrio corporal desde una visión global
                    e individualizada.
                </p>
            </div>

            <div class="categoria-lista" id="lista-bienestar"></div>
        </div>
    </section>

    <section class="cta-tratamientos">
        <div class="cta-box">
            <p class="texto-superior">Asesoramiento personalizado</p>

            <h2>¿Necesitas orientación sobre un tratamiento?</h2>

            <p>
                Nuestro equipo puede ayudarte a encontrar el tratamiento
                más adecuado según tus objetivos y necesidades.
            </p>

            <div class="cta-botones">
                <a href="/public/contacto.php" class="btn-secundario hover-btn">Contactar</a>
                <a href="/public/reservas.php" class="btn-principal hover-btn">Reservar cita</a>
            </div>
        </div>

        <div class="formulario-cta">
            <h3>Solicitud de valoración</h3>

            <form>
                <div class="form-grid">
                    <input type="text" placeholder="Nombre y apellidos*">
                    <input type="tel" placeholder="Teléfono*">
                </div>

                <div class="form-grid">
                    <input type="email" placeholder="Email*">

                    <select>
                        <option>Selecciona tratamiento</option>
                        <option>Medicina estética</option>
                        <option>Medicina deportiva</option>
                        <option>Infiltraciones</option>
                        <option>Bienestar integral</option>
                    </select>
                </div>

                <textarea placeholder="Mensaje opcional..."></textarea>

                <button type="submit" class="btn-formulario">Solicitar valoración</button>
            </form>
        </div>
    </section>

</main>

<script>
function obtenerUrlCategoria(categoria) {
    if (categoria === 'Estética') return '/public/tratamientos/estetica.php';
    if (categoria === 'Deportiva') return '/public/tratamientos/deportiva.php';
    if (categoria === 'Infiltraciones') return '/public/tratamientos/infiltraciones.php';
    if (categoria === 'Bienestar') return '/public/tratamientos/bienestar.php';
    return '/public/servicios.php';
}

function cargarServicios(categoria, contenedorId) {
    fetch('/api/servicios.php?categoria=' + categoria)
        .then(response => response.json())
        .then(servicios => {
            const contenedor = document.getElementById(contenedorId);

            if (!contenedor) return;

            contenedor.innerHTML = '';

            if (servicios.length === 0) {
                contenedor.innerHTML = '<p class="servicio-descripcion">No hay tratamientos disponibles.</p>';
                return;
            }

            servicios.forEach(servicio => {
                const enlace = document.createElement('a');
                enlace.href = obtenerUrlCategoria(servicio.categoria);
                enlace.textContent = servicio.nombre;
                contenedor.appendChild(enlace);
            });
        })
        .catch(error => {
            console.error('Error al cargar servicios:', error);
        });
}

cargarServicios('estetica', 'lista-estetica');
cargarServicios('deportiva', 'lista-deportiva');
cargarServicios('infiltraciones', 'lista-infiltraciones');
cargarServicios('bienestar', 'lista-bienestar');
</script>

<?php require_once '../includes/footer.php'; ?>