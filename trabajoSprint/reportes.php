<?php
include "db-conexion.php";

$conexion=mysqli_connect("localhost","root","root","facilisimo");

//simples
$sql = "SELECT SUM(valor) FROM chance where fechaRealizado between '1999-10-11' and '1999-11-11'";
$sql = "SELECT SUM(valor) FROM chance where fechaRealizado between '1999-10-11' and '1999-11-11'";
$sql = "SELECT SUM(valor) FROM chance where fechaRealizado between '1999-10-11' and '1999-11-11'";

//intermedias
$sql = "SELECT SUM(sueldo),direccion FROM empleado em inner join sucursal su on em.Direccion_sucursal = su.Direccion where sueldo> (select sueldo from empleado inner join sucursal on em.Direccion_sucursal = su.Direccion where sueldo>100000)";
//articulo mas vendido
$sql = "SELECT SUM(valor) FROM chance where fechaRealizado between '1999-10-11' and '1999-11-11'";


if ($link-> query($sql) === TRUE) {

    echo "OK";    
    header("location:pedidos.php"); 

}else {
    echo "$codigoPedido";
}
mysqli_close($link);  

?>
<h1 class="bad"></h1>