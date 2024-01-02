<?php

include("conexion.php");

if (isset($_POST['registeri'])) {
    if (strlen($_POST['dispositivo']) >= 1 &&
        strlen($_POST['serie']) >= 1 &&
        strlen($_POST['mac']) >= 1 &&
        strlen($_POST['marca']) >= 1 &&
        strlen($_POST['modelo']) >= 1 &&
        strlen($_POST['ram']) >= 1 &&
        strlen($_POST['tprocesador']) >= 1 &&
        strlen($_POST['procesador']) >= 1 &&
        strlen($_POST['estado']) >= 1 &&
        strlen($_POST['fecha']) >= 1 &&
        strlen($_POST['asignacion']) >= 1 &&
        strlen($_POST['detalles']) >= 1) {
        $dispositivo = trim($_POST['dispositivo']);
        $serie = trim($_POST['serie']);
        $mac = trim($_POST['mac']);
        $marca = trim($_POST['marca']);
        $modelo = trim($_POST['modelo']);
	    $ram = trim($_POST['ram']);
        $tprocesador = trim($_POST['tprocesador']);
        $procesador = trim($_POST['procesador']);
        $estado = trim($_POST['estado']);
        $fecha = trim($_POST['fecha']);
        $asignacion = trim($_POST['asignacion']);
        $detalles = trim($_POST['detalles']);

	    $consulta = "INSERT INTO item(dispositivo, serie, mac, marca, modelo, ram, tprocesador, procesador, estado, fecha, asignacion, detalles) VALUES ('$dispositivo','$serie','$mac','$marca','$modelo','$ram','$tprocesador','$procesador','$estado', '$fecha','$asignacion','$detalles')";
        
	    $resultado = mysqli_query($conn,$consulta);
	    if ($resultado) {
	    	?> 
	    	"<script> alert('Item Guardado.');window.location= 'item-new.php' </script>";
           <?php
	    } else {
	    	?> 
	    	"<script> alert('ups ha ocurrido algun error.');window.location= 'item-new.php' </script>";
           <?php
	    }
    }   else {
	    	?> 
	    	"<script> alert('Por favor complete los datos.');window.location= 'item-new.php' </script>";
           <?php
    }
}

?>