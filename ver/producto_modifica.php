<?php
require_once "../modelos/Nosotros.php";
require_once "../modelos/Inicio.php";
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

  <link href="../public/css/ma5slider.min.css" rel="stylesheet" type="text/css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,600italic,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../public/css/bootstrap.min.css">
  <link rel="stylesheet" href="../public/css/icofont.css">
  <link rel="stylesheet" href="../public/css/font-awesome.min.css">
  <link rel="stylesheet" href="../public/css/animate.css">
  <link rel="stylesheet" href="../public/css/meanmenu.min.css">
  <link rel="stylesheet" href="../public/css/venobox.css">
  <link rel="stylesheet" href="../public/css/owl.carousel.css">
  <link rel="stylesheet" href="../public/css/camera.css">
  <link rel="stylesheet" href="../style.css">
  <link href="../public/swal/sweetalert.css" rel="stylesheet">
  <style>
    .logo {
      margin: -79px 0 !important;
    }

    .container1 {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      text-align: center;
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
      height: 60%;
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

<body id="body" class="masonarypage inner_page">
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
            <div class="logo"> <a href="#"> <img src="../public/images/logo-empresa.png" alt="RECOMSERMA" /> </a> </div>
          </div>
          <div class="col-sm-8">
            <div class="mainnmenu">
              <nav class="hidden-xs">
                <ul class="menu">
                  <li> <a href="producto_modifica.php">PRODUCTO</a></li>
                </ul>
              </nav>
              <nav class="mb_menu hidden">
                <ul class="menu_for_mobile">
                  <li> <a href="producto_modifica.php">Producto</a> </li>
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
          <h1>Cilindros</h1>
          <ul>
            <li><a href="#">Inicio</a></li>
            <li>/</li>
            <li class="active">Productos</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- ====END BREADCRUMB AREA==== -->

  <!-- ====START SERVICEPPAGE AREA==== -->
  <div class="blog_masonry section-padding">
    <div class="container">
      <div class="row">
        <div class="grid">
          <!-- <a id="cerrar" href="#popup">&times;</a> -->
          <button type="button" onclick="accion_producto.add();" class="btn btn-primary">Nuevo Producto</button>
          <div class="col-sm-12">
            <table class="table" style="width: 100% !important;" id="tbProducto">
              <thead>
                <tr>
                  <th>N°</th>
                  <th>Producto</th>
                  <th>Edit</th>
                  <th>Del</th>
                  <th>Imag</th>
                  <th>Caract</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td colspan="3" class="text-center">No se encontraron datos</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer_area">
    <div class="container">
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
      <form name="frmProducto" id="frmProducto" method="POST">
        <input type="hidden" id="id" name="id">
        <h2 class="title">Nuevo Registro</h2>
        <table>
          <tr>
            <td>Descripción:&nbsp;</td>
            <td><input type="text" name="txtDescripcion" id="txtDescripcion" required></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td class="text-center"><button type="button" id="btnCerrarImage" onclick="accion_producto.cerrarImagenProducto();" class="btn btn-primary">Cerrar</button></td>
            <td colspan="2" class="text-center"><button type="submit" id="btnGuardar" class="btn btn-primary">Guardar</button></td>
          </tr>
        </table>
      </form>
    </div>
  </div>


  <div class="container1" id="div_generalImagen" style="display: none;">
    <div class="centered1">
      <form name="frmImagenes" id="frmImagenes" method="POST">
        <input type="hidden" id="idcilindro" name="idcilindro">
        <h2 class="title">Nuevo Registro</h2>
        <table>
          <tr>
            <td>Imagenes:&nbsp;</td>
            <td><input type="file" name="fupI" id="fupI" required></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td class="text-center"><button type="button" id="btnCerrarImage" onclick="accion_producto.cerrarImagenProducto();" class="btn btn-primary">Cerrar</button></td>
            <td class="text-center"><button type="submit" id="btnGuardarImage" class="btn btn-primary">Guardar</button></td>
          </tr>
        </table>
      </form>
      <br>
      <br>
      <br>
      <div style="overflow-y: auto !important;height: 64% !important;">
        <table id="tab_imagenes" class="table" style="width: 100% !important;">
          <thead>
            <tr>
              <th style="width:20% ;text-align:center;">N°</th>
              <th style="width:60% ;">Imagen</th>
              <th style="width:20% ;">Del</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="container1" id="div_generalCaracteristicas" style="display: none;">
    <div class="centered1">
      <form name="frmCaracteristica" id="frmCaracteristica" method="POST">
        <input type="hidden" id="idcilindroCaracteristica" name="idcilindroCaracteristica">
        <h2 class="title">Nuevo Registro</h2>
        <table>
          <tr>
            <td>Caracteristica:&nbsp;</td>
            <td><input type="text" name="txtCaracteristica" id="txtCaracteristica"></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td class="text-center"><button type="button" id="btnCerrarCaracteristica" onclick="accion_producto.cerrarCaracteristicaProducto();" class="btn btn-primary">Cerrar</button></td>
            <td class="text-center"><button type="submit" id="btnGuardarCaracteristica" class="btn btn-primary">Guardar</button></td>
          </tr>
        </table>
      </form>
      <br>
      <br>
      <br>
      <div style="overflow-y: auto !important;height: 64% !important;">
        <table id="tab_caracteristica" class="table" style="width: 100% !important;">
          <thead>
            <tr>
              <th style="width:20% ;text-align:center;">N°</th>
              <th style="width:60% ;">Descripción</th>
              <th style="width:20% ;">Del</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
      </div>
    </div>
  </div>
















  <script src="../public/js/vendor/jquery-1.12.0.min.js"></script>
  <script src="../public/js/waypoints.min.js"></script>
  <script src="../public/js/jquery.counterup.min.js"></script>
  <script src="../public/js/jquery.meanmenu.min.js"></script>
  <script src="../public/js/jquery.easing.1.3.min.js"></script>
  <script src="../public/js/owl.carousel.min.js"></script>
  <script src="../public/js/jquery.parallax-1.1.3.js"></script>
  <script src="../public/js/masonry.pkgd.min.js"></script>
  <script src="../public/js/camera.min.js"></script>
  <script src="../public/js/venobox.min.js"></script>
  <!-- <script src="../public/js/main.js"></script> -->
  <script src="../public/js/run_prettify.js"></script>
  <script src="../public/js/jquery.min.js"></script>
  <script src="../public/js/jquery-ui.min.js"></script>
  <script src="../public/js/jquery.ui.touch-punch.min.js"></script>
  <script src="../public/js/functions.js"></script>
  <script type="text/javascript" src="../public/swal/sweetalert.js"></script>
  <script src="../public/js/ma5slider.min.js"></script>
  <script type="text/javascript" src="scripts/producto.js"></script>

  <script>
    $(window).on('load', function() {
      $('.ma5slider').ma5slider();
      // Methods
      $('#example-34').ma5slider('goToSlide', 3);
      // Calls
      $('#example-34').on('ma5.animationStart', function() {
        console.log('event animationStart');
      });
      $('#example-34').on('ma5.animationEnd', function() {
        console.log('event animationEnd');
      });
      $('#example-34').on('ma5.firstSlide', function() {
        console.log('event firstSlide');
      });
      $('#example-34').on('ma5.lastSlide', function() {
        console.log('event lastSlide');
      });
      $('#example-34').on('ma5.activeSlide', function(event, slide) {
        console.log('event activeSlide: ' + slide);
      });
    });
  </script>
</body>

</html>