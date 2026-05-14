<?php require_once '../../includes/header.php'; ?>

<main>

    <section class="hero-nos">
        <div class="hero-img">
            <img src="/assets/img/sala-pruebas.png" alt="Infiltraciones Clínica Nuvia">
        </div>

        <div class="hero-overlay"></div>

        <div class="hero-contenido">
            <h1>Infiltraciones y tratamiento del dolor</h1>

            <p>
                Recuperación funcional, alivio del dolor y mejora de movilidad.
            </p>
        </div>
    </section>

    <section class="seccion">
        <div class="filosofia-card tarjeta">

            <div class="filosofia-contenido">

                <p class="texto-superior">
                    Tratamientos articulares
                </p>

                <h2 class="titulo-seccion izquierda">
                    Recuperación funcional y alivio del dolor
                </h2>

                <p class="filosofia-texto">
                    En Clínica Nuvia ofrecemos tratamientos orientados
                    a aliviar el dolor, mejorar la movilidad y favorecer
                    la recuperación funcional mediante técnicas infiltrativas
                    y tratamientos personalizados.
                </p>

                <p class="filosofia-texto">
                    Cada tratamiento se adapta de forma individualizada según
                    las necesidades físicas, articulares y deportivas
                    de cada paciente.
                </p>

            </div>

        </div>
    </section>

    <section class="bloque-blanco">

        <div class="seccion">

            <h2 class="titulo-seccion">
                Tratamientos disponibles
            </h2>

            <div id="contenedor-servicios" class="servicios-grid"></div>

        </div>

    </section>

    <section class="beneficios-home">

        <div class="beneficios-grid">

            <article class="beneficio-item">
                <div class="beneficio-icono">✦</div>

                <h3>
                    Alivio del dolor
                </h3>

                <p>
                    Tratamientos orientados a mejorar calidad de vida y movilidad.
                </p>
            </article>

            <article class="beneficio-item">
                <div class="beneficio-icono">◇</div>

                <h3>
                    Recuperación funcional
                </h3>

                <p>
                    Mejora progresiva de movilidad y funcionalidad física.
                </p>
            </article>

            <article class="beneficio-item">
                <div class="beneficio-icono">♡</div>

                <h3>
                    Tratamientos personalizados
                </h3>

                <p>
                    Adaptados a cada lesión, articulación y necesidad física.
                </p>
            </article>

            <article class="beneficio-item">
                <div class="beneficio-icono">☆</div>

                <h3>
                    Seguimiento profesional
                </h3>

                <p>
                    Acompañamiento continuo durante todo el tratamiento.
                </p>
            </article>

        </div>

    </section>

    <section class="banner-formulario">

        <div class="banner-formulario-contenido">

            <div class="banner-formulario-texto">

                <p class="texto-superior">
                    Asesoramiento personalizado
                </p>

                <h2>
                    ¿Necesitas orientación profesional?
                </h2>

                <p>
                    Nuestro equipo puede ayudarte a encontrar el tratamiento
                    más adecuado según tus necesidades y objetivos.
                </p>

            </div>

            <form class="banner-formulario-form">

                <label for="nombre" class="sr-only">
                    Nombre y apellidos
                </label>

                <input type="text" id="nombre" placeholder="Nombre y apellidos*" required>

                <label for="telefono" class="sr-only">
                    Teléfono
                </label>

                <input type="tel" id="telefono" placeholder="Teléfono*" required>

                <label for="email" class="sr-only">
                    Email
                </label>

                <input type="email" id="email" placeholder="Email*" required>

                <label for="tratamiento" class="sr-only">
                    Tratamiento
                </label>

                <select id="tratamiento" name="tratamiento">

                    <option value="" disabled selected>
                        Seleccione un tratamiento
                    </option>

                    <option value="infiltracion-rodilla">
                        Infiltraciones de rodilla
                    </option>

                    <option value="acido-hialuronico">
                        Ácido hialurónico articular
                    </option>

                    <option value="tratamiento-dolor">
                        Tratamiento del dolor
                    </option>

                    <option value="lesiones-deportivas">
                        Lesiones deportivas
                    </option>

                </select>

                <label for="mensaje" class="sr-only">
                    Mensaje
                </label>

                <textarea id="mensaje" placeholder="Mensaje opcional..."></textarea>

                <button type="submit" class="btn-formulario">

                    Enviar consulta

                </button>

            </form>

        </div>

    </section>

</main>

<script>
fetch('/api/servicios.php?categoria=infiltraciones')
    .then(response => response.json())
    .then(servicios => {

        const contenedor = document.getElementById('contenedor-servicios');

        if (servicios.length === 0) {

            contenedor.innerHTML = `
<p class="servicio-descripcion">
No hay tratamientos disponibles.
</p>
`;

            return;
        }

        servicios.forEach((servicio, index) => {

            const tarjeta = document.createElement('article');

            tarjeta.className = 'tarjeta servicio-card tratamiento-card';

            tarjeta.style.animationDelay = `${index * 0.12}s`;

            const imagen = servicio.imagen ?
                '/' + servicio.imagen.replace(/^\/+/, '') :
                '';

            tarjeta.innerHTML = `
${imagen ? `
<div class="tratamiento-img-wrap">
<img src="${imagen}" alt="${servicio.nombre}" class="servicio-img">
</div>
` : ''}

<div class="servicio-contenido">

<p class="servicio-categoria">${servicio.categoria}</p>

<h3 class="servicio-titulo">${servicio.nombre}</h3>

<p class="servicio-descripcion">${servicio.descripcion}</p>

<a href="/public/contacto.php" class="tratamiento-link">
Solicitar información
</a>

</div>
`;

            contenedor.appendChild(tarjeta);

        });

    })
    .catch(error => {

        console.error('Error al cargar servicios:', error);

    });
</script>

<?php require_once '../../includes/footer.php'; ?>