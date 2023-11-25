<?php
require_once "../modelos/Inicio.php";
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
  <link rel="stylesheet" href="../public/css/bootstrap.min.css">
  <link rel="stylesheet" href="../public/css/icofont.css">
  <link rel="stylesheet" href="../public/css/font-awesome.min.css">
  <link rel="stylesheet" href="../public/css/animate.css">
  <link rel="stylesheet" href="../public/css/meanmenu.min.css">
  <link rel="stylesheet" href="../public/css/camera.css">
  <link rel="stylesheet" href="../public/css/venobox.css">
  <link rel="stylesheet" href="../public/css/owl.carousel.css">
  <link rel="stylesheet" href="../style.css">
  <link href="../public/swal/sweetalert.css" rel="stylesheet">
   <link rel="stylesheet" href="../src/richtext.min.css">
        
        <script type="text/javascript" src="../src/jquery.richtext.js"></script>
  <style>
    .blog_text {
      height: 50% !important;
    }

    .logo {
      margin: -79px 0 !important;
    }

    .col-xs-12.col-sm-6 {
      margin-top: -58px;
    }
  </style>
  <style>
    .container1 {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      text-align: center;
      z-index: 99999999;
    }

    .centered1 {
      padding: 5px;
      background: #eee;
      border-radius: 5px;
      display: inline-block;
      vertical-align: middle;
      /* max-width: 455px; */
      margin: 10px;
      width: 538px;
      height: 90%;
    }

    .container1:before {
      content: "";
      display: inline-block;
      width: 0;
      height: 100%;
      vertical-align: middle;
    }
  </style>
</head>

