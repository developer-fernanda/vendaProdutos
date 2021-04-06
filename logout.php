<?php
include("logica-usuario.php");
logout();

//session_destroy();
header("Location: login.php");
?>