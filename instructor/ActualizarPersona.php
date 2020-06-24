<?php

require_once "../utili/Conexion.php";

$documento = $_GET['documento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST["email"];
$contrasenia = md5($_POST['clave']);


$query = "UPDATE persona set  nombre = '$nombre', apellido = '$apellido', email = '$email', clave='$contrasenia' WHERE documento=$documento";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa. Reinicie su sesión para visualizar los cambios\");window.location='formValidationInstructor.php';</script>";
}else {
	echo "Ocurrio un error";
}

$mysqli->close();
?>
 