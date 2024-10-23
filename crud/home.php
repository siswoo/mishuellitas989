<?php
session_start();
if (!isset($_SESSION['mishuellitas989_userRol']) or $_SESSION['mishuellitas989_userRol']!=2) {
    header("Location: index.php");
    exit;
}
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

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.4/dist/sweetalert2.min.css" rel="stylesheet">
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
            <a href="index.html" class="navbar-brand">
                <img src="img/logo2.png" alt="Nuevo Logo" class="logo">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="home.php" class="nav-item nav-link active">My Profile</a>
                    <a href="about.php" class="nav-item nav-link">Pet Profile</a>
                    <a href="services.php" class="nav-item nav-link">Scheduling</a>
                    <a href="logout.php" class="nav-item nav-link">Sign off</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Page Header Start -->
        <div class="container-xxl py-5 page-header2 position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">My Profile</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Appointment Form Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="bg-light text-center rounded p-5">
                            <h1 class="mb-4">Datos Personales</h1>
                            <form method="post" action="#" id="formulario1">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="form-label"><b>Ingresa tu nombre</b></label>
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Ingresa tu nombre" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="surname" class="form-label"><b>Apellido</b></label>
                                            <input type="text" id="surname" name="surname" class="form-control" placeholder="Apellido" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fecha" class="form-label"><b>Fecha de Nacimiento</b></label>
                                            <input type="date" id="fecha" name="fecha" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="telefono" class="form-label"><b>Telefono</b></label>
                                            <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="celular" class="form-label"><b>Celular</b></label>
                                            <input type="text" id="celular" name="celular" class="form-control" placeholder="Celular" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="direccion" class="form-label"><b>Dirección</b></label>
                                            <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Dirección" required />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="submit" class="btn btn-primary w-100">Guardar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment Form End -->

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.4/dist/sweetalert2.all.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <?php
    $nombre = "";
    $apellido = "";
    $fechaNacimiento = "";
    $telefono = "";
    $celular = "";
    $direccion = "";
    include("connect_db.php");
    $sql1 = "SELECT * FROM persona WHERE loginId =".$_SESSION['mishuellitas989_userId'];
    $proceso1 = mysqli_query($conexion,$sql1);
    $contador1 = mysqli_num_rows($proceso1);
    if($contador1>0){
        while($row1=mysqli_fetch_array($proceso1)){
            $nombre = $row1["nombre"];
            $apellido = $row1["apellido"];
            $fechaNacimiento = $row1["fechaNacimiento"];
            $telefono = $row1["telefono"];
            $celular = $row1["celular"];
            $direccion = $row1["direccion"];
        }
    }
    ?>

<input type="hidden" name="userId" id="userId" value="<?php echo $_SESSION['mishuellitas989_userId']; ?>">

</body>
</html>

<script type="text/javascript">
    $(document).ready(function() {
        var nombre = <?php echo json_encode($nombre); ?>;
        var surname = <?php echo json_encode($apellido); ?>;
        var fecha = <?php echo json_encode($fechaNacimiento); ?>;
        var telefono = <?php echo json_encode($telefono); ?>;
        var celular = <?php echo json_encode($celular); ?>;
        var direccion = <?php echo json_encode($direccion); ?>;
        $('#name').val(nombre);
        $('#surname').val(surname);
        $('#fecha').val(fecha);
        $('#telefono').val(telefono);
        $('#celular').val(celular);
        $('#direccion').val(direccion);
    });

    $("#formulario1").on("submit", function(e){
        e.preventDefault();
        var userId = $('#userId').val();
        var name = $('#name').val();
        var surname = $('#surname').val();
        var fecha = $('#fecha').val();
        var telefono = $('#telefono').val();
        var celular = $('#celular').val();
        var direccion = $('#direccion').val();
        $.ajax({
          type: 'POST',
          url: 'formularios.php',
          dataType: "JSON",
          data: {
            "userId": userId,
            "name": name,
            "surname": surname,
            "fecha": fecha,
            "telefono": telefono,
            "celular": celular,
            "direccion": direccion,
            "asunto": "datosPersonales",
        },

        success: function(respuesta) {
            console.log(respuesta);
            if(respuesta["estatus"]=="ok"){
                Swal.fire({
                    title: 'Correcto',
                    text: respuesta["msg"],
                    icon: 'success',
                    position: 'center',
                    timer: 5000
                });
              //window.location.href = respuesta["redireccion"];
            }else if(respuesta["estatus"]=="error"){
              Swal.fire({
                title: 'Error',
                text: respuesta["msg"],
                icon: 'error',
                position: 'center',
                timer: 5000
              });
            }
          },

          error: function(respuesta) {
            console.log(respuesta['responseText']);
          }
        });
    });
</script>