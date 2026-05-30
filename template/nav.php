<?php
$current_page = basename($_SERVER['PHP_SELF']);

function active($page)
{
    global $current_page;
    return ($current_page == $page) ? 'active' : '';
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">

    <a href="index.php" class="pt-2">
        <img src="img/logo.png" height="90" width="150" alt="Logo">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">

        <div class="navbar-nav ms-auto py-0 pe-4">

            <a href="index.php" class="nav-item nav-link <?= active('index.php') ?>">
                Inicio
            </a>

            <a href="about.php" class="nav-item nav-link <?= active('about.php') ?>">
                Nosotros
            </a>

            <a href="service.php" class="nav-item nav-link <?= active('service.php') ?>">
                Servicios
            </a>

            <a href="menu.php" class="nav-item nav-link <?= active('menu.php') ?>">
                Carta
            </a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle <?= active('booking.php') ?>" data-bs-toggle="dropdown">
                    Reservación
                </a>

                <div class="dropdown-menu m-0">
                    <a href="booking.php" class="dropdown-item">
                        Iniciar Reservación
                    </a>
                </div>
            </div>

            <a href="contact.php" class="nav-item nav-link <?= active('contact.php') ?>">
                Contacto
            </a>

        </div>

        <a href="booking.php" class="btn btn-primary py-2 px-4">
            Reservar Ahora
        </a>

    </div>

</nav>