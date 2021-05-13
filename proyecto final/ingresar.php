<?php
include "componentes/cConectaBD.php";
include "componentes/cLogin.php";

//tomamos variables
$usuario = $_POST["usu"];
$password = $_POST["ctr"];

//mandamos validar usuario y contraseña 
$consulta = new consultas();
$validar_usu = $consulta->valida_usuario($usuario, $password);

if(!$validar_usu){
	echo 0; //usuario o contraseña invalido
	die();
}

//si regresa una coincidencia
foreach ($validar_usu as $key => $value) {
	//ponemos valores en cada variable
	$idUsuario = $value["idusuario"];
	$usu = $value["matricula"];
	$nombres = utf8_encode($value["nombres"]);
	$ap_paterno = utf8_encode($value["ap_paterno"]);
	$ap_materno = utf8_encode($value["ap_materno"]);
	$tipo_usu = $value["tipo_usu"];
	$foto = $value["foto"];
	$carrera = $value["carrera"];
}

//si todo es correcto regresa variables de session
session_start();
session_set_cookie_params(60*60*24*15);

//hacemos variables de sesión para poder conocerlo en cualquier lugar del documento
$_SESSION["token"] = session_id();
$_SESSION["idUsuario"] = $idUsuario;
$_SESSION["usuario"] = $usu;
$_SESSION["nombres"] = $nombres;
$_SESSION["ap_materno"] = $ap_materno;
$_SESSION["ap_paterno"] = $ap_paterno;
$_SESSION["tipo_usu"] = $tipo_usu;
$_SESSION["foto"] = $foto;
$_SESSION["carrera"] = $carrera;

//var_dump($_SESSION["nombres"]." ".$_SESSION["carrera"]);

echo $_SESSION["token"]; //todo es correcto
?>