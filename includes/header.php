<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Nuvia</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<header class="fixed top-0 left-0 w-full bg-gradient-to-r from-[#0A1F44] to-[#3A0CA3] shadow z-50">
    <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
        
        <a href="index.php" class="flex items-center gap-3">
            <img src="/assets/logo.png" alt="Logo Clínica Nuvia" class="h-20 w-auto">
        </a>

        <!-- Menú escritorio -->
        <nav class="hidden md:flex space-x-6">
            <a href="index.php" class="text-white hover:text-[#ff5c39] font-medium">Inicio</a>
            <a href="servicios.php" class="text-white hover:text-[#ff5c39] font-medium">Servicios</a>
            <a href="estetica.php" class="text-white hover:text-[#ff5c39] font-medium">Estética</a>
            <a href="deportiva.php" class="text-white hover:text-[#ff5c39] font-medium">Deportiva</a>
            <a href="contacto.php" class="text-white hover:text-[#ff5c39] font-medium">Contacto</a>
            <a href="reservas.php" class="text-[#ff5c39] hover:text-white font-medium">Reservas</a>
        </nav>

        <!-- Botón móvil -->
        <button id="menu-btn" class="md:hidden flex flex-col gap-1">
            <span class="w-8 h-1 bg-white rounded"></span>
            <span class="w-8 h-1 bg-white rounded"></span>
            <span class="w-8 h-1 bg-white rounded"></span>
        </button>
    </div>

    <!-- Menú móvil -->
    <div id="mobile-menu" class="hidden md:hidden border-t border-white/20">
        <nav class="flex flex-col px-4 py-4 space-y-4 bg-[#0A1F44]">
            <a href="index.php" class="text-white font-medium">Inicio</a>
            <a href="servicios.php" class="text-white font-medium">Servicios</a>
            <a href="estetica.php" class="text-white font-medium">Estética</a>
            <a href="deportiva.php" class="text-white font-medium">Deportiva</a>
            <a href="contacto.php" class="text-white font-medium">Contacto</a>
            <a href="reservas.php" class="text-[#ff5c39] font-medium">Reservas</a>
        </nav>
    </div>
</header>

<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>