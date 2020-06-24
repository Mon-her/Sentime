<?php
require_once "../../utili/Conexion.php";
$lectiva=$_POST['lectiva'];
$productiva=$_POST['productiva'];
$found=false;
$sql1="select * from duracion where meses_lectiva=\"$_POST[lectiva]\" and meses_productiva=\"$_POST[productiva]\"";
$query=$mysqli->query($sql1);
while ($r=$query->fetch_array())
{
$found=true;
if($found){
	print"<script>alert (\"Duración de etapa práctica y etapa lectiva ya registradas.\");
	window.location='../duraciones.php';</script>";
}
}
$query="INSERT INTO duracion (meses_lectiva,meses_productiva) values ('$lectiva','$productiva')";
if ($mysqli->query($query)){
	print"<script>alert (\"registro exitoso.\");
	window.location='../duraciones.php';</script>"; 
}
else {
	echo"OOPS!!!, ocurrió un error.";
}
$mysqli->close();
?>