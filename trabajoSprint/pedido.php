<?php
include "db-conexion.php";


$resena=$_POST['resena'];

$libro=$_POST['libro'];
echo $libro;


$conexion=mysqli_connect("localhost","root","root","reparatodo");

$consulta="SELECT*FROM libro where isbn='$libro'" ;
$resultado=mysqli_query($conexion,$consulta);


$filas=mysqli_num_rows($resultado);

if($filas){
  
    $sql= "INSERT INTO rese (texto,isbn) VALUES ('$resena','$libro')";   


    if ($link-> query($sql) === TRUE) {
     echo "OK";      
    }else {
     echo "ERROR";
    }
    mysqli_close($link);  

}else{
    ?>
    <?php
    include("pedidos.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}





?>
<h1 class="bad">ERROR DE AUTENTIFICACION</h1>