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

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.4/dist/sweetalert2.min.css" rel="stylesheet">

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
            <a href="index.html" class="navbar-brand">
                <img src="img/logo2.png" alt="Nuevo Logo" class="logo">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="home.php" class="nav-item nav-link">My Profile</a>
                    <a href="about.php" class="nav-item nav-link active">Pet Profile</a>
                    <a href="services.php" class="nav-item nav-link">Scheduling</a>
                    <div class="nav-item dropdown">
                        
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="facility.html" class="dropdown-item">School Facilities</a>
                            <a href="team.html" class="dropdown-item">Popular Teachers</a>
                            <a href="call-to-action.html" class="dropdown-item">Become A Teachers</a>
                            <a href="appointment.html" class="dropdown-item">Make Appointment</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                        </div>
                    </div>
                    
                    <a href="logout.php" class="nav-item nav-link">Sign off</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header2 position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Pet Profile</h1>
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
                            <h1 class="mb-4">Datos personales de tu mascota # 1</h1>
                            <form method="post" action="#" id="formulario1">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="form-label"><b>Ingresa su nombre</b></label>
                                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingresa su nombre" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="edad" class="form-label"><b>Edad</b></label>
                                            <input type="date" id="edad" name="edad" class="form-control" placeholder="Edad" required />
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="raza" class="form-label"><b>Raza</b></label>
                                            <input type="text" id="raza" name="raza" class="form-control" placeholder="Raza" required />
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="genero" class="form-label"><b>Género</b></label>
                                            <input type="text" id="genero" name="genero" class="form-control" placeholder="Género" required />
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="alimentacion" class="form-label"><b>Alimenación y dieta</b></label>
                                            <input type="text" id="alimentacion" name="alimentacion" class="form-control" placeholder="Alimentación y dieta" required />
                                            </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="horarioAlimentacion" class="form-label"><b>Horario de alimentación</b></label>
                                            <input type="text" id="horarioAlimentacion" name="horarioAlimentacion" class="form-control" placeholder="Horario de alimentación" required />
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="vacunacion" class="form-label"><b>Vacunación al día</b></label>
                                            <select id="vacunacion" name="vacunacion" class="form-control" required>
                                                <option value="Sí">Sí</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="miedos" class="form-label"><b>Miedos y fobias</b></label>
                                            <input type="text" id="miedos" name="miedos" class="form-control" placeholder="Miedos y fobias" required />
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="esterilizacion" class="form-label"><b>Esterilización</b></label>
                                            <select id="esterilizacion" name="esterilizacion" class="form-control" required>
                                                <option value="Sí">Sí</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="medicamentos" class="form-label"><b>Medicamentos actuales</b></label>
                                            <input type="text" id="medicamentos" name="medicamentos" class="form-control" placeholder="Medicamentos actuales" required />
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="energia" class="form-label"><b>Nivel de energía</b></label>
                                            <select id="energia" name="energia" class="form-control" required>
                                                <option value="Alta">Alta</option>
                                                <option value="Media">Media</option>
                                                <option value="Baja">Baja</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="informacion" class="form-label"><b>Información adicional</b></label>
                                            <input type="text" id="informacion" name="informacion" class="form-control" placeholder="Información adicional" required />
                                            </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Appointment Form Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="bg-light text-center rounded p-5">
                            <h1 class="mb-4">Datos personales de tu mascota # 2</h1>
                            <form method="post" action="#" id="formulario2">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nombre2" class="form-label"><b>Ingresa su nombre</b></label>
                                            <input type="text" id="nombre2" name="nombre2" class="form-control" placeholder="Ingresa su nombre" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="edad2" class="form-label"><b>Edad</b></label>
                                            <input type="date" id="edad2" name="edad2" class="form-control" placeholder="Edad" required />
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="raza2" class="form-label"><b>Raza</b></label>
                                            <input type="text" id="raza2" name="raza2" class="form-control" placeholder="Raza" required />
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="genero2" class="form-label"><b>Género</b></label>
                                            <input type="text" id="genero2" name="genero2" class="form-control" placeholder="Género" required />
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="alimentacion2" class="form-label"><b>Alimenación y dieta</b></label>
                                            <input type="text" id="alimentacion2" name="alimentacion2" class="form-control" placeholder="Alimentación y dieta" required />
                                            </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="horarioAlimentacion2" class="form-label"><b>Horario de alimentación</b></label>
                                            <input type="text" id="horarioAlimentacion2" name="horarioAlimentacion2" class="form-control" placeholder="Horario de alimentación" required />
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="vacunacion2" class="form-label"><b>Vacunación al día</b></label>
                                            <select id="vacunacion2" name="vacunacion2" class="form-control" required>
                                                <option value="Sí">Sí</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="miedos2" class="form-label"><b>Miedos2 y fobias</b></label>
                                            <input type="text" id="miedos2" name="miedos" class="form-control" placeholder="Miedos y fobias" required />
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="esterilizacion2" class="form-label"><b>Esterilización</b></label>
                                            <select id="esterilizacion2" name="esterilizacion2" class="form-control" required>
                                                <option value="Sí">Sí</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="medicamentos2" class="form-label"><b>Medicamentos actuales</b></label>
                                            <input type="text" id="medicamentos2" name="medicamentos2" class="form-control" placeholder="Medicamentos actuales" required />
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="energia2" class="form-label"><b>Nivel de energía</b></label>
                                            <select id="energia2" name="energia2" class="form-control" required>
                                                <option value="Alta">Alta</option>
                                                <option value="Media">Media</option>
                                                <option value="Baja">Baja</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="informacion2" class="form-label"><b>Información adicional</b></label>
                                            <input type="text" id="informacion2" name="informacion2" class="form-control" placeholder="Información adicional" required />
                                            </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
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
</body>

