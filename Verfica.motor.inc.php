<?php
//session_start();
//$_SESSION["usuario"]=$_GET['usuario'];

$usuario = $_SESSION["usuario"];
echo $usuario;
$nombre = $_GET["nombrecompleto"];
$matricula=$_GET["matricula"];
$cidentidad=$_GET["ci"];
$sql="update estudiante.estudiante set ";
$sql.="matricula='$matricula', ci='$cidentidad' , nombre='$nombre'";
$sql.="where usuario='$usuario'";
$resultado=mysqli_query($con, $sql);
?>
correcto