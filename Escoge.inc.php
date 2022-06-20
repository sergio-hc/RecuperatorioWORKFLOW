
 <?php echo $nombrecompleto;?> - <?php echo $matricula;?><br>
<h2 style="font-size: 20px; font-weight: 800; color: #00F;">  REGISTRE LAS MATERIAS QUE DESEA INSCRIBIRSE (MAXIMO 2) </h2>


<body>
 <?php
 while($fila1 = mysqli_fetch_array($resultado1)){

    echo "<input  type='checkbox' name='materias[]' value=".$fila1["sigla"].">". $fila1["sigla"]." ".$fila1["nombre"]."</input>";
    echo "<br>";
 }

 ?>
 </body>