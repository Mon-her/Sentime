<?php
require_once "../../utili/Conexion.php";

$id_ficha = $_POST['numero_fichau'];
$inicio = $_POST['iniciou'];
$final= $_POST['finalu'];


$query = "UPDATE ficha set   ingreso = '$inicio', salida = '$final' WHERE numero_ficha=$id_ficha";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../fichas.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>