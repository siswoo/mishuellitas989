<?php


extract($_POST);    //extraer todos los valores  del metodo post del formulario de actualizar
    require("connect_db.php");
    $sentencia="update login set user='$user', password='$pass', email='$email', pasadmin='$pasadmin', where id='$id'";
    //la variable $mysqli viene de connect_db que lo traigo con el requiere("connect_db.php");
    $resent=mysqli_query($mysqli,$sentencia);
    if ($resent==null) {
    	echo "error de procesamiento no se ha actualizado los datos";
    	echo '<script>alert("ERROR EN PROSESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
    	header("location: admin.php");

    	echo "<script>location.href='admin.php'</script>";
    }else {
    	echo '<script>alert("REGISTRO ACTUALIZADO")</script>';

    	echo "<script>location.href='admin,php'</script";

    }
?>