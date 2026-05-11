<?php
require_once '../includes/db.php';

$sql = "SELECT * FROM servicios WHERE estado = 1 LIMIT 3";
$stmt = $conexion->query($sql);
$servicios = $stmt->fetchAll();

require_once '../includes/header.php';
?>

<main class="pt-32">

    <!-- Cabecera -->
    <section class="relative text-white">

        <!-- Imagen fondo -->
        <div class="absolute inset-0">
            <img src="/assets/img/hero.jpg" alt="Clínica estética" class="w-full h-full object-cover">
        </div>

        <!-- Overlay oscuro -->
        <div class="absolute inset-0 bg-black/50"></div>

        <!-- Contenido -->
        <div class="relative max-w-6xl mx-auto px-4 py-32 text-center">

            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                Clínica Nuvia
            </h1>

            <p class="text-lg md:text-xl max-w-2xl mx-auto mb-8">
                Medicina estética y deportiva con un enfoque profesional, cercano y personalizado.
            </p>

            <div class="flex flex-col md:flex-row justify-center gap-4">

                <a href="servicios.php"
                    class="btn-principal">

                    Ver servicios

                </a>

                <a href="reservas.php"                    
                    class="btn-secundario">

                    Reservar cita

                </a>

            </div>

        </div>

    </section>

    <!-- NOSOTROS -->
    <section class="max-w-6xl mx-auto px-4 py-16">
        <div class="bg-white shadow rounded-xl p-8 text-center">
            <h2 class="text-3xl font-bold mb-4">
                Bienvenido/a a Clínica Nuvia
            </h2>

            <p class="text-gray-700 max-w-3xl mx-auto">
                En Clínica Nuvia ofrecemos servicios especializados en medicina estética y medicina deportiva.
                Nuestro objetivo es proporcionar información clara sobre cada tratamiento y facilitar al paciente
                el acceso a la reserva de citas mediante Treatwell.
            </p>
        </div>
    </section>

    <!-- SERVICIOS DESTACADOS -->
    <section class="max-w-6xl mx-auto px-4 pb-16">
        <h2 class="text-3xl font-bold text-center mb-10">
            Servicios destacados
        </h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($servicios as $servicio): ?>
            <article class="bg-white shadow rounded-xl p-6">

                <?php if (!empty($servicio["imagen"])): ?>
                <img src="/<?php echo trim($servicio["imagen"]); ?>" alt="<?php echo $servicio["nombre"]; ?>"
                    class="w-full h-48 object-cover rounded-lg mb-4">
                <?php endif; ?>

                <h3 class="text-xl font-semibold mb-2">
                    <?php echo $servicio["nombre"]; ?>
                </h3>

                <p class="text-sm text-[#ff5c39] font-medium mb-2">
                    <?php echo $servicio["categoria"]; ?>
                </p>

                <p class="text-gray-700">
                    <?php echo $servicio["descripcion"]; ?>
                </p>
            </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- POR QUÉ ELEGIRNOS -->
    <section class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">
                ¿Por qué elegir Clínica Nuvia?
            </h2>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-100 rounded-xl p-6 text-center">
                    <h3 class="text-xl font-semibold mb-3">Atención personalizada</h3>
                    <p class="text-gray-700">
                        Cada paciente recibe una orientación adaptada a sus necesidades.
                    </p>
                </div>

                <div class="bg-gray-100 rounded-xl p-6 text-center">
                    <h3 class="text-xl font-semibold mb-3">Servicios especializados</h3>
                    <p class="text-gray-700">
                        Tratamientos enfocados en estética y recuperación deportiva.
                    </p>
                </div>

                <div class="bg-gray-100 rounded-xl p-6 text-center">
                    <h3 class="text-xl font-semibold mb-3">Reserva online</h3>
                    <p class="text-gray-700">
                        Acceso sencillo a la reserva de citas mediante Treatwell.
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php require_once '../includes/footer.php'; ?>