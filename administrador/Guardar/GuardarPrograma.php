<?php 
require_once "../../utili/Conexion.php";
$denominacion=$_POST['denominacion'];
$id_duracion=$_POST['id_duracion'];
$id_formacion=$_POST['id_formacion'];
$id_tipo=$_POST['id_tipo'];


$found=false;
$sql1="select * from programa where denominacion=\"$_POST[denominacion]\" and id_tipo=\"$_POST[id_tipo]\"";
$query=$mysqli->query($sql1);
while ($r=$query->fetch_array()) 
{
$found=true;
if($found)
{
print"<script>alert(\"El programa ya esta registrado.\");window.location='../programas.php';</script>";
}
}
$query="INSERT INTO programa (denominacion,id_duracion,id_formacion,id_tipo) VALUES ('$denominacion','$id_duracion','$id_formacion','$id_tipo')";

if($mysqli->query($query)){
	print"<script>alert(\"Registro exitoso.\");window.location='../programas.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
 ?>