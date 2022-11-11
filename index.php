<?php session_start();

    if(isset($_SESSION['usuario'])){
        header('location: principal.php');
    }
    if(isset($_SESSION['Ausuario'])){
        header('location: principal.php');
    }
    else{
        header ('location: login.php');
    }
        

?>