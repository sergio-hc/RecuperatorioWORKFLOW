<?php

session_start();
//$_SESSION["usuario"]=$_GET['usuario'];

$usuario = $_SESSION["usuario"];
$sql="select * from estudiante.estudiante where usuario='$usuario'";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);

$nombrecompleto=$fila["nombre"];
$ci = $fila['ci'];
$matricula = $fila['matricula'];
//varialnes materias va
$sql1="select * from estudiante.registro_mat where usuario = '$usuario' ";
$resultado1=mysqli_query($con, $sql1);




?>
<h2 id=usu>Usuario: <?php echo $_SESSION['usuario'];?></h2>