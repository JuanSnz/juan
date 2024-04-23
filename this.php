<?php 

class Persona {
	public $nombre;
	public $edad;
	public $pais;

	public function mostrarinformacion(){
		echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y vive en ' . $this->pais;
	}

}
$carlos = new Persona;
$carlos->nombre = 'Carlos Fabian';
$carlos->edad = 23;
$carlos->pais = 'Paraguay'; 
$carlos->mostrarinformacion();

echo '<br />';

$juan = new Persona;
$juan->nombre = 'Juan Manuel';
$juan->edad = 30;
$juan->pais = 'Uruguay'; 

$juan->mostrarinformacion();


 ?>