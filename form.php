<?php session_start();

    if(isset($_SESSION['Ausuario'])){
        require 'php/admin-form-vista.php';
    }else{
        header ('location: login.php');
    }
        
?>