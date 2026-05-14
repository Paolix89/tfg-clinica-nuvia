<?php
require_once '../includes/db.php';

$sql = "SELECT * FROM servicios WHERE estado = 1 LIMIT 3";
$stmt = $conexion->query($sql);
$servicios = $stmt->fetchAll();

require_once '../includes/header.php';
?>

<main>

    <!-- HERO -->
    <section class="hero-inicio">

        <div class="hero-img">
            <img src="/assets/img/clinica.png" alt="Clínica estética">
        </div>

        <div class="hero-overlay-inicio"></div>
        <div class="hero-inicio-contenido">
            <h1 class="hero-titulo fuente-literata">Clínica Nuvia</h1>

            <p class="hero-texto">Medicina estética y deportiva con un enfoque profesional, cercano y personalizado.</p>

            <div class="hero-botones">
                <a href="/public/servicios.php" class="btn-principal">Tratamientos</a>

                <a href="/public/reservas.php" class="btn-secundario">Reservar cita</a>
            </div>

        </div>

    </section>

    <!-- NOSOTROS -->
    <section class="intro-home">

        <div class="intro-home-contenido">

            <div class="intro-home-texto">

                <p class="texto-superior">
                    Clínica Nuvia
                </p>

                <h2>
                    Medicina estética y deportiva con un enfoque integral
                </h2>

                <p>
                    Unimos experiencia médica, tratamientos personalizados y bienestar
                    físico para ayudarte a cuidar tu imagen, tu salud y tu confianza.
                </p>

                <a href="/public/nosotros.php" class="btn-secundario hover-btn">
                    Conoce la clínica
                </a>

            </div>

            <div class="intro-home-img">
                <img src="/assets/img/hero.jpg" alt="Clínica Nuvia">
            </div>

        </div>

        <div class="intro-home-destacados">

            <div>
                <span>01</span>
                <p>Atención personalizada</p>
            </div>

            <div>
                <span>02</span>
                <p>Tratamientos poco invasivos</p>
            </div>

            <div>
                <span>03</span>
                <p>Bienestar y recuperación</p>
            </div>

        </div>

    </section>

    <!-- BENEFICIOS -->
    <section class="beneficios-home">
        <div class="beneficios-grid">

            <article class="beneficio-item">
                <div class="beneficio-icono">◇</div>
                <h3>Tratamientos personalizados</h3>
                <p>Planes adaptados a cada paciente.</p>
            </article>

            <article class="beneficio-item">
                <div class="beneficio-icono">♡</div>
                <h3>Profesionales especializados</h3>
                <p>Equipo médico con amplia experiencia.</p>
            </article>

            <article class="beneficio-item">
                <div class="beneficio-icono">✦</div>
                <h3>Tecnología avanzada</h3>
                <p>Equipamiento moderno y seguro.</p>
            </article>

            <article class="beneficio-item">
                <div class="beneficio-icono">☆</div>
                <h3>Resultados naturales</h3>
                <p>Cuidando siempre tu esencia.</p>
            </article>

        </div>
    </section>

    <!-- SERVICIOS DESTACADOS -->
    <section class="seccion-sin-top">

        <h2 class="titulo-seccion">
            Servicios destacados
        </h2>

        <div class="servicios-grid">

            <?php foreach ($servicios as $servicio): ?>

            <article class="tarjeta">

                <?php if (!empty($servicio["imagen"])): ?>
                <img src="/<?php echo htmlspecialchars(trim($servicio["imagen"])); ?>"
                    alt="<?php echo htmlspecialchars($servicio["nombre"]); ?>" class="servicio-img">
                <?php endif; ?>

                <div class="servicio-contenido">

                    <p class="servicio-categoria">
                        <?php echo htmlspecialchars($servicio["categoria"]); ?>
                    </p>

                    <h3 class="servicio-titulo">
                        <?php echo htmlspecialchars($servicio["nombre"]); ?>
                    </h3>

                    <p class="servicio-descripcion">
                        <?php echo htmlspecialchars($servicio["descripcion"]); ?>
                    </p>

                </div>

            </article>

            <?php endforeach; ?>

        </div>

    </section>

    <section class="banner-clinica">

        <img src="/assets/img/sala-deportiva1.png" alt="Instalaciones Clínica Nuvia">

        <div class="banner-overlay"></div>

        <div class="banner-contenido">

            <p class="banner-superior">
                Rendimiento y recuperación
            </p>

            <h2>
                Un espacio diseñado para mejorar tu bienestar físico
            </h2>

            <p>
                Nuestra sala deportiva combina tecnología, seguimiento profesional y
                entrenamiento funcional para ayudarte a prevenir lesiones, recuperarte
                y mejorar tu rendimiento de forma segura y personalizada.
            </p>
        </div>
    </section>


    <!-- POR QUÉ ELEGIRNOS -->
    <section class="bloque-blanco">

        <div class="seccion">

            <h2 class="titulo-seccion">
                ¿Por qué elegir Clínica Nuvia?
            </h2>

            <div class="valores-grid valores-grid-4">

                <article class="tarjeta valor-card card-index">
                    <i class="fa-solid fa-user-doctor valor-icono"></i>
                    <h3>
                        Atención personalizada
                    </h3>

                    <p>
                        Cada paciente recibe una valoración individualizada y un
                        tratamiento adaptado a sus necesidades, objetivos y bienestar,
                        priorizando siempre resultados naturales y seguros.
                    </p>

                </article>

                <article class="tarjeta valor-card card-index">
                    <i class="fa-solid fa-stethoscope valor-icono"></i>
                    <h3>
                        Equipo especializado
                    </h3>

                    <p>
                        Clínica Nuvia cuenta con profesionales especializados en
                        medicina estética, recuperación deportiva y bienestar integral,
                        ofreciendo un enfoque multidisciplinar y personalizado.
                    </p>

                </article>

                <article class="tarjeta valor-card card-index">
                    <i class="fa-solid fa-microscope valor-icono"></i>
                    <h3>
                        Tecnología y tratamientos avanzados
                    </h3>

                    <p>
                        Trabajamos con técnicas y protocolos actualizados orientados
                        a mejorar la precisión, la seguridad y la experiencia del paciente
                        en cada tratamiento.
                    </p>

                </article>

                <article class="tarjeta valor-card card-index">
                    <i class="fa-solid fa-heart-pulse valor-icono"></i>
                    <h3>
                        Seguimiento profesional
                    </h3>

                    <p>
                        Acompañamos al paciente antes, durante y después del tratamiento,
                        garantizando una atención cercana y un seguimiento continuado
                        en cada proceso.
                    </p>

                </article>

            </div>

        </div>

    </section>

    <section class="banner-formulario">

        <div class="banner-formulario-contenido">

            <div class="banner-formulario-texto">
                <p class="texto-superior">Asesoramiento personalizado</p>

                <h2>¿Necesitas que te asesoremos?</h2>

                <p>
                    Nuestro equipo puede ayudarte a elegir el tratamiento más adecuado
                    según tus objetivos, necesidades y situación personal.
                </p>
            </div>

            <form class="banner-formulario-form">

                <input type="text" placeholder="Nombre y apellidos*">

                <input type="tel" placeholder="Teléfono*">

                <input type="email" placeholder="Email*">

                <select>
                    <option>Tratamiento de interés</option>
                    <option>Medicina estética</option>
                    <option>Medicina deportiva</option>
                    <option>Infiltraciones</option>
                    <option>Bienestar integral</option>
                </select>

                <textarea placeholder="Mensaje opcional..."></textarea>

                <button type="submit" class="btn-formulario">
                    Enviar consulta
                </button>

            </form>

        </div>

    </section>

</main>

<?php require_once '../includes/footer.php'; ?>