<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Programación ou yeah</title>


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

    <link href="css/carousel2.css" rel="stylesheet">
  </head>
  <body>

    
  <header>
    
    <nav class="navbar navbar-expand-lg navbar-dark " style="margin-top:-3rem; z-index: 10;">
      <div class="container-fluid">
        
        <a class="navbar-brand" href="#">PROYECTO<b class="mamonsita"> SCHOOL</b></a>
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

                      <?php

                      if(isset($_SESSION['Ausuario'])){?>

                      <a type="button" class="btn btn-outline-light" href="admin.php" aria-expanded="false">
                          Admin Mode
                        </a>

                        <?php }?>

                        <button type="button" class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Lenguajes
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="php/clases-vista.php">Python</a></li>
                          <li><a class="dropdown-item" href="php/clases-vista.php">C++</a></li>
                          <li><a class="dropdown-item" href="php/clases-vista.php">Java</a></li>
                          <li><a class="dropdown-item" href="php/clases-vista.php">PHP</a></li>
                        </ul>
                      </div>

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
  <!----------------------------------------------------------------------------->
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
              <img src="assets/1.webp" alt="">
              <div class="container">
                <div class="carousel-caption text-end">
                <div class="carousel-caption d-none d-md-block">
                  <h5>APRENDE A PROGRAMAR..</h5>
                  <p>Y CAMBIA TU VIDA</p>
                  </div>  
                                    
                </div>
              </div>
          </div>
          <div class="carousel-item">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
              <img src="assets/2.png" alt="">
              <div class="container">
                <div class="carousel-caption text-end">
                <div class="carousel-caption d-none d-md-block">
                  <h5>PROGRAMAR..</h5>
                  <p>ES FACIL</p>
                  </div>                 
                </div>
              </div>
          </div>
          <div class="carousel-item">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
              <img src="assets/3.jpg" alt="">
              <div class="container">
              <div class="carousel-caption text-end">
                  <div class="carousel-caption d-none d-md-block">
                  <h5>NO NECESITAS SER UN GENIO..</h5>
                  <p>PARA PROGRAMAR</p>
                  </div>  
                  </div>
                </div>
          </div>
          <div class="carousel-item">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
              <img src="assets/img/4.webp" alt="">
              <div class="container">
                <div class="carousel-caption text-end">
                <div class="carousel-caption d-none d-md-block">
                  <h5>PROGRAMAR..</h5>
                  <p>TE ABRIRA MUCHAS PUERTAS</p>
                  </div>  
             
                </div>
              </div>
          </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
  <!-------------------------------------------------------------------------->

  <!-------------------------------------------------------------------------->

  <   <div class="container marketing">

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">PYTHON</h2>
    <p class="lead"> Lenguaje de alto nivel de programación interpretado cuya filosofía hace hincapié en la legibilidad de su código, se utiliza para desarrollar aplicaciones de todo tipo, ejemplos: Instagram, Netflix, Panda 3D, entre otros.​</p>
  </div>
  <div class="col-md-5">
    
    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"   width="500" height="500" src="assets/img/python.png" alt="">

  </div>
</div>

<div class="container">
          <div class="text-end">
              <a type="button" class="btn btn-primary" href="php/clase-python-vista.php">Toca aca</a>                  
         </div>
      </div>


<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">C++</h2>
    <p class="lead">La intención de su creación fue extender al lenguaje de programación C mecanismos que permiten la manipulación de objetos. En ese sentido, desde el punto de vista de los lenguajes orientados a objetos, C++ es un lenguaje híbrido.</p>
  </div>
  <div class="col-md-5 order-md-1">

    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"   width="400" height="400" src="assets/img/c++.jpg" alt="">

  </div>
</div>

<div class="container">
          <div class="text-end">
              <a type="button" class="btn btn-primary" href="php/clase-c++-vista.php">Toca aca</a>                  
         </div>
      </div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">JAVA</h2>
    <p class="lead"> Lenguaje de programación y una plataforma informática, una tecnología que se usa para el desarrollo de aplicaciones que convierten a la Web en un elemento más interesante y útil.</p>
  </div>
  <div class="col-md-5">

    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"   width="500" height="500" src="assets/img/java.jpg" alt="">

  </div>
</div>
<div class="container">
          <div class="text-end">
              <a type="button" class="btn btn-primary" href="php/clase-java-vista.php">Toca aca</a>                  
         </div>
      </div>
<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">PHP</h2>
    <p class="lead"> Es un lenguaje de código abierto muy popular especialmente adecuado para el desarrollo web y que puede ser incrustado en HTML.​ ​</p>
  </div>
  <div class="col-md-5">
    
    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"   width="400" height="400" src="assets/img/php.png" alt="">

  </div>

</div>
<div class="container">
          <div class="text-end">
              <a type="button" class="btn btn-primary" href="php/clase-php-vista.php">Toca aca</a>                  
         </div>
      </div>
<hr class="featurette-divider">
</div>

        <!---------------------------------------------------------------------------------------------------->

    <footer class="container">
      <p class="float-end"><a href="#">Vuelta al inicio</a></p>
      <p>&copy; 2022–2022 kakao Korp. </p>
    </footer>
  </main>


      <script src="assets/dist/js/bootstrap.bundle.min.js"></script>


  </body>
</html>
