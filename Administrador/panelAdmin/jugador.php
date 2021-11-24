<?php


 class Jugador{
   private $cod_jugador;
   private $cod_equipo;
   private $nom_jugador;
   private $pos_jugador;
   private $dorsal;
   private $edad;
   private $foto_jugador;
   private $ruta_imagen;


   function __construct(){}

     public function getCodigoJugador()
  	{
  		return $this->cod_jugador;
  	}

    public function setCodigoJugador($nuevoCodJugador)
  	{
  		 $this->cod_jugador = $nuevoCodJugador;
  	}

  	public function getCodigoEquipo()
  	{
  		return $this->cod_equipo;
  	}

  	public function setCodigoEquipo($codNuevo)
  	{
  		$this->cod_equipo = $codNuevo;
  	}
  	public function getNombre()
  	{
  		return $this->nom_jugador;
  	}

  	public function setNombre($nuevoNom)
  	{
  		$this->nom_jugador = $nuevoNom;
  	}
  	public function getDorsal()
  	{
  		return $this->dorsal;
  	}

  	public function setDorsal($nuevaDorsal)
  	{
  		$this->dorsal = $nuevaDorsal;
  	}

  	public function getEdad()
  	{
  		return $this->edad;
  	}

  	public function setEdad($nuevaedad)
  	{
  		$this->edad = $nuevaedad;
  	}

    public function getFotoJugador()
  	{
  		return $this->foto_jugador;
  	}

  	public function setFotoJugador($nuevafoto)
  	{
  		$this->foto_jugador = $nuevafoto;
  	}

    public function getPosicion()
  	{
  		return $this->pos_jugador;
  	}

  	public function setPosicion($nuevapos)
  	{
  		$this->pos_jugador = $nuevapos;
  	}








 }




?>
