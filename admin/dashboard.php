<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <main class="max-w-5xl mx-auto py-10 px-4">
        <div class="bg-white shadow rounded-xl p-6">
            <h1 class="text-3xl font-bold mb-2">Panel de administración</h1>
            <p class="text-gray-600 mb-6">Bienvenido, <?php echo $_SESSION["nombre"]; ?></p>

            <div class="grid md:grid-cols-2 gap-4">
                <a href="servicios/index.php" class="block bg-blue-600 text-white text-center py-4 rounded-lg hover:bg-blue-700">
                    Gestionar servicios
                </a>

                <a href="logout.php" class="block bg-red-600 text-white text-center py-4 rounded-lg hover:bg-red-700">
                    Cerrar sesión
                </a>
            </div>
        </div>
</main>

</body>
</html>