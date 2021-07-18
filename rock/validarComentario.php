<?php
$cont=0;
$codigoh=$_POST['codigoh'];
$comentario=$_POST['comentario'];
while($cont<2){
include "db-conex.php";


$conexion=mysqli_connect("localhost","root","root","reparatodo");

$consulta="SELECT*FROM pedido where codigo='$codigoh'" ;
$resultado=mysqli_query($conexion,$consulta);
$numero = 3;

$filas=mysqli_num_rows($resultado);


 
if( $cont==0){
 $sql= "UPDATE pedido SET estado = 'Reparacion' WHERE codigo = '$codigoh'";  
}
else{
    
    $sql= "INSERT INTO observaciones (comentario ,codigo_pedido ) VALUES ('$comentario','$codigoh')"; 
}
 
  


if($filas){
  
  
    
  if ($link->query($sql) === TRUE) {
    echo "OK";      
   }else {
    echo "ERROR";
   }
       mysqli_close($link);

    if($cont==1){
        header("location:reparaciones.php"); 
    }
   $cont++;

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
  
}

}





?>
<h1 class="bad"></h1>