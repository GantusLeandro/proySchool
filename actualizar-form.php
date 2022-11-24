<?php
include ("conexion.php");


$id = $_POST['id_pregunta'];
$lenguaje = $_POST['lenguaje'];
$pregunta = $_POST['pregunta'];
$correcta = $_POST['respuesta_correcta'];
$r1 = $_POST['respuesta_1'];
$r2 = $_POST['respuesta_2'];
$r3 = $_POST['respuesta_3'];
$r4 = $_POST['respuesta_4'];


//asd//
$actualizar = "UPDATE preguntas SET id_pregunta = '$id', lenguaje='$lenguaje', pregunta='$pregunta', respuesta_correcta='$correcta', respuesta_1='$r1', respuesta_2='$r2', respuesta_3='$r3', respuesta_4='$r4'  WHERE id_pregunta = '$id'";

$resultado=mysqli_query($conexion, $actualizar);

if ($resultado){
    echo"<script>alert('Se actualizo correctamente'); window.location='form.php';</script>";
 } else{
     echo"<script>alert('No se pudo actualizar'); window.history.go(-1);</script>";
 }

?>