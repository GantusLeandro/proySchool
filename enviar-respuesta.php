<?php;

    if(isset($_SESSION['usuario'])) {
        header('location: index.php');
    }

    
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $id = $_POST['id'];
        $usuario = $_POST['id_usuario'];
        $pregunta = $_POST['id_pregunta'];
        $respuesta = $_POST['respuesta'];
        
        
        $error = '';
        
        if (empty($usuario) or empty($pregunta) or empty($respuesta)){
            
            $error .= '<i>Favor de rellenar todos los campos</i>';
        }else{
            try{
                $conexion = new PDO('mysql:host=localhost;dbname=abm1', 'root', '');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
            
        
        if ($error == ''){
            $statement = $conexion->prepare('INSERT INTO respuesta (id, id_usuario, id_pregunta, respuesta) VALUES (null, usuario, pregunta, respuesta)');
            $statement->execute(array(
                
                ':usuario' => $usuario,
                ':pregunta' => $pregunta,
                ':respuesta' => $respuesta
                
            ));
            
            header("php/clases-vista.php");
        }
    }


    require 'php/clases-vista.php';

?>