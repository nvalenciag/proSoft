<?php
include "db-conexion.php";

$cedulaCliente=$_POST['cedulaCliente'];
$nombreCliente=$_POST['nombreCliente'];
$apellidoCliente=$_POST['apellidoCliente'];
$telefonoCliente=$_POST['telefonoCliente'];
$fechaNacimientoCliente=$_POST['fechaNCliente'];
$usuarioCliente=$_POST['usuarioCliente'];
$contrasenaCliente=$_POST['ContraseñaCliente'];
$cuentaCliente=$_POST['cuentaCliente'];

$boton3=""; 
 $boton2=""; 
 $boton4=""; 
 $boton5=""; 

 if(isset($_POST['buscar'])) $boton5=$_POST['buscar']; 

 session_start();

 if($boton5){
 $tabla=$_SESSION['cedulaCliente'];
 $_SESSION['tabla']=$_POST['cedulaCliente'];
 }

$conexion=mysqli_connect("localhost","root","root","facilisimo");



//if($nombreCliente.empty()||$telefonoCliente.empty()||$emailCliente.empty()||$descripcionProducto.empty()||$descripcionProducto.empty()){
if(isset($_POST['modificar'])) $boton3=$_POST['modificar']; 
if(isset($_POST['guardar'])) $boton2=$_POST['guardar']; 
if(isset($_POST['eliminar'])) $boton4=$_POST['eliminar']; 
if(isset($_POST['buscar'])) $boton5=$_POST['buscar']; 


    
if($boton3){
    $sql= "UPDATE cliente SET nombre='$nombreCliente',apellidos='$apellidoCliente',telefono='$telefonoCliente',fechaNacimiento='$fechaNacimientoCliente',usuario='$usuarioCliente',contrasena='$contrasenaCliente',numeroBancario='$cuentaCliente' WHERE cedula = '$cedulaCliente'";       
}  
if($boton2) { 
    $sql= "INSERT INTO cliente(cedula,nombre,apellidos,telefono,fechaNacimiento,usuario,contrasena,numeroBancario) VALUES ('$cedulaCliente','$nombreCliente','$apellidoCliente','$telefonoCliente','$fechaNacimientoCliente','$usuarioCliente','$contrasenaCliente','$cuentaCliente')";   
}
if($boton4) { 
    $sql= "Delete from cliente where cedula='$usuarioCliente' ";
}
if($boton5) { 
    $sql= "Delete from cliente where usuario='$usuarioCliente' and contrasena='$contrasenaCliente' ";
}


if ($link-> query($sql) === TRUE) {

    echo "OK";    
    header("location:ahustesCuenta.php"); 

}else {
    echo "$fechaNacimientoCliente";
}
mysqli_close($link);  

?>
<h1 class="bad"></h1>