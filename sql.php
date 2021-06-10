<?php
include_once("funciones.php");
if(!isset($_SESSION)){
	session_start();
}
if(isset($_POST['action'])&&$_POST['action']=='Login'){
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	$response = validar_usuario($usuario,$clave);
	if($response=="1"){
		$_SESSION['usuario']=$usuario;
		$res=user_name($usuario);
		$_SESSION['nombre']=$res;
	}
	echo $response;
}

?>