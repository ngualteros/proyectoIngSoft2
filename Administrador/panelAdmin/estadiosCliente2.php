<!DOCTYPE html>
<html lang="es" lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

      <?php
      require_once('conexion.php');

      ?>


<div class="w3-content">
<?php foreach ($conexion->query('SELECT * FROM estadio ORDER BY cod_estadio DESC LIMIT 1') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
  <?php foreach ($conexion->query('SELECT * FROM estadio ORDER BY cod_estadio DESC LIMIT 1,1') as $row1){?>
    <?php foreach ($conexion->query('SELECT * FROM estadio ORDER BY cod_estadio DESC LIMIT 2,1') as $row2){?>
      <div class="w3-quarter">
      <h2>Estadios de la liga</h2>
      <p>
      A continuación estan las imágenes e información de los estadios en donde se jugarán los partidos de nuestra liga. Todos con las mejores condiciones para recibir los
      encuentros dentro de este campeonato. Contamos con la verificación de la FIFA.
      </p>
      </div>

<div class="w3-quarter">
<div class="w3-card w3-white">
<!--  <img src="data:image/jpg;base64, <?php echo base64_encode(stripslashes($gira->getRuta())); ?>" width="90%"> -->
  <img src="img/estadio1.jpg" alt="Snow" style="width:100%">
  <div class="w3-container">
  <h3><?php echo $row['nom_estadio'] ?></h3>
  <h4><?php echo $row['lugar_estadio'] ?></h4>
  <p><?php echo $row['anofunda_estadio'] ?></p>
  <p><?php echo $row['capa_estadio'] ?></p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
<!--  <img src="data:image/jpg;base64, <?php echo base64_encode(stripslashes($gira->getRuta())); ?>" width="90%"> -->
  <img src="img/estadio1.jpg" alt="Snow" style="width:100%">
  <div class="w3-container">
  <h3><?php echo $row1['nom_estadio'] ?></h3>
  <h4><?php echo $row1['lugar_estadio'] ?></h4>
  <p><?php echo $row1['anofunda_estadio'] ?></p>
  <p><?php echo $row1['capa_estadio'] ?></p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
<!--  <img src="data:image/jpg;base64, <?php echo base64_encode(stripslashes($gira->getRuta())); ?>" width="90%"> -->
  <img src="img/estadio1.jpg" alt="Snow" style="width:100%">
  <div class="w3-container">
  <h3><?php echo $row2['nom_estadio'] ?></h3>
  <h4><?php echo $row2['lugar_estadio'] ?></h4>
  <p><?php echo $row2['anofunda_estadio'] ?></p>
  <p><?php echo $row2['capa_estadio'] ?></p>
  </div>
  </div>
</div>

<?php } ?>
<?php } ?>
<?php } ?>
</div>
</div>
</body>
</html>
