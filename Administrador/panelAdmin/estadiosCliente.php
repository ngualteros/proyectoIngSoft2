<!DOCTYPE html>
<?php

    require_once "crud_estadio.php";
    require_once "estadio.php";
    require_once('conexion.php');




    $crud = new CrudEstadio();
    $estadio = new Estadio();

    $listaEstadio = $crud->obtenerEstadios();

  ?>
  <html lang="es" lang="en">
  <title>Estadios</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <body id="myPage">
  <div class="w3-row-padding w3-padding-64 w3-theme-l1" id="stadiums">

  <div class="w3-quarter">
  <h2>Estadios de la liga</h2>
  <p>
  A continuación estan las imágenes e información de los estadios en donde se jugarán los partidos de nuestra liga. Todos con las mejores condiciones para recibir los
  encuentros dentro de este campeonato. Contamos con la verificación de la FIFA.
  </p>
  </div>

  <?php foreach ($listaEstadio as $estadio) {

    # code...
  ?>

  <div class="w3-quarter">
  <div class="w3-card w3-white">
    <img alt="" src="data:image/jpg;base64, <?php echo base64_encode(stripslashes($estadio->getImagenEstadio())); ?>"alt="Lights" style="width:100%">
    <div class="w3-container">
    <h3><?php echo $estadio->getNombreEstadio()?></h3>
    <h4><?php echo $estadio->getLugarEstadio()?></h4>
    <p><?php echo $estadio->getAnoEstadio()?></p>
    <p><?php echo $estadio->getCapacidadEstadio()?></p>
    </div>
    </div>
  </div>

  <?php } ?>

  </div>
</body>
</html>
