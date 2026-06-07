<!DOCTYPE html>
<html lang="en">
<?php
include('template/head.php')
?>


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
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">
                                Euforia Lounge<br>Bar & Parrilla
                            </h1>

                            <p class="text-white animated slideInLeft mb-4 pb-2">
                                Sabor • Cócteles • La mejor vibra 🔥. Disfruta de nuestras parrillas,
                                anticuchos, brochetas, piqueos y bebidas exclusivas en el mejor ambiente
                                de Chimbote.
                            </p>

                            <a href="booking.php" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">
                                Reservar Mesa
                            </a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->


        <?php
        include('template/servicio.php')
        ?>



        <!-- Service End -->


        <!-- About Start -->
        <?php
        include('template/nosotros.php')
        ?>
        <!-- About End -->


        <!-- Menu Start -->
        <?php
        include('template/carta.php')
        ?>
        <!-- Menu End -->


        <!-- Reservation Start -->
        <!-- inicio  reservacion -->

        <?php
        include('template/reservacion.php')
        ?>

        <!-- fin  reservacion -->
        <!-- Reservation Start -->


        <!-- Team Start -->

        <?php
        include('template/equipo.php')
        ?>

        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">

                <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container">
                        <div class="text-center">
                            <h5 class="section-title ff-secondary text-center text-primary fw-normal">
                                Opiniones
                            </h5>
                            <h1 class="mb-5">Lo Que Dicen Nuestros Clientes</h1>
                        </div>

                        ```
                        <div class="owl-carousel testimonial-carousel">

                            <div class="testimonial-item bg-transparent border rounded p-4">
                                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                <p>
                                    El ambiente es increíble. La música, la atención y las parrillas hicieron que nuestra cena fuera perfecta. Sin duda volveremos.
                                </p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                                    <div class="ps-3">
                                        <h5 class="mb-1">María G.</h5>
                                        <small>Cliente Frecuente</small>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial-item bg-transparent border rounded p-4">
                                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                <p>
                                    Probamos las pastas y los cócteles. Todo estuvo excelente y el servicio fue muy amable desde que llegamos.
                                </p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                                    <div class="ps-3">
                                        <h5 class="mb-1">Carlos R.</h5>
                                        <small>Cena de Pareja</small>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial-item bg-transparent border rounded p-4">
                                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                <p>
                                    Uno de los mejores lugares para compartir con amigos en Chimbote. Excelente atención y una carta muy variada.
                                </p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                                    <div class="ps-3">
                                        <h5 class="mb-1">Andrea M.</h5>
                                        <small>Reunión de Amigos</small>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial-item bg-transparent border rounded p-4">
                                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                <p>
                                    El lugar tiene una decoración moderna, comida deliciosa y un ambiente perfecto para celebrar momentos especiales.
                                </p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                                    <div class="ps-3">
                                        <h5 class="mb-1">Luis P.</h5>
                                        <small>Celebración Familiar</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    ```

                </div>

            </div>
        </div>
        <!-- Testimonial End -->

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