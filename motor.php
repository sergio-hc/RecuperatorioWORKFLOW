<?php
include "conexion.inc.php";
session_start();
$usuario=$_SESSION['usuario'];
$flujo=$_GET["flujo"];
$proceso=$_GET["procesoanterior"];
$procesosiguiente=$_GET["proceso"];
$sql="select * from flujoproceso ";
$sql.="where flujo='$flujo' and proceso='$proceso'";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
$pantalla=$fila['pantalla'];
$pantalla.=".motor.inc.php";
include $pantalla;
header("Location: principal.php?flujo=$flujo&proceso=$procesosiguiente&usuario=$usuario");

if (isset($_GET["Anterior"]))
{
	$sql="select * from flujoproceso ";
	$sql.="where flujo='$flujo' and procesosiguiente='$proceso'";
	$resultado1=mysqli_query($con, $sql);
	$fila1=mysqli_fetch_array($resultado1);
	print_r ($fila1);
	//$proceso=$fila1["Proceso"];
	$procesosiguiente=$fila1["proceso"];
	//echo $procesosiguiente;
}
header("Location: principal.php?flujo=$flujo&proceso=$procesosiguiente&usuario=$usuario");


?>