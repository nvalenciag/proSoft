<?php
include "db-conex.php";

session_start();
$nm=$_SESSION['nombre'];

$codigoPedido=$_POST['codigoPedido'];
$nam=$_POST['usuario'];




$conexion=mysqli_connect("localhost","root","root","facilisimo");

$consulta="SELECT*FROM pedido where codigo='$codigoPedido'" ;
$resultado=mysqli_query($conexion,$consulta);
$numero = 3;

$filas=mysqli_num_rows($resultado);


 $boton3=""; 
 $boton2=""; 

 if(isset($_POST['boton3'])) $boton3=$_POST['boton3']; 
 if(isset($_POST['boton2'])) $boton2=$_POST['boton2']; 

 if($boton3){
  $sql= "UPDATE pedido SET estado = 'aprobado',usuario_reparador = '$nm' WHERE codigo = '$codigoPedido'"; 
  

 }

 if($boton2) { 
  $sql= "UPDATE pedido SET estado = 'rechazado' WHERE codigo = '$codigoPedido'"; 
 }


if($filas){
  
    
  if ($link->query($sql) === TRUE) {
    echo "OK";      
   }else {
    echo "ERROR";
   }
       mysqli_close($link);

    
    header("location:revision.php"); 

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}





?>
<h1 class="bad"></h1>