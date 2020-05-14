<?php
include("datos.php");
 $con = new MySQLi("localhost","root","","registro2");
 $sql = ("insert into registro2 (Cedula,Nombre,Apellidos,Direccion,Telefono,Selecciones,Sexo)VALUES('$_POST[Cedula]','$_POST[Nombre]','$_POST[Apellidos]','$_POST[Direccion]','$_POST[Telefono]','$_POST[Selecciones]','$_POST[Sexo]')");
 $e = $con->Query($sql);
 if($e) {
   echo "Datos ingresados";
 }else {
   echo "Datos no ingresados";
 }

 ?>
