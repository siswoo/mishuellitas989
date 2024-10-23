<?php

    $realname=$_POST['realname'];
    $mail=$_POST['nick'];
    $pass=$_POST['pass'];
    $rpass=$_POST['rpass'];

    require("connect_db.php");
//la variable $mysqli viene de connect_db que lo traigo con el requiere("connect_db.php");
    $checkmail=mysqli_query($mysqli, "SELECT * FROM login WHERE email='$mail'");
    $checkmail=mysqli_num_rows($checkmail);
        if($pass==$rpass){
        	if($checkmail>0){
        		echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> '
        		;
        	}else{

        		//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el requiere("connect_db.php");
        		mysqli_query($mysqli,"INSERT INTO login VALUES('', '$realname', '$pass', '$mail', '', '2')");
        		//echo 'se ha registrado con exito';
        		echo ' <script language="javascript">alert("usuario registrado con éxito");</script ';

        	}

        }else{
        	echo 'Las contraseñas son incorrecta';
        }


?>        
