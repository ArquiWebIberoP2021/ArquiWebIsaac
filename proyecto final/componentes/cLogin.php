<?php
class consultas{
	public function valida_usuario($usuario, $pass){
		$mod = new conexion;
		$conexion = $mod->get_connection();
		$query = "
		SELECT * 
		FROM usuarios 
		INNER JOIN carrera USING(idcarrera)
		WHERE matricula = :usuario and
			  contra = :pass";
		$statement = $conexion->prepare($query);
		$statement->bindParam(':usuario', $usuario);
		$statement->bindParam(':pass', $pass);
		$statement->execute();//ejecuta el query
		$i = $statement->rowCount();
		if($i){
			$array = $statement->fetchAll(PDO::FETCH_ASSOC);
			return $array; //regresamos usuario
		}
		return 0; //no encuentra resultado
	}
}//consultas
?>