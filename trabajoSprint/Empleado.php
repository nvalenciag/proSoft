<?php
    session_start();
    $tablas4="";
    $tablas4=$_SESSION['tabla4'];
    $conexion=mysqli_connect("localhost","root","root","facilisimo");
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Facilisimo</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="images/LOGO_FACILISIMO.png" alt="logo" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-10">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">

                                        <li > <a href="ahustesCuenta.php">Ajustes de cuenta</a> </li>
                                        <li > <a href="pedidos.php">Pedido</a> </li>
                                        <li > <a href="paquete.php">Paquetes de Datos</a> </li>
                                        <li > <a href="chance.php">Chances</a> </li>
                                        <li > <a href="administrador.html">cerrar sesion</a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
    </header>
    <!-- end header -->
    <div class="blogbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blogtitlepage">
                        <h2>Menu</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Lastestnews -->
    
    <!-- end Lastestnews -->

    <!--  footer -->
    <footr id="footer_with_contact">
        <div class="footer">
    <div class="container">
    <form action="reportes.php" method="post">

        <select class="contactus" name="reportes">
        
                <option value='1'>'Sencilla'-El valor total de los chances realizados entre '1999-10-11' y '1999-11-11'";</option>
                <option value='2'>'Sencilla'-El nombre y la cedula de los clientes mayores de 60 años</option>
                <option value='3'>'Sencilla'-Listar los empleados que mas ganan de mayor a menor</option>
                <option value='4'>'Intermdia'-Listar el sueldo total de los empleados por sucursal que tengan un sueldo mayor a 900000</option>
                <option value='5'>'Intermedia'-Lista el nombre,descripcion y la cantidad de veces que se vendio un articulo listados de menor a mayor</option>
                <option value='6'>'Intermedia'-Lista la descripcion y el numero de veces que fue utilizado y se genera una lista de mayor a menor</option>
                <option value='7'>'Intermedia'-Lista de cedula,nombre y numero de paquetes que ha comprado un cliente ordenado de mayor a menor</option>
                <option value='8'>'Complejos'-</option>
                <option value='9'>'Complejos'-</option>
                <option value='10'>'Complejos'-</option>

                
        </select>
        <input type="submit" class="send" name="Consultar" value="Consultar">
        </form>





    <?php
        if($tablas4==1){

        ?>
            <div class="container">

                <div class="row">                              
                    <div class="col-lg-1 col-md-9 col-sm-8 width">
                        <div class="address">
                            <form>
                                <div class="row">
                                <div class="col-lg-1 col-md-9 col-sm-8 width">
                                <td>      '</td>
                                    <table bordercolor = "#1a0494" border="1" cellpadding="10" cellspacing="10">
                                        <tr bgcolor= "#FFFFFF">
                                            <td><font size ="3", color ="#000000">SUM(valor)</font></td>
                                            
                                           
                                        </tr>
                                        
                                        <?php
                                           
                                           if($tablas4==1){
                                            $sql = "SELECT SUM(valor) FROM chance where fechaRealizado between '1999-10-11' and '1999-11-11'";
                                            $resultado = mysqli_query($conexion, $sql);
                                            }else{
                                            $sql = "SELECT * FROM paquete";
                                            $resultado = mysqli_query($conexion, $sql);
                                            }

                                        while($mostrar=mysqli_fetch_array($resultado)){
                                            ?>
                                        
                                        <tr bgcolor= "#FFFFFF">
                                            <td><font size ="3", color ="#000000"><?php echo $mostrar['SUM(valor)'] ?></font></td>
                                            
                                         
                                        </tr>
                                        
                                        <?php 
                                        }
                                    
                                        ?>
                                        
                                    </table>
                                </div>  
                                    </div>
                            </form>
                                    </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 width">
                        <div class="address">
                            <form action="reportePDF.php" method="post">
                                <div class="row">
                                <td>           '</td>                       
                                    <div class="col-sm-12">
                                        <input type="submit" class="send" name="eliminar" value="GenerarPdf">                                       
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <?php 
                                        }
                                    
                                        ?>
                                        
                    </div>
                </div>
            </div>
        </div>
        <?php
        if($tablas4==2){

        ?>
            <div class="container">

                <div class="row">                              
                    <div class="col-lg-1 col-md-9 col-sm-8 width">
                        <div class="address">
                            <form>
                                <div class="row">
                                <td>      '</td>

                                    <table bordercolor = "#1a0494" border="1" cellpadding="10" cellspacing="10">
                                        <tr bgcolor= "#FFFFFF">
                                            <td><font size ="3", color ="#000000">Cedula</font></td>
                                            <td><font size ="3", color ="#000000">Nombre</font></td>

                                            
                                           
                                        </tr>
                                        
                                        <?php
                                           
                                           if($tablas4==2){
                                            $sql = "SELECT cedula, nombre FROM cliente  where fechaNacimiento<date'1961-07-27'";
                                            $resultado = mysqli_query($conexion, $sql);
                                            }else{
                                            $sql = "SELECT * FROM paquete";
                                            $resultado = mysqli_query($conexion, $sql);
                                            }

                                        while($mostrar=mysqli_fetch_array($resultado)){
                                            ?>
                                        
                                        <tr>
                                            <td><font size ="3", color ="#000000"><?php echo $mostrar['cedula'] ?></font></td>
                                            <td><font size ="3", color ="#000000"><?php echo $mostrar['nombre'] ?></font></td>
 
                                         
                                        </tr>
                                        
                                        <?php 
                                        }
                                    
                                        ?>
                                        
                                    </table>
                                </div>  
                            </form>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 width">
                        <div class="address">
                            <form action="reportePDF1.php" method="post">
                                <div class="row">
                                <td>           '</td>                       
                                   
                                    <div class="col-sm-12">
                                    <input type="submit" class="send" name="eliminar" value="GenerarPdf">                                       
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php 
                                        }
                                    
                                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if($tablas4==3){

        ?>
            <div class="container">

                <div class="row">                              
                    <div class="col-lg-1 col-md-9 col-sm-8 width">
                        <div class="address">
                            <form>
                                <div class="row">
                                <td>      '</td>

                                    <table bordercolor = "#1a0494" border="1" cellpadding="10" cellspacing="10">

                                        <tr bgcolor= "#FFFFFF">
                                            <td><font size ="3", color ="#000000">Cedula</font></td>
                                            <td><font size ="3", color ="#000000">Nombre</font></td>
                                            <td><font size ="3", color ="#000000">Sueldo</font></td>

                                            
                                           
                                        </tr>
                                        
                                        <?php
                                           
                                           if($tablas4==3){
                                            $sql = "SELECT Cedula,Nombre, Sueldo  FROM Empleado order by Sueldo desc";
                                            $resultado = mysqli_query($conexion, $sql);
                                            }else{
                                            $sql = "SELECT * FROM paquete";
                                            $resultado = mysqli_query($conexion, $sql);
                                            }

                                        while($mostrar=mysqli_fetch_array($resultado)){
                                            ?>
                                        
                                        <tr>
                                            <td><font size ="3", color ="#000000"><?php echo $mostrar['Cedula'] ?></font></td>
                                            <td><font size ="3", color ="#000000"><?php echo $mostrar['Nombre'] ?></font></td>
                                            <td><font size ="3", color ="#000000"><?php echo $mostrar['Sueldo'] ?></font></td>

                                            
                                         
                                        </tr>
                                        
                                        <?php 
                                        }
                                    
                                        ?>
                                        
                                    </table>
                                </div>  
                            </form>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 width">
                        <div class="address">
                            <form action="reportePDF2.php" method="post">
                                <div class="row">
                                <td>           '</td>                       
                                   
                                    <div class="col-sm-12">
                                    <input type="submit" class="send" name="eliminar" value="GenerarPdf">                                       
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php 
                                        }
                                    
                                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if($tablas4==4){

        ?>
            <div class="container">

                <div class="row">                              
                    <div class="col-lg-1 col-md-9 col-sm-8 width">
                        <div class="address">
                            <form>
                                <div class="row">
                                <td>      '</td>

                                    <table bordercolor = "#1a0494" border="1" cellpadding="10" cellspacing="10">

                                        <tr bgcolor= "#FFFFFF">
                                            <td><font size ="3", color ="#000000">Direccion</font></td>
                                            <td><font size ="3", color ="#000000">SUM(sueldo)</font></td>                                            
                                           
                                        </tr>
                                        
                                        <?php
                                           
                                           if($tablas4==4){
                                            $sql = "SELECT direccion,SUM(sueldo) FROM empleado em inner join sucursal su on em.Sucursal_Codigo = su.Codigo where sueldo>900000 group by su.Codigo";
                                            $resultado = mysqli_query($conexion, $sql);
                                            }else{
                                            $sql = "SELECT * FROM paquete";
                                            $resultado = mysqli_query($conexion, $sql);
                                            }

                                        while($mostrar=mysqli_fetch_array($resultado)){
                                            ?>
                                        
                                        <tr>
                                            <td><font size ="3", color ="#000000"><?php echo $mostrar['direccion'] ?></font></td>
                                            <td><font size ="3", color ="#000000"><?php echo $mostrar['SUM(sueldo)'] ?></font></td>

                                            
                                         
                                        </tr>
                                        
                                        <?php 
                                        }
                                    
                                        ?>
                                        
                                    </table>
                                </div>  
                            </form>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 width">
                        <div class="address">
                            <form action="reportePDF3.php" method="post">
                                <div class="row">
                                <td>           '</td>                       
                                   
                                    <div class="col-sm-12">
                                    <input type="submit" class="send" name="eliminar" value="GenerarPdf">                                       
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php 
                                        }
                                    
                                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if($tablas4==5){

?>
    <div class="container">

        <div class="row">                              
            <div class="col-lg-1 col-md-9 col-sm-8 width">
                <div class="address">
                    <form>
                        <div class="row">
                        <td>      '</td>

                            <table bordercolor = "#1a0494" border="1" cellpadding="10" cellspacing="10">

                                <tr bgcolor= "#FFFFFF">
                                    <td><font size ="3", color ="#000000">Nombre</font></td>
                                    <td><font size ="3", color ="#000000">Descripcion</font></td>
                                    <td><font size ="3", color ="#000000">COUNT(CodigoArticulo)*cantidad</font></td>

                                    
                                   
                                </tr>
                                
                                <?php
                                   
                                   if($tablas4==5){
                                    $sql = "SELECT Nombre,Descripcion, COUNT(CodigoArticulo)*cantidad FROM Pedidos INNER JOIN Articulos ON codigoArticulo=numeroPedido group by codigoArticulo  order by count(codigoArticulo)*cantidad desc";
                                    $resultado = mysqli_query($conexion, $sql);
                                    }else{
                                    $sql = "SELECT * FROM paquete";
                                    $resultado = mysqli_query($conexion, $sql);
                                    }

                                while($mostrar=mysqli_fetch_array($resultado)){
                                    ?>
                                
                                <tr>
                                    <td><font size ="3", color ="#000000"><?php echo $mostrar['Nombre'] ?></font></td>
                                    <td><font size ="3", color ="#000000"><?php echo $mostrar['Descripcion'] ?></font></td>
                                    <td><font size ="3", color ="#000000"><?php echo $mostrar['COUNT(CodigoArticulo)*cantidad'] ?></font></td>

                                    
                                 
                                </tr>
                                
                                <?php 
                                }
                            
                                ?>
                                
                            </table>
                        </div>  
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 width">
                <div class="address">
                    <form action="reportePDF4.php" method="post">
                        <div class="row">
                        <td>           '</td>                       
                           
                            <div class="col-sm-12">
                            <input type="submit" class="send" name="eliminar" value="GenerarPdf">                                       
                            </div>
                        </div>
                    </form>
                </div>
                <?php 
                                }
                            
                                ?>
            </div>
        </div>
    </div>
