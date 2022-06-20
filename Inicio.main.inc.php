<?php

//include "conexion.inc.php";
session_start();
$_SESSION["usuario"]=$_GET['usuario'];
//echo $_SESSION["usuario"];
?>
<h2 id=usu>Usuario: <?php echo $_SESSION['usuario'];?></h2>

