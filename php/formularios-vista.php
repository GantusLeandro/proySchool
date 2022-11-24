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

  <div class="form-select" id="pregunta"  multiple name="servicio[]" >
        <select>
            <option data-display="">Elija una opción</option>
            <option value="1"><?php echo $row ['respuesta_1'] ?></option>
            <option value="2"><?php echo $row ['respuesta_2'] ?></option>
            <option value="3"><?php echo $row ['respuesta_3'] ?></option>
            <option value="3"><?php echo $row ['respuesta_4'] ?></option>
 
        </select>
    </div>

      <script src="assets/dist/js/bootstrap.bundle.min.js"></script>


  </body>
</html>
