<?php
 session_start();
        if (!isset($_SESSION['user'])) {
        print"<script>alert(\"Por favor inicie sesión.\");
    		window.location='../index.php';</script>";
        exit();
        }
        
        $inactividad = 600;
        if(isset($_SESSION["expira"])){
        $sessionTTL = time() - $_SESSION["expira"];
        if($sessionTTL > $inactividad){
            require_once 'logout.php';

        }
        }
        $_SESSION["expira"] = time();

?>