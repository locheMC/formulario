<?php
	include("enviar.php");
	// if(isset($_POST['Cedula']) && !empty($_POST['Cedula']) &&
	// (isset($_POST['Nombre']) && !empty($_POST['Nombre']) &&
	// (isset($_POST['Apellido']) && !empty($_POST['Apellido']) &&
	// (isset($_POST['Edad']) && !empty($_POST['Edad'])) &&
	// (isset($_POST['Telefono']) && !empty($_POST['Telefono']) &&
	// (isset($_POST['Gustos']) && !empty($_POST['Gustos']) &&
	// (isset($_POST['Ciudad']) && !empty($_POST['Ciudad']))))))) {

		$con = new MySQLi("localhost","root","","registro");
		$sql=("insert into registro (Cedula,Nombre,Apellido,Edad,Telefono,Gustos,Ciudad)VALUES('$_POST[Cedula]','$_POST[Nombre]','$_POST[Apellido]','$_POST[Edad]','$_POST[Telefono]','$_POST[Gustos]','$_POST[Ciudad]')");
		$result = $con->Query($sql);

		if($result) {
			echo "Se ingresaron los datos";
		} else {
			echo "No se ingresaron los datos";
		}

	// }
?>
