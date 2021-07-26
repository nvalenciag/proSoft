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



$conexion=mysqli_connect("localhost","root","root","facilisimo");



//if($nombreCliente.empty()||$telefonoCliente.empty()||$emailCliente.empty()||$descripcionProducto.empty()||$descripcionProducto.empty()){

$sql= "INSERT INTO cliente(cedula,nombre,apellidos,telefono,fechaNacimiento,usuario,contrasena,numeroBancario) VALUES ('$cedulaCliente','$nombreCliente','$apellidoCliente','$telefonoCliente','$fechaNacimientoCliente','$usuarioCliente','$contrasenaCliente','$cuentaCliente')";   


if ($link-> query($sql) === TRUE) {

    echo "OK";    
    header("location:index.html"); 

}else {
    echo "$fechaNacimientoCliente";
}
mysqli_close($link);  

?>
<h1 class="bad"></h1>