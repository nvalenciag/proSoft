<?php
include "db-conexion.php";



echo $seleccionado=$_POST['reportes'];
$boton=""; 
if(isset($_POST['reportes'])) $boton=$_POST['reportes']; 


session_start();

if($boton){
$tabla4=$_SESSION['reportes'];
$_SESSION['tabla4']=$_POST['reportes'];
}
$conexion=mysqli_connect("localhost","root","root","facilisimo");

if($boton) { 
//simples
if($seleccionado==1){
    echo "entro";
    $sql = "SELECT SUM(valor) FROM chance where fechaRealizado between '2021-06-01' and '2021-07-01'";
}
if($seleccionado==2){
    $sql = "SELECT cedula, nombre FROM cliente  where fechaNacimiento<date'1961-07-27' ";
}
if($seleccionado==3){
    $sql = "SELECT Cedula,Nombre, Sueldo  FROM Empleado order by Sueldo desc;";
}

//intermedias
//tipo de paquetes mas vendidos a menos
if($seleccionado==4){
    //$sql = "SELECT SUM(sueldo),direccion FROM empleado inner join sucursal on Sucursal_Codigo = Codigo where sueldo> (select sueldo from empleado inner join sucursal on Sucursal_Codigo = Codigo where sueldo>100000)";
    $sql = " SELECT direccion,SUM(sueldo) FROM empleado em inner join sucursal su on em.Sucursal_Codigo = su.Codigo where sueldo>900000 group by su.Codigo;";
}
if($seleccionado==5){
    $sql = "SELECT Nombre,Descripcion, COUNT(CodigoArticulo)*cantidad FROM Pedidos INNER JOIN Articulos ON codigoArticulo=Articulo_codigoArticulo group by codigoArticulo  order by count(codigoArticulo)*cantidad asc ";
    }

//articulo mas vendido
if($seleccionado==6){
    //$sql = "SELECT  COUNT(idPaquete) FROM Pedidos INNER JOIN Articulos ON codigoArticulo=CodigoPedido group by codigoPedido  order by count(codigoPedido) asc FETCH FIRST 1 ROWS ONLY ";
    $sql = "SELECT Descripcion, COUNT(t.Codigo) FROM Paquete p INNER JOIN tipoPaquete t ON t.Codigo=tipoPaquete_Codigo group by t.Codigo order by COUNT(t.Codigo) desc";
}
if($seleccionado==7){
    //$sql = "SELECT  COUNT(idPaquete) FROM Pedidos INNER JOIN Articulos ON codigoArticulo=CodigoPedido group by codigoPedido  order by count(codigoPedido) asc FETCH FIRST 1 ROWS ONLY ";
    $sql = "SELECT cl.cedula,nombre,count(cl.cedula) FROM Paquete p INNER JOIN tipoPaquete t ON t.Codigo=tipoPaquete_Codigo INNER JOIN telefono_cliente tc ON tc.numero=Telefono_Cliente_Numero INNER JOIN cliente cl ON cl.cedula=Cliente_cedula group by cl.cedula order by count(cl.cedula)desc";
    
}
if($seleccionado==8){
    //$sql = "SELECT  COUNT(idPaquete) FROM Pedidos INNER JOIN Articulos ON codigoArticulo=CodigoPedido group by codigoPedido  order by count(codigoPedido) asc FETCH FIRST 1 ROWS ONLY ";
    $sql = "SELECT cedula, nombre, SUm(valor) from cliente inner join telefono_cliente on cedula=Cliente_cedula inner join paquete on numero=Telefono_Cliente_Numero inner join tipoPaquete t on t.Codigo=tipoPaquete_Codigo group by cedula having sum(valor)>(Select SUm(valor) from cliente inner join telefono_cliente on cedula=Cliente_cedula inner join paquete on numero=Telefono_Cliente_Numero inner join tipoPaquete t on t.Codigo=tipoPaquete_Codigo  where cedula='149503030' group by cedula)";
    
}
if($seleccionado==9){

    $sql = "SELECT Nombre, valor*COUNT(CodigoArticulo)*cantidad FROM Pedidos INNER JOIN Articulos ON codigoArticulo=articulo_codigoArticulo group by codigoArticulo  having  sum(valor)>( SELECT sum(valor) FROM Pedidos INNER JOIN Articulos ON codigoArticulo=articulo_codigoArticulo  where codigoArticulo in(6,7,8 ))";
}


if ($link-> query($sql) === TRUE) {

    echo "OK";    
    header("location:Empleado.php"); 

}else {
    header("location:Empleado.php"); 
 echo "neaaaa";
}
mysqli_close($link);  
}
?>
<h1 class="bad"></h1>