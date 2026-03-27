<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: ../login.php");
    exit;
}

require_once '../../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $categoria = $_POST["categoria"];
    $imagen = "";
    if (!empty($_FILES["imagen"]["name"])) {

        $nombreImagen = time() . "_" . $_FILES["imagen"]["name"];

        $rutaDestino = "../../assets/img/" . $nombreImagen;

        move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaDestino);

        $imagen = "assets/img/" . $nombreImagen;
    }

    $sql = "INSERT INTO servicios (nombre, descripcion, categoria, imagen, estado) 
            VALUES (:nombre, :descripcion, :categoria, :imagen, 1)";

    $stmt = $conexion->prepare($sql);
    $stmt->execute([
        "nombre" => $nombre,
        "descripcion" => $descripcion,
        "categoria" => $categoria,
        "imagen" => $imagen 
    ]);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear servicio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <main class="max-w-2xl mx-auto py-10 px-4">
        <div class="bg-white shadow rounded-xl p-6">
            <h1 class="text-3xl font-bold mb-6">Crear servicio</h1>

            <form method="POST" enctype="multipart/form-data" class="space-y-4">
                <div>
                    <label class="block mb-1 font-medium">Nombre</label>
                    <input type="text" name="nombre" required class="w-full border rounded-lg px-3 py-2">
                </div>

                <div>
                    <label class="block mb-1 font-medium">Descripción</label>
                    <textarea name="descripcion" required class="w-full border rounded-lg px-3 py-2"></textarea>
                </div>

                <div>
                    <label class="block mb-1 font-medium">Categoría</label>
                    <select name="categoria" required class="w-full border rounded-lg px-3 py-2">
                        <option value="">Seleccionar categoría</option>
                        <option value="Estética">Estética</option>
                        <option value="Deportiva">Deportiva</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block font-medium mb-2">Imagen</label>
                    <input type="file" name="imagen" class="w-full border rounded-lg px-3 py-2">
                </div>

                <div>  
                <button type="submit" class=" bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                    Guardar
                </button>
                </div>
            </form>

            <div class="mt-4">
                <a href="index.php" class="text-gray-700 underline">Volver</a>
            </div>
        </div>
    </main>

</body>
</html>