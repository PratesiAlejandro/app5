<?php

class Fabrica{


	private $razonSocial;
	private $empleado;

	public function __construct($razonSocial){

		$this->razonSocial = $razonSocial;
		$this->empleado = array();

	}

	public function AgregarPersona($persona){

		array_push($this->empleado,$persona);

	}

	public function ToString(){

		echo "RZ: ".$this->razonSocial."<br>";

		foreach ($this->empleado as $aux) {
		
			echo $aux->ToString()."<br>";
		}

	}

	public function CalcularSalario(){

		$total= 0.00;

		foreach ($this->empleado as $aux) {
			
			$total+=$aux->getSueldo();
		}

       return $total;
	}

	public function SacarPersona($persona)
	{
		foreach ($this->empleado as $aux )
		{
			if($persona==$aux){
				array_pop($empleado,$aux);
			}
			
		}
	}

	private function EvitarDuplicados(){
		$empleado=array_unique($empleado);
	}



}

?>