<html>
<?php


$con = mysqli_connect("localhost","sergio","123456");
mysqli_select_db($con, "estudiante");

if(isset($_GET['login'])) {
$usuario = $_GET['usuario'];
$pass = $_GET["pass"];

$sql = mysqli_query($con,"SELECT * from estudiante where usuario = '".$usuario."'and pass ='".$pass."'");
$nr = mysqli_num_rows($sql);

    if($nr == 1){
    echo "bienvenido ".$usuario;
    header("Location: bandeja.php?usuario=$usuario");
    }else if($nr==0){
        echo "<center>¡Debes iniciar sesión!</h2></center>";
    //header("Location: acceso.php");
    }
}
 ?>

<link rel="stylesheet" href="estilos.css">
<?php
include "cabeza.inc.php";
?>
<body>
<div class='container'>
  
  <div class='form'>
    <form method="GET" action="index.php">
        USUARIO
    <input type="text" name="usuario" value="" />
        CONTRASEÑA
    <input type='password' name= 'pass' value='' />
    <input type='submit' value='INGRESAR' name="login" />
    </form>
  </div>
<div>
<?php
include "pie.inc.php";
?>
</body>
</html>