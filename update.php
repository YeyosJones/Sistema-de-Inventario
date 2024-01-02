<?php

include("conexion.php");

        $id_employee = trim($_POST['id_employee']);
        $empleado_numero = trim($_POST['empleado_numero']);
        $empleado_nombre = trim($_POST['empleado_nombre']);
        $empleado_apellido = trim($_POST['empleado_apellido']);
        $empleado_apellido2 = trim($_POST['empleado_apellido2']);
        $empleado_area = trim($_POST['empleado_area']);
        $empleado_cargo = trim($_POST['empleado_cargo']);
        $empleado_telefono = trim($_POST['empleado_telefono']);
        $empleado_ext = trim($_POST['empleado_ext']);
        $empleado_direccion = trim($_POST['empleado_direccion']);

$actualizar="UPDATE employee SET empleado_numero='$empleado_numero', empleado_nombre='$empleado_nombre', empleado_apellido='$empleado_apellido', empleado_apellido2='$empleado_apellido2', empleado_area='$empleado_area', empleado_cargo='$empleado_cargo', empleado_telefono='$empleado_telefono', empleado_ext='$empleado_ext', empleado_direccion='$empleado_direccion' WHERE id_employee ='$id_employee'";

$resultado=mysqli_query($conn,$actualizar);

    if($resultado){
        	?> 
	    	"<script> alert('Se guardaron correctamen los cambios.');window.location= 'client-list.php' </script>";
           <?php
    }else{
       ?> 
	    	"<script> alert('No se pudieron hacer los cambios.');window.location= 'client-list.php' </script>";
           <?php
    }
?>