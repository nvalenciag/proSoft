<?php
include "db-conex.php";


$codigoPedido=$_POST['codigoPedido'];




$conexion=mysqli_connect("localhost","root","root","reparatodo");

$consulta="SELECT*FROM pedido where codigo='$codigoPedido'" ;
$resultado=mysqli_query($conexion,$consulta);
$numero = 3;

$filas=mysqli_num_rows($resultado);


if($filas){
  
    $sql= "UPDATE pedido SET estado = 'aprobada' WHERE codigo = '$codigoPedido'";  
    if ($link->query($sql) === TRUE) {
        echo "OK";      
       }else {
        echo "ERROR";
       }
       mysqli_close($link);

    
    header("location:blog.php"); 

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