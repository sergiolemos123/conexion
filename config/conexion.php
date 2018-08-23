<?php

class conexion {
	
	public static function conectar(){
		try{

			$cn = new PDO("mysql:host=localhost;dbname=scriptwebDB", "root", "");

			return $cn;

		}castch (Excepcion $ex) {
			die($ex->getMessage());
		}


	}

}

