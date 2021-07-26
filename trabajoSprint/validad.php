<?php
include('db.php');

$nam=$_POST['Usuario'];
$email=$_POST['Contrasena'];

session_start();
$nm=$_SESSION['nombre'];
$_SESSION['nombre']=$_POST['Usuario'];

session_start();



$conexion=mysqli_connect("localhost","root","root","facilisimo");

$consulta="SELECT*FROM cliente where usuario='$nam' and contrasena='$email'  ";
$resultado=mysqli_query($conexion,$consulta);


$filas=mysqli_num_rows($resultado);

if($filas){
  print "$filas";
    header("location:revision.php");

}else{

$consulta="SELECT*FROM Empleado where usuario='$nam' and contrasena='$email'  ";
$resultado=mysqli_query($conexion,$consulta);


$filas=mysqli_num_rows($resultado);

if($filas){
  print "$filas";
    header("location:Empleado.php");

}else{
  header("location:administrador.html");

}
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
