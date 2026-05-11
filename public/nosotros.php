<?php require_once '../includes/header.php'; ?>

<main class="pt-32">

    <!-- CABECERA -->
    <section class="bg-gradient-to-r from-[#0A1F44] to-[#3A0CA3] text-white py-20">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Sobre Clínica Nuvia
            </h1>

            <p class="text-lg max-w-3xl mx-auto">
                Un equipo especializado en medicina estética y medicina deportiva,
                orientado a ofrecer una atención cercana, profesional y personalizada.
            </p>
        </div>
    </section>

    <!-- PRESENTACIÓN -->
    <section class="max-w-6xl mx-auto px-4 py-16">
        <div class="tarjeta p-8 text-center">
            <h2 class="text-3xl font-bold mb-4">
                Nuestra filosofía
            </h2>

            <p class="text-gray-700 max-w-3xl mx-auto">
                En Clínica Nuvia trabajamos con un enfoque integral, combinando tratamientos
                de medicina estética y medicina deportiva para mejorar el bienestar, la salud
                y la confianza de cada paciente.
            </p>
        </div>
    </section>

    <!-- EQUIPO MÉDICO -->
    <section class="max-w-6xl mx-auto px-4 pb-16">
        <h2 class="text-3xl font-bold text-center mb-10">
            Nuestro equipo médico
        </h2>

        <div class="grid md:grid-cols-3 gap-6">

             <article class="tarjeta p-6 text-center">
                <img src="/assets/img/dr/doctor.jpg" 
                     alt="Dr. Javier Ruiz" 
                     class="w-32 h-32 object-cover rounded-full mx-auto mb-4">

                <h3 class="text-xl font-semibold mb-2">
                    Dr. Javier Ruiz
                </h3>

                <p class="texto-acento font-medium mb-3">
                    Medicina Estética
                </p>

                <p class="text-gray-700">
                    Especialista en valoración, recuperación y prevención de lesiones deportivas.
                </p>
            </article>


            <article class="tarjeta p-6 text-center">
                <img src="/assets/img/dr/doctora.png" 
                     alt="Dra. Laura Martín" 
                     class="w-32 h-32 object-cover rounded-full mx-auto mb-4">

                <h3 class="text-xl font-semibold mb-2">
                    Dra. Laura Martín
                </h3>

                <p class="texto-acento font-medium mb-3">
                    Medicina estética y deportiva
                </p>

                <p class="text-gray-700">
                    Especialista en tratamientos faciales, rejuvenecimiento y cuidado estético personalizado.
                </p>
            </article>

           
            <article class="tarjeta p-6 text-center">
                <img src="/assets/img/dr/fisio.jpg" 
                     alt="Deportista Olímpico Alex Sousa" 
                     class="w-32 h-32 object-cover rounded-full mx-auto mb-4">

                <h3 class="text-xl font-semibold mb-2">
                    Deportista Olímpico Alex Sousa
                </h3>

                <p class="texto-acento font-medium mb-3">
                    Fisioterapia y recuperación funcional
                </p>

                <p class="text-gray-700">
                    Profesional especializada en recuperación muscular, movilidad y seguimiento funcional.
                </p>
            </article>

        </div>
    </section>

</main>

<?php require_once '../includes/footer.php'; ?>