<?php
//incluye la clase noticia y Crudnoticia
require_once('crud_jugador.php');
include('../../webServices/nusoap.php');
require_once('crud_equipo.php');
require_once('jugador.php');
$crud=new CrudJugador();
$crudEquipo = new CrudEquipo();
$equipo = new Equipo();
$jugador= new Jugador();
$url="http://localhost/proyectoSoft2/proyectoIngSfot2/webServices/server.php?wsdl";

$clienteWS = new nusoap_client($url);
$clienteWS->call("consulta", array());
//obtiene todos las noticias con el método mostrar de la clase crud
$codigoEquipo = $_GET['cod_equipo'];

$equipo = $crudEquipo->obtener($codigoEquipo);
$listaJugadores=$crud->mostrarJugadores($codigoEquipo);



?>

<!DOCTYPE html>
<html lang="es" lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

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

      <?php



?>


      <form action="" method="get">
      <a class="btn btn-primary " href="insertarJugador.php?codigoEquipoParam=<?php echo $codigoEquipo ?>">Insertar Jugador</a>




       <br></br>

       <table class="table table-striped">
         <head>
           <td>Nombre Jugador</td>
           <td>Posición Jugador</td>
           <td>Dorsal</td>
           <td>Edad</td>
           <td>Actualizar</td>
           <td>Eliminar</td>
         </head>
         <body>
           <?php foreach ($listaJugadores as $jugador) {?>
           <tr>
             <td><?php echo $jugador->getNombre() ?></td>
             <td><?php echo $jugador->getPosicion() ?></td>
             <td><?php echo $jugador->getDorsal() ?></td>
             <td><?php echo $jugador->getEdad()?> </td>
             <td><a class="btn btn-primary" href="actualizarJugador.php?cod_jugador=<?php echo $jugador->getCodigoJugador()?>">Modificar</a></td>
             <td><a class="btn btn-primary" href="acciones_jugador.php?codigoJugadorParam=<?php echo $jugador->getCodigoJugador()?>&accion=e">Eliminar</a></td>
           </tr>
           <?php } ?>
         </body>
       </table>

    </form>

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2019</span>
            </div>
          </div>
        </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

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
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../../vendor/chart.js/Chart.min.js"></script>
  <script src="../../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../../js/demo/datatables-demo.js"></script>
  <script src="../../js/demo/chart-area-demo.js"></script>

</body>

</html>
