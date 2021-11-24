<?php


 class Juez{
   private $cod_juez;
   private $nom_juez;
   private $foto;

   function __construct(){}

     public function getCodigoJuez()
  	{
  		return $this->cod_juez;
  	}

    public function setCodigoJuez($nuevoCodJuez)
  	{
  		 $this->cod_juez = $nuevoCodJuez;
  	}

  	public function getNombreJuez()
  	{
  		return $this->nom_juez;
  	}

  	public function setNombreJuez($nomJuez)
  	{
  		$this->nom_juez = $nomJuez;
  	}

    public function getFoto()
  	{
  		return $this->foto;
  	}

  	public function setFoto($nuevaFoto)
  	{
  		$this->foto = $nuevaFoto;
  	}


 }

?>
