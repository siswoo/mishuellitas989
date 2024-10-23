<?php
session_start();
require("connect_db.php");
$asunto = $_POST['asunto'];

if($asunto=="datosPersonales"){
    $userId = $_POST['userId'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $fecha = $_POST['fecha'];
    $telefono = $_POST['telefono'];
    $celular = $_POST['celular'];
    $direccion = $_POST['direccion'];

    $sql2 = "SELECT * FROM persona WHERE loginId = ".$userId;
    $proceso2 = mysqli_query($conexion,$sql2);
    $contador2 = mysqli_num_rows($proceso2);
    if($contador2>0){
        $sql3 = "UPDATE persona SET nombre = '$name', apellido = '$surname', fechaNacimiento = '$fecha', telefono = '$telefono',celular = '$celular', direccion = '$direccion' WHERE loginId = ".$userId;
        $proceso3 = mysqli_query($conexion,$sql3);

        $datos = [
            "estatus"   => "ok",
            "msg"  => "Se ha modificado exitosamente",
        ];
        echo json_encode($datos);
        exit;
    }else{
        $sql1 = "INSERT INTO persona (loginId,nombre,apellido,fechaNacimiento,telefono,celular,direccion) VALUES ($userId,'$name','$surname','$fecha','$telefono','$celular','$direccion')";
        $proceso1 = mysqli_query($conexion,$sql1);

        $datos = [
            "estatus"   => "ok",
            "msg"  => "Se ha creado exitosamente",
        ];
        echo json_encode($datos);
        exit;
    }
}

if($asunto=="perro1"){
    $userId = $_POST['userId'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $raza = $_POST['raza'];
    $genero = $_POST['genero'];
    $alimentacion = $_POST['alimentacion'];
    $horarioAlimentacion = $_POST['horarioAlimentacion'];
    $vacunacion = $_POST['vacunacion'];
    $miedos = $_POST['miedos'];
    $esterilizacion = $_POST['esterilizacion'];
    $medicamentos = $_POST['medicamentos'];
    $energia = $_POST['energia'];
    $informacion = $_POST['informacion'];

    $sql2 = "SELECT * FROM perro WHERE loginId = $userId and formulario = '1'";
    $proceso2 = mysqli_query($conexion,$sql2);
    $contador2 = mysqli_num_rows($proceso2);
    if($contador2>0){
        $sql3 = "UPDATE perro SET nombre = '$nombre', edad = '$edad', raza = '$raza', genero = '$genero', alimentacion = '$alimentacion', horarioAlimentacion = '$horarioAlimentacion', vacunacion = '$vacunacion', miedos = '$miedos', esterilizacion = '$esterilizacion', medicamentos = '$medicamentos', energia = '$energia', informacion = '$informacion' WHERE loginId = $userId and formulario = '1'";
        $proceso3 = mysqli_query($conexion,$sql3);

        $datos = [
            "estatus"   => "ok",
            "msg"  => "Se ha modificado exitosamente",
        ];
        echo json_encode($datos);
        exit;
    }else{
        $sql1 = "INSERT INTO perro (loginId,nombre,edad,raza,genero,alimentacion,horarioAlimentacion,vacunacion,miedos,esterilizacion,medicamentos,energia,informacion,formulario) VALUES ($userId,'$nombre','$edad','$raza','$genero','$alimentacion','$horarioAlimentacion','$vacunacion','$miedos','$esterilizacion','$medicamentos','$energia','$informacion','1')";
        $proceso1 = mysqli_query($conexion,$sql1);

        $datos = [
            "estatus"   => "ok",
            "msg"  => "Se ha creado exitosamente",
        ];
        echo json_encode($datos);
        exit;
    }
}

if($asunto=="perro2"){
    $userId = $_POST['userId'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $raza = $_POST['raza'];
    $genero = $_POST['genero'];
    $alimentacion = $_POST['alimentacion'];
    $horarioAlimentacion = $_POST['horarioAlimentacion'];
    $vacunacion = $_POST['vacunacion'];
    $miedos = $_POST['miedos'];
    $esterilizacion = $_POST['esterilizacion'];
    $medicamentos = $_POST['medicamentos'];
    $energia = $_POST['energia'];
    $informacion = $_POST['informacion'];

    $sql2 = "SELECT * FROM perro WHERE loginId = $userId and formulario = '2'";
    $proceso2 = mysqli_query($conexion,$sql2);
    $contador2 = mysqli_num_rows($proceso2);
    if($contador2>0){
        $sql3 = "UPDATE perro SET nombre = '$nombre', edad = '$edad', raza = '$raza', genero = '$genero', alimentacion = '$alimentacion', horarioAlimentacion = '$horarioAlimentacion', vacunacion = '$vacunacion', miedos = '$miedos', esterilizacion = '$esterilizacion', medicamentos = '$medicamentos', energia = '$energia', informacion = '$informacion' WHERE loginId = $userId and formulario = '2'";
        $proceso3 = mysqli_query($conexion,$sql3);

        $datos = [
            "estatus"   => "ok",
            "msg"  => "Se ha modificado exitosamente",
        ];
        echo json_encode($datos);
        exit;
    }else{
        $sql1 = "INSERT INTO perro (loginId,nombre,edad,raza,genero,alimentacion,horarioAlimentacion,vacunacion,miedos,esterilizacion,medicamentos,energia,informacion,formulario) VALUES ($userId,'$nombre','$edad','$raza','$genero','$alimentacion','$horarioAlimentacion','$vacunacion','$miedos','$esterilizacion','$medicamentos','$energia','$informacion','2')";
        $proceso1 = mysqli_query($conexion,$sql1);

        $datos = [
            "estatus"   => "ok",
            "msg"  => "Se ha creado exitosamente",
        ];
        echo json_encode($datos);
        exit;
    }
}

if($asunto=="citas"){
    $userId = $_POST['userId'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $entrada = $_POST['entrada'];
    $salida = $_POST['salida'];
    $centroComercial = $_POST['centroComercial'];
    $servicio = $_POST['servicio'];
    $telefono = $_POST['telefono'];

    $sql2 = "SELECT * FROM cita WHERE loginId = ".$userId;
    $proceso2 = mysqli_query($conexion,$sql2);
    $contador2 = mysqli_num_rows($proceso2);
    if($contador2>0){
        $sql3 = "UPDATE cita SET nombre = '$nombre', fecha = '$fecha', entrada = '$entrada', salida = '$salida', centroComercial = '$centroComercial', servicio = '$servicio', telefono = '$telefono' WHERE loginId = ".$userId;
        $proceso3 = mysqli_query($conexion,$sql3);

        $datos = [
            "estatus"   => "ok",
            "msg"  => "Se ha modificado exitosamente",
        ];
        echo json_encode($datos);
        exit;
    }else{
        $sql1 = "INSERT INTO cita (loginId,nombre,fecha,entrada,salida,centroComercial,servicio,telefono,estatus) VALUES ($userId,'$nombre','$fecha','$entrada','$salida','$centroComercial','$servicio','$telefono','Proceso')";
        $proceso1 = mysqli_query($conexion,$sql1);

        $datos = [
            "estatus"   => "ok",
            "msg"  => "Se ha creado exitosamente",
        ];
        echo json_encode($datos);
        exit;
    }
}

if($asunto=='usuarios1'){
        $pagina = $_POST["pagina"];
        $consultasporpagina = $_POST["consultasporpagina"];
        $filtrado = $_POST["filtrado"];

        if($pagina==0 or $pagina==''){
            $pagina = 1;
        }

        if($consultasporpagina==0 or $consultasporpagina==''){
            $consultasporpagina = 10;
        }

        if($filtrado!=''){
            $filtrado = ' and (nombre LIKE "%'.$filtrado.'%")';
        }

        $limit = $consultasporpagina;
        $offset = ($pagina - 1) * $consultasporpagina;

        $sql1 = "SELECT * FROM cita WHERE id != 0 ".$filtrado;
        $sql2 = "SELECT * FROM cita WHERE id != 0 ".$filtrado. " ORDER BY id DESC LIMIT ".$limit." OFFSET ".$offset;
        $proceso1 = mysqli_query($conexion,$sql1);
        $proceso2 = mysqli_query($conexion,$sql2);
        $conteo1 = mysqli_num_rows($proceso1);
        $paginas = ceil($conteo1 / $consultasporpagina);

        $html = '';

        $html .= '
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Fecha</th>
                        <th class="text-center">Entrada</th>
                        <th class="text-center">Salida</th>
                        <th class="text-center">Centro Comercial</th>
                        <th class="text-center">Servicio</th>
                        <th class="text-center">Teléfono</th>
                        <th class="text-center">Estatus</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
        ';
        if($conteo1>=1){
            while($row2 = mysqli_fetch_array($proceso2)) {
                $id = $row2["id"];
                $nombre = $row2["nombre"];
                $fecha = $row2["fecha"];
                $entrada = $row2["entrada"];
                $salida = $row2["salida"];
                $centroComercial = $row2["centroComercial"];
                $servicio = $row2["servicio"];
                $telefono = $row2["telefono"];
                $estatus = $row2["estatus"];
                $html .= '
                            <tr id="">
                                <td style="text-align:center;">'.$nombre.'</td>
                                <td style="text-align:center;">'.$fecha.'</td>
                                <td style="text-align:center;">'.$entrada.'</td>
                                <td style="text-align:center;">'.$salida.'</td>
                                <td style="text-align:center;">'.$centroComercial.'</td>
                                <td style="text-align:center;">'.$servicio.'</td>
                                <td style="text-align:center;">'.$telefono.'</td>
                                <td style="text-align:center;">'.$estatus.'</td>
                                <td style="text-align:center;">
                                    <a href="editar1.php?id='.$id.'" style="text-decoration:none;">
                                        <button type="button" class="btn btn-primary" style="color:white;">Editar</button>
                                    </a>
                                    <button type="button" class="btn btn-primary" onclick="estatus('.$id.',2)">Atendido</button>
                                    <button type="button" class="btn btn-danger" onclick="eliminar('.$id.')">Eliminar</button>
                                </td>
                            </tr>
                ';
            }
        }else{
            $html .= '<tr><td colspan="9" class="text-center" style="font-weight:bold;font-size:20px;">Sin Resultados</td></tr>';
        }

        $html .= '
                    </tbody>
                </table>
                <nav>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 text-center">
                            <p>Mostrando '.$consultasporpagina.' de '.$conteo1.' Datos disponibles</p>
                        </div>
                        <div class="col-xs-12 col-sm-4 text-center">
                            <p>Página '.$pagina.' de '.$paginas.' </p>
                        </div> 
                        <div class="col-xs-12 col-sm-4">
                            <nav aria-label="Page navigation" style="float:right; padding-right:2rem;">
                                <ul class="pagination">
        ';
        
        if ($pagina > 1) {
            $html .= '
                                    <li class="page-item">
                                        <a class="page-link" onclick="paginacion1('.($pagina-1).');" href="#">
                                            <span aria-hidden="true">Anterior</span>
                                        </a>
                                    </li>
            ';
        }

        $diferenciapagina = 3;
        
        /*********MENOS********/
        if($pagina==2){
            $html .= '
                                    <li class="page-item">
                                        <a class="page-link" onclick="paginacion1('.($pagina-1).');" href="#">
                                            '.($pagina-1).'
                                        </a>
                                    </li>
            ';
        }else if($pagina==3){
            $html .= '
                                    <li class="page-item">
                                        <a class="page-link" onclick="paginacion1('.($pagina-2).');" href="#"">
                                            '.($pagina-2).'
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" onclick="paginacion1('.($pagina-1).');" href="#"">
                                            '.($pagina-1).'
                                        </a>
                                    </li>
        ';
        }else if($pagina>=4){
            $html .= '
                                    <li class="page-item">
                                        <a class="page-link" onclick="paginacion1('.($pagina-3).');" href="#"">
                                            '.($pagina-3).'
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" onclick="paginacion1('.($pagina-2).');" href="#"">
                                            '.($pagina-2).'
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" onclick="paginacion1('.($pagina-1).');" href="#"">
                                            '.($pagina-1).'
                                        </a>
                                    </li>
            ';
        } 

        /*********MAS********/
        $opcionmas = $pagina+3;
        if($paginas==0){
            $opcionmas = $paginas;
        }else if($paginas>=1 and $paginas<=4){
            $opcionmas = $paginas;
        }
        
        for ($x=$pagina;$x<=$opcionmas;$x++) {
            $html .= '
                                    <li class="page-item 
            ';

            if ($x == $pagina){ 
                $html .= '"active"';
            }

            $html .= '">';

            $html .= '
                                        <a class="page-link" onclick="paginacion1('.($x).');" href="#"">'.$x.'</a>
                                    </li>
            ';
        }

        if ($pagina < $paginas) {
            $html .= '
                                    <li class="page-item">
                                        <a class="page-link" onclick="paginacion1('.($pagina+1).');" href="#"">
                                            <span aria-hidden="true">Siguiente</span>
                                        </a>
                                    </li>
            ';
        }

        $html .= '

                            </ul>
                        </nav>
                    </div>
                </nav>
            </div>
        ';

        $datos = [
            "estatus"   => "ok",
            "html"  => $html,
        ];
        echo json_encode($datos);
    }

if($asunto=="editarCita"){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $entrada = $_POST['entrada'];
    $salida = $_POST['salida'];
    $centroComercial = $_POST['centroComercial'];
    $servicio = $_POST['servicio'];
    $telefono = $_POST['telefono'];

    $sql2 = "SELECT * FROM cita WHERE id = ".$id;
    $proceso2 = mysqli_query($conexion,$sql2);
    $contador2 = mysqli_num_rows($proceso2);
    if($contador2>0){
        $sql3 = "UPDATE cita SET nombre = '$nombre', fecha = '$fecha', entrada = '$entrada', salida = '$salida', centroComercial = '$centroComercial', servicio = '$servicio', telefono = '$telefono' WHERE id = ".$id;
        $proceso3 = mysqli_query($conexion,$sql3);

        $datos = [
            "estatus"   => "ok",
            "msg"  => "Se ha modificado exitosamente",
        ];
        echo json_encode($datos);
        exit;
    }else{
        $datos = [
            "estatus"   => "error",
            "msg"  => "No se ha conseguido el registro",
        ];
        echo json_encode($datos);
        exit;
    }
}

if($asunto=="estatusCita"){
    $id = $_POST['id'];
    $sql2 = "SELECT * FROM cita WHERE id = ".$id;
    $proceso2 = mysqli_query($conexion,$sql2);
    $contador2 = mysqli_num_rows($proceso2);
    if($contador2>0){
        $sql3 = "UPDATE cita SET estatus = 'Atendido' WHERE id = ".$id;
        $proceso3 = mysqli_query($conexion,$sql3);

        $datos = [
            "estatus"   => "ok",
            "msg"  => "Se ha modificado exitosamente",
        ];
        echo json_encode($datos);
        exit;
    }else{
        $datos = [
            "estatus"   => "error",
            "msg"  => "No se ha conseguido el registro",
        ];
        echo json_encode($datos);
        exit;
    }
}

if($asunto=="eliminarCita"){
    $id = $_POST['id'];
    $sql2 = "SELECT * FROM cita WHERE id = ".$id;
    $proceso2 = mysqli_query($conexion,$sql2);
    $contador2 = mysqli_num_rows($proceso2);
    if($contador2>0){
        $sql3 = "DELETE FROM cita WHERE id = ".$id;
        $proceso3 = mysqli_query($conexion,$sql3);

        $datos = [
            "estatus"   => "ok",
            "msg"  => "Se ha eliminado exitosamente",
        ];
        echo json_encode($datos);
        exit;
    }else{
        $datos = [
            "estatus"   => "error",
            "msg"  => "No se ha conseguido el registro",
        ];
        echo json_encode($datos);
        exit;
    }
}

?>


