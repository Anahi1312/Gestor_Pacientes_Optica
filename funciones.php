<?php
	include_once("conexion.php");
	function validar_usuario($usuario,$clave){
		$con=DB_connect();
		$sql = "Select * from usuarios where usuario= ? and clave= ?";
		$params=array($usuario,$clave);
		$opcion=array("Scrollable" => SQLSRV_CURSOR_KEYSET);
		$result=sqlsrv_query($con,$sql,$params,$opcion);
		$filas = sqlsrv_num_rows($result);
		return $filas;
	}
	function user_name($usuario){
		$con=DB_connect();
		$sql="select * from usuarios where usuario = ?";
		$param=array($usuario);
		$result=sqlsrv_query($con,$sql,$param);
		$fila=sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC);
		return $fila['nombre'];
	}
?>