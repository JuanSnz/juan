<?php 

//Public
//Puede ser accedidos desde cualquier parte, ya sea dentro o fuera de nuestra funcion

//Protected
//Puede ser accedidos desde dentro de la clase y otras clases que heredaron, Pero no fuera de esta

//Private
//Solo puede ser accedido desde dentro de la clase en la que fueron creadas.
//Es decir que no podemos acceder desde otra clse que heredo y tampoco podemos acceder desde fuera de la clase.

class Usuario{
	public $nombre;
	Protected $correo;


	function __construct($nombre, $correo){
		$this->nombre = $nombre;
		$this->correo = $correo;
	}

	public function mostrarInfo(){
		return $this->correo;
	}
}


class Miembro extends Usuario{
	public function mostrarCorreo(){
		return 'Este es el correo:' . $this->correo;
	}
}

$carlos = new miembro ('Carlos', 'carlos@gmail.com');
echo $carlos->mostrarCorreo();

