<?php

require_once "Conexion.php";
$email = $_POST['email'];
$clave = md5($_POST['password']);
 $query = "SELECT documento,nombre, apellido, email, rol, estado FROM 
persona 
inner join
rol on id_rol=rol_documento WHERE email='$email' AND clave='$clave'";
$consulta2 = $mysqli->query($query);
$mysqli->close();
if ($consulta2->num_rows >= 1) {
    $fila = $consulta2->fetch_array(MYSQLI_ASSOC);
    session_start();
    $_SESSION['verificar'] = true;
    $_SESSION['user'] = $fila['nombre'];
    $_SESSION['apellido'] = $fila['apellido'];
    $_SESSION['correo'] = $fila['email'];
    $_SESSION['documento'] = $fila['documento'];
    $_SESSION['rol'] = $fila['rol'];
    $_SESSION['tiempo'] = time();
    $_SESSION['expira'] = $_SESSION['tiempo'];
 
    
 if($fila['estado']==0){
    if ($fila['rol'] == 'Instructor') {
        header("Location: ../instructor/horarioInstructor.php");
    } else if ($fila['rol'] == 'Administrador') {
        header("Location: ../administrador/inicio.php");
    } else if ($fila['rol'] == 'Coordinador') {
        header("Location: ../coordinador/production/index.php");
    } 
 }else{
     print"<script>alert(\"Su estado esta inhbilitado. consulte con el administrador del sistema .\");
		window.location='../index.php';</script>";
 }
}else {
        print"<script>alert(\"Datos no reconocidos.\");
		window.location='../index.php';</script>";
    }
    
?>