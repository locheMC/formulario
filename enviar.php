<?php

$cedula = $_POST['Cedula'];
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$diereccion = $_POST['Direccion'];
$telefono = $_POST['Selecciones'];
$sexo = $_POST['Sexo'];

 $con = new MySQLi("localhost","root","","registro2");
 $sql = ("insert into registro2(Cedula,Nombre,Apellidos,Direccion,Telefono,Selecciones,Sexo) values($cedula,'$nombre','$apellido','$direccion',$telefono,'$sexo')");
 $e = $con->Query($sql);
 if($e) {
   echo "Datos ingresados";
 }else {
   echo "Datos no ingresados " . $con->connect_errno;
 }

 ?>
