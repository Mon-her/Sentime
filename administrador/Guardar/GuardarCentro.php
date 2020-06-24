<?php 
require_once "../../utili/Conexion.php";
$centro=$_POST['centro'];
$found=false;

$sql1="select * from centro where nombre_centro=\"$_POST[centro]\"";
$query=$mysqli->query($sql1);
while ($r=$query->fetch_array()) 
{
$found=true;
if($found)
{
print"<script>alert(\"Nombre de centro ya registrado.\");window.location='../centros.php';</script>";
}
}
$query="INSERT INTO centro (nombre_centro) VALUES ('$centro')";

if($mysqli->query($query)){
	print"<script>alert(\"Registro exitoso.\");window.location='../centros.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
 ?>