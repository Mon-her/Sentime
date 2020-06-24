<?php 
require_once "../../utili/Conexion.php";
$id=$_POST['id'];
$denominacion=$_POST['denominacion'];
$duracion=$_POST['duracion'];


$found=false;
$sql1="select * from competencia where denominacion=\"$_POST[denominacion]\"";
$query=$mysqli->query($sql1);
while ($r=$query->fetch_array()) 
{
$found=true;
if($found)
{
print"<script>alert(\"La competencia ya esta registrada.\");window.location='../competencias.php';</script>";
}
}
$query="INSERT INTO competencia (id_competencia,denominacion,duracion) VALUES ('$id','$denominacion','$duracion')";

if($mysqli->query($query)){
	print"<script>alert(\"Registro exitoso.\");window.location='../competencias.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
 ?>