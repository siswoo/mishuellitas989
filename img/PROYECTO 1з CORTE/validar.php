
<?php
//incluide("connect_db.php");

//$miconexion = new connect_db;


session_start();
    require("connect_db.php");

    $nombre = $_POST['mail'];
    $pass = $_POST['pass'];


    //la variable $mysqli viene connect_db que lo traigo con el requiere ("connect_db.php")
    $sql2=mysqli_query($mysqli, "SELECT * FROM login WHERE email='$nombre'");
    if($f2=mysqli_fetch_assoc($sql2)){
    	if($pass==$f2['pasadmin']){
    		$_SESSION['id']=$f2['id'];
    		$_SESSION['user']=$f2['user'];
    		$_SESSION['rol']=$f2['rol'];

    		echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script>';
    		echo "<script>location.href='admin.php'</script>";

    	}
    }


    $sql=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$nombre'");
    if($f=mysqli_fetch_assoc($sql)){
    	if($pass==$f['password']){
    		$_SESSION['id']=$f['id'];
    		$_SESSION['user']=$f['user'];
    		$_SESSION['rol']=$f['rol'];

    		echo '<script>alert("BIENVENIDO USUARIO")</script>';
            echo "<script>location.href='index2.php'</script>";
    	}else{
    		echo '<script>alert("CONTRASEÑA INCORRECTA")</script>';

    		echo "<script>location.href='index.php'</script>";
    	}
    }else{ 

    	echo '<script>alert("ESTE USUARIO NO EXISTE, POR FAVOR REGISTRARSE PARA PODER INGRESAR")</script>';

    	echo "<script>location.href='index.php'</script>";
    	
    }

?>