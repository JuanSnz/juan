<?php 

class Persona {
	public $nombre;
	public $edad;
	public $pais;

	function __construct($nombre, $edad, $pais){
		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->pais = $pais;
	}

	public function mostrarinformacion(){
		echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y vive en ' . $this->pais;
	}

}
$carlos = new Persona('Alejandro Fabian', 23, 'Paraguay');
$carlos->mostrarinformacion();

echo '<br />';

$juan = new Persona('Juan Manuel', 32, 'Uruguay');
$juan->mostrarinformacion();


 ?>