<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=HOST;dbname=BDNAME","USER","PASS");
		return $link;

	}

}
