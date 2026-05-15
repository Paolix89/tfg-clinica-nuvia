<?php require_once '../../includes/header.php'; ?>

<main>

<section class="hero-nos">
    <div class="hero-img">
        <img src="/assets/img/hero-estetica.jpg" alt="Medicina estética Clínica Nuvia">
    </div>

    <div class="hero-overlay"></div>

    <div class="hero-contenido">
        <h1>Medicina estética</h1>
        <p>Tratamientos faciales personalizados con resultados naturales.</p>
    </div>
</section>

<section class="seccion">
    <div class="filosofia-card tarjeta">
        <div class="filosofia-contenido">
            <p class="texto-superior">Estética facial</p>

            <h2 class="titulo-seccion izquierda">
                Rejuvenecimiento, armonía y naturalidad
            </h2>

            <p class="filosofia-texto">
                En Clínica Nuvia trabajamos la medicina estética desde un enfoque médico,
                personalizado y poco invasivo. Nuestro objetivo es mejorar la armonía facial,
                la calidad de la piel y la confianza del paciente respetando siempre su naturalidad.
            </p>

            <p class="filosofia-texto">
                Cada tratamiento se plantea tras una valoración individualizada, teniendo en cuenta
                la anatomía facial, las necesidades de la piel y los objetivos de cada persona.
            </p>
        </div>
    </div>
</section>

<section class="bloque-blanco">
    <div class="seccion">

        <h2 class="titulo-seccion">
            Tratamientos disponibles
        </h2>

        <div id="contenedor-servicios" class="servicios-grid">
        </div>

    </div>
</section>

<section class="beneficios-home">
    <div class="beneficios-grid">

        <article class="beneficio-item">
            <div class="beneficio-icono">✦</div>
            <h3>Valoración personalizada</h3>
            <p>Tratamientos adaptados a cada paciente.</p>
        </article>

        <article class="beneficio-item">
            <div class="beneficio-icono">◇</div>
            <h3>Resultados naturales</h3>
            <p>Mejora estética sin perder la esencia facial.</p>
        </article>

        <article class="beneficio-item">
            <div class="beneficio-icono">♡</div>
            <h3>Técnicas poco invasivas</h3>
            <p>Procedimientos enfocados en seguridad y bienestar.</p>
        </article>

        <article class="beneficio-item">
            <div class="beneficio-icono">☆</div>
            <h3>Seguimiento profesional</h3>
            <p>Acompañamiento antes, durante y después.</p>
        </article>

    </div>
</section>

<section class="banner-formulario">
    <div class="banner-formulario-contenido">

        <div class="banner-formulario-texto">
            <p class="texto-superior">Asesoramiento personalizado</p>

            <h2>¿Quieres saber qué tratamiento encaja contigo?</h2>

            <p>
                Nuestro equipo puede orientarte y ayudarte a elegir la opción
                más adecuada según tus objetivos, tu piel y tus necesidades.
            </p>
        </div>

        <form class="banner-formulario-form">
            <input type="text" placeholder="Nombre y apellidos*">
            <input type="tel" placeholder="Teléfono*">
            <input type="email" placeholder="Email*">

            <select>
                <option>Tratamiento de interés</option>
                <option>Aumento de labios</option>
                <option>Neuromoduladores</option>
                <option>Bioestimulación</option>
                <option>Mesoterapia facial</option>
            </select>

            <textarea placeholder="Mensaje opcional..."></textarea>

            <button type="submit" class="btn-formulario">
                Enviar consulta
            </button>
        </form>

    </div>
</section>

</main>

<script>
fetch('/api/servicios.php?categoria=estetica')
    .then(response => response.json())
    .then(servicios => {
        const contenedor = document.getElementById('contenedor-servicios');

        if (servicios.length === 0) {
            contenedor.innerHTML = '<p class="servicio-descripcion">No hay tratamientos disponibles.</p>';
            return;
        }

        servicios.forEach((servicio, index) => {
            const tarjeta = document.createElement('article');
            tarjeta.className = 'tarjeta servicio-card tratamiento-card';

            tarjeta.style.animationDelay = `${index * 0.12}s`;

            const imagen = servicio.imagen
                ? '/' + servicio.imagen.replace(/^\/+/, '')
                : '';

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