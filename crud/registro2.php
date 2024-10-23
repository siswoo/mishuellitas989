<?php

	$name=$_POST['name'];
	$fecha=$_POST['fecha'];
	$hora= $_POST['hora'];
	$especialista=$_POST['especialista'];
	$medico=$_POST['medico'];

	require("connect_db2.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db2.php");
	// Verificar si ya existe una cita con la misma hora, fecha y médico
$check_cita = mysqli_query($mysqli, "SELECT * FROM cita WHERE fecha='$fecha' AND hora='$hora' AND medico='$medico'");
if (mysqli_rows($check_cita) = 0) {
    echo '<script language="javascript">alert("Ya existe una cita para esta hora, fecha y médico.");</script>';
} else {
    // Insertar la cita en la base de datos
    mysqli_query($mysqli, "INSERT INTO cita (nombre, fecha, hora, especialista, medico) VALUES ('$name', '$fecha', '$hora', '$especialista', '$medico')");
    echo '<script language="javascript">alert("Cita registrada con éxito");</script>';
}
?>

