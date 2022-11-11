<?php
include ("conexion.php");


$id = $_POST['id'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$clave = hash('sha512', $clave);

//asd//
$actualizar = "UPDATE login SET id = '$id', correo='$correo', usuario='$usuario', clave='$clave' WHERE id = '$id'";

$resultado=mysqli_query($conexion, $actualizar);

if ($resultado){
    echo"<script>alert('Se han actualizado los cambios correctamente, actualize la pagina para ver los cambios'); window.location='admin.php';</script>";
 } else{
     echo"<script>alert('No se pudo actualizar'); window.history.go(-1);</script>";
 }

?>