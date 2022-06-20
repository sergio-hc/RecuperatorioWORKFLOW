<h2 style="font-size: 20px; font-weight: 800; color: #00F;">  CONFIRME LOS DATOS BRINDADOS PARA  FINALIZAR SU INSCRIPCION </h2>
<p style="font-weight: bold;">NOMBRE COMPLETO: </p><?php echo $nombrecompleto;?><br>

<p style="font-weight: bold;">CARNET DE IDENTIDAD: </p><?php echo $ci;?><br>
<p style="font-weight: bold;">MATRICULA: </p><?php echo $matricula;?><br>
<?php
while($fila1 = mysqli_fetch_array($resultado1)){
 echo "<p style='font-weight: bold';>MATERIA INSCRITA: </p>".$fila1['materia']."<br>";

}


?>