</div>
<?php
        if($tablas4==6){

?>
    <div class="container">

        <div class="row">                              
            <div class="col-lg-1 col-md-9 col-sm-8 width">
                <div class="address">
                    <form>
                        <div class="row">
                        <td>      '</td>

                            <table bordercolor = "#1a0494" border="1" cellpadding="10" cellspacing="10">

                                <tr bgcolor= "#FFFFFF">
                                    <td><font size ="3", color ="#000000">Descripcion</font></td>
                                    <td><font size ="3", color ="#000000">Cuenta codigo</font></td>
                                   
                                </tr>
                                
                                <?php
                                   
                                   if($tablas4==6){
                                    $sql = "SELECT Descripcion, COUNT(t.Codigo) FROM Paquete p INNER JOIN tipoPaquete t ON t.Codigo=tipoPaquete_Codigo group by t.Codigo order by COUNT(t.Codigo) desc";
                                    $resultado = mysqli_query($conexion, $sql);
                                    }else{
                                    $sql = "SELECT * FROM paquete";
                                    $resultado = mysqli_query($conexion, $sql);
                                    }

                                while($mostrar=mysqli_fetch_array($resultado)){
                                    ?>
                                
                                <tr>
                                    <td><font size ="3", color ="#000000"><?php echo $mostrar['Descripcion'] ?></font></td>
                                    <td><font size ="3", color ="#000000"><?php echo $mostrar['COUNT(t.Codigo)'] ?></font></td>

                                    
                                 
                                </tr>
                                
                                <?php 
                                }
                            
                                ?>
                                
                            </table>
                        </div>  
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 width">
                <div class="address">
                    <form action="reportePDF5.php" method="post">
                        <div class="row">
                        <td>           '</td>                       
                           
                            <div class="col-sm-12">
                            <input type="submit" class="send" name="eliminar" value="GenerarPdf">                                       
                            </div>
                        </div>
                    </form>
                </div>
                <?php 
                                }
                            
                                ?>
            </div>
        </div>
    </div>
