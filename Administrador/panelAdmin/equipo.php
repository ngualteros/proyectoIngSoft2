<?php


 class Equipo{
   private $cod_equipo;
   private $nom_equipo;
   private $escudo;

   function __construct(){}

   public function getCodigoEquipo()
  	{
  		return $this->cod_equipo;
  	}

    public function setCodigoEquipo($nuevoCodEquipo)
  	{
  		 $this->cod_equipo = $nuevoCodEquipo;
  	}

  	public function getNombreEquipo()
  	{
  		return $this->nom_equipo;
  	}

  	public function setNombreEquipo($nuevoNom)
  	{
  		$this->nom_equipo = $nuevoNom;
  	}

    public function getEscudo()
  	{
  		return $this->escudo;
  	}

  	public function setEscudo($nuevoEscudo)
  	{
  		$this->escudo = $nuevoEscudo;
  	}

}

?>
