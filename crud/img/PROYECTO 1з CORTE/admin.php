<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
    header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
    header("Location:index2.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Proyecto Academias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header>
<div class="row">
    <?php
    include("include/cabecera.php");
    ?>
</div>
</header>

  <!-- Navbar
    ========================================== -->

<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
      <div class="nav-collapse">
        <ul class="nav">
            <li class=""><a href="admin.php">ADMINISTRADOR DEL SITIO</a></li>


            </ul>
            <form action="#" class="navbar-search from-inline" style="margin-top:6px">
            	
            </form>
            <ul class="nav pull-right">
            <li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
                  <li><a href="desconectar.php"> cerrar cesion</a></li>
            </ul>
          </div><!-- /.nav_collapse -->
        </div>
      </div><!-- /navbar-inner -->
    </div>

<!-- ========================================================================================================== -->
<div class="row">



    <div class="span12">

        <div class="caption">

<!--//////////////////////////////////Emppieza cuerpo del documento interno/////////////////////////////////////-->
        <h2>Administracion de usuarios registrados</h2>
        <div class="well well-small">
        <hr class="soft"/>
        <h4>Tabla de usuarios</h4>
        <div class="row-fluid">




        <?php 

            require("connect_db.php");
            $sql=("SELECT * FROM login");

//la variable $mysqli viene de connect_db que lo trigo con el requiere("connect_db.php");
            $query=mysqli_query($mysqli,$sql);

            echo "<table border='1'; class='table table-hover';>";
                echo "<tr class='warning'>";
                    echo "<td>Id</td>";
                    echo "<td>Usuario</td>";
                    echo "<td>Passwoed</td>";
                    echo "<td>Correo</td>";
                    echo "<td>Pasword del administrador</td>";
                    echo "<td>Editar</td>";
                    echo "<td>Borrar</td>";
                echo "</tr>";


            ?>

            <?php
                 while ($arreglo=mysqli_fetch_array($query)){
                 	echo "<tr class='succss'>";
                        echo "<td>$arreglo[0]</td>";
                        echo "<td>$arreglo[1]</td>";
                        echo "<td>$arreglo[2]</td>";
                        echo "<td>$arreglo[3]</td>";
                        echo "<td>$arreglo[4]</td>";

                        echo ""
