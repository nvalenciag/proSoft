<?php
include "db-conexion.php";


$nombreCliente=$_POST['nombreCliente'];
$telefonoCliente=$_POST['telefonoCliente'];
$emailCliente=$_POST['emailCliente'];
$nombreProducto=$_POST['nombreProducto'];
$descripcionProducto=$_POST['descripcionProducto'];
$descripcionArreglo =$_POST['descripcionArreglo'];




$conexion=mysqli_connect("localhost","root","","reparatodo");





  
$sql= "INSERT INTO pedido (nombre_apellido ,telefono,email ,descripcion ,nombre_producto ,descripcion_producto ) VALUES ('$nombreCliente','$telefonoCliente','$emailCliente','$nombreProducto','$descripcionProducto','$descripcionArreglo')";   


if ($link-> query($sql) === TRUE) {

    echo "OK";      
    header("location:index.html"); 

}else {
    echo "ERROR";
}
mysqli_close($link);  

?>
<h1 class="bad"></h1>