</div>
<?php
        if($tablas4==7){

?>
    <div class="container">

        <div class="row">                              
            <div class="col-lg-1 col-md-9 col-sm-8 width">
                <div class="address">
                    <form>
                        <div class="row">
                        <td>      '</td>

                            <table bordercolor = "#1a0494" border="1" cellpadding="10" cellspacing="10">

                                <tr bgcolor= "#FFFFFF">
                                    <td><font size ="3", color ="#000000">Cedula</font></td>
                                    <td><font size ="3", color ="#000000">Nombre</font></td>
                                    <td><font size ="3", color ="#000000">Numero de compra de paquetes</font></td>

                                    
                                   
                                </tr>
                                
                                <?php
                                   
                                   if($tablas4==7){
                                    $sql = "SELECT cl.cedula,nombre,count(cl.cedula) FROM Paquete p INNER JOIN tipoPaquete t ON t.Codigo=tipoPaquete_Codigo INNER JOIN telefono_cliente tc ON tc.numero=Telefono_Cliente_Numero INNER JOIN cliente cl ON cl.cedula=Cliente_cedula group by cl.cedula order by count(cl.cedula)desc";
                                    $resultado = mysqli_query($conexion, $sql);
                                    }else{
                                    $sql = "SELECT * FROM paquete";
                                    $resultado = mysqli_query($conexion, $sql);
                                    }

                                while($mostrar=mysqli_fetch_array($resultado)){
                                    ?>
                                
                                <tr>
                                    <td><font size ="3", color ="#000000"><?php echo $mostrar['cedula'] ?></font></td>
                                    <td><font size ="3", color ="#000000"><?php echo $mostrar['nombre'] ?></font></td>
                                    <td><font size ="3", color ="#000000"><?php echo $mostrar['count(cl.cedula)'] ?></font></td>

                                    
                                 
                                </tr>
                                
                                <?php 
                                }
                            
                                ?>
                                
                            </table>
                        </div>  
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 width">
                <div class="address">
                    <form action="reportePDF6.php" method="post">
                        <div class="row">
                        <td>           '</td>                       
                           
                            <div class="col-sm-12">
                            <input type="submit" class="send" name="eliminar" value="GenerarPdf">                                       
                            </div>
                        </div>
                    </form>
                </div>
                <?php 
                                }
                            
                                ?>
                </div>
            </div>
        </div>
    </div>
        <div class="copyright">
                <p>© 2021 Proyecto Bases De Datos</p>
            </div>
        </div>
    
</footr>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>