<?php


 class Partido{
   private $cod_partido;
   private $cod_local;
   private $cod_rival;
   private $cod_juez;
   private $cod_estado;


   function __construct()

   public function getCodigoPartido()
  	{
  		return $this->cod_partido;
  	}

    public function setCodigoPartido($nuevoCodpartido)
  	{
  		 $this->cod_partido = $nuevoCodpartido;
  	}

  	public function getCodigoEquipoLocal()
  	{
  		return $this->cod_local;
  	}

  	public function setCodigoEquipoLocal($nuevocod)
  	{
  		$this->cod_local = $nuevocod;
  	}
  	public function getCodigoEquipoVis()
  	{
  		return $this->cod_rival;
  	}

  	public function setCodigoEquipoVis($nuevoCodRival)
  	{
  		$this->cod_rival = $nuevoCodRival;
  	}

    public function getCodigoJuez()
    {
      return $this->cod_juez;
    }

    public function setCodigoJuez($nuevoCodJuez)
    {
      $this->cod_juez = $nuevoCodJuez;
    }

    public function getCodigoEstado()
    {
      return $this->cod_estado;
    }

    public function setCodigoEstado($nuevoCodEstado)
    {
      $this->cod_estado = $nuevoCodEstado;
    }



}

?>