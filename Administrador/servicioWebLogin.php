<?php


    $login=$_REQUEST['login']; 
    $password=$_REQUEST['password'];

  $conn = mysqli_connect("localhost","root", "", "soccerleague");
// Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }


 $query = ("SELECT * from administrador where usuario_admin='$login' and pass_admin='$password'");
 $resultado = mysqli_query($conn, $query);
 $datos=array();
while($fila = mysqli_fetch_object($resultado))
{
	
    $datos[] = $fila;


}
      $resultado->free();
    echo json_encode($datos);

?>