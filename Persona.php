<?php

abstract class Persona
{

//Variables
private $nombre, $apellido, $dni,$sexo;

//Constructor
public function __construct($nombre,$apellido,$dni,$sexo)
{

	$this->nombre = $nombre;
	$this->apellido = $apellido;
	$this->dni = $dni; 
	$this->sexo = $sexo;

}

public function getNombre()
{
	return $this->nombre;
}
public function getApellido()
{
	return $this->apellido;
}
public function getDNI()
{
	return $this->dni;
}
public function getSexo()
{
	return $this->sexo;
}
	
	public function ToString()
	{
		return "Nombre: ". $this->nombre ." - Apellido: ".$this->apellido." - DNI: ".$this->dni." - Sexo: ".$this->sexo;
	}


	public abstract function Hablar($_idioma);



}

?>