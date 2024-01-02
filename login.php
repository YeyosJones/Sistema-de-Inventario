<?php

include("conexion.php");

$usu = $_POST["usuario"];
$pass   = $_POST["pass"];


//Login
$connection = mysqli_connect('localhost','root','','invcudec'); $query = "SELECT * FROM user"; $result = mysqli_query($connection, $query);
 $consulta= "SELECT * FROM user WHERE usu ='$usu' and pass='$pass'";
 $resultado=mysqli_query($connection,$consulta);
	
 if ($filas=mysqli_fetch_assoc($resultado)){
 	session_start();
     $_SESSION['usuario']='$usuario';
     $_SESSION['name']=$filas["name"];
     $_SESSION['apellido']=$filas["apellido"];
     $_SESSION['apellido2']=$filas["apellido2"];
     $_SESSION['usu']=$filas["usu"];
     $_SESSION['email']=$filas["email"];
     $_SESSION['rol']=$filas["rol"];
     
    header("location:home.php");
 }
 else
 {
     ?> 
	    	"<script> alert('Contraseña o Usuario incorrectos.');window.location= 'index.html' </script>";
           <?php
 }
 
?>	