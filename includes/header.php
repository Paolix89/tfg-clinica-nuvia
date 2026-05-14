<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Nuvia</title>
    <link rel="icon" type="image/png" href="/assets/loguito.png">

    <link rel="stylesheet" href="/assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Literata:opsz,wght@7..72,200..900&display=swap"
        rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <header id="header" class="header">
        <div class="header-contenedor">

            <a href="/public/index.php" class="logo-link">
                <img src="/assets/logoOro.png" alt="Logo Clínica Nuvia" class="logo-img">
            </a>

            <nav class="menu-escritorio fuente-literata">
                <a href="/public/index.php" class="menu-link">Inicio</a>
                <a href="/public/nosotros.php" class="menu-link menu-link-destacado">Nosotros</a>
                <div class="menu-dropdown">
                    <a href="/public/servicios.php" class="menu-link">
                        Tratamientos
                    </a>
                    <div class="submenu">
                        <a href="/public/servicios.php?categoria=estetica">Medicina estética facial</a>
                        <a href="/public/servicios.php?categoria=deportiva">Medicina deportiva</a>
                        <a href="/public/servicios.php?categoria=infiltraciones">Infiltraciones y tratamientos
                            articulares</a>
                        <a href="/public/servicios.php?categoria=bienestar">Bienestar integral</a>
                    </div>
                </div>
                <a href="/public/reservas.php" class="menu-link menu-link-destacado">Reservas</a>
                <a href="/public/contacto.php" class="menu-link">Contacto</a>

            </nav>

            <button id="menu-btn" class="menu-btn" type="button aria-label=" Abrir menú de navegación"">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>

        <div id="mobile-menu" class="menu-movil oculto">
            <nav class="menu-movil-nav fuente-literata">
                <a href="/public/index.php" class="menu-movil-link">Inicio</a>
                <a href="/public/nosotros.php" class="menu-movil-link menu-link-destacado">Nosotros</a>
                <a href="/public/servicios.php" class="menu-movil-link">Tratamientos</a>
                <a href="/public/servicios.php?categoria=estetica" class="menu-movil-link">Medicina estética facial</a>
                <a href="/public/servicios.php?categoria=deportiva" class="menu-movil-link">Medicina deportiva</a>
                <a href="/public/servicios.php?categoria=infiltraciones" class="menu-movil-link">Infiltraciones</a>
                <a href="/public/servicios.php?categoria=bienestar" class="menu-movil-link">Bienestar integral</a>
                <a href="/public/reservas.php" class="menu-movil-link menu-link-destacado">Reservas</a>
                <a href="/public/contacto.php" class="menu-movil-link">Contacto</a>

            </nav>
        </div>
    </header>

    <script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('oculto');
    });
    </script>

    <script>
    const header = document.getElementById('header');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('header-scroll');
        } else {
            header.classList.remove('header-scroll');
        }
    });
    </script>