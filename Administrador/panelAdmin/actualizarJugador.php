<?php
//incluye la clase noticia y CrudNoticia
	require_once('crud_jugador.php');
  require('../../webServices/nusoap.php');
	require_once('jugador.php');
	$crud= new CrudJugador();
	$jugador=new Jugador();
  $codJugador = $_GET['cod_jugador'];
  $url="http://localhost/proyectoSoft2/proyectoIngSfot2/webServices/server.php?wsdl";

  
  $clienteWS = new nusoap_client($url);


  $nombre = $clienteWS->call("consulta", array("id" => $codJugador));
  $jugador = $crud->obtenerGraciasAlYeison($nombre);
  echo $jugador->getNombre();

	//busca la noticia utilizando el id, que es enviado por GET desde la vista mostrar.php

	//$jugador=$crud->obtener($_GET['cod_jugador']);

?>

?>

<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <title>Administrator</title>

  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="plantillaAdmin.php">Soccer League</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="../../plantilla.php" data-target="#logoutModal">Cerrar Sesion</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="plantillaAdmin.php">
          <i class="fa fa-home"></i>
          <span>Inicio</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="plantillaEquipos.php">
          <i class="fa fa-users"></i>
          <span>Equipos</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="plantillaJuez.php">
          <i class="fa fa-eye"></i>
          <span>Arbitros</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="plantillaEstadio.php">
          <i class="fa fa-map-pin"></i>
          <span>Estadios</span>
        </a>
      </li>
    </ul>

    <div id="content-wrapper">

            <div class="w3-container w3-black">
              <center><h2>Modificar Jugador</h2></center>
            </div>

            <form action='acciones_jugador.php' method='post'>
              <br><br>
            <p>
            <input type="hidden" name="cod_jugador" value='<?php echo $jugador->getCodigoJugador() ?>'>
            <input type="hidden" name="cod_equipo" value='<?php echo $jugador->getCodigoEquipo() ?>'>
            </p>
            <p>
            <label>Nombre Jugador:</label>
            <input required value='<?php echo $jugador->getNombre()?>' name="nom_jugador" class="w3-input" type="text"></p>
            <p>
            <label>Posición Jugador:</label>
            <input required value='<?php echo $jugador->getPosicion()?>' name="pos_jugador" class="w3-input" type="text"></p>
            <p>
            <label>Dorsal:</label>
            <input required value='<?php echo $jugador->getDorsal()?>' name="dorsal" class="w3-input" type="text"></p>
            <p>
            <label>Edad:</label>
            <input required value='<?php echo $jugador->getEdad()?>' name="edad" class="w3-input" type="text"></p>

            <center><button type="submit" value="Modificar" name="actualizarJugador" class="w3-btn w3-white w3-border w3-border-black w3-round-large">Modificar</button></center>

            </form>

          </div>




        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script type="text/javascript">
    <!--
    function filterFloat(evt,input){
        // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
        var key = window.Event ? evt.which : evt.keyCode;
        var chark = String.fromCharCode(key);
        var tempValue = input.value+chark;
        if(key >= 48 && key <= 57){
            if(filter(tempValue)=== false){
                return false;
            }else{
                return true;
            }
        }else{
              if(key == 8 || key == 13 || key == 0) {
                  return true;
              }else if(key == 46){
                    if(filter(tempValue)=== false){
                        return false;
                    }else{
                        return true;
                    }
              }else{
                  return false;
              }
        }
    }
    function filter(__val__){
        var preg = /^([0-9]+\.?[0-9]{0,2})$/;
        if(preg.test(__val__) === true){
            return true;
        }else{
           return false;
        }

    }
    -->
    </script>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor1/jquery/jquery.min.js"></script>
    <script src="../../vendor1/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor1/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="../../vendor1/chart.js/Chart.min.js"></script>
    <script src="../../vendor1/datatables/jquery.dataTables.js"></script>
    <script src="../../vendor1/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="../../js/demo/datatables-demo.js"></script>
    <script src="../../js/demo/chart-area-demo.js"></script>

  </body>

</html>

