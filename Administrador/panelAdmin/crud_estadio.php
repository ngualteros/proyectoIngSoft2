<?php

require_once('conexion.php');
require_once('estadio.php');
require_once('crud_general.php');

   class CrudEstadio extends crud_general{

   	public function __construct(){}



   	public function insertar($estadio)
   	{

   		
   		$db=Db::conectar();
   		$insert=$db->prepare('INSERT INTO estadio( nom_estadio, lugar_estadio, anofunda_estadio, capa_estadio, ima_estadio) values(:nom_estadio,:lugar_estadio,:anofunda_estadio,:capa_estadio,:ima_estadio)');

      $insert->bindValue('nom_estadio',$estadio->getNombreEstadio());
      $insert->bindValue('lugar_estadio',$estadio->getLugarEstadio());
      $insert->bindValue('anofunda_estadio',$estadio->getAnoEstadio());
      $insert->bindValue('capa_estadio',$estadio->getCapacidadEstadio());
      $insert->bindValue('ima_estadio',$estadio->getImagenEstadio());
	  $insert->execute();
   	}




   	public function mostrar(){
			$db=Db::conectar();
			$listaEstadios=[];
			$select=$db->prepare('SELECT * FROM estadio');

			$select->execute();



			foreach($select->fetchAll() as $estadio){


				$myEstadio= new Estadio();
				$myEstadio->setCodigoEstadio($estadio['cod_estadio']);
				$myEstadio->setNombreEstadio($estadio['nom_estadio']);
        $myEstadio->setLugarEstadio($estadio['lugar_estadio']);
        $myEstadio->setAnoEstadio($estadio['anofunda_estadio']);
        $myEstadio->setCapacidadEstadio($estadio['capa_estadio']);
        $myEstadio->setImagenEstadio($estadio['ima_estadio']);


				$listaEstadios[]=$myEstadio;
			}
			return $listaEstadios;
		}

	public function eliminar($cod_estadio)
	{
		$db=Db::conectar();
		$eliminarEstadio = $db->prepare('DELETE FROM estadio where cod_estadio=:cod_estadio');
		$eliminarEstadio->bindValue('cod_estadio', $cod_estadio);
		$eliminarEstadio->execute();
	}

	public function modificar($estadio)
	{
		$db=Db::conectar();
		$modificar = $db ->prepare('UPDATE estadio SET nom_estadio=:nom_estadio, lugar_estadio=:lugar_estadio, anofunda_estadio=:anofunda_estadio, capa_estadio=:capa_estadio WHERE cod_estadio =:cod_estadio');
		$modificar->bindValue('cod_estadio', $estadio->getCodigoEstadio());
		$modificar->bindValue('nom_estadio', $estadio->getNombreEstadio());
    $modificar->bindValue('lugar_estadio',$estadio->getLugarEstadio());
    $modificar->bindValue('anofunda_estadio',$estadio->getAnoEstadio());
    $modificar->bindValue('capa_estadio',$estadio->getCapacidadEstadio());

		$modificar->execute();
	}

  public function obtener($codigoEstadio){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM estadio WHERE cod_estadio=:elCodigo');
			$select->bindValue('elCodigo',$codigoEstadio);
			$select->execute();
			$estadio=$select->fetch();
			$myEstadio= new Estadio();
			$myEstadio->setCodigoEstadio($estadio['cod_estadio']);
			$myEstadio->setNombreEstadio($estadio['nom_estadio']);
      $myEstadio->setLugarEstadio($estadio['lugar_estadio']);
      $myEstadio->setAnoEstadio($estadio['anofunda_estadio']);
      $myEstadio->setCapacidadEstadio($estadio['capa_estadio']);
      $myEstadio->setImagenEstadio($estadio['ima_estadio']);

			return $myEstadio;
		}

    public function obtenerEstadios()
		{

			$listaEstadio=[];
	        $db=Db::conectar();
		    $select=$db->prepare('SELECT  DISTINCT * FROM estadio ORDER BY cod_estadio DESC LIMIT 3');

		    $select->execute();
		     foreach ($select->fetchAll() as $registro)
		     {

		     	$elEstadio = new Estadio();

		     	$elEstadio->setCodigoEstadio($registro['cod_estadio']);
		     	$elEstadio->setNombreEstadio($registro['nom_estadio']);
		     	$elEstadio->setLugarEstadio($registro['lugar_estadio']);
		     	$elEstadio->setAnoEstadio($registro['anofunda_estadio']);
          $elEstadio->setCapacidadEstadio($registro['capa_estadio']);
		     	$elEstadio->setImagenEstadio($registro['ima_estadio']);

		     	$listaEstadio[] = $elEstadio;

		     }
		     return $listaEstadio;
		}







   }




?>
