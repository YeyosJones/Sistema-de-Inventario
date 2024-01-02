<?php

include("conexion.php");

if (isset($_POST['register_empleado'])) {
    if (strlen($_POST['empleado_numero']) >= 1 &&
        strlen($_POST['empleado_nombre']) >= 1 &&
        strlen($_POST['empleado_apellido']) >= 1 &&
        strlen($_POST['empleado_apellido2']) >= 1 &&
        strlen($_POST['empleado_area']) >= 1 &&
        strlen($_POST['empleado_cargo']) >= 1 &&
        strlen($_POST['empleado_telefono']) >= 1 &&
        strlen($_POST['empleado_ext']) >= 1 &&
        strlen($_POST['empleado_direccion']) >= 1) {
        $empleado_numero = trim($_POST['empleado_numero']);
        $empleado_nombre = trim($_POST['empleado_nombre']);
        $empleado_apellido = trim($_POST['empleado_apellido']);
        $empleado_apellido2 = trim($_POST['empleado_apellido2']);
        $empleado_area = trim($_POST['empleado_area']);
        $empleado_cargo = trim($_POST['empleado_cargo']);
        $empleado_telefono = trim($_POST['empleado_telefono']);
        $empleado_ext = trim($_POST['empleado_ext']);
        $empleado_direccion = trim($_POST['empleado_direccion']);

	    $consulta = "INSERT INTO employee(empleado_numero, empleado_nombre, empleado_apellido, empleado_apellido2, empleado_area, empleado_cargo, empleado_telefono, empleado_ext, empleado_direccion) VALUES ('$empleado_numero','$empleado_nombre','$empleado_apellido','$empleado_apellido2','$empleado_area','$empleado_cargo','$empleado_telefono','$empleado_ext','$empleado_direccion')";
        
	    $resultado = mysqli_query($conn,$consulta);
	    if ($resultado) {
	    	?> 
	    	"<script> alert('Usuario Guardado.');window.location= 'client-new.php' </script>";
           <?php
	    } else {
	    	?> 
	    	"<script> alert('ups ha ocurrido algun error.');window.location= 'client-new.php' </script>";
           <?php
	    }
    }   else {
	    	?> 
	    	"<script> alert('Por favor complete los datos.');window.location= 'client-new.php' </script>";
           <?php
    }
}

?>