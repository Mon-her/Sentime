<?php 
require_once "../../utili/Conexion.php";
$direccion=$_POST['direccion'];
$nombre_sede=$_POST['nombre_sede'];
$centro=$_POST['centro'];
$found=false;

$sql1="select * from sede where nombre=\"$_POST[nombre_sede]\"";
$query=$mysqli->query($sql1);
while ($r=$query->fetch_array()) 
{
$found=true;
if($found)
{
print"<script>alert(\"Nombre de la sede ya registrado.\");window.location='../sedes.php';</script>";
}
}
$query="INSERT INTO sede (direccion,nombre,centroid_centro) VALUES ('$direccion','$nombre_sede','$centro')";

if($mysqli->query($query)){
	print"<script>alert(\"Registro exitoso.\");window.location='../sedes.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
 ?>