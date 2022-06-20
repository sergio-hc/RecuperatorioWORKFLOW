<?php
include "conexion.inc.php";
include "cabeza.inc.php";
include "pie.inc.php";
$usuario=$_GET['usuario'];
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];

$sql="select * from flujoproceso ";
$sql.="where flujo='$flujo' and proceso='$proceso'";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);

$pantalla=$fila['pantalla'];
$pantalla.=".inc.php";
$pantallalogica=$fila['pantalla'];
$pantallalogica.=".main.inc.php";
$procesoanterior=$proceso;
$proceso=$fila['procesosiguiente'];
include $pantallalogica;
?>
<html>
<link rel="stylesheet" href="estilos.css">
<body>

	
	<form style="text-align:center ;" action="motor.php" method="GET">
	
		<input type="hidden" name="flujo" value="<?php echo $flujo;?>"/>
		<input type="hidden" name="proceso" value="<?php echo $proceso;?>"/>
		<input type="hidden" name="procesoanterior" value="<?php echo $procesoanterior;?>"/>
		<?php
		
		include $pantalla;
		?>
		<input id = "but" type="submit" name="Anterior" value="Anterior"/>
		<input id = "but" type="submit" name="Siguiente" value="Siguiente"/>
	</form>
</body>
</html>