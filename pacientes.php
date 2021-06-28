<?php include_once("sql.php"); ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
<link rel="stylesheet" type="text/css" href="libraries/css/bootstrap.min.css">
<script type="text/javascript" src="libraries/js/bootstrap.min.js"></script>
<script type="text/javascript" src="libraries/jquery-3.5.0.js"></script>
<table align="center">
	<tr>
		<td width="150px"><b>Historia N°</b></td>
		<td width="200px"><b>Cedula</b></td>
		<td width="250px"><b>Nombres del paciente</b></td>
		<td width="150px"><b>Teléfono</b></td>
		
	</tr>
	<?php
	if($_GET['codigo']==""){
		echo "<tr><td colspan='4' align='center'>Ingrese la cedula del paciente</td></tr>";
	}else{
		echo paciente($_GET['codigo']);
	}
	
	?>
</table>