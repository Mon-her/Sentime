<?php 
require_once "../../utili/Conexion.php";
$descripcion=$_POST['descripcion'];
$found=false;

$sql1="select * from descripcion_aula where descripcion=\"$_POST[descripcion]\"";
$query=$mysqli->query($sql1);
while ($r=$query->fetch_array()) 
{
$found=true;
if($found)
{
print"<script>alert(\"La descripcion ya esta registrada.\");window.location='../descripciones.php';</script>";
}
}
$query="INSERT INTO descripcion_aula (descripcion) VALUES ('$descripcion')";

if($mysqli->query($query)){
	print"<script>alert(\"Registro exitoso.\");window.location='../descripciones.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
 ?>