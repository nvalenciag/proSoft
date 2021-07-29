<?php
    session_start();
    $tablas="";
    $tablas=$_SESSION['tabla'];

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
                                    <a href="pedidos.html"><img src="images/LOGO_FACILISIMO.png" alt="logo" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-10">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li> <a href="Empleado.php">Menu</a> </li>
                                        <li> <a href="administrador.html">Cerrar sesion</a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- end header inner -->
    </header>
    <!--  footer -->
    <footr id="footer_with_contact">
        <div class="footer">
            <div class="container">
                <div class="row">                              
                    <div class="col-lg-1 col-md-8 col-sm-8 width">
                        <div class="address">
                            <form>
                                <div class="row">
                                    <table bordercolor = "#1a0494" border="1" cellpadding="10" cellspacing="10">
                                        <tr bgcolor= "#FFFFFF">
                                            <td><font size ="3", color ="#000000">Cedula</font></td>
                                            <td><font size ="3", color ="#000000">Nombre</font></td>
                                            <td><font size ="3", color ="#000000">Apellidos</font></td>
                                            <td><font size ="3", color ="#000000">FechaNacimiento</font></td>
                                            <td><font size ="3", color ="#000000">Usuario</font></td>
                                            <td><font size ="3", color ="#000000">contraseña</font></td>
                                            <td><font size ="3", color ="#000000">Numero Bancario</font></td>
                                        </tr>
                                        
                                        
                                        <?php
                                            if($tablas){
                                            $sql = "SELECT * FROM cliente where cedula='$tablas'";
                                            $resultado = mysqli_query($conexion, $sql);
                                            }else{
                                            $sql = "SELECT * FROM cliente";
                                            $resultado = mysqli_query($conexion, $sql);
                                            }

                                        while($mostrar=mysqli_fetch_array($resultado)){
                                            ?>

                                        <tr bgcolor= "#FFFFFF">
                                            <td><font size ="3", color ="#000000"><?php echo $mostrar['cedula'] ?></font></td>
                                            <td><font size ="3", color ="#000000"><?php echo $mostrar['nombre'] ?></font></td>
                                            <td><font size ="3", color ="#000000"><?php echo $mostrar['apellidos'] ?></font></td>
                                            <td><font size ="3", color ="#000000"><?php echo $mostrar['fechaNacimiento'] ?></font></td>
                                            <td><font size ="3", color ="#000000"><?php echo $mostrar['usuario'] ?></font></td>
                                            <td><font size ="3", color ="#000000"><?php echo $mostrar['contrasena'] ?></font></td>
                                            <td><font size ="3", color ="#000000"><?php echo $mostrar['numeroBancario'] ?></font></td>

                                        </tr>
                                        <?php 
                                        }
                                        ?>  
                                        
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Registro</h3>
                            <form action="guardarUsuario.php" method="post">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Cedula" type="text" name="cedulaCliente">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Nombres" type="text" name="nombreCliente">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Apellidos" type="text" name="apellidoCliente">
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Fecha nacimiento: año-mes-dia" type="text" name="fechaNCliente">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Email" type="text" name="usuarioCliente">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea class="textarea" placeholder="Contraseña" type="text" name="ContraseñaCliente"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea class="textarea" placeholder="Numero de Cuenta" type="text" name="cuentaCliente"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="submit" class="send" name="guardar" value="Guardar">
                                        <input type="submit" class="send" name="modificar" value="Modificar">
                                        
                                    </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Eliminar Cuenta</h3>
                            <form action="guardarUsuario.php" method="post">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Cedula" type="text" name="cedulaCliente">
                                    </div>
                                    
                                    <div class="col-sm-12">
                                    <input type="submit" class="send" name="eliminar" value="Eliminar">
                                        
                                    </div>
                                </div>
                            </form>
                        </div> 
                        <td>                          '</td>
                        <div class="address">
                            <h3>Consulta</h3>
                                <form action="guardarUsuario.php" method="post">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input class="contactus" placeholder="Busqueda por cedula" type="text" name="cedulaCliente">
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="submit" class="send" name="buscar" value="BuscarCedula">
                            
                                    </div>
                                </form>
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