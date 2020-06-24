<?php
require_once "../../utili/Conexion.php";

$id_persona = $_POST['idd'];

$query = "UPDATE persona set  estado = 1 WHERE documento=$id_persona";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../instructores.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>
 