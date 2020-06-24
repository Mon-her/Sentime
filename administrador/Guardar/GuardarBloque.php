<?php 
require_once "../../utili/Conexion.php";
$dia=$_POST['dia'];
$trimestre=$_POST['trimestre'];
$rango_horas=$_POST['rango_horas'];
$persona_documento=$_POST['persona_documento'];
$fichanumero_ficha=$_POST['fichanumero_ficha'];
$aulaid_aula=$_POST['aulaid_aula'];
$anio=$_POST['anio'];

$found=false;
$sql1="select * from bloque where dia=\"$_POST[dia]\" and trimestre=\"$_POST[trimestre]\" and rango_horas=\"$_POST[rango_horas]\"";
$query=$mysqli->query($sql1);
while ($r=$query->fetch_array()) 
{
$found=true;
if($found)
{
print"<script>alert(\"El bloque ya esta registrado.\");window.location='../bloques.php';</script>";
}
}
$query="INSERT INTO bloque (dia,trimestre,rango_horas,persona_documento,fichanumero_ficha,aulaid_aula,anio) VALUES ('$dia','$trimestre','$rango_horas','$persona_documento','$fichanumero_ficha','$aulaid_aula','$anio')";

if($mysqli->query($query)){
	print"<script>alert(\"Registro exitoso.\");window.location='../bloques.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
 ?>