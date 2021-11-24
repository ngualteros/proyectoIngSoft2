<!DOCTYPE html>
<?php

    require_once ('crud_jugador.php');
    require_once ('jugador.php');
    require_once('conexion.php');




    $crud = new CrudJugador();
    $jugador = new Jugador();

    $listaJugadores = $crud->obtenerGoleador();

  ?>
  <html lang="es" lang="en">
  <title>Goleadores</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <body id="jugadores">

    <div class="w3-container w3-padding-64 w3-center" id="goals">
    <h2>MÁXIMOS GOLEADORES</h2>

    <?php foreach ($listaJugadores as $jugador) {

      # code...
    ?>


    <div class="w3-quarter">
      <img src="data:image/jpg;base64, <?php echo base64_encode(stripslashes($jugador->getFotoJugador())); ?>" alt="Boss" style="width:100px" class="w3-circle w3-hover-opacity">
      <h3><?php echo $jugador->getNombre()?></h3>
      <p>Posición: <?php echo $jugador->getPosicion()?></p>
      <p>Dorsal: <?php echo $jugador->getDorsal()?></p>
      <p>Edad: <?php echo $jugador->getEdad()?></p>

    </div>

  <?php } ?>

</div>

<div class="w3-container w3-padding-64 w3-center" id="asis">
<h2>MÁXIMOS ASISTENTES</h2>

<?php foreach ($listaJugadores as $jugador) {

  # code...
?>

<div class="w3-quarter">
  <img src="data:image/jpg;base64, <?php echo base64_encode(stripslashes($jugador->getFotoJugador())); ?>" alt="Boss" style="width:100px%" class="w3-circle w3-hover-opacity">
  <h3><?php echo $jugador->getNombre()?></h3>
  <p>Posición: <?php echo $jugador->getPosicion()?></p>
  <p>Dorsal: <?php echo $jugador->getDorsal()?></p>
  <p>Edad: <?php echo $jugador->getEdad()?></p>

</div>


<?php } ?>

</div>

<div class="w3-container w3-padding-64 w3-center" id="venc">
<h2>MALLA MENOS VENCIDA</h2>

<?php foreach ($listaJugadores as $jugador) {

  # code...
?>

<div class="w3-quarter">
  <img src="data:image/jpg;base64, <?php echo base64_encode(stripslashes($jugador->getFotoJugador())); ?>" alt="Boss" style="width:100px" class="w3-circle w3-hover-opacity">
  <h3><?php echo $jugador->getNombre()?></h3>
  <p>Posición: <?php echo $jugador->getPosicion()?></p>
  <p>Dorsal: <?php echo $jugador->getDorsal()?></p>
  <p>Edad: <?php echo $jugador->getEdad()?></p>

</div>

<?php } ?>

</div>


</body>
</html>