<body id="body" class="homePage">
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
            <div class="logo"> <a href="index_modifica.php"> <img src="../public/images/logo-empresa.png" alt="RECOMSERMA" /> </a> </div>
          </div>
          <div class="col-sm-8">
            <div class="mainnmenu">
              <nav class="hidden-xs">
                <ul class="menu">
                  <li class="active"> <a href="index_modifica.php">INICIO</a> </li>
                  <!-- <li><a href="nosotros_modifica.php">¿QUIÉNES SOMOS?</a></li>
                  <li> <a href="cilindros_modifica.php">PRODUCTO</a></li> -->
                </ul>
              </nav>
              <nav class="mb_menu hidden">
                <ul class="menu_for_mobile">
                  <li class="active"> <a href="index_modifica.php">Inicio</a> </li>
                  <!-- <li><a href="nosotros_modifica.php">¿Quiénes somos?</a></li>
                  <li> <a href="cilindros_modifica.php">Producto</a> </li> -->
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="header_paralux">
    <div class="header_content">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="paralux_content">
              <div class="paralux_text text-left">
                <form name="frmTitulo" id="frmTitulo" method="POST">
                  <h5 class="text-left"><input type="text" style="color:black;" id="txttitulo1" required name="txttitulo1" value="Más de 10 años"></h5>
                  <h1 class="fadeInLeft animated text-left">
                    <input type="text" value="LÍDERES EN VENTAS" id="txttitulo2" name="txttitulo2" required style="color:black;">
                    <span><input type="text" style="color:black;" id="txttitulo3" name="txttitulo3" required value="DE CAJA CHINA Y PARILLAS"> </span>
                  </h1>
                  <button type="submit" class="btn btn-primary" id="btnGuardarTitulo">Guardar</button>
                </form>
                <br>
                <br>

                <nav class="cl-effect"> <button type="button" class="btn btn-success" onclick="acciones_inicio.abrirImagen();" id="aSubirImagen"> <span data-hover="Leer más">Cambiar Fondo</span> </button>
                </nav>
              </div>
              <div class="scroll_button">
                <h6> <a href="#scroll_about">DESPLAZAR AQUÍ <i class="icofont icofont-scroll-long-down"></i> </a> </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="scroll_about">
    <!-- <div class="info_area">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <ul class="info_bg">
              <li class="info">
                <div class="info_icon"> <i class="icofont icofont-location-pin"></i> </div>
                <div class="info_text">
                  <p>Av los Álamos </p>
                  <p> Mz B Lote 5 SMP</p>
                </div>
              </li>
              <li class="info">
                <div class="info_icon"> <i class="icofont icofont-clock-time"></i> </div>
                <div class="info_text">
                  <p>Lun - Sab 9am - 6pm</p>
                </div>
              </li>
              <li class="info">
                <div class="info_icon"> <i class="icofont icofont-phone"></i> </div>
                <div class="info_text">
                  <p>CENTRAL</p>
                  <p><a>992-448-682</a></p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div> -->


    <!-- 
    <div class="about_content section-padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="aboutbox">
              <div class="about_text">
                <form name="frmtexto" id="frmtexto" method="POST">
                  <textarea id="txt_texto" name="txt_texto" style="border:1px solid;width: 100%;height:100px;text-align: left;resize: none;">  <?php
                                                                                                                                                $rspta = $inicio->mostrar();
                                                                                                                                                echo  $rspta["texto"]
                                                                                                                                                ?></textarea>
                  <button type="submit" class="btn btn-primary" id="btnGuardarTexto">Guardar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <br>
    <!-- <div class="single_project_slider section-padding">
      <div class="pro_slider_box">
        <div class="container">
          <div class="row">
            <div class="col-sm-12" id="proGaleria2">
              <div class="pro_sing_slider">
                <?php
                $rspta = $inicio->listarimagenes();
                while ($reg = $rspta->fetch_object()) {
                  echo '<div class="single_prject"><figure class="project_photo"><img src="' . $reg->url . '" alt="" /><div class="blog_text"><a onclick="acciones_inicio.borrarImagen(' . $reg->idinicioimagen . ')">Quitar</a></div></figure></div>';
                }
                ?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <form name="frmImagen" id="frmImagen" method="POST">
                <input type="file" id="fupImagen" name="fupImagen"><br>
                <button type="submit" class="btn btn-primary" id="btnGuardarImagen">Guardar</button>
              </form>
            </div>
          </div>
        </div>
        <ul class="pro_sing_nav">
          <li>
            <i class="icofont icofont-long-arrow-left testi_next"></i>
          </li>
          <li>
            <i class="icofont icofont-long-arrow-right testi_prev"></i>
          </li>
        </ul>
      </div>
    </div> -->

    <div class="single_project_slider section-padding">
      <div class="pro_slider_box">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="pro_sing_slider">
                <?php
                $rspta = $inicio->listarimagenes();
                while ($reg = $rspta->fetch_object()) {
                  echo '<div class="single_prject"><figure class="project_photo"><img src="' . $reg->url . '" alt="" /></figure></div>';
                }
                ?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12">
              <div class="section_title">
                <h2>NUESTROS SERVICIOS</h2>
              </div>
            </div>
           <div id="div_servicios"></div>
            <input type="hidden" id="urlS">
            <div class="col-xs-12 col-sm-12" style="margin-top: 2% !important;"> <br> <br>
              <form name="frmServicioInicio" id="frmServicioInicio" method="POST">
                <input type="hidden" id="id" name="id">
                <table style="width: 100% !important;">
                  <tr>
                    <td>Foto Servicio:</td>
                    <td>
                      <img id="srmImagenServicio" style="display:none;height: 200px !important;">
                      <br>
                      <button type="button" class="btn btn-danger" id="btnEliminarFoto" onclick="acciones_inicio.eliminarfotoServicioSeleccionado();" style="display: none;">Eliminar</button>
                      <input type="file" id="fuImgServicio" name="fuImgServicio">
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>Titulo:</td>
                    <td><input type="text" name="txt_inicio_titulo" id="txt_inicio_titulo" required></td>
                  </tr>
                  <tr>
                    <td colspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>Descripcion:</td>
                    <td><textarea name="txt_inicio_mensaje" id="txt_inicio_mensaje" required style="resize:none;border:1px solid;width: 800px;height: 260px;"></textarea></td>
                  </tr>
                  <tr>
                    <td colspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <button type="button" id="btnCancelar" style="display: none;" onclick="acciones_inicio.cancelarEdicionServicio();">Cancelar</button>
                      <button type="submit" id="btnGuardarServicioInicio">Guardar</button>
                    </td>
                  </tr>
                </table>
              </form>
            </div>
          </div>
        </div>
        <ul class="pro_sing_nav">
          <li>
            <i class="icofont icofont-long-arrow-left testi_next"></i>
          </li>
          <li>
            <i class="icofont icofont-long-arrow-right testi_prev"></i>
          </li>
        </ul>
      </div>
    </div>
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
            $rspta = $inicio->listarimagenesCliente();
            while ($reg = $rspta->fetch_object()) {
              echo '<div class="single_partner text-center"><figure><img src="' . $reg->url . '" alt="" /> </figure><button type="button" class="btn btn-danger" style="cursor: pointer;" onclick="acciones_inicio.borrarImagenCliente(' . $reg->idiniciocliente . ')">Quitar</button></div>';
            }
            ?>
          </div>
          <form name="frmICliente" id="frmICliente" method="POST">
            <input type="file" id="fu_cliente" name="fu_cliente"><br>
            <button type="submit" class="btn btn-primary" id="btnGuardarICliente">Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <section id="footermap" class="map_area">
    <div class="container-fluid">
      <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15611.88290893656!2d-77.0967566137455!3d-11.976527373548171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce63fa8358e1%3A0x4c68da4e53ed90d!2sC.%2013%2C%20San%20Mart%C3%ADn%20de%20Porres%2015108!5e0!3m2!1ses-419!2spe!4v1662878764292!5m2!1ses-419!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
  <footer class="footer_area">
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
                <p> &nbsp; <a href="#" target="_blank" style="color: #ffffff;"> </a></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </footer>
    <div class="container1" id="div_general" style="display: none;">
      <div class="centered1">
        <form name="frmPrincipal" id="frmPrincipal" method="POST">
          <h2 class="title">Fondo Principal</h2>
          <table>
            <tr>
              <td>Imagen Principal:&nbsp;</td>
              <td><input type="file" name="fupPrincipal" id="fupPrincipal" required></td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td class="text-center"><button type="button" id="btnCerrarImage" onclick="acciones_inicio.cerrarImagen();" class="btn btn-primary">Cerrar</button></td>
              <td colspan="2" class="text-center"><button type="submit" id="btnGuardarFondo" class="btn btn-primary">Guardar</button></td>
            </tr>
          </table>
        </form>
      </div>
    </div>

    <div class="container1" id="div_Imagenes_servicio" style="display: none;">
      <div class="centered1">
        <form name="frmSubPrincipal" id="frmSubPrincipal" method="POST">
          <input type="hidden" id="idservicioSub" name="idservicioSub"/>
          <h2 class="title">Fondo Adicionales</h2>
          <table class="table">
            <tr>
              <td>Imagen Principal:&nbsp;</td>
              <td><input type="file" name="fupSegundaria" id="fupSegundaria" required></td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td class="text-center"><button type="button" id="btnCerrarImageservicio" onclick="acciones_inicio.cerrarMasImagenes();" class="btn btn-primary">Cerrar</button></td>
              <td colspan="2" class="text-center"><button type="submit" id="btnGuardarSubFondo" class="btn btn-primary">Subir Imagen</button></td>
            </tr>
          </table>
          <hr>
          <table id="tbl_imagenes_inicio_det">
<thead>
  <tr>
    <td>N°</td>
    <td>Foto</td>
    <td>Extension</td>
    <td>&nbsp;</td>
  </tr>
</thead>
<tbody>

</tbody>
          </table>
        </form>
      </div>
    </div>


    <script src="../public/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/waypoints.min.js"></script>
    <script src="../public/js/jquery.counterup.min.js"></script>
    <script src="../public/js/jquery.meanmenu.min.js"></script>
    <script src="../public/js/jquery.easing.1.3.min.js"></script>
    <script src="../public/js/owl.carousel.min.js"></script>
    <script src="../public/js/jquery.parallax-1.1.3.js"></script>
    <script src="../public/js/masonry.pkgd.min.js"></script>
    <script src="../public/js/camera.min.js"></script>
    <script src="../public/js/venobox.min.js"></script>
    <script src="../public/js/main.js"></script>
    <script type="text/javascript" src="../public/swal/sweetalert.js"></script>
    <script type="text/javascript" src="scripts/inicio.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../src/jquery.richtext.js"></script>

    <script>
       $(document).ready(function() {
            $('#txt_inicio_mensaje').richText();
        });
    </script>
</body>

</html>