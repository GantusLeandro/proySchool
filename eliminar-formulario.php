<?php
include ("conexion.php");


$id = $_GET['id_pregunta'];
$eliminar = "DELETE FROM logipreguntas WHERE id_pregunta = '$id'";

$resultadoEliminar = mysqli_query($conexion, $eliminar);

if ($resultadoEliminar){
   header("Location: pgp/admin-form-vista.php");
} else{
    echo"<script>alert('No se pudo actualizar'); window.history.go(-1);</script>";
}

?>