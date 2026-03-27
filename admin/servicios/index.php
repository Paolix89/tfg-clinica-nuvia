<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: ../login.php");
    exit;
}

require_once '../../includes/db.php';

$sql = "SELECT * FROM servicios";
$stmt = $conexion->query($sql);
$servicios = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-purple-100">

    <main class="max-w-6xl mx-auto py-10 px-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Servicios</h1>
            <a href="crear.php" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                Crear servicio
            </a>
        </div>

        <div class="bg-white shadow rounded-xl overflow-hidden">
            <table class="w-full">
                <thead class="bg-purple-300">
                    <tr>
                        <th class="text-left px-4 py-3">ID</th>
                        <th class="text-left px-4 py-3">Nombre</th>
                        <th class="text-left px-4 py-3">Categoría</th>
                        <th class="text-left px-4 py-3">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($servicios as $servicio): ?>
                    <tr class="border-t">
                        <td class="px-4 py-3"><?php echo $servicio["id"]; ?></td>
                        <td class="px-4 py-3"><?php echo $servicio["nombre"]; ?></td>
                        <td class="px-4 py-3"><?php echo $servicio["categoria"]; ?></td>
                        <td class="px-4 py-3">
                            <a href="editar.php?id=<?php echo $servicio['id']; ?>" class="text-blue-600 mr-3">Editar</a>
                            <a href="eliminar.php?id=<?php echo $servicio['id']; ?>" class="text-red-600"
                            onclick="return confirm('¿Seguro que quieres eliminar este servicio?')">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            <a href="../dashboard.php" class="text-gray-700 underline">Volver al panel</a>
        </div>
    </main>

</body>
</html>