<?php
require_once '../includes/db.php';

session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $stmt = $conexion->prepare($sql);
    $stmt->execute(["email" => $email]);

    $usuario = $stmt->fetch();

    if ($usuario && password_verify($password, $usuario["password"])) {
        $_SESSION["admin"] = $usuario["id"];
        $_SESSION["nombre"] = $usuario["nombre"];

        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Email o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow rounded-xl p-8 w-full max-w-md">
        <h1 class="text-3xl font-bold text-center mb-6">Acceso administrador</h1>

        <?php if ($error): ?>
            <p class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
                <?php echo $error; ?>
            </p>
        <?php endif; ?>

        <form method="POST" class="space-y-4">
            <div>
                <label class="block mb-1 font-medium">Email</label>
                <input type="email" name="email" required class="w-full border rounded-lg px-3 py-2">
            </div>

            <div>
                <label class="block mb-1 font-medium">Contraseña</label>
                <input type="password" name="password" required class="w-full border rounded-lg px-3 py-2">
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                Entrar
            </button>
        </form>
    </div>

</body>
</html>