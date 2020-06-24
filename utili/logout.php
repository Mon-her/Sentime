<?php

@session_start();
session_destroy();
print"<script>alert(\"Su sesión ha terminado.\");
       		window.location='../index.php';</script>";
exit();
?>