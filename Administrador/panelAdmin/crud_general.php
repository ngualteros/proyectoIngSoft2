´<?php


abstract class Crud_general{
	abstract function insertar($objeto);
	abstract function mostrar();
	abstract function eliminar($codObjeto);
	abstract function modificar($objeto);
	abstract function obtener($codObjeto);
}

?>