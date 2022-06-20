<?php
$usuario = $_SESSION["usuario"];
echo $usuario;

foreach($_GET["materias"] as $mat){

    $sql1="insert into estudiante.registro_mat VALUES('".$usuario."','".$mat."');";
    $resultado=mysqli_query($con, $sql1);
    echo $mat . "<br>";
}

?>