<?php
include "db-conexion.php";

$Codigo=$_POST['Codigo'];
$Valor=$_POST['Valor'];
$Numero=$_POST['Numero'];
$fechaRealizado=$_POST['fechaRealizado'];
$fechaJuego=$_POST['fechaJuego'];
$loteria=$_POST['loteria'];
$fechaMaxima=$_POST['fechaMaxima'];




$conexion=mysqli_connect("localhost","root","root","facilisimo");

$boton3=""; 
 $boton2=""; 
 $boton4=""; 
 $boton5=""; 

 if(isset($_POST['buscar'])) $boton5=$_POST['buscar']; 

 session_start();

 if($boton5){
 $tabla2=$_SESSION['Codigo'];
 $_SESSION['tabla2']=$_POST['Codigo'];
 }


 if(isset($_POST['Modificar'])) $boton3=$_POST['Modificar']; 
 if(isset($_POST['Guardar'])) $boton2=$_POST['Guardar']; 
 if(isset($_POST['eliminar'])) $boton4=$_POST['eliminar']; 
 if(isset($_POST['buscar'])) $boton5=$_POST['buscar']; 





//if($nombreCliente.empty()||$telefonoCliente.empty()||$emailCliente.empty()||$descripcionProducto.empty()||$descripcionProducto.empty()){
    if($boton3){
        $sql= "UPDATE chance SET valor='$Valor',numero='$Numero',fechaRealizado='$fechaRealizado',fechaJuego='$fechaJuego',Loteria_Codigo='$loteria',fechaMaxima='$fechaMaxima' WHERE codigo='$Codigo'";       
    }  
    if($boton2) { 
        echo "hola";
       $sql= "INSERT INTO chance(valor,numero,fechaRealizado,fechaJuego,fechaMaxima,Loteria_Codigo) VALUES ('$Valor','$Numero','$fechaRealizado','$fechaJuego','$fechaMaxima','$loteria')";   
        ///$sql="INSERT into pedidos values(4,'lol','12345',3)"; 
    }
    if($boton4) { 
        $sql= "Delete from chance where codigo='$Codigo' ";
    }
    if($boton5) { 
        $sql= "Delete from chance where codigo='$Codigo' and valor='$Valor' ";
    }
    
if ($link-> query($sql) === TRUE) {

    echo "OK";    
    header("location:chance.php"); 

}else {
    echo "ERROR";
}
mysqli_close($link);  

?>
<h1 class="bad"></h1>