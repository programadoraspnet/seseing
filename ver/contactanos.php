
<?php
require_once "../modelos/Nosotros.php";
require_once "../modelos/Inicio.php";
$nosotros = new Nosotros();
$inicio = new Inicio();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SESEING | SERVICIOS INDUSTRIALES</title>
  <meta name="title" content="SESEING | SERVICIOS INDUSTRIALES" />
  <meta name="Description"
    content="Dedicados a la gestión integral de residuos sólidos, y certificados por el Ministerio del ambiente, administramos el proceso de los residuos desde la generación y acopio hasta su reaprovechamiento o confinamiento en rellenos autorizados”, la misma descripción antes mencionada deberá aparecer en la parte inferior el link que está en el buscador." />
  <meta name="keywords"
    content="Dedicados a la gestión integral de residuos sólidos, y certificados por el Ministerio del ambiente, administramos el proceso de los residuos desde la generación y acopio hasta su reaprovechamiento o confinamiento en rellenos autorizados”, la misma descripción antes mencionada deberá aparecer en la parte inferior el link que está en el buscador." />
  <link rel="icon" type="image/png" href="imagen.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,600italic,400italic,700italic,300,300italic'
    rel='stylesheet' type='text/css'>
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
    .logo{
      margin: -79px 0 !important;
    }
    .btn-wsp{
    position:fixed;
    width:60px;
    height:60px;
    line-height: 63px;
    bottom:25px;
    right:25px;
    background:#25d366;
    color:#FFF;
    border-radius:50px;
    text-align:center;
    font-size:38px;
    box-shadow: 0px 1px 10px rgba(0,0,0,0.3);
    z-index:100;
    transition: all 300ms ease;
}
.btn-wsp:hover{
    background: #20ba5a;
}
@media only screen and (min-width:320px) and (max-width:768px){
    .btn-wsp{
        width:63px;
        height:63px;
        line-height: 66px;
	}
}
      </style>
</head>
<body id="body" class="contact_page inner_page">
<a href="https://api.whatsapp.com/send?phone=+51992448682&text=Hola, Nececito mas informacion!" target="_blank" class="btn-wsp" target="_blank">
	    <i class="fa fa-whatsapp icono"></i>
	</a>
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
            <div class="logo" style="margin-top: -17% !important;"> <a href="index.php"> <img src="../public/images/logo-empresa.png" 
            style="margin-left: -25% !important;
    height: auto !important;
    display: block !important;
    /* margin: 0 auto !important; */
    max-width: 100% !important;
    width: 73% !important;"
            alt="RECOMSERMA" /> </a> </div>
          </div>
          <div class="col-sm-8">
            <div class="mainnmenu">
              <nav class="hidden-xs">
                <ul class="menu">
                  <li class="active"> <a href="index.php">INICIO</a> </li>
                  <li><a href="nosotros.php">¿QUIÉNES SOMOS?</a></li>
                  <li> <a href="cilindros.php">PRODUCTO</a></li>
                </ul>
              </nav>
              <nav class="mb_menu hidden">
                <ul class="menu_for_mobile">
                  <li class="active"> <a href="index.php">Inicio</a> </li>
                  <li><a href="nosotros.php">¿Quiénes somos?</a></li>
                  <li> <a href="cilindros.php">Producto</a> </li>
                  <li><a href="contactanos.php">Contáctenos</a></li>
                </ul>
              </nav>
              <a class="free_consul" href="contactanos.php">Contáctenos</a>
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
          <h1>Contáctenos</h1>
          <ul>
            <li><a href="index.php">Inicio</a></li>
            <li>/</li>
            <li class="active">Contáctenos</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="message_area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="section_title">
            <h6>Déjenos sus comentarios</h6>
            <h2>¿Cuál es su consulta?</h2>
          </div>
        </div>
        <div class="col-sm-offset-2 col-sm-8">
          <div class="leave_comment">
            <form name="frmcontacto" id="frmcontacto" method="post">
              <div class="row">
                <div class="col-md-4">
                  <input type="text" name="txtnombre" id="txtnombre" placeholder="Nombre" required>
                </div>
                <div class="col-md-4">
                  <input type="email" name="txtemail" id="txtemail" placeholder="Email" required>
                </div>
                <div class="col-md-4">
                  <input type="number" name="telefono" id="telefono" placeholder="Móvil" required>
                </div>
                <div class="col-md-12">
                  <textarea name="txtmensaje" id="txtmensaje" class="materialize-textarea" placeholder="Mensaje"></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn t_button" id="btnEnviar"> ENVIAR MENSAJE </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="contact_map_area" style="margin-top: 2% !important;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15611.88290893656!2d-77.0967566137455!3d-11.976527373548171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce63fa8358e1%3A0x4c68da4e53ed90d!2sC.%2013%2C%20San%20Mart%C3%ADn%20de%20Porres%2015108!5e0!3m2!1ses-419!2spe!4v1662878764292!5m2!1ses-419!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                  echo '<div class="single_partner text-center"><figure><img src="'. $reg->url .'" alt="" /> </figure></div>';
                }
                ?>
          </div>
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
            <p align="justify">Seseing Ingenieria & Seguridad Industrial, es una empresa peruana especializada con servicios de gran calidad con excelencia en su totalidad en la ejecución de proyectos grandes y complejos, en los que su gente ha demostrado su capacidad para cumplir y sobrepasar las expectativas de sus clientes, aún en las condiciones más difíciles. Seseing ingenieria & Seguridad industrial hace que las soluciones que ofrece a sus clientes sean diferentes y exitosas, porque integran desde el inicio del ciclo de vida de los proyectos equipos multidisciplinarios de ingeniería, procura y construcción. Ello garantiza contar con diseños altamente eficientes y por tanto, conducir una fase de construcción más limpia y productiva.</p>
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
              <li> <i class="icofont icofont-ui-message"></i> <a href="mailto:luis.enciso@seseing.com;ventas@seseing.com" style="position: absolute;">
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
  <script type="text/javascript" src="scripts/contactanos.js"></script>
</body>
</html>