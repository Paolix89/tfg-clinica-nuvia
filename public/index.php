<?php
require_once '../includes/db.php';

$sql = "SELECT * FROM servicios WHERE estado = 1 LIMIT 3";
$stmt = $conexion->query($sql);
$servicios = $stmt->fetchAll();

require_once '../includes/header.php';
?>

<main class="max-w-6xl mx-auto pt-32 pb-10 px-4">

    <div class="text-center mb-12">

        <h1 class="text-5xl font-bold mb-4">
        Clínica Privada
        </h1>

        <p class="text-lg text-gray-700 mb-6">
        Especialistas en medicina estética y medicina deportiva
        </p>

    </div>


    <h2 class="text-3xl font-bold text-center mb-10">
    Servicios destacados
    </h2>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

        <?php foreach ($servicios as $servicio): ?>

        <div class="bg-white shadow rounded-xl p-6">

            <?php if (!empty($servicio["imagen"])): ?>
                <img src="../<?php echo $servicio["imagen"]; ?>" alt="<?php echo $servicio["nombre"]; ?>" class="w-full h-48 object-cover rounded-lg mb-4">
            <?php endif; ?>

            <h3 class="text-xl font-semibold mb-3">
            <?php echo $servicio["nombre"]; ?>
            </h3>

            <p class="text-sm text-blue-600 mb-2">
            <?php echo $servicio["categoria"]; ?>
            </p>

            <p class="text-gray-700">
            <?php echo $servicio["descripcion"]; ?>
            </p>

        </div>

        <?php endforeach; ?>

  

    </div>
    <div class="max-w-6xl mx-auto py-10 px-4 text-center mb-12">
        <a href="servicios.php" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
        Ver más servicios
        </a>
    </div>

</main>

<?php require_once '../includes/footer.php'; ?>