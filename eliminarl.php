<?php
include ("conexion.php");

$id_employee = $_GET['id_employee'];
$eliminar = "DELETE FROM employee WHERE id_employee = '$id_employee'";

$resultadoEliminar = mysqli_query($conn, $eliminar);


if($resultadoEliminar){
    header("Location: client-list.php");
} else{
    echo"<script>alert('No se pudo eliminar'); window.history.go(-1);</script>";
}

?>