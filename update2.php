<?php

include("conexion.php");

        $id_item = trim($_POST['id_item']);
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

$actualizar="UPDATE item SET dispositivo='$dispositivo', serie='$serie', mac='$mac', marca='$marca', modelo='$modelo', ram='$ram', tprocesador='$tprocesador', procesador='$procesador', estado='$estado', asignacion='$asignacion', fecha='$fecha', detalles='$detalles' WHERE id_item ='$id_item'";

$resultado=mysqli_query($conn,$actualizar);

    if($resultado){
        	?> 
	    	"<script> alert('Se guardaron correctamen los cambios.');window.location= 'item-list.php' </script>";
           <?php
    }else{
       ?> 
	    	"<script> alert('No se pudieron hacer los cambios.');window.location= 'item-list.php' </script>";
           <?php
    }
?>