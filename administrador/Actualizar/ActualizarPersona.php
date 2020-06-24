<?php
require_once "../../utili/Conexion.php";

$documento = $_GET['documento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$contrasenia = md5($_POST['clave']);



$query = "UPDATE persona set  nombre = '$nombre', apellido = '$apellido', clave='$contrasenia' WHERE documento=$documento";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../profile.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>
 