<?php require_once '../includes/header.php'; ?>

<main class="max-w-6xl mx-auto pt-28 pb-10 px-4">

    <h1 class="text-4xl font-bold text-center mb-10">
        Servicios desde API
    </h1>

    <div id="contenedor-servicios" class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Aquí se cargarán los servicios con JavaScript -->
    </div>

</main>

<?php require_once '../includes/footer.php'; ?>

<script>
fetch('/api/servicios.php')
    .then(response => response.json())
    .then(servicios => {
        const contenedor = document.getElementById('contenedor-servicios');

        servicios.forEach(servicio => {
            const tarjeta = document.createElement('article');

            tarjeta.className = 'bg-white shadow rounded-xl p-6';

            tarjeta.innerHTML = `
                ${servicio.imagen ? `
                    <img src="/${servicio.imagen.replace(/^\/+/, '')}" 
                         alt="${servicio.nombre}" 
                         class="w-full h-48 object-cover rounded-lg mb-4">
                ` : ''}

                <h2 class="text-2xl font-semibold mb-3">
                    ${servicio.nombre}
                </h2>

                <p class="text-sm text-blue-600 font-medium mb-2">
                    ${servicio.categoria}
                </p>

                <p class="text-gray-700">
                    ${servicio.descripcion}
                </p>
            `;

            contenedor.appendChild(tarjeta);
        });
    })
    .catch(error => {
        console.error('Error al cargar servicios:', error);
    });
</script>