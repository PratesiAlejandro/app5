<?php

class Empleado extends Persona{


	private $legajo;
	private $sueldo;


	public function __construct($legajo,$sueldo,$nombre,$apellido,$dni,$sexo){

		$this->legajo = $legajo;
		$this->sueldo = $sueldo;
		parent::__construct($nombre,$apellido,$dni,$sexo);

	}

	public function getLegajo(){

		return $legajo;

	}


	public function getSueldo(){

		return $sueldo;

	}

public function ToString(){

		return parent::ToString()." - Legajo: ". $this->legajo ." - Sueldo: ".$this->sueldo;

	}

	public function Hablar($_idioma){

		return "Idioma ".$_idioma;
	}


}

?>