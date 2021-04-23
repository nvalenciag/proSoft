<?php
include('db.php');
$nam=$_POST['nam'];
$email=$_POST['email'];

session_start();



$conexion=mysqli_connect("localhost","root","","reparatodo");

$consulta="SELECT*FROM adm where nam='$nam' and email='$email'  ";
$resultado=mysqli_query($conexion,$consulta);


$filas=mysqli_num_rows($resultado);

if($filas){
  print "$filas";
    header("location:blog.html");

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