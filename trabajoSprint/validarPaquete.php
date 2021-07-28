<?php
include "db-conexion.php";

$Codigo=$_POST['Codigo'];
$FechaRealizado=$_POST['FechaRealizado'];
$tipoPaquete_Codigo=$_POST['tipoPaquete_Codigo'];
$FechaLimite=$_POST['FechaLimite'];

$Telefono_Cliente_Numero=$_POST['Telefono_Cliente_Numero'];





$conexion=mysqli_connect("localhost","root","root","facilisimo");


$boton3=""; 
 $boton2=""; 
 $boton4=""; 
 $boton5=""; 

 if(isset($_POST['buscar'])) $boton5=$_POST['buscar']; 

 session_start();

 if($boton5){
 $tabla2=$_SESSION['Codigo'];
 $_SESSION['tabla3']=$_POST['Codigo'];
 }

if(isset($_POST['Modificar'])) $boton3=$_POST['Modificar']; 
if(isset($_POST['Guardar'])) $boton2=$_POST['Guardar']; 
if(isset($_POST['eliminar'])) $boton4=$_POST['eliminar']; 
if(isset($_POST['buscar'])) $boton5=$_POST['buscar']; 




//if($nombreCliente.empty()||$telefonoCliente.empty()||$emailCliente.empty()||$descripcionProducto.empty()||$descripcionProducto.empty()){
    if($boton3){
        $sql= "UPDATE paquete SET FechaRealizado='$FechaRealizado',FechaLimite='$FechaLimite',tipoPaquete_Codigo='$tipoPaquete_Codigo',Telefono_Cliente_Numero='$Telefono_Cliente_Numero' WHERE Codigo='$Codigo'";       
    }  
    if($boton2) { 
       $sql= "INSERT INTO paquete VALUES ('$Codigo','$FechaRealizado','$FechaLimite','$tipoPaquete_Codigo','$Telefono_Cliente_Numero')";   
        ///$sql="INSERT into pedidos values(4,'lol','12345',3)"; 
    }
    if($boton4) { 
        $sql= "Delete from paquete where codigo='$Codigo' ";
    }
    if($boton5) { 
        $sql= "Delete from paquete where codigo='$Codigo' and tipoPaquete_Codigo='$tipoPaquete_Codigo' ";
    }



if ($link-> query($sql) === TRUE) {

    echo "OK";    
    header("location:paquete.php"); 

}else {
    echo "ERROR";
}
mysqli_close($link);  

?>
<h1 class="bad"></h1>