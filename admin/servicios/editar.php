<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: ../login.php");
    exit;
}

require_once '../../includes/db.php';

if (!isset($_GET["id"])) {
    header("Location: index.php");
    exit;
}

$id = $_GET["id"];

$sql = "SELECT * FROM servicios WHERE id = :id";
$stmt = $conexion->prepare($sql);
$stmt->execute(["id" => $id]);
$servicio = $stmt->fetch();

if (!$servicio) {
    header("Location: index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $categoria = $_POST["categoria"];
    $imagen = $servicio["imagen"]; //mantenemos la imagen que teniamos
    //Si sube una imagen, se reemplaza por la que ya había
    if (!empty($_FILES["imagen"]["name"])) {

        $nombreImagen = time() . "_" . $_FILES["imagen"]["name"];

        $rutaDestino = "../../assets/img/" . $nombreImagen;

        move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaDestino);

        $imagen = "assets/img/" . $nombreImagen;
    }


    $sql = "UPDATE servicios 
            SET nombre = :nombre, descripcion = :descripcion, categoria = :categoria, imagen = :imagen
            WHERE id = :id";

    $stmt = $conexion->prepare($sql);
    $stmt->execute([
        "nombre" => $nombre,
        "descripcion" => $descripcion,
        "categoria" => $categoria,
        "imagen" => $imagen,
        "id" => $id
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
    <title>Editar servicio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <main class="max-w-2xl mx-auto py-10 px-4">
        <div class="bg-white shadow rounded-xl p-6">
            <h1 class="text-3xl font-bold mb-6">Editar servicio</h1>

            <form method="POST" enctype="multipart/form-data" class="space-y-4">
                <div>
                    <label class="block mb-1 font-medium">Nombre</label>
                    <input type="text" name="nombre" value="<?php echo $servicio["nombre"]; ?>" required class="w-full border rounded-lg px-3 py-2">
                </div>

                <div>
                    <label class="block mb-1 font-medium">Descripción</label>
                    <textarea name="descripcion" required class="w-full border rounded-lg px-3 py-2"><?php echo $servicio["descripcion"]; ?></textarea>
                </div>

                <div>
                    <label class="block mb-1 font-medium">Categoría</label>
                    <select name="categoria" class="w-full border rounded-lg px-3 py-2">
                    <option value="Estética" 
                    <?php if ($servicio["categoria"] == "Estética") echo "selected"; ?>>
                    Estética
                    </option>

                    <option value="Deportiva"
                    <?php if ($servicio["categoria"] == "Deportiva") echo "selected"; ?>>
                    Deportiva
                    </option>

                    </select>
                </div>

                <div class="mb-4">
                    <label class="block font-medium mb-2">Imagen</label>
                    <input type="file" name="imagen" class="w-full border rounded-lg px-3 py-2">
                
                    <?php if (!empty($servicio["imagen"])): ?>
                        <p>Imagen actual:</p>
                        <img src="/<?php echo $servicio["imagen"]; ?>" alt="<?php echo $servicio["nombre"]; ?>" class="w-40 rounded-lg mb-4">
                    <?php endif; ?>
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    Actualizar
                </button>
            </form>

            <div class="mt-4">
                <a href="index.php" class="text-gray-700 underline">Volver</a>
            </div>
        </div>
</main>

</body>
</html>