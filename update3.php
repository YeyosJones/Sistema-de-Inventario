<?php

include("conexion.php");

        $id_user = trim($_POST['id_user']);
        $name = trim($_POST['name']);
        $apellido = trim($_POST['apellido']);
        $apellido2 = trim($_POST['apellido2']);
        $usu = trim($_POST['usu']);
        $email = trim($_POST['email']);
	    $pass = trim($_POST['pass']);
        $rol = trim($_POST['rol']);

$actualizar="UPDATE user SET name='$name', apellido='$apellido', apellido2='$apellido2', usu='$usu', email='$email', pass='$pass', rol='$rol' WHERE id_user ='$id_user'";


$resultado=mysqli_query($conn,$actualizar);

    if($resultado){
        	?> 
	    	"<script> alert('Se guardaron correctamen los cambios.');window.location= 'user-list.php' </script>";
           <?php
    }else{
       ?> 
	    	"<script> alert('No se pudieron hacer los cambios.');window.location= 'user-list.php' </script>";
           <?php
    }
?>
