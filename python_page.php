<?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'php/python-vista.php';
    }
    if(isset($_SESSION['Ausuario'])){
        require 'php/python-vista.php';
    }
    else{
        header ('location: login.php');
    }
        
?>