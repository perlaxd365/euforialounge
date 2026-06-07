<!DOCTYPE html>
<html lang="en">
<?php
include('template/head.php')
?>
<title>Contacto | Euforia Lounge Chimbote</title>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <?php
            include('template/nav.php')
            ?>
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Contacto</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="#">Pagina</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Contacto</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">

                ```
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">
                        Contáctanos
                    </h5>
                    <h1 class="mb-3">Reserva y Vive la Experiencia Euforia</h1>
                    <p class="mb-5">
                        Disfruta de nuestras parrillas, pastas, cócteles y un ambiente único en el corazón de Chimbote.
                    </p>
                </div>

                <div class="row g-4">

                    <div class="col-12">
                        <div class="row gy-4">

                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">
                                    Reservas
                                </h5>
                                <p>
                                    <i class="fa fa-phone-alt text-primary me-2"></i>
                                    +51 919 473 674
                                </p>
                            </div>

                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">
                                    Dirección
                                </h5>
                                <p>
                                    <i class="fa fa-map-marker-alt text-primary me-2"></i>
                                    Jr. Espinar 313, Chimbote
                                </p>
                            </div>

                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">
                                    Euforia Lounge
                                </h5>
                                <p>
                                    <i class="fa fa-utensils text-primary me-2"></i>
                                    Parrillas, Pastas y Cócteles
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- MAPA -->
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">

                        <iframe
                            class="position-relative rounded w-100 h-100"
                            src="https://maps.google.com/maps?q=Euforia%20Lounge%20Chimbote&t=&z=17&ie=UTF8&iwloc=&output=embed"
                            frameborder="0"
                            style="min-height: 450px; border:0;"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>

                    </div>

                    <!-- FORMULARIO -->
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">

                            <form id="contactForm">

                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text"
                                                class="form-control"
                                                id="name"
                                                placeholder="Nombre"
                                                required>
                                            <label for="name">Nombre Completo</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="tel"
                                                class="form-control"
                                                id="phone"
                                                placeholder="Teléfono"
                                                required>
                                            <label for="phone">Teléfono</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text"
                                                class="form-control"
                                                id="subject"
                                                placeholder="Asunto">
                                            <label for="subject">Asunto</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea
                                                class="form-control"
                                                placeholder="Mensaje"
                                                id="message"
                                                style="height: 180px"
                                                required></textarea>
                                            <label for="message">Mensaje</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">
                                            Contactar por WhatsApp
                                        </button>
                                    </div>

                                </div>

                            </form>

                        </div>
                    </div>

                </div>

            </div>
            ```

        </div>

        <script>
            document.getElementById("contactForm").addEventListener("submit", function(e) {

                e.preventDefault();

                let nombre = document.getElementById("name").value;
                let telefono = document.getElementById("phone").value;
                let asunto = document.getElementById("subject").value;
                let mensaje = document.getElementById("message").value;

                let texto =
                    `🍽️ *CONTACTO EUPHORIA LOUNGE*

👤 Nombre: ${nombre}
📱 Teléfono: ${telefono}
📌 Asunto: ${asunto}

📝 Mensaje:
${mensaje}

📍 Jr. Espinar 313 - Chimbote`;

                let url = "https://wa.me/51919473674?text=" + encodeURIComponent(texto);

                window.open(url, "_blank");
            });
        </script>

        <!-- Contact End -->


        <!-- Footer Start -->

        <?php
        include('template/footer.php')
        ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php
    include('template/script.php')
    ?>

</body>

</html>