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

<h2 style="margin-top:2.3rem">MODIFICAR UN USUARIO</h2>
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
    <form action="../actualizar.php" method="POST">
  <thead>
  <tr>
  <th scope="col">#</th>
      <th scope="col">Correo</th>
      <th scope="col">Usuario</th>
      <th scope="col">Operación</th>
      <th scope="col"></th>
    </tr>
    
    <?php
    $id = $_GET["id"];
    $sql="SELECT * FROM login WHERE id = '$id'";
    $result=mysqli_query($conn,$sql);
    
    
    while($mostrar=mysqli_fetch_array($result)){
    ?>

   
  </thead>
  <tbody>
    <tr>
        <td scope="row"><input name="id" value="<?php echo $mostrar['id']?>" ></td>
        <td><input type="text" name="correo" value="<?php echo $mostrar['correo']?>"></td>
        <td><input type="text" name="usuario" value="<?php echo $mostrar['usuario']?>"></td>
        <td><input type="text" name="clave" value="<?php echo $mostrar['clave']?>"></td>
        <td><button type="submit" value="Actualizar"  class="btn btn-outline-success">ACTUALIZAR</button></td>

       </tr>
    <?php 
    }
    ?>
  </tbody>
  </form>
</table>

</center>

    
</body>
</html>