</html>

    <?php
    $nombre = "";
    $edad = "";
    $raza = "";
    $genero = "";
    $alimentacion = "";
    $horarioAlimentacion = "";
    $vacunacion = "";
    $miedos = "";
    $esterilizacion = "";
    $medicamentos = "";
    $energia = "";
    $informacion = "";

    $nombre2 = "";
    $edad2 = "";
    $raza2 = "";
    $genero2 = "";
    $alimentacion2 = "";
    $horarioAlimentacion2 = "";
    $vacunacion2 = "";
    $miedos2 = "";
    $esterilizacion2 = "";
    $medicamentos2 = "";
    $energia2 = "";
    $informacion2 = "";

    include("connect_db.php");
    $sql1 = "SELECT * FROM perro WHERE loginId =".$_SESSION['mishuellitas989_userId'];
    $proceso1 = mysqli_query($conexion,$sql1);
    $contador1 = mysqli_num_rows($proceso1);
    if($contador1>0){
        while($row1=mysqli_fetch_array($proceso1)){
            $formulario = $row1["formulario"];
            if($formulario=="1"){
                $nombre = $row1["nombre"];
                $edad = $row1["edad"];
                $raza = $row1["raza"];
                $genero = $row1["genero"];
                $alimentacion = $row1["alimentacion"];
                $horarioAlimentacion = $row1["horarioAlimentacion"];
                $vacunacion = $row1["vacunacion"];
                $miedos = $row1["miedos"];
                $esterilizacion = $row1["esterilizacion"];
                $medicamentos = $row1["medicamentos"];
                $energia = $row1["energia"];
                $informacion = $row1["informacion"];
            }else{
                $nombre2 = $row1["nombre"];
                $edad2 = $row1["edad"];
                $raza2 = $row1["raza"];
                $genero2 = $row1["genero"];
                $alimentacion2 = $row1["alimentacion"];
                $horarioAlimentacion2 = $row1["horarioAlimentacion"];
                $vacunacion2 = $row1["vacunacion"];
                $miedos2 = $row1["miedos"];
                $esterilizacion2 = $row1["esterilizacion"];
                $medicamentos2 = $row1["medicamentos"];
                $energia2 = $row1["energia"];
                $informacion2 = $row1["informacion"];
            }
        }
    }
    ?>

<input type="hidden" name="userId" id="userId" value="<?php echo $_SESSION['mishuellitas989_userId']; ?>">

</body>
</html>

