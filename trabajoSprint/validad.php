<?php
include('db.php');

$nam=$_POST['nam'];
$email=$_POST['email'];

session_start();
$nm=$_SESSION['nombre'];
$_SESSION['nombre']=$_POST['nam'];

session_start();



$conexion=mysqli_connect("localhost","root","aguileracamilo03","reparatodo");

$consulta="SELECT*FROM reparador where usuario='$nam' and contrasena='$email'  ";
$resultado=mysqli_query($conexion,$consulta);


$filas=mysqli_num_rows($resultado);

if($filas){
  print "$filas";
    header("location:revision.php");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);