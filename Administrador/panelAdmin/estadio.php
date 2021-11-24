<?php


 class Estadio{
   private $cod_estadio;
   private $nom_estadio;
   private $lugar_estadio;
   private $anofunda_estadio;
   private $capa_estadio;
   private $ima_estadio;

   function __construct(){}

   public function getCodigoEstadio()
  	{
  		return $this->cod_estadio;
  	}

    public function setCodigoEstadio($nuevoCodEstadio)
  	{
  		 $this->cod_estadio = $nuevoCodEstadio;
  	}

  	public function getNombreEstadio()
  	{
  		return $this->nom_estadio;
  	}

  	public function setNombreEstadio($nuevoNomEstadio)
  	{
  		$this->nom_estadio = $nuevoNomEstadio;
  	}

    public function getLugarEstadio()
    {
      return $this->lugar_estadio;
    }

    public function setLugarEstadio($nuevoLugarEstadio)
    {
      $this->lugar_estadio = $nuevoLugarEstadio;
    }

    public function getAnoEstadio()
    {
      return $this->anofunda_estadio;
    }

    public function setAnoEstadio($nuevoAnoEstadio)
    {
      $this->anofunda_estadio = $nuevoAnoEstadio;
    }

    public function getCapacidadEstadio()
    {
      return $this->capa_estadio;
    }

    public function setCapacidadEstadio($nuevoCapacidadEstadio)
    {
      $this->capa_estadio = $nuevoCapacidadEstadio;
    }

    public function getImagenEstadio()
    {
      return $this->ima_estadio;
    }

    public function setImagenEstadio($nuevoImagenEstadio)
    {
      $this->ima_estadio = $nuevoImagenEstadio;
    }


}

?>
