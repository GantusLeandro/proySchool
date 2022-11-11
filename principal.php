<?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'php/principal-vista.php';
    }
    if(isset($_SESSION['Ausuario'])){
        require 'php/principal-vista.php';
    }
    else{
        header ('location: login.php');
    }
        
?>