<script type="text/javascript">
    $(document).ready(function() {
        var nombre = <?php echo json_encode($nombre); ?>;
        var edad = <?php echo json_encode($edad); ?>;
        var raza = <?php echo json_encode($raza); ?>;
        var genero = <?php echo json_encode($genero); ?>;
        var alimentacion = <?php echo json_encode($alimentacion); ?>;
        var horarioAlimentacion = <?php echo json_encode($horarioAlimentacion); ?>;
        var vacunacion = <?php echo json_encode($vacunacion); ?>;
        var miedos = <?php echo json_encode($miedos); ?>;
        var esterilizacion = <?php echo json_encode($esterilizacion); ?>;
        var medicamentos = <?php echo json_encode($medicamentos); ?>;
        var energia = <?php echo json_encode($energia); ?>;
        var informacion = <?php echo json_encode($informacion); ?>;

        var nombre2 = <?php echo json_encode($nombre2); ?>;
        var edad2 = <?php echo json_encode($edad2); ?>;
        var raza2 = <?php echo json_encode($raza2); ?>;
        var genero2 = <?php echo json_encode($genero2); ?>;
        var alimentacion2 = <?php echo json_encode($alimentacion2); ?>;
        var horarioAlimentacion2 = <?php echo json_encode($horarioAlimentacion2); ?>;
        var vacunacion2 = <?php echo json_encode($vacunacion2); ?>;
        var miedos2 = <?php echo json_encode($miedos2); ?>;
        var esterilizacion2 = <?php echo json_encode($esterilizacion2); ?>;
        var medicamentos2 = <?php echo json_encode($medicamentos2); ?>;
        var energia2 = <?php echo json_encode($energia2); ?>;
        var informacion2 = <?php echo json_encode($informacion2); ?>;

        $('#nombre').val(nombre);
        $('#edad').val(edad);
        $('#raza').val(raza);
        $('#genero').val(genero);
        $('#alimentacion').val(alimentacion);
        $('#horarioAlimentacion').val(horarioAlimentacion);
        $('#vacunacion').val(vacunacion);
        $('#miedos').val(miedos);
        $('#esterilizacion').val(esterilizacion);
        $('#medicamentos').val(medicamentos);
        $('#energia').val(energia);
        $('#informacion').val(informacion);

        $('#nombre2').val(nombre2);
        $('#edad2').val(edad2);
        $('#raza2').val(raza2);
        $('#genero2').val(genero2);
        $('#alimentacion2').val(alimentacion2);
        $('#horarioAlimentacion2').val(horarioAlimentacion2);
        $('#vacunacion2').val(vacunacion2);
        $('#miedos2').val(miedos2);
        $('#esterilizacion2').val(esterilizacion2);
        $('#medicamentos2').val(medicamentos2);
        $('#energia2').val(energia2);
        $('#informacion2').val(informacion2);
    });

    $("#formulario1").on("submit", function(e){
        e.preventDefault();
        var userId = $('#userId').val();
        var nombre = $('#nombre').val();
        var edad = $('#edad').val();
        var raza = $('#raza').val();
        var genero = $('#genero').val();
        var alimentacion = $('#alimentacion').val();
        var horarioAlimentacion = $('#horarioAlimentacion').val();
        var vacunacion = $('#vacunacion').val();
        var miedos = $('#miedos').val();
        var esterilizacion = $('#esterilizacion').val();
        var medicamentos = $('#medicamentos').val();
        var energia = $('#energia').val();
        var informacion = $('#informacion').val();
        $.ajax({
          type: 'POST',
          url: 'formularios.php',
          dataType: "JSON",
          data: {
            "userId": userId,
            "nombre": nombre,
            "edad": edad,
            "raza": raza,
            "genero": genero,
            "alimentacion": alimentacion,
            "horarioAlimentacion": horarioAlimentacion,
            "vacunacion": vacunacion,
            "miedos": miedos,
            "esterilizacion": esterilizacion,
            "medicamentos": medicamentos,
            "energia": energia,
            "informacion": informacion,
            "asunto": "perro1",
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

    $("#formulario2").on("submit", function(e){
        e.preventDefault();
        var userId = $('#userId').val();
        var nombre = $('#nombre2').val();
        var edad = $('#edad2').val();
        var raza = $('#raza2').val();
        var genero = $('#genero2').val();
        var alimentacion = $('#alimentacion2').val();
        var horarioAlimentacion = $('#horarioAlimentacion2').val();
        var vacunacion = $('#vacunacion2').val();
        var miedos = $('#miedos2').val();
        var esterilizacion = $('#esterilizacion2').val();
        var medicamentos = $('#medicamentos2').val();
        var energia = $('#energia2').val();
        var informacion = $('#informacion2').val();
        $.ajax({
          type: 'POST',
          url: 'formularios.php',
          dataType: "JSON",
          data: {
            "userId": userId,
            "nombre": nombre,
            "edad": edad,
            "raza": raza,
            "genero": genero,
            "alimentacion": alimentacion,
            "horarioAlimentacion": horarioAlimentacion,
            "vacunacion": vacunacion,
            "miedos": miedos,
            "esterilizacion": esterilizacion,
            "medicamentos": medicamentos,
            "energia": energia,
            "informacion": informacion,
            "asunto": "perro2",
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
