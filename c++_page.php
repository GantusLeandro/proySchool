<?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'php/c++-vista.php';
    }
    if(isset($_SESSION['Ausuario'])){
        require 'php/c++-vista.php';
    }
    else{
        header ('location: login.php');
    }
        
?>