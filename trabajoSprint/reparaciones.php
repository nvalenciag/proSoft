<?php
    session_start();
    $conexion=mysqli_connect("localhost","root","aguileracamilo03","reparatodo");
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
    <title>Reparatodo</title>
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

<body class="main-layout contact-page">
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
                                    <a href="index.html"><img src="images/logueison.png" alt="logo" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-10">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                     
                                        <li> <a href="revision.php">Revision</a> </li>
                                        <li> <a href="reparaciones.php">Reparaciones</a> </li>   
                                        <li> <a href="index.html">Cerrar Sesion</a> </li>
                                  
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                        <form class="search">
                            <input class="form-control" type="text" placeholder="Search">
                            <button><img src="images/search_icon.png"></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
    </header>
    <!-- end header -->

    <div class="blogbg">
    <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="blogtitlepage">
                        <h2>Reparaciones</h2>
                    </div>
                </div>
    </div> 
    <div class="footer">
    <div class="container">
        <div class="row">
            <div class=" col-md-7 offset-md-3">
                <div class="address">
                    <form>
                        <div class="row">
                                    <table bordercolor = "#D32500" border="5" cellpadding="10" cellspacing="10">
                                        <tr bgcolor= "#FF2D00">
                                            <td><font size ="2", color ="#000000">codigo</font></td>
                                            <td><font size ="2", color ="#000000">nombre</font></td>
                                            <td><font size ="2", color ="#000000">telefono</font></td>
                                            <td><font size ="2", color ="#000000">email</font></td>
                                            <td><font size ="2", color ="#000000">producto</font></td>
                                            <td><font size ="2", color ="#000000">descripcion del producto</font></td>
                                            <td><font size ="2", color ="#000000">estado</font></td>
                                            <td><font size ="2", color ="#000000">    Observaciones   </font></td>
                                        </tr>
                                        <?php
                                            include "db-conex.php";

                                            
                                            $nm=$_SESSION['nombre'];

                                            $sql = "SELECT * FROM pedido where usuario_reparador='$nm' and estado!='finalizado'";
                                            $resultado = mysqli_query($conexion, $sql);

                                        while($mostrar=mysqli_fetch_array($resultado)){
                                            ?>
                                        <tr>
                                            <td><font size ="2", color ="#ffffff"><?php echo $mostrar['codigo'] ?></font></td>
                                            <td><font size ="2", color ="#ffffff"><?php echo $mostrar['nombre_apellido'] ?></font></td>
                                            <td><font size ="2", color ="#ffffff"><?php echo $mostrar['telefono'] ?></font></td>
                                            <td><font size ="2", color ="#ffffff"><?php echo $mostrar['email'] ?></font></td>
                                            <td><font size ="2", color ="#ffffff"><?php echo $mostrar['descripcion'] ?></font></td>
                                            <td><font size ="2", color ="#ffffff"><?php echo $mostrar['nombre_producto'] ?></font></td>
                                            <td><font size ="2", color ="#ffffff"><?php echo $mostrar['estado'] ?></font></td>
                                            
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
    <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 width">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 width">
         <form action="validarComentario.php" method="post" >
            <br>
            <br>
            <div class="col-sm-12">
            <input type="text" placeholder="codigo" type="text"name="codigoh">
            <br>
            <br>
            <input type="text" placeholder="Comentario" type="text"name="comentario">
            <br>
            <br>      
              <input type="submit" name="boton7" value="Guardar">
              <br><br>    
                    

             </div>
         
        </form>

    <form action="validarFinalizar.php" method="post" >
                  
            <div class="col-sm-12">
            <input type="text" placeholder="codigo" type="text"name="codigofin">
            <br>
            <br>
            <input type="text" placeholder="Valor a pagar" type="text"name="montofin">
            <br>  
            <br>     
              <input type="submit" name="boton8" value="Finalizar">
                 
                    

             </div>
         
        </form>
        </div>
                </div>
                </div>
                </div>   
            </div>
</div>

    <!--  footer -->

    <div class="copyright">
        <div class="container">
            <p>© 2021 Proyecto Software II <a href="https://html.design/"></a></p>
        </div>
    </div>

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