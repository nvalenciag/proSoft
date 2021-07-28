<?php
include "db-conexion.php";

$codigoPedido=$_POST['codigoPedido'];
$estadoPedido=$_POST['estadoPedido'];
$cedulaPedido=$_POST['cedulaPedido'];
$articuloPedido=$_POST['articuloPedido'];


$boton3=""; 
 $boton2=""; 
 $boton4=""; 
 $boton5=""; 

 if(isset($_POST['buscar'])) $boton5=$_POST['buscar']; 

 session_start();

 if($boton5){
 $tabla1=$_SESSION['codigoPedido'];
 $_SESSION['tabla1']=$_POST['codigoPedido'];
 }

$conexion=mysqli_connect("localhost","root","root","facilisimo");



//if($nombreCliente.empty()||$telefonoCliente.empty()||$emailCliente.empty()||$descripcionProducto.empty()||$descripcionProducto.empty()){
if(isset($_POST['modificar'])) $boton3=$_POST['modificar']; 
if(isset($_POST['guardar'])) $boton2=$_POST['guardar']; 
if(isset($_POST['eliminar'])) $boton4=$_POST['eliminar']; 
if(isset($_POST['buscar'])) $boton5=$_POST['buscar']; 


    
if($boton3){
    $sql= "UPDATE pedidos SET numeroPedido='$codigoPedido',estado='$estadoPedido',cliente_cedula='$cedulaPedido',Articulo_codigoArticulo='$articuloPedido' where numeroPedido='$codigoPedido'";
}  
if($boton2) { 
    $sql= "INSERT INTO pedidos(numeroPedido,estado,cliente_cedula,Articulo_codigoArticulo) VALUES ('$codigoPedido','$estadoPedido','$cedulaPedido','$articuloPedido')"; 
    
    ///$sql="INSERT into pedidos values(4,'lol','12345',3)"; 
}
if($boton4) { 
    $sql= "Delete from pedidos where numeroPedido='$codigoPedido' ";
}
if($boton5) { 
    $sql= "Delete from cliente where usuario='$usuarioCliente' and contrasena='$contrasenaCliente' ";
}


if ($link-> query($sql) === TRUE) {

    echo "OK";    
    header("location:pedidos.php"); 

}else {
    echo "$codigoPedido";
}
mysqli_close($link);  

?>
<h1 class="bad"></h1>