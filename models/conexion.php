<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=bd_chalecos","root","");
		return $link;

	}

}