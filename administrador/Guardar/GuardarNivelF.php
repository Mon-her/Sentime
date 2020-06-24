<?php 
require_once "../../utili/Conexion.php";
$denominacion=$_POST['denominacion'];
$found=false;

$sql1="select * from nivel_formacion where denominacion_nivel=\"$_POST[denominacion]\"";
$query=$mysqli->query($sql1);
while ($r=$query->fetch_array()) 
{
$found=true;
if($found)
{
print"<script>alert(\"La denominacion ya esta registrada.\");window.location='../formaciones.php';</script>";
}
}
$query="INSERT INTO nivel_formacion (denominacion_nivel) VALUES ('$denominacion')";

if($mysqli->query($query)){
	print"<script>alert(\"Registro exitoso.\");window.location='../formaciones.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
 ?>