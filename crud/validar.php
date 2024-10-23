<?php
session_start();
require("connect_db.php");

$username = $_POST['mail'];
$pass = $_POST['pass'];

$sql1 = "SELECT * FROM login WHERE email = '$username' and password = '$pass'";
$proceso1 = mysqli_query($conexion,$sql1);
$contador1 = mysqli_num_rows($proceso1);
if($contador1>0){
    while($row1=mysqli_fetch_array($proceso1)){
        $userId = $row1["id"];
        $userRol = $row1["rol"];
    }
    session_start();
    $_SESSION['mishuellitas989_userId'] = $userId;
    $_SESSION['mishuellitas989_userRol'] = $userRol;
    if($userId==1){
        echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script>';
        echo "<script>location.href='admin.php'</script>";
    }else{
        echo '<script>alert("BIENVENIDO USUARIO")</script>';
        echo "<script>location.href='home.php'</script>";
    }
}else{
    echo '<script>alert("CREDENCIALES INCORRECTAS")</script>';
}

?>


