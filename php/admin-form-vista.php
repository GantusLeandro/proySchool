<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=si, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta name="description" content="d">
    <meta name="generator" content="Hugo 0.88.1">
        <!-- <link rel="stylesheet" href="css/Semantic-UI-CSS-master/semantic.css"> -->
    <?php include("conexion.php") ?>
    <title>Lista Usuarios | Admin Mode</title>


<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

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

    <link href="css/estilos-admin.css" rel="stylesheet">
  </head>
  <body>

    
  <header>
    
    <nav class="navbar navbar-expand-lg navbar-dark " style="margin-top:-3rem; z-index: 10;">
      <div class="container-fluid">
        
        <a class="navbar-brand" href="principal.php">PROYECTO<b class="mamonsita"> SCHOOL</b></a>
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
                        <a href="admin.php" class="btn space color-a" ><b>Lista Usuarios</b></a>
                        <a href="form.php" class="btn space color-a active" ><b>Cuestionarios</b></a>
                        <a href="cerrar.php" class="btn  space color-a"><b>Cerrar Sesion</b></a>

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
    <h2 style="margin-top:2.3rem;">LISTA DE PREGUNTAS</h2>
    <table class="table table-bordered table-dark">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Lenguaje</th>
        <th scope="col">Pregunta</th>
        <th scope="col">Pregunta</th>
        <th scope="col">Resp. Correcta</th>
        <th scope="col">Opción 1</th>
        <th scope="col">Opción 2</th>
        <th scope="col">Opción 3</th>
        <th scope="col">Opción 4</th>
        <th scope="col">Eliminar</th>
        <th scope="col">Modificar</th>
        </tr>
    </thead>
    <tbody>
        <tr>
          
        <?php foreach($conexion ->query('SELECT * FROM preguntas')as $row ) {?>
            <tr>
            <td> <?php echo $row ['id_pregunta'] ?> </td>
            <td> <?php echo $row ['lenguaje'] ?> </td>
            <td colspan="2" style="text-align:center;"> <?php echo $row ['pregunta'] ?> </td>
            <td> <?php echo $row ['respuesta_correcta'] ?> </td>
            <td> <?php echo $row ['respuesta_1'] ?> </td>
            <td> <?php echo $row ['respuesta_2'] ?> </td>
            <td> <?php echo $row ['respuesta_3'] ?> </td>
            <td> <?php echo $row ['respuesta_4'] ?> </td>
            <td><a class="list" href="eliminar-formulario.php?id_pregunta=<?php echo $row['id_pregunta'] ?>">Eliminar</td>
            <td><a class="list" href="php/form_act.php?id_pregunta=<?php echo $row['id_pregunta'] ?>">Modificar</td>
            </tr>
            <?php } ?>
        </tr>
    </tbody>
    </table>

    <a class="btn btn-dark" href="php/nueva-pregunta.php" type="submit">Agregar una nueva pregunta<label class="lnr lnr-chevron-right"></label></a>


</center>
<!-------------------------------------------------------------------------->

  <div class="footer">
    <hr class="featurette-divider">
   
     <footer class="container">
        <p class="float-end"><a href="principal.php">Vuelta al inicio</a></p>
        <p>&copy; 2022–2023 ProyectoSchool. </p>
      </footer>
    </main>
 

      <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  </div>


  </body>
</html>