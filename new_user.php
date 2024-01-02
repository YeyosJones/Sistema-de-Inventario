<?php

include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['apellido2']) >= 1 &&
        strlen($_POST['usu']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['pass']) >= 1 &&
        strlen($_POST['rol']) >= 1) {
        $name = trim($_POST['name']);
        $apellido = trim($_POST['apellido']);
        $apellido2 = trim($_POST['apellido2']);
        $usu = trim($_POST['usu']);
        $email = trim($_POST['email']);
	    $pass = trim($_POST['pass']);
        $rol = trim($_POST['rol']);

	    $consulta = "INSERT INTO user(name, apellido, apellido2, usu, email, pass, rol) VALUES ('$name','$apellido','$apellido2','$usu','$email','$pass','$rol')";
        
	    $resultado = mysqli_query($conn,$consulta);
	    if ($resultado) {
	    	?> 
	    	"<script> alert('Usuario Guardado.');window.location= 'user-new.php' </script>";
           <?php
	    } else {
	    	?> 
	    	"<script> alert('ups ha ocurrido algun error.');window.location= 'user-new.php' </script>";
           <?php
	    }
    }   else {
	    	?> 
	    	"<script> alert('Por favor complete los datos.');window.location= 'user-new.php' </script>";
           <?php
    }
}

?>