<?php
	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass2'];
	$rpass=$_POST['rpass'];

	require("connect_db.php");

	$sql1 = "SELECT * FROM login WHERE email = '$mail'";
	$proceso1 = mysqli_query($conexion,$sql1);
	$contador1 = mysqli_num_rows($proceso1);
	if($contador1>0){
		echo '<script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script>';
	}else{
		$sql2 = "INSERT INTO login (user,password,email,rol) VALUES ('$realname','$pass','$mail',2)";
		$proceso2 = mysqli_query($conexion,$sql2);
		echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
		echo "<script>location.href='index.php'</script>";
	}
	
?>