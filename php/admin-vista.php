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
                        <a href="#" class="btn space color-a active" ><b>Lista Usuarios</b></a>
                        <a href="cuestio_admin.php" class="btn space color-a" ><b>Cuestionarios</b></a>
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
    <h2 style="margin-top:2.3rem;">LISTA DE USUARIOS</h2>
    <table class="table table-bordered table-dark">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Correo</th>
        <th scope="col">Usuario</th>
        <th scope="col">Eliminar</th>
        <th scope="col">Modificar</th>
        </tr>
    </thead>
    <tbody>
        <tr>
          
        <?php foreach($conexion ->query('SELECT * FROM login')as $row ) {?>
            <tr>
            <th> <?php echo $row ['id'] ?> </th>
            <th> <?php echo $row ['correo'] ?> </th>
            <th> <?php echo $row ['usuario'] ?> </th>
            <td><a class="list" href="eliminar.php?id=<?php echo $row['id'] ?>">Eliminar</td>
            <td><a class="list" href="php/user_act.php?id=<?php echo $row['id'] ?>">Modificar</td>
            </tr>
            <?php } ?>
        </tr>
    </tbody>
    </table>
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