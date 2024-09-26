<?php 
//sesion_name(login)
session_start();
session_destroy();
header("location: index.php");
?>