<?php
session_start();
if (!isset($_SESSION['mishuellitas989_userRol']) or $_SESSION['mishuellitas989_userRol']!=1) {
    header("Location: index.php");
    exit;
}
include("connect_db.php");
?>
<!DOCTYPE html>
<html lang="es">
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
            <a href="#" class="navbar-brand">
                <img src="img/logo2.png" alt="Nuevo Logo" class="logo">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="admin.php" class="nav-item nav-link">List</a>
                    <a href="logout.php" class="nav-item nav-link">Sign off</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Contenido -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="row ml-3 mr-3" style="margin-top: 2rem;">
                      <input type="hidden" name="datatables" id="datatables" data-pagina="1" data-consultasporpagina="10" data-filtrado="" data-municipio=""> 
                      <div class="col-xl-4 col-lg-12 form-group form-check">
                        <label for="consultasporpagina" style="color:black; font-weight: bold;">Resultados</label>
                          <select class="form-control" id="consultasporpagina" name="consultasporpagina">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                          </select>
                        </div>
                        <div class="col-xl-4 col-lg-12 form-group form-check">
                            <label for="buscarfiltro" style="color:black; font-weight: bold;">Filtrar</label>
                            <input type="text" id="buscarfiltro" name="buscarfiltro" class="form-control">
                        </div>
                        <div class="col-xl-2 col-lg-12 text-center">
                          <br>
                          <button type="button" class="btn btn-primary" style="color:white;" onclick="filtrar1();">Filtrar</button>
                        </div>
                        <div class="col-12" style="background-color: white; border-radius: 1rem; padding: 20px 1px 1px 1px;" id="resultado_table1"></div>
                      </div>
                  </div>
            </div>
        </div>

        
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

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

<?php $ubicacion_url = $_SERVER["PHP_SELF"]; ?>

<script type="text/javascript">

    $(document).ready(function() {
    filtrar1();
    });

    function paginacion1(value){
        $('#datatables').attr({'data-pagina':value})
        filtrar1();
    }
    
    function filtrar1() {
        var input_consultasporpagina = $('#consultasporpagina').val();
        var input_buscarfiltro = $('#buscarfiltro').val();

        $('#datatables').attr({
            'data-consultasporpagina': input_consultasporpagina
        })
        $('#datatables').attr({
            'data-filtrado': input_buscarfiltro
        })

        var pagina = $('#datatables').attr('data-pagina');
        var consultasporpagina = $('#datatables').attr('data-consultasporpagina');
        var filtrado = $('#datatables').attr('data-filtrado');
        var ubicacion_url = '<?php echo $ubicacion_url; ?>';

        $.ajax({
            type: 'POST',
            url: 'formularios.php',
            dataType: "JSON",
            data: {
                "pagina": pagina,
                "consultasporpagina": consultasporpagina,
                "filtrado": filtrado,
                "link1": ubicacion_url,
                "asunto": "usuarios1",
            },

            success: function(respuesta) {
                console.log(respuesta);
                $('#resultado_table1').html(respuesta["html"]);
            },

            error: function(respuesta) {
                console.log(respuesta['responseText']);
            }
        });
    }

    function estatus(id){
        filtrar1();
        $.ajax({
          type: 'POST',
          url: 'formularios.php',
          dataType: "JSON",
          data: {
            "id": id,
            "asunto": "estatusCita",
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
    }

    function eliminar(id){
        $.ajax({
          type: 'POST',
          url: 'formularios.php',
          dataType: "JSON",
          data: {
            "id": id,
            "asunto": "eliminarCita",
          },

          success: function(respuesta) {
            filtrar1();
            console.log(respuesta);
            if(respuesta["estatus"]=="ok"){
              Swal.fire({
                title: 'Correcto',
                text: respuesta["msg"],
                icon: 'success',
                position: 'center',
                timer: 5000
              });
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
    }

</script>