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
            <img src="/assets/img/hero.jpg" alt="Clínica estética">
        </div>

        <div class="hero-overlay-inicio"></div>

        <div class="hero-inicio-contenido">

            <h1 class="hero-titulo fuente-literata">
                Clínica Nuvia
            </h1>

            <p class="hero-texto">
                Medicina estética y deportiva con un enfoque profesional, cercano y personalizado.
            </p>

            <div class="hero-botones">
                <a href="/public/servicios.php" class="btn-principal">
                    Ver servicios
                </a>

                <a href="/public/reservas.php" class="btn-secundario">
                    Reservar cita
                </a>
            </div>

        </div>

    </section>

    <!-- NOSOTROS -->
    <section class="seccion">
        <div class="tarjeta inicio-presentacion">

            <h2 class="titulo-seccion">
                Bienvenido a Clínica Nuvia
            </h2>

            <p class="parrafo-personalizado">
                Bienvenidos a un espacio donde la estética, la salud y el bienestar trabajan juntos para sacar
                tu mejor versión. En nuestra clínica unimos tecnología avanzada, tratamientos personalizados y
                atención profesional para ayudarte a sentirte bien por dentro y por fuera.
            </p>

            <p class="parrafo-personalizado">
                Especializados en estética y recuperación deportiva, ofrecemos soluciones adaptadas a cada persona:
                cuidado facial y corporal, tratamientos reafirmantes, recuperación muscular, fisioterapia,
                rendimiento deportivo y bienestar integral.
            </p>

            <p class="parrafo-personalizado">
                Nuestro objetivo no es solo que te veas mejor, sino que te sientas fuerte, saludable y seguro
                de ti mismo cada día. Porque cuidarse no es un lujo, es una forma de vivir mejor.
            </p>

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

            <div class="valores-grid">

                <article class="tarjeta valor-card">
                    <h3>Atención personalizada</h3>
                    <p>
                        Cada paciente recibe una orientación adaptada a sus necesidades.
                    </p>
                </article>

                <article class="tarjeta valor-card">
                    <h3>Servicios especializados</h3>
                    <p>
                        Tratamientos enfocados en estética y recuperación deportiva.
                    </p>
                </article>

                <article class="tarjeta valor-card">
                    <h3>Reserva online</h3>
                    <p>
                        Acceso sencillo a la reserva de citas mediante Treatwell.
                    </p>
                </article>

            </div>

        </div>

    </section>

</main>

<?php require_once '../includes/footer.php'; ?>