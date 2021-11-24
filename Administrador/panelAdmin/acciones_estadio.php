<?php

  require_once('crud_estadio.php');
  require_once('estadio.php');



  $crud = new CrudEstadio();


  if(isset($_POST['actualizarEstadio']))
  {

  	$elEstadio = new Estadio();
  	$elEstadio->setCodigoEstadio($_POST['cod_estadio']);
  	$elEstadio->setNombreEstadio($_POST['nom_estadio']);
    $elEstadio->setLugarEstadio($_POST['lugar_estadio']);
    $elEstadio->setAnoEstadio($_POST['anofunda_estadio']);
    $elEstadio->setCapacidadEstadio($_POST['capa_estadio']);
  	$crud->modificar($elEstadio);

    header('Location: plantillaEstadio.php');


  }

 elseif(isset($_POST['insertarEstadio']))
  {
    $elEstadio = new Estadio();

    $elEstadio->setNombreEstadio($_POST['nom_estadio']);
    $elEstadio->setLugarEstadio($_POST['lugar_estadio']);
    $elEstadio->setAnoEstadio($_POST['anofunda_estadio']);
    $elEstadio->setCapacidadEstadio($_POST['capa_estadio']);
    $elEstadio->setImagenEstadio(addslashes(file_get_contents($_FILES['ima_estadio']['tmp_name'])));
    $crud->insertar($elEstadio);

     header('Location: plantillaEstadio.php');

  }

  elseif($_GET['accion'] =='e')
  {
    $codigoEstadio = $_GET['codigoEstadio'];
    $crud->eliminar($codigoEstadio);
    header('Location: plantillaEstadio.php');
  }

  elseif($_GET['accion'] =='a')
  {
    header('Location: actualizarEstadio.php');
  }

?>
