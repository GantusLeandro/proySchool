<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.88.1">
    <?php include("conexion.php") ?>
    <title>Programación ou yeah</title>


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

    <link href="../css/apa2.css" rel="stylesheet">
  </head>
  <body>

    
  <header>
    
    <nav class="navbar navbar-expand-lg navbar-dark " style="margin-top:-3rem; z-index: 10;">
      <div class="container-fluid">
        
        <a class="navbar-brand color-a" href="../principal.php">PROYECTO <b class="mamonsita">SCHOOL</b></a>
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
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Lenguajes
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Python</a></li>
                          <li><a class="dropdown-item" href="#">C++</a></li>
                          <li><a class="dropdown-item" href="#">Java</a></li>
                          <li><a class="dropdown-item" href="#">PHP</a></li>
                        </ul>
                      </div>

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
  <!----------------------------------------------------------------------------->
  
    <center>

      <div class="recuadro">
      
      </div>
      <div class="formulario">
        <?php foreach($conexion ->query('SELECT * FROM preguntas')as $row ) {?>
        <?php include("formularios-vista.php") ?>
        <?php } ?>
      </div>
        
    </center>
  
  <!-------------------------------------------------------------------------->

  <div class="footer">
    <hr class="featurette-divider">
   
     <footer class="container">
        <p class="float-end"><a href="#">Vuelta al inicio</a></p>
        <p>&copy; 2022–2022 kakao Korp. </p>
      </footer>
    </main>
 

      <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  </div>


  </body>
</html>
