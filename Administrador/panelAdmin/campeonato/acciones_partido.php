<?php

  require_once('crud_partido.php');
  require_once('partido.php');



  $crud = new CrudPartido();



  if(isset($_POST['insertarPartido']))
  {

  	$elPartido = new Partido();
  	$elPartido->getCodigoEquipoLocal($_POST['cod_local']);
  	$elPartido->getCodigoEquipoVis($_POST['cod_rival']);
  	$elPartido->getCodigoJuez($_POST['cod_juez']);
    $elPartido->setCodigoEstado($_POST['cod_estado']);
  	

  	$crud->insertar($elPartido);


  }

  elseif(isset($_POST['insertarJugador']))
  {
  	$
  }


?>