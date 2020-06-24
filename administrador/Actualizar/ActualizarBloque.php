<?php
require_once "../../utili/Conexion.php";

$id_aula = $_POST['id'];
$id_descripcion = $_POST['descripcion'];
$sedeid_sede = $_POST['sede'];


$query = "UPDATE aula set  id_descripcion = '$id_descripcion', sedeid_sede = '$sedeid_sede' WHERE id_aula=$id_aula";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../bloques.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>