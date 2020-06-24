<?php 
require_once "../../utili/Conexion.php";
$id=$_POST['documento'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$clave=md5($_POST['password']);
$rol=$_POST['rol'];
$found=false;

$sql1="select * from persona where email=\"$_POST[email]\"";
$query=$mysqli->query($sql1);
while ($r=$query->fetch_array()) 
{
$found=true;
if($found)
{
print"<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../login.php#signup';</script>";
}
}
$querys="insert into persona (documento,nombre,apellido,email,clave,rol_documento) values ('$id','$nombre','$apellido','$email','$clave','$rol')";

if($mysqli->query($querys)){
	print"<script>alert(\"Registro exitoso.\");window.location='../login.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
 ?>