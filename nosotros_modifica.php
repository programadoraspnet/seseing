<?php
require_once "modelos/Nosotros.php";
require_once "modelos/Inicio.php";
$nosotros = new Nosotros();
$inicio = new Inicio();
//Activamos el almacenamiento en el buffer
ob_start();
session_start();
// if (isset($_SESSION["idusuario"])) {
//   header("Location: login.html");
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SESEING | SERVICIOS INDUSTRIALES</title>
    <meta name="title" content="SESEING | SERVICIOS INDUSTRIALES" />
    <meta name="Description" content="Dedicados a la gestión integral de residuos sólidos, y certificados por el Ministerio del ambiente, administramos el proceso de los residuos desde la generación y acopio hasta su reaprovechamiento o confinamiento en rellenos autorizados”, la misma descripción antes mencionada deberá aparecer en la parte inferior el link que está en el buscador." />
    <meta name="keywords" content="Dedicados a la gestión integral de residuos sólidos, y certificados por el Ministerio del ambiente, administramos el proceso de los residuos desde la generación y acopio hasta su reaprovechamiento o confinamiento en rellenos autorizados”, la misma descripción antes mencionada deberá aparecer en la parte inferior el link que está en el buscador." />
    <link rel="icon" type="image/png" href="imagen.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,600italic,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/icofont.css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/animate.css">
    <link rel="stylesheet" href="public/css/meanmenu.min.css">
    <link rel="stylesheet" href="public/css/venobox.css">
    <link rel="stylesheet" href="public/css/owl.carousel.css">
    <link rel="stylesheet" href="public/css/camera.css">
    <link rel="stylesheet" href="style.css">
    <style>
    .logo{
      margin: -79px 0 !important;
    }
  </style>
</head>

<body id="body" class="about_page inner_page">
<header>
    <div class="header_top_area">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-md-offset-7">
            <div class="header_top">
              <ul class="top_contact">
                <li> <i class="icofont icofont-phone"></i> <a>992448682 </a> </li>
                <li> <a href="mailto:luis.enciso@seseing.com;ventas@seseing.com"> <i class="icofont icofont-envelope"></i>
                luis.enciso@seseing.com / ventas@seseing.com </a> </li>
              </ul>
            </div> 
          </div>
        </div>
      </div>
    </div>
    <div class="manu_area">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="logo"> <a href="nosotros_modifica.php"> <img src="public/images/logo-empresa.png" alt="RECOMSERMA" /> </a> </div>
          </div>
          <div class="col-sm-8">
            <div class="mainnmenu">
              <nav class="hidden-xs">
                <ul class="menu">
                  <li class="active"><a href="nosotros_modifica.php">¿QUIÉNES SOMOS?</a></li>
                  <li><a href="#">&nbsp;</a></li>
                </ul>
              </nav>
              <nav class="mb_menu hidden">
                <ul class="menu_for_mobile">
                  <li class="active"><a href="nosotros_modifica.php">¿Quiénes somos?</a></li>
                  <li><a href="#">&nbsp;</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

    <div class="breadcrumb_area" style="margin-top:4%;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h1>¿QUIÉNES SOMOS?</h1>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li>/</li>
                        <li class="active">¿Quiénes somos?</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END BREADCRUMB AREA -->

    <!-- ====ABOUT US==== -->
    <section class="about_area ">
        <div class="about_content section-padding ">
            <div class="container ">
                <div class="row ">
                    <form name="frmnosotros" id="frmnosotros" method="POST">
                        <div class="col-sm-5">
                            <div class="aboutbox ">
                                <div class="aboutpg_text">
                                    <textarea id="txtnosotro" class="form-control" name="txtnosotro" style="resize:none;width: 100%;height:350px;border:1px solid;text-align: left;" required>
                            <?php
                            $rspta = $nosotros->mostrar();
                            echo  $rspta["texto"]
                            ?>
                            </textarea>
                                </div>
                                <br>
                                <br>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="<?php
                                        $rspta = $nosotros->mostrar();
                                        echo  $rspta["url"]
                                        ?>" alt="" /> <br> <br> <br> <br>
                            <input type="file" name="fp_nosotros" id="fp_nosotros"><br>
                            <button type="submit" class="btn btn-primary" id="btnGuardarNosotros">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="about_service_area">
        <!-- <div class="ab_bg"></div> -->
        <form name="frmVisionMision" id="frmVisionMision" method="POST">
            <img src="<?php
                        $rspta = $nosotros->mostrarMisionVision();
                        echo  $rspta["url"]
                        ?>" class="ab_bg" alt="" />

            <div class="container">

                <div class="row ">
                    <div class="col-sm-6"> </div>
                    <div class="col-sm-6 col-sm-offset-6">
                        <div class="sling_ab_bg">
                            <div class="sling_ab_service">
                                <div class="ab_client">
                                    <h2> MISIÓN</h2> <i class="icofont icofont-quote-left"></i>
                                    <textarea id="txtMision" class="form-control" required style="resize:none;width: 100%;height: 150px;border:1px solid;" name="txtMision">
                                    <?php
                                    $rspta = $nosotros->mostrarMisionVision();
                                    echo  $rspta["mision"]
                                    ?>
                                </textarea>
                                </div>
                            </div>

                            <div class="sling_ab_service">
                                <div class="ab_client">
                                    <h2> VISIÓN</h2> <i class="icofont icofont-quote-left"></i>
                                    <textarea id="txtVision" class="form-control" required style="resize:none;width: 100%;height: 150px;border:1px solid;" name="txtVision">
                                    <?php
                                    $rspta = $nosotros->mostrarMisionVision();
                                    echo  $rspta["vision"]
                                    ?>    
                                </textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table>
              <tr>
                <td>
                <input type="file" id="fuVisionMision" style="text-align: center;margin-left:10%;" name="fuVisionMision">
                </td>
              </tr>
              <tr>
                <td>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;Dimensiones Recomendadas:</p>
                </td>
              </tr>
              <tr>
                <td>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;Ancho:1196 pixeles</p>
                </td>
              </tr>
              <tr>
                <td>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;Alto:479 pixeles</p>
                </td>
              </tr>
              <tr>
                <td>
                <button type="submit" class="btn btn-primary" style="text-align: center;margin-left:10%;" id="btnGuardarNosotrosVision">Guardar</button>
                </td>
              </tr>
            </table>
            <hr>
            <br>
        </form>
    </section>

    <div class="partner_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section_title">
                        <h2>NUESTROS CLIENTES</h2>
                    </div>
                    <div class="partner_slider">
          <?php
                $rspta=$inicio->listarimagenesCliente(); 
                while ($reg = $rspta->fetch_object()) {
                  echo '<div class="single_partner text-center"><figure><img src="'. $reg->url .'" alt="" /> </figure><button type="button" class="btn btn-danger" style="cursor: pointer;" onclick="acciones_inicio.borrarImagenCliente(' . $reg->idiniciocliente . ')">Quitar</button></div>';
                }
                ?>
          </div>
          <form name="frmICliente" id="frmICliente" method="POST">
          <input type="file" id="fu_cliente" name="fu_cliente"><br>
          <button type="submit" id="btnGuardarICliente" class="btn btn-primary">Guardar</button>
          </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer_area">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="scroll_button"> <i class="icofont icofont-scroll-long-up"></i>
            <p><a>DESPLEGAR MAPA</a></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="footer_widget">
            <h4>NOSOTROS</h4>
            <p align="justify">Dedicados a la gestión integral de residuos sólidos, y certificados por el Ministerio del
              ambiente, administramos el proceso de los residuos desde la generación y acopio hasta su reaprovechamiento
              o confinamiento en rellenos autorizados”. </p>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="footer_widget">
            <h4>VALORES</h4>
            <ul class="importent_link">
              <li> <i class="icofont icofont-tick-mark"></i> Responsabilidad </a> </li>
              <li> <i class="icofont icofont-tick-mark"></i> Honestidad </a> </li>
              <li> <i class="icofont icofont-tick-mark"></i> Eficiencia </a> </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="footer_widget">
            <h4>INFORMACIÓN</h4>
            <ul class="ft_conta">
              <li> <i class="icofont icofont-social-google-map"></i> <span>Av los Álamos mz B Lote 5 SMP</span> </li>
              <li> <i class="icofont icofont-phone"></i>992448682</li>
              <li> <a href="https://api.whatsapp.com/send?phone=+51992448682&amp;text=%c2%bfCu%c3%a1l%20es%20su%20Consulta?" target="_blank"> <img src="../whatsapp.png" alt="" width="18px" /> &nbsp;&nbsp;992448682</a>
              </li>
              <li> <i class="icofont icofont-ui-message"></i> <a href="mailto:luis.enciso@seseing.com;ventas@seseing.com">
              luis.enciso@seseing.com/ventas@seseing.com </a> </li>
              <li> <i class="icofont icofont-clock-time"></i> Lun - Sab | 9am - 6pm</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="ft_bottom">
              <p> &nbsp; <a href="http://innperuweb.com/" target="_blank" style="color: #ffffff;"> </a></p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </footer>

    <script src="public/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/waypoints.min.js"></script>
    <script src="public/js/jquery.counterup.min.js"></script>
    <script src="public/js/jquery.meanmenu.min.js"></script>
    <script src="public/js/jquery.easing.1.3.min.js"></script>
    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/jquery.parallax-1.1.3.js"></script>
    <script src="public/js/masonry.pkgd.min.js"></script>
    <script src="public/js/camera.min.js"></script>
    <script src="public/js/venobox.min.js"></script>
    <script src="public/js/main.js"></script>
    <script type="text/javascript" src="scripts/nosotros.js"></script>
</body>
</html>