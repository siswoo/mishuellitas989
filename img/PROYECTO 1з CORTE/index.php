<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	    <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
	    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<title>Proyecto academias</title>
</head>
<body background="images/golf.jpg" style="background-attachment: fixed">
	<center><div class="tit"><h2 style="color: #0000FF; ">Inicio de sesión</h2>
		<center><div class="Ingreso">

	<table border="0" align="center" valing="middle">
		<tr>
		<td rowspan="2">
		<form action="validar.php" method="post">

		<table border="0">

		<tr><td><label style="font-size: 14pt"><b>Correo: </b></label></td>
			<td width=80> <input class="form-group has-succes" style="border-radius:15px;" type="text" name="mail"></td></tr>
		<tr><td><label style="font-size: 14pt"><b>Contraseña: </b></label></td>
			<td width=80> <input style="border-radius: 15px;" type="password" name="pass"></td></tr>
		<tr><td></td>
			<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
		</tr></tr></table>
	</form>
</br>
<!--formulario registro -->

<form method="post" action="">
   <fieldset>
   	 <legend style="font-size: 18pt"><b>Registro</b></legend>
   	 <div class="form-group">
   	 	<label style="font-size: 14pt"                                 ><b>Ingresa tu nombre</b></label>
   	 	<input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
   	 </div>
   	 <div class="form-group">
   	 	<label style="font-size: 14pt"><b>Ingresa tu email</b></label>
   	 	<input type="text" name="nick" class="form-control" required placeholder="Ingresa tu mail">
   	 </div>
   	 <div class="form-group">
   	 	<label style="font-size: 14pt"><b>Ingresa tu password</b></label>
   	 	<input type="password" name="pass" class="form-control" placeholder="Ingresa tu Contraseña" />
   	 </div>
   	 <div class="form-group">
   	 	<label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
   	 	<input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
   	 </div>

   	</div>

   	<input class="btn btn-danger" type="submit" name="submit" value="Registgrase" />

   </fieldset>
</form>
</div>
<?php
          if(isset($_POST['submit'])){
          	   require("registro.php");
          	}
        ?>
<!--fin formulario registro -->

        </td>
        </tr>
        </table>
        </div></center></div></center>


</body>
</html>       