<?php
class conexion {
	public function get_connection(){
		$user = "root";
		$pass= "root";
		$host= "localhost";
		$db= "laboratorios";
		$connection = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
		return $connection;
	}
}
?>