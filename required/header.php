<?php require_once("afrid_creative_photos/required/config.php");
?>
<!doctype html>
<html lang="en" class="no-js">

<head>
    <title>Creative Photos</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.svg?">
    <!-- MDB 5 START -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive -->
    <link rel="stylesheet" href="css/media.css">
    <!-- <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/media.css"> -->

    <!-- OWL CAROUSEL 2 START (Ver 2.3.4) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- OWL CAROUSEL 2 END (Ver 2.3.4) -->

    <!-- FANCY BOX START -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
    <!-- FANCY BOX END -->

</head>

<body>

    <!-- PRE LOADER START -->
    <div class="flipping">
        <div class="hypnotic"></div>
    </div>
    <!-- PRE LOADER END -->

    <!-- Container -->
    <div id="container">
        <!-- Start Header -->
        <header class="clearfix center-menu">
            <nav class="navbar navbar-expand-lg navbar-light p-0 w-100">
                <!-- Container wrapper -->
                <div class="container">
                    <!-- Navbar brand -->
                    <a class="navbar-brand me-2" href="index.php">
                        <img src="assets/images/navbar/logo.svg" class="" height="50" width="180" alt="Logo" loading="lazy" />
                    </a>

                    <!-- Toggle button -->
                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars text-white"></i>
                    </button>

                    <!-- Collapsible wrapper -->
                    <div class="collapse navbar-collapse" id="navbarButtonsExample">
                        <!-- Left links -->
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex justify-content-end navbarNav" id="navbar-bg">
                            <li class="nav-item px-1">
                                <a class="nav-link text-white fw-bold" href="index.php">Home</a>
                            </li>
                            <li class="nav-item px-1">
                                <a class="nav-link text-white fw-bold" href="about.php">About</a>
                            </li>
                            <li class="nav-item px-1">
                                <a class="nav-link text-white fw-bold" href="events.php">Recent Events</a>
                            </li>
                            <li class="nav-item px-1 d-flex">


                                <!-- <div class="d-flex"> -->
                                    <a class="nav-link text-white fw-bold" href="album.php">
                                        Albums
                                    </a>
                                    <i class="fas fa-angle-down text-white fa-lg mt-3" id="album-dropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false"></i>
                                <!-- </div> -->

                                <div class="dropdown-menu mt-0 mx-auto px-3" aria-labelledby="album-dropdown" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 mt-4 col-lg-4 mb-4 mb-lg-0">
                                                <div class="row mb-4 flex-column text-center">
                                                    <div class="col-12">
                                                        <div class="text-center">
                                                            <img src="assets/images/resource/about-img-1.jpg" width="65" class="img-fluid shadow-1-strong rounded-circle" alt="Dj" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 my-auto">
                                                        <p class="" style="color: #F20487;">
                                                            <strong>Engagement Shoot</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mb-4 flex-column text-center">
                                                    <div class="col-12">
                                                        <div class="text-center">
                                                            <img src="assets/images/resource/about-img-1.jpg" width="65" class="img-fluid shadow-1-strong rounded-circle" alt="Dj" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 my-auto">
                                                        <p class="" style="color: #F20487;">
                                                            <strong>Baby Shower</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mb-4 flex-column text-center">
                                                    <div class="col-12">
                                                        <div class="text-center">
                                                            <img src="assets/images/resource/about-img-1.jpg" width="65" class="img-fluid shadow-1-strong rounded-circle" alt="Dj" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 my-auto">
                                                        <p class="" style="color: #F20487;">
                                                            <strong>Wedding Shoot</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mb-4 flex-column text-center">
                                                    <div class="col-12">
                                                        <div class="text-center">
                                                            <img src="assets/images/resource/about-img-1.jpg" width="65" class="img-fluid shadow-1-strong rounded-circle" alt="Dj" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 my-auto">
                                                        <p class="" style="color: #F20487;">
                                                            <strong>Baby Portfolio</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-4 col-lg-4 mb-4 mb-lg-0">
                                                <div class="row mb-4 flex-column text-center">
                                                    <div class="col-12">
                                                        <div class="text-center">
                                                            <img src="assets/images/resource/about-img-1.jpg" width="65" class="img-fluid shadow-1-strong rounded-circle" alt="Dj" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 my-auto">
                                                        <p class="" style="color: #F20487;">
                                                            <strong>Event Planner</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mb-4 flex-column text-center">
                                                    <div class="col-12">
                                                        <div class="text-center">
                                                            <img src="assets/images/resource/about-img-1.jpg" width="65" class="img-fluid shadow-1-strong rounded-circle" alt="Dj" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 my-auto">
                                                        <p class="" style="color: #F20487;">
                                                            <strong>Birthday Party</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mb-4 flex-column text-center">
                                                    <div class="col-12">
                                                        <div class="text-center">
                                                            <img src="assets/images/resource/about-img-1.jpg" width="65" class="img-fluid shadow-1-strong rounded-circle" alt="Dj" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 my-auto">
                                                        <p class="" style="color: #F20487;">
                                                            <strong>Pre-Wedding Photos</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mb-4 flex-column text-center">
                                                    <div class="col-12">
                                                        <div class="text-center">
                                                            <img src="assets/images/resource/about-img-1.jpg" width="65" class="img-fluid shadow-1-strong rounded-circle" alt="Dj" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 my-auto">
                                                        <p class="" style="color: #F20487;">
                                                            <strong>Wedding Photos</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-4 col-lg-4 mb-4 mb-lg-0">
                                                <div class="row mb-4 flex-column text-center">
                                                    <div class="col-12">
                                                        <div class="text-center">
                                                            <img src="assets/images/resource/about-img-1.jpg" width="65" class="img-fluid shadow-1-strong rounded-circle" alt="Dj" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 my-auto">
                                                        <p class="" style="color: #F20487;">
                                                            <strong>Communian</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mb-4 flex-column text-center">
                                                    <div class="col-12">
                                                        <div class="text-center">
                                                            <img src="assets/images/resource/about-img-1.jpg" width="65" class="img-fluid shadow-1-strong rounded-circle" alt="Dj" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 my-auto">
                                                        <p class="" style="color: #F20487;">
                                                            <strong>Munjhe</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mb-4 flex-column text-center">
                                                    <div class="col-12">
                                                        <div class="text-center">
                                                            <img src="assets/images/resource/about-img-1.jpg" width="65" class="img-fluid shadow-1-strong rounded-circle" alt="Dj" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 my-auto">
                                                        <p class="" style="color: #F20487;">
                                                            <strong>Maternity Shoot</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>

                            <li class="nav-item px-1">
                                <a class="nav-link text-white fw-bold" href="contact.php">Contact</a>
                            </li>
                        </ul>

                        <div class="d-flex align-items-center justify-content-end w-100">
                            <ul class="d-flex my-auto">
                                <li class="list-unstyled mx-2">
                                    <!-- Whatsapp -->
                                    <a class="btn btn-outline-white
                                     btn-floating m-1" target="_blank" href="https://wa.me/+123456789" role="button"><i class="fab fa-whatsapp icon_zoom"></i></a>
                                </li>
                                <li class="list-unstyled mx-2">
                                    <!-- Facebook -->
                                    <a class="btn btn-outline-white
                                     btn-floating m-1" target="_blank" href="https://www.facebook.com/linkhere" role="button"><i class="fab fa-facebook-f icon_zoom"></i></a>
                                </li>
                                <li class="list-unstyled mx-2">
                                    <!-- Instagram -->
                                    <a class="btn btn-outline-white
                                     btn-floating m-1" target="_blank" href="https://www.instagram.com/linkhere" role="button"><i class="fab fa-instagram icon_zoom"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Collapsible wrapper -->
                </div>
                <!-- Container wrapper -->
            </nav>

        </header>




        <!-- End Header -->