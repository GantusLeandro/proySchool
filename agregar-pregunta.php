<?php;

    if(isset($_SESSION['usuario'])) {
        header('location: index.php');
    }

    
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $id = $_POST['id_pregunta'];
        $lenguaje = $_POST['lenguaje'];
        $pregunta = $_POST['pregunta'];
        $correcta = $_POST['respuesta_correcta'];
        $r1 = $_POST['respuesta_1'];
        $r2 = $_POST['respuesta_2'];
        $r3 = $_POST['respuesta_3'];
        $r4 = $_POST['respuesta_4'];
        
        
        
        $error = '';
        
        
        if ($error == ''){
            $statement = $conexion->prepare('INSERT INTO preguntas (id_pregunta, lenguaje, pregunta, respuesta_correcta, respuesta_1, respuesta_2, respuesta_3, respuesta_4) VALUES (null, :lenguaje, :pregunta, :respuesta_correcta, :respuesta_1, :respuesta_2, :respuesta_3, :respuesta_4 )');

            $statement->execute(array(
                ':lenguaje' => $lenguaje,
                ':pregunta' => $pregunta,
                ':respuesta_correcta' => $correcta,
                ':respuesta_1' => $r1,
                ':respuesta_2' => $r2,
                ':respuesta_3' => $r3,
                ':respuesta_4' => $r4,
            ));
            
            header("form.php");
        }
    }


?>