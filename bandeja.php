<?php

//echo "hola".$usuario;
include "cabeza.inc.php";
include "conexion.inc.php";
session_start();
$usuario = $_GET['usuario'];

$sql="select * from flujoprocesoseguimiento ";
$sql.="where usuario='".$usuario."' ";
$sql.="and fechafin is null ";
$resultado=mysqli_query($con, $sql);
?>
<link rel="stylesheet" href="estilos.css">
<body>
<h2 id=usu>Usuario: <?php echo $usuario?></h2>
<table >
<tr >
  <th>Nro Tramite</th>
  <th>Flujo</th>
  <th>Proceso</th>
  <th>Operacion</th>
</tr>
<?php 
while ($fila=mysqli_fetch_array($resultado))
{
  echo "<tr>";
  echo "<td>".$fila["tramite"]."</td>";
  echo "<td>".$fila["flujo"]."</td>";
  echo "<td>".$fila["proceso"]."</td>";
  echo "<td><a id= 'enlace' href='principal.php?flujo=".$fila["flujo"]."&proceso=".$fila["proceso"]."&usuario=".$usuario."'>Editar</a></td>";
  echo "</tr>";

  include "pie.inc.php";
}
?>

</table>
</body>