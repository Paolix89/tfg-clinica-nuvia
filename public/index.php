<?php
require_once '../includes/db.php';

$sql = "SELECT * FROM servicios WHERE estado = 1 LIMIT 3";
$stmt = $conexion->query($sql);
$servicios = $stmt->fetchAll();

require_once '../includes/header.php';
?>

<main>

    <!-- HERO -->
    <section class="hero-inicio hero-home">

        <div class="hero-img hero-home-img">
            <img src="/assets/img/clinica.png" alt="Clínica estética">
        </div>

        <div class="hero-inicio-contenido">

            <p class="hero-texto hero-texto-home">            
                Un espacio pensado para ayudarte a sentirte mejor, cuidando tu salud, bienestar y confianza de forma
                personalizada.
            </p>

            <div class="hero-botones">
                <a href="/public/servicios.php" class="btn-principal">
                    Tratamientos
                </a>

                <a href="/public/reservas.php" class="btn-secundario">
                    Reservar cita
                </a>
            </div>

        </div>
    </section>

    <!-- NOSOTROS -->
    <section class="intro-home">
        <div class="intro-home-contenido">
            <div class="intro-home-texto">
                <p class="texto-superior"> Clínica Nuvia </p>

                <h2> Medicina estética y deportiva con un enfoque integral </h2>

                <p> Unimos experiencia médica, tratamientos personalizados y bienestar
                    físico para ayudarte a cuidar tu imagen, tu salud y tu confianza. </p>

                <a href="/public/nosotros.php" class="btn-secundario hover-btn"> Conoce a nuestro equipo </a>
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

    <section class="seccion-sin-top servicios-destacados-home">

        <h2 class="titulo-seccion">Servicios destacados</h2>

        <div class="servicios-grid">

            <?php foreach ($servicios as $servicio): ?>

            <?php
            $categoria = strtolower($servicio["categoria"]);

            if ($categoria == "estética") {
            $url = "/public/tratamientos/estetica.php";
            } elseif ($categoria == "deportiva") {
            $url = "/public/tratamientos/deportiva.php";
            } elseif ($categoria == "infiltraciones") {
            $url = "/public/tratamientos/infiltraciones.php";
            } elseif ($categoria == "bienestar") {
            $url = "/public/tratamientos/bienestar.php";
            } else {
            $url = "/public/servicios.php";
            }
            ?>

            <article class="tarjeta servicio-card servicio-destacado-link tratamiento-card">

                <a href="<?php echo $url; ?>" class="servicio-card-link">

                    <?php if (!empty($servicio["imagen"])): ?>
                    <div class="tratamiento-img-wrap">
                        <img src="/<?php echo htmlspecialchars(trim($servicio["imagen"])); ?>"
                            alt="<?php echo htmlspecialchars($servicio["nombre"]); ?>" class="servicio-img">
                    </div>
                    <?php endif; ?>

                    <div class="servicio-contenido">

                        <p class="servicio-categoria"><?php echo htmlspecialchars($servicio["categoria"]); ?></p>

                        <h3 class="servicio-titulo"><?php echo htmlspecialchars($servicio["nombre"]); ?></h3>

                        <p class="servicio-descripcion"><?php echo htmlspecialchars($servicio["descripcion"]); ?></p>

                        <span class="tratamiento-link">Ver tratamiento</span>

                    </div>

                </a>

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

                <label for="nombre" class="sr-only">Nombre y apellidos</label>
                <input type="text" id="nombre" placeholder="Nombre y apellidos*">

                <label for="telefono" class="sr-only">Teléfono</label>
                <input type="tel" id="telefono" placeholder="Teléfono*">

                <label for="email" class="sr-only">Email</label>
                <input type="email" id="email" placeholder="Email*">

                <label for="tratamiento" class="sr-only"></label>
                <select id="tratamiento" name="tratamiento">
                    <option value="" disabled selected>Seleccione un tratamiento</option>
                    <option value="medicina-estetica">Medicina estética</option>
                    <option value="medicina-deportiva">Medicina deportiva</option>
                    <option value="infiltraciones">Infiltraciones</option>
                    <option value="bienestar-integral">Bienestar integral</option>
                </select>

                <label for="mensaje" class="sr-only">Mensaje</label>
                <textarea id="mensaje" placeholder="Mensaje opcional..."></textarea>

                <button type="submit" class="btn-formulario">
                    Enviar consulta
                </button>

            </form>

        </div>

    </section>

</main>

<?php require_once '../includes/footer.php'; ?>