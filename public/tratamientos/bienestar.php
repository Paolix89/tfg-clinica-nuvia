<?php require_once '../../includes/header.php'; ?>

<main>

    <section class="hero-nos">
        <div class="hero-img">
            <img src="/assets/img/servicios/hero-bienestar.jpg" alt="Bienestar integral Clínica Nuvia">
        </div>

        <div class="hero-overlay"></div>

        <div class="hero-contenido">
            <h1>Bienestar integral</h1>

            <p>
                Salud, equilibrio y bienestar desde un enfoque personalizado.
            </p>
        </div>
    </section>

    <section class="seccion">
        <div class="filosofia-card tarjeta">

            <div class="filosofia-contenido">

                <p class="texto-superior">
                    Salud y equilibrio
                </p>

                <h2 class="titulo-seccion izquierda">
                    Bienestar físico desde una visión global
                </h2>

                <p class="filosofia-texto">
                    En Clínica Nuvia desarrollamos programas orientados
                    a mejorar hábitos saludables, bienestar físico y equilibrio corporal
                    mediante un enfoque individualizado y personalizado.
                </p>

                <p class="filosofia-texto">
                    Cada paciente recibe una orientación adaptada a sus necesidades,
                    priorizando el bienestar físico, la recuperación y la mejora
                    de la calidad de vida.
                </p>

            </div>

        </div>
    </section>

    <section class="bloque-blanco">

        <div class="seccion">

            <h2 class="titulo-seccion">
                Servicios de bienestar integral
            </h2>

            <div id="contenedor-servicios" class="servicios-grid"></div>

        </div>

    </section>

    <section class="beneficios-home">

        <div class="beneficios-grid">

            <article class="beneficio-item">
                <div class="beneficio-icono">✦</div>

                <h3>
                    Planes personalizados
                </h3>

                <p>
                    Programas adaptados a las necesidades de cada paciente.
                </p>
            </article>

            <article class="beneficio-item">
                <div class="beneficio-icono">◇</div>

                <h3>
                    Hábitos saludables
                </h3>

                <p>
                    Orientados a mejorar bienestar y calidad de vida.
                </p>
            </article>

            <article class="beneficio-item">
                <div class="beneficio-icono">♡</div>

                <h3>
                    Seguimiento continuo
                </h3>

                <p>
                    Acompañamiento profesional y personalizado.
                </p>
            </article>

            <article class="beneficio-item">
                <div class="beneficio-icono">☆</div>

                <h3>
                    Bienestar físico
                </h3>

                <p>
                    Tratamientos orientados al equilibrio corporal y recuperación.
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
                    ¿Quieres mejorar tu bienestar físico?
                </h2>

                <p>
                    Nuestro equipo puede ayudarte a encontrar el programa
                    más adecuado según tus objetivos y necesidades.
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

                    <option value="nutricion">
                        Nutrición
                    </option>

                    <option value="bienestar-corporal">
                        Bienestar corporal
                    </option>

                    <option value="planes-personalizados">
                        Planes personalizados
                    </option>

                    <option value="programas-saludables">
                        Programas saludables
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
fetch('/api/servicios.php?categoria=bienestar')
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