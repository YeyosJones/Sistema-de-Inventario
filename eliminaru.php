<?php
include ("conexion.php");

$id_user = $_GET['id_user'];
$eliminar = "DELETE FROM user WHERE id_user = '$id_user'";

$resultadoEliminar = mysqli_query($conn, $eliminar);

if($resultadoEliminar){
    header("Location: user-list.php");
} else{
    echo"<script>alert('No se pudo eliminar'); window.history.go(-1);</script>";
}
?>