<?php
require_once "../../utili/Conexion.php";
if(isset($_POST['actualizar'])){
$id_sede = $_POST['idu'];
$direccion = $_POST['direccionu'];
$centro = $_POST['centrou'];


$query = "UPDATE sede set  direccion = '$direccion', centroid_centro='$centro' WHERE id_sede=$id_sede";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../sedes.php';</script>";
}else {
	echo "Ocurrio un error";
}
}
else {
	echo "Error";
        
}
$mysqli->close();
?>