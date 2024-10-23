<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mis Huellitas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo2.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="../index.html" class="navbar-brand">
                <img src="img/logo2.png" alt="Nuevo Logo" class="logo">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="../index.html" class="nav-item nav-link">Home</a>
                    <a href="../about.html" class="nav-item nav-link">About Us</a>
                    <a href="../classes.html" class="nav-item nav-link">Services</a>
                    <a href="../contact.html" class="nav-item nav-link">Contact Us</a>
                    <a href="#" class="nav-item nav-link active">Login</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Page Header Start -->
        <div class="container-xxl py-5 page-header2 position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Login</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                       
                        
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Login & Registration Start -->
        <div class="container">
            <div class="row">
                <!-- Login Form -->
                <div class="col-md-6">
                    <div class="card mb-5">
                        <div class="card-header bg-primary text-white">
                            <h4 class="card-title text-center">Inicio de sesión</h4>
                        </div>
                        <div class="card-body">
                            <form action="validar.php" method="post">
                                <div class="form-group mb-3">
                                    <label for="mail" class="form-label">Correo:</label>
                                    <input type="email" class="form-control" id="mail" name="mail" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="pass" class="form-label">Contraseña:</label>
                                    <input type="password" class="form-control" id="pass" name="pass" required>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Aceptar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Registration Form -->
                <div class="col-md-6">
                    <div class="card mb-5">
                        <div class="card-header bg-primary text-white">
                            <h4 class="card-title text-center">Registro</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="registro.php">
                                <div class="form-group mb-3">
                                    <label for="realname" class="form-label">Ingresa tu nombre:</label>
                                    <input type="text" class="form-control" id="realname" name="realname" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="nick" class="form-label">Ingresa tu correo:</label>
                                    <input type="email" class="form-control" id="nick" name="nick" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="pass2" class="form-label">Ingresa tu contraseña:</label>
                                    <input type="password" class="form-control" id="pass2" name="pass2" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="rpass" class="form-label">Repite tu contraseña:</label>
                                    <input type="password" class="form-control" id="rpass" name="rpass" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Registrarse</button>
                                </div>
                            </form>
                            <!--?php
                                if(isset($_POST['submit'])){
                                    require("");
                                }
                            ?-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login & Registration End -->

        <!-- Footer Start -->

        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <h4 class="text-light mb-4">Get In Touch</h4>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Cl. 182 #76 - 50, Bogotá</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+57 3213140095</p>
                        <p><i class="fa fa-envelope me-3"></i>mishuellitas989@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/mis.huellitas.989?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/mishuellitas989?igsh=MWVxMWs3eW5wOThiOA=="><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h4 class="text-light mb-4">Business hours </h4>
                        <p><i class="fa fa-clock me-3"></i>Monday - Sunday: 9:00 a.m. - 9:00 p.m.</p>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <h4 class="text-light mb-4">Photo Gallery</h4>
                        <div class="row g-2">
                            <div class="col-4">
                                <img class="img-fluid rounded" src="img/home24.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded" src="img/home25.jpeg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded" src="img/home26.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded" src="img/home27.jpeg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded" src="img/home28.jpeg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded" src="img/home29.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center pt-4">
                <p class="m-0">&copy; <a href="../index.html">Mis Huellitas</a>
            </div>
        </div>

        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        //
    });
</script>