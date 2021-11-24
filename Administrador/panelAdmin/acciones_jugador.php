<?php

  require_once('crud_jugador.php');
  require_once('jugador.php');



  $crud = new CrudJugador();



  if(isset($_POST['actualizarJugador']))
  {

  	$elJugador = new Jugador();
  	$elJugador->setCodigoJugador($_POST['cod_jugador']);
  	$elJugador->setCodigoEquipo($_POST['cod_equipo']);
  	$elJugador->setNombre($_POST['nom_jugador']);
  	$elJugador->setDorsal($_POST['dorsal']);
  	$elJugador->setEdad($_POST['edad']);
    $elJugador->setPosicion($_POST['pos_jugador']);


  	$crud->modificar($elJugador);

    header('Location: plantillaEquipos.php');


  }

  elseif(isset($_POST['insertarJugador']))
  {
  	 $elJugador = new Jugador();
     $elJugador->setCodigoEquipo($_POST['equipoParam']);
     $elJugador->setNombre($_POST['nombreJugadorParam']);
     $elJugador->setPosicion($_POST['posParam']);
     $elJugador->setDorsal($_POST['dorsalParam']);
     $elJugador->setEdad($_POST['edadParam']);
     $elJugador->setFotoJugador(addslashes(file_get_contents($_FILES['fotoParam']['tmp_name'])));


     $crud->insertar($elJugador);

     header('Location: plantillaEquipos.php');

  }

  elseif($_GET['accion'] =='e')
  {
    $codigoJugador = $_GET['codigoJugadorParam'];
    $crud->eliminar($codigoJugador);
    header('Location: plantillaEquipos.php');
  }
  elseif($_GET['accion'] =='a')
  {
    $codigoJugador = $_GET['codigoJugadorParam'];
    header('Location: actualizarJugador.php?cod_jugador=<?php echo $codigoJugador ?>' );
  }


?>
