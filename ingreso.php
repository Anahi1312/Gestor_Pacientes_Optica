<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="libraries/jquery-3.5.0.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	<link rel="stylesheet" type="text/css" href="libraries/css/bootstrap.min.css">
	<script type="text/javascript" src="libraries/js/bootstrap.min.js"></script>
</head>
<body style="text-align:center">
	<div>
		<h3>Ingreso de paciente</h3>
	</div>
	<br>
	<div id="mensajes"></div>
	<br>
	<table align="center">
		<tr>
			<td width="150"><label for="cedula">Cedula: </label></td>
			<td><input type="text" name="cedula" id="cedula" placeholder="Cedula" minlength="10" maxlength="10"></td>
		</tr>
		<tr>
			<td><label for ="nombre">Nombre: </label></td>
			<td><input type="text" name="nombre" id="nombre" placeholder="Nombre"></td>
		</tr>
		<tr>
			<td><label for="direccion">Direccion:</label></td>
			<td><input type="text" name="direccion" id="direccion" placeholder="Direccion"></td>
		</tr>
		<tr>
			<td><label for="telefono">Telefono:</label></td>
			<td><input type="text" name="telefono" id="telefono" placeholder="Telefono" minlength="7" maxlength="10"></td>
		</tr>
	</table>
	<br>
	<div id="aviso"></div>
	<br>
	<div id="botones">
		<button name="ingresar" id="ingresar" class="btn btn-primary" style="width:200px">Ingresar datos</button>
	</div>
</body>
</html>