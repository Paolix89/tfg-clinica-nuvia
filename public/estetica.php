<?php
require_once '../includes/db.php';

$sql = "SELECT * FROM servicios 
        WHERE categoria = 'Estética' AND estado = 1";

$stmt = $conexion->query($sql);
$servicios = $stmt->fetchAll();
?>


<?php require_once '../includes/header.php'; ?>
    

    <main class="max-w-6xl mx-auto pt-32 pb-10 px-4">

        <h1 class="text-4xl font-bold text-center mb-10">
        Medicina estética
        </h1>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            <?php foreach ($servicios as $servicio): ?>

                <article class="bg-white shadow rounded-xl p-6">
                    <?php if (!empty($servicio["imagen"])): ?>
                        <img src="<?php echo $servicio["imagen"]; ?>" alt="<?php echo $servicio["nombre"]; ?>" class="w-full h-48 object-cover rounded-lg mb-4">
                    <?php endif; ?>

                    <h2 class="text-2xl font-semibold mb-3">
                    <?php echo $servicio["nombre"]; ?>
                    </h2>

                    <p class="text-gray-700">
                    <?php echo $servicio["descripcion"]; ?>
                    </p>

                </article>

            <?php endforeach; ?>

        </div>

    </main>
<?php require_once '../includes/footer.php'; ?>
