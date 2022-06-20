<h2 style="font-size: 20px; font-weight: 800; color: #00F;">  SU INSCRIPCIÓN FUE REGISTRADA CORRECTAMENTE! </h2>
<img src="bien.webp" height="150px" width="150px"><br><br>
<?php 

foreach($materia as $mat){
    $sql2="insert into cursot.inscritos VALUES('".$usuario."','".$nombrecompleto."',".$ci.",".$matricula.",'".$mat."',null);";
    $resultado=mysqli_query($con, $sql2);
    //echo $mat;
}

date_default_timezone_set('America/La_Paz');
echo "Fecha de Inscripción:   ";
echo date('d-m-Y h:i:s a', time());
echo "<br>";
?>
