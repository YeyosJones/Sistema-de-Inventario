<?php
include ("conexion.php");

$id_item = $_GET['id_item'];
$eliminar = "DELETE FROM item WHERE id_item = '$id_item'";

$resultadoEliminar = mysqli_query($conn, $eliminar);

if($resultadoEliminar){
    header("Location: item-list.php");
} else{
    echo"<script>alert('No se pudo eliminar'); window.history.go(-1);</script>";
}
?>