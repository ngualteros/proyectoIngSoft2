<?php

require_once('conexion.php');
require_once('equipo.php');
require_once('crud_general.php');

   class CrudEquipo extends Crud_general{

   	public function __construct(){}



   	public function insertar($equipo)
   	{
   		$db=Db::conectar();
   		$insert=$db->prepare('INSERT INTO equipo( nom_equipo, escudo) values(:nom_equipo,:escudo)');
			$insert->bindValue('nom_equipo',$equipo->getNombreEquipo());
      $insert->bindValue('escudo',$equipo->getEscudo());
			$insert->execute();
   	}




   	public function mostrar(){
			$db=Db::conectar();
			$listaEquipos=[];
			$select=$db->prepare('SELECT * FROM equipo');

			$select->execute();



			foreach($select->fetchAll() as $equipo){


				$myEquipo= new Equipo();
				$myEquipo->setCodigoEquipo($equipo['cod_equipo']);
				$myEquipo->setNombreEquipo($equipo['nom_equipo']);

				$listaEquipos[]=$myEquipo;
			}
			return $listaEquipos;
		}

	public function eliminar($cod_equipo)
	{
		$db=Db::conectar();
		$eliminarEquipo = $db->prepare('DELETE FROM equipo where cod_equipo=:cod_equipo');
		$eliminarEquipo->bindValue('cod_equipo', $cod_equipo);
		$eliminarEquipo->execute();
	}

	public function modificar($equipo)
	{
		$db=Db::conectar();
		$modificar = $db ->prepare('UPDATE equipo SET nom_equipo=:nom_equipo WHERE cod_equipo =:cod_equipo');
		$modificar->bindValue('cod_equipo', $equipo->getCodigoEquipo());
		$modificar->bindValue('nom_equipo', $equipo->getNombreEquipo());

		$modificar->execute();
	}

  public function obtener($codigoEquipo){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM equipo WHERE cod_equipo=:elCodigo');
			$select->bindValue('elCodigo',$codigoEquipo);
			$select->execute();
			$equipo=$select->fetch();
			$myEquipo= new Equipo();
			$myEquipo->setCodigoEquipo($equipo['cod_equipo']);
			$myEquipo->setNombreEquipo($equipo['nom_equipo']);
			return $myEquipo;
		}







   }




?>
