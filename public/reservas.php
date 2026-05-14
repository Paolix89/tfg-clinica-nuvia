<?php require_once '../includes/header.php'; ?>

<main>

    <section class="hero-nos">
        <div class="hero-img">
            <img src="/assets/img/hall2.png" alt="Reserva de cita Clínica Nuvia">
        </div>

        <div class="hero-overlay"></div>

        <div class="hero-contenido">
            <h1>Reserva tu cita</h1>
           <!-- <p>
                Solicita información o accede a Treatwell para gestionar tu reserva de forma externa.
            </p>-->
        </div>
    </section>

    <section class="cta-tratamientos">

        <div class="cta-box">

            <p class="texto-superior">
                Reserva online
            </p>

            <h2>
                Gestión de citas mediante Treatwell
            </h2>

            <p>
                Clínica Nuvia contempla la integración con la plataforma Treatwell para facilitar
                la reserva de citas online. Actualmente, al tratarse de un proyecto en desarrollo,
                el enlace dirige a la página principal de Treatwell hasta disponer de un perfil público
                específico de la clínica.
            </p>

            <div class="cta-botones">
                <a href="https://www.treatwell.es/"
                   target="_blank"
                   class="btn-secundario hover-btn">
                    Ir a Treatwell
                </a>

                <a href="/public/contacto.php"
                   class="btn-principal hover-btn">
                    Contactar
                </a>
            </div>

        </div>

        <div class="formulario-cta">

            <h3>
                Solicitud de información
            </h3>

            <form>

                <div class="form-grid">
                    <input type="text" placeholder="Nombre y apellidos*">
                    <input type="tel" placeholder="Teléfono*">
                </div>

                <div class="form-grid">
                    <input type="email" placeholder="Email*">

                    <select>
                        <option>Tipo de consulta</option>
                        <option>Medicina estética</option>
                        <option>Medicina deportiva</option>
                        <option>Infiltraciones</option>
                        <option>Bienestar integral</option>
                    </select>
                </div>

                <textarea placeholder="Mensaje opcional..."></textarea>

                <button type="submit" class="btn-formulario">
                    Enviar solicitud
                </button>

            </form>

        </div>

    </section>

</main>

<?php require_once '../includes/footer.php'; ?>