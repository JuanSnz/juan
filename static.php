<?php 
$nombre = 'Juan';
class Persona {
	public static $dia = '7 de setiembre';
		
	public static function saludo($nombre = null){
		if ($nombre){
			return 'Hola, buen dia ' . $nombre;
		}else{
			return 'Hola, buen dia';
		}
	} 
}
// $carlos = new Persona;
// echo $carlos->saludo('Carlos');


echo Persona::saludo();
//como acceder a metodo statico sin hacer otra clases o funcion 