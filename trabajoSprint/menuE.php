<?php
    session_start();
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
    <title>ReparaTodo</title>
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

                                        <li > <a href="ahustesCuenta.html">Ajustes de cuenta</a> </li>
                                        <li > <a href="pagos.html">Pagos</a> </li>
                                        <li > <a href="recarga.html">Recargas y Datos</a> </li>
                                        <li > <a href="chance.php">Chances</a> </li>
                                        <li > <a href="ahustesCuenta.html">Articulos</a> </li>
                                        <li > <a href="index.html">cerrar sesion</a> </li>
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
                        <h2>Articulos</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Lastestnews -->
    
    <!-- end Lastestnews -->

    <!--  footer -->
    <footr>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-12 width">
                        
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 width">
                        <div class="address">
                            <form>
                                <div class="row">
                                    <table bordercolor = "#1a0494" border="1" cellpadding="10" cellspacing="10">
                                        <tr bgcolor= "#FFFFFF">
                                            <td><font size ="3", color ="#000000"></font></td>
                                            <td><font size ="3", color ="#000000">Codigo</font></td>
                                            <td><font size ="3", color ="#000000">Nombre</font></td>
                                            <td><font size ="3", color ="#000000">Valor</font></td>
                                            <td><font size ="3", color ="#000000">Cantidad</font></td>
                                            <td><font size ="3", color ="#000000">descripcion producto</font></td>
                                        </tr>
                                        
                                        <?php
                                            $sql = "SELECT * FROM pedido where estado='espera'";
                                            $resultado = mysqli_query($conexion, $sql);

                                        while($mostrar=mysqli_fetch_array($resultado)){
                                            ?>
                                        <tr>
                                            <td><font size ="3", color ="#000000"><i><img src="images/3.jpg"/></i></font></td>
                                            <td><font size ="3", color ="#000000"><?php echo $mostrar['nombre_apellido'] ?></font></td>
                                            <td><font size ="3", color ="#000000"><?php echo $mostrar['telefono'] ?></font></td>
                                            <td><font size ="3", color ="#000000"><?php echo $mostrar['descripcion'] ?></font></td>
                                            <td><font size ="3", color ="#000000"><?php echo $mostrar['nombre_producto'] ?></font></td>
                                            <td><font size ="3", color ="#000000"><?php echo $mostrar['estado'] ?></font></td>
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
                <br>
                <br>
                <footr>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 width">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 width">
                <form action="validarPedido.php" method="post" >              
                    <input type="text" class="contactus" placeholder="Codigo del producto" type="text"name="codigoPedido">
                    <br><br>
                    <input type="submit" class="send" name="boton3" value="Acepatar">
                    <input type="submit" class="send" name="boton2" value="Eliminar">
                </form>
                </div>
                </div>
                </div>
                </div>   
            </div>

            <div class="copyright">
                <p>?? ?? 2021 Proyecto Bases de Datos <a href="https://html.design/"></a></p>
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