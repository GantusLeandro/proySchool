<?php 
 $conn = mysqli_connect('localhost', 'root', '', 'abm1'); 
 if (!$conn) { 
 die("Connection Failed");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=si, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta name="description" content="d">
    <meta name="generator" content="Hugo 0.88.1">
        <!-- <link rel="stylesheet" href="css/Semantic-UI-CSS-master/semantic.css"> -->
    <title>Programación</title>


<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }


      .modal {
     background: rgba(255, 255, 255, 0.8);
}
.modal-backdrop {
     display: none;
}
    </style>

    <link href="../css/estilos-admin.css" rel="stylesheet">
  </head>
  <body>

    
  <header>
    
    <nav class="navbar navbar-expand-lg navbar-dark " style="margin-top:-3rem; z-index: 10;">
      <div class="container-fluid">
        
      <a class="navbar-brand" href="../principal.php">PROYECTO<b class="mamonsita"> SCHOOL</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
           
          </ul>
          <form class="d-flex">

                                    <!-- Button trigger modal -->
                                    <!-- Example single danger button -->
                    

                      <a href="../cerrar.php" class="btn  space color-a"><b>Cerrar Sesion</b></a>

                        <div>
                        <!-- Modal -->
                       
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </nav>
  </header>

    <main>
    
<!------------------------------------------------------------------------>

<center>

<h2 style="margin-top:2.3rem">MODIFICAR UNA PREGUNTA</h2>
<!---------------------------------------------------->


<style>

.apa{
    margin-left: -25rem;
}


.table{
    width: 60rem;
    margin-top: 5rem;
}



</style>

<center>


<table class="table ">
    <form action="../agregar-pregunta.php" method="POST">
  <thead>
  <tr>
      <th scope="col">Lenguaje</th>
      <th scope="col">Pregunta</th>
      <th scope="col">Resp. Correcta</th>
      <th scope="col">Opción 1</th>
      <th scope="col">Opción 2</th>
      <th scope="col">Opción 3</th>
      <th scope="col">Opción 4</th>
      <th scope="col"></th>
    </tr>

  </thead>
  <tbody>
    <tr>

        <td><div class="form-select" id="lenguaje"  name="servicio[]" >
             <select name="lenguaje">
                <option value="1" >js</option>
                <option value="2" >php</option>
                <option value="3" >c++</option>
                <option value="4" >java</option>
             </select>
        </div></td>

        <td><input type="text" name="pregunta" value="Pregunta"></td>
        <td><input type="text" name="respuesta_correcta" value="Respuesta Correcta"></td>
        <td><input type="text" name="respuesta_1" value="Opción 1"></td>
        <td><input type="text" name="respuesta_2" value="Opción 2"></td>
        <td><input type="text" name="respuesta_3" value="Opción 3"></td>
        <td><input type="text" name="respuesta_4" value="Opción 4"></td>
        <td><button type="submit" value="Actualizar"  class="btn btn-outline-success">ENVIAR</button></td>

       </tr>
  </tbody>
  </form>
</table>

</center>

    
</body>
</html>