<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();
// if (isset($_SESSION["idusuario"])) {
//   header("Location: login.html");
// }
?>
<html>
    <head>
        <title>SISTEMA DE ACCESO</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SESEING | SERVICIOS INDUSTRIALES</title>
        <link rel="icon" type="image/png" href="imagen.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <style>
.form-signin {
  max-width: 330px;
  padding: 15px;
margin-left: 45%;
margin-right: 55%;
width: 50% !important;
margin-top: 10% !important;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
          </style>
    </head>
    <body class="text-center">
        <main class="form-signin">
            <form name="frmLogin" id="frmLogin" method="POST">
                <h1 class="h3 mb-3 fw-normal"><b><u>MODULOS GENERALES</u></b></h1>
                <div class="form-floating">
                    <label for="floatingInput"><a href="index_modifica.php" target="_blank">INICIO</a></label>
                </div>
                <div class="form-floating">
                <label for="floatingInput"><a href="nosotros_modifica.php" target="_blank">QUIENES  SOMOS</a></label>
                </div>
                <div class="form-floating">
                <label for="floatingInput"><a href="producto_modifica.php" target="_blank">PRODUCTO</a></label>
                </div>
                <div class="form-floating">
                <label for="floatingInput"><a href="../ajax/inicio.php?op=salir" style="color:red;">SALIR</a></label>
                </div>
            </form>
        </main>
        <script src="public/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <script src="public/js/waypoints.min.js"></script>
        <script src="public/js/jquery.counterup.min.js"></script>
        <script src="public/js/jquery.meanmenu.min.js"></script>
        <script src="public/js/jquery.easing.1.3.min.js"></script>
    </body>
</html>