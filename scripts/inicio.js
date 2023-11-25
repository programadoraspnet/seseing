var tabla;
let acciones_inicio = {
  init: () => {
    acciones_inicio.fondo();
    acciones_inicio.mostrar();
    $("#frmTitulo").on("submit", function (e) {
      acciones_inicio.guardaryeditarTitulo(e);
    });
    $("#frmtexto").on("submit", function (e) {
      acciones_inicio.guardaryeditar(e);
    });
    $("#frmImagen").on("submit", function (e) {
      acciones_inicio.guardarImagen(e);
    });

    $("#frmSubPrincipal").on("submit", function (e) {
      acciones_inicio.guardarSubImagen(e);
    });

    $("#frmPrincipal").on("submit", function (e) {
      acciones_inicio.guardarImagenPrincipal(e);
    });
    $("#frmICliente").on("submit", function (e) {
      acciones_inicio.guardarImagenCliente(e);
    });
    $("#frmServicioInicio").on("submit", function (e) {
      acciones_inicio.guardarImagenInicioServicio(e);
    });
    $.post(
      "../ajax/inicio.php?op=listarserviciosInicio",
      function (data, status) {
        data = JSON.parse(data);
        let html = "";
        for (let i = 0; i < data.length; i++) {
          html +=
            '<div class="col-xs-12 col-sm-4" style="margin-top:1% !important;"> <br> <br>';
          html += '<div class="servicepage_details">';
          html += '<div class="servicepage_photo">';
          html +=
            '<img src="' +
            data[i][0] +
            '" alt="" style="height: 50px !important;" />';
          html += "</div>";
          html += "<H2>" + data[i][1] + "</h2>";
          html += "<p>" + data[i][2] + "</p>";
          html += "</div>";
          html +=
            '<button type="button" class="btn btn-primary" onclick="acciones_inicio.editarServicio(' +
            data[i][3] +
            ')">Editar</button>&nbsp;';
          html +=
            '<button type="button" class="btn btn-danger" onclick="acciones_inicio.borrarServicioInicio(' +
            data[i][3] +
            ')">Eliminar</button>&nbsp;';
          html +=
            '<button type="button" class="btn btn-primary" onclick="acciones_inicio.masImagenes(' +
            data[i][3] +
            ')">Mas Imagenes</button>';

          html += "</div>";
        }
        $("#div_servicios").html(html);
      }
    );
    acciones_inicio.listarTitulos();
  },
  listarTitulos: () => {
    $.post("../ajax/inicio.php?op=listatitulo", function (data, status) {
      data = JSON.parse(data);
      $("#txttitulo1").val(data.titulo1);
      $("#txttitulo2").val(data.titulo2);
      $("#txttitulo3").val(data.titulo3);
    });
  },
  cerrarMasImagenes:()=>{
    $("#idservicioSub").val("");
    $("#fupSegundaria").val("");
    $("#div_Imagenes_servicio").hide();
    $("#tbl_imagenes_inicio_det tbody").empty().append("<tr><td colspan='4'>No se encontraron datos que mostrar</td></tr>");
  },
  masImagenes: (idx) => {
    $("#tbl_imagenes_inicio_det tbody").empty().append("<tr><td colspan='4'>No se encontraron datos que mostrar</td></tr>");
    $("#idservicioSub").val(idx);
    $("#div_Imagenes_servicio").show();
    $.post(
      "../ajax/inicio.php?op=listarserviciosSubInicio",
      { idservicioSub: idx },
      function (data, status) {
        data = JSON.parse(data);
        console.log(data);
        let html = "";
        for (let i = 0; i < data.length; i++) {
          html += "<tr>";
          html += "<td>" + (i + 1) + "</td>";
          html +=
            "<td><img style='height:40px;' src='" + data[i][1] + "'></td>";
          html += "<td>" + data[i][3] + "</td>";
          html +=
            "<td><button type='button' class='btn btn-danger' onclick='acciones_inicio.eliminar_ImagenesSub(" +
            data[i][0] +
            ")'>Eliminar</button></td>";
          html += "</tr>";
        }
        $("#tbl_imagenes_inicio_det tbody").empty().append(html);
      }
    );
  },
  eliminar_ImagenesSub: (idx) => {
    var confirmacion = confirm("¿Desea eliminar la imagen?");
    if (confirmacion) {
      $.post(
        "../ajax/inicio.php?op=eliminarImagenSubServicio",
        { id: idx},
        function (data, status) {
          alert("Imagen Borrada Correctamente");
          acciones_inicio.masImagenes($("#idservicioSub").val());
        }
      );
    }
  },
  abrirImagen: () => {
    $("#div_general").show();
  },
  cerrarImagen: () => {
    $("#div_general").hide();
  },
  limpiar: () => {},
  guardaryeditarTitulo: (e) => {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardarTitulo").prop("disabled", true);
    $("#btnGuardarTitulo").text("Procesando...");
    var formData = new FormData($("#frmTitulo")[0]);
    $.ajax({
      url: "../ajax/inicio.php?op=addTitulos",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (datos) {
        $("#btnGuardarTitulo").text("Guardar");
        $("#btnGuardarTitulo").prop("disabled", false);
        swal(
          "Mensaje del sistema!",
          "Registro realizado correctamente",
          "success"
        );
        acciones_inicio.listarTitulos();
      },
    });
  },
  guardarSubImagen: (e) => {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardarSubFondo").prop("disabled", true);
    $("#btnGuardarSubFondo").text("Procesando...");
    var formData = new FormData($("#frmSubPrincipal")[0]);
    $.ajax({
      url: "../ajax/inicio.php?op=subirInicioSubServicio",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (datos) {
        $("#btnGuardarSubFondo").text("Guardar");
        $("#btnGuardarSubFondo").prop("disabled", false);
        alert("Registro realizado correctamente");
        $("#fupSegundaria").val("");
        acciones_inicio.masImagenes($("#idservicioSub").val());
        // location.reload();
      },
    });
  },
  guardarImagenPrincipal: (e) => {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardarFondo").prop("disabled", true);
    $("#btnGuardarFondo").text("Procesando...");
    var formData = new FormData($("#frmPrincipal")[0]);
    $.ajax({
      url: "../ajax/inicio.php?op=subirFondoPrincipal",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (datos) {
        $("#btnGuardarFondo").text("Guardar");
        $("#btnGuardarFondo").prop("disabled", false);
        swal(
          "Mensaje del sistema!",
          "Registro realizado correctamente",
          "success"
        );
        $("#fupPrincipal").val("");
        //$(".header_paralux").css('background-image', 'url(' + imageUrl + ')')
        //setInterval(location.reload(), 2000);
        location.reload();
      },
    });
  },
  guardarImagenInicioServicio: (e) => {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardarServicioInicio").prop("disabled", true);
    $("#btnGuardarServicioInicio").text("Procesando...");
    var formData = new FormData($("#frmServicioInicio")[0]);
    $.ajax({
      url: "../ajax/inicio.php?op=subirInicioServicio",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (datos) {
        $("#btnGuardarServicioInicio").text("Guardar");
        $("#btnGuardarServicioInicio").prop("disabled", false);
        swal(
          "Mensaje del sistema!",
          "Registro realizado correctamente",
          "success"
        );
        $("#fuImgServicio").val("");
        setInterval(location.reload(), 2000);
        // location.reload();
      },
    });
  },
  eliminarfotoServicioSeleccionado: () => {
    $.post(
      "../ajax/inicio.php?op=eliminarServicio",
      { id: $("#id").val(), url: $("#urlS").val() },
      function (data, status) {
        $("#urlS").val("");
        $("#srmImagenServicio").hide();
        $("#srmImagenServicio").attr("src", "");
        $("#fuImgServicio").show();
        $("#btnEliminarFoto").hide();
      }
    );
  },
  editarServicio: (idx) => {
    $.post(
      "../ajax/inicio.php?op=obtener",
      { id: idx },
      function (data, status) {
        data = JSON.parse(data);
        $("#id").val(data.idinicioservicio);
        $("#txt_inicio_titulo").val(data.titulo);
        $("#txt_inicio_mensaje").val(data.mensaje);
        $(".richText-editor").append(data.mensaje);
        $("#txt_inicio_titulo").focus();
        $("#srmImagenServicio").show();
        $("#srmImagenServicio").attr("src", data.url);
        $("#urlS").val(data.url);
        $("#btnEliminarFoto").show();
        $("#fuImgServicio").hide();
        $("#btnCancelar").show();
        $("#btnGuardarServicioInicio").text("Editar");
        const element = document.getElementById("txt_inicio_titulo");
        element.focus({
          preventScroll: true,
        });
      }
    );
  },
  cancelarEdicionServicio: () => {
    $("#id").val("");
    $("#txt_inicio_titulo").val("");
    $("#txt_inicio_mensaje").val("");
    $("#srmImagenServicio").hide();
    $("#srmImagenServicio").attr("src", "");
    $("#btnEliminarFoto").hide();
    $("#fuImgServicio").show();
    $("#btnCancelar").hide();
    $("#btnGuardarServicioInicio").text("Guardar");
  },
  borrarServicioInicio: (idx) => {
    $.post(
      "../ajax/inicio.php?op=borrarServicio",
      { id: idx },
      function (data, status) {
        location.reload();
      }
    );
  },
  guardarImagenCliente: (e) => {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardarICliente").prop("disabled", true);
    $("#btnGuardarICliente").text("Procesando...");
    var formData = new FormData($("#frmICliente")[0]);
    $.ajax({
      url: "../ajax/inicio.php?op=subirImagenCliente",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (datos) {
        $("#btnGuardarICliente").text("Guardar");
        $("#btnGuardarICliente").prop("disabled", false);
        swal(
          "Mensaje del sistema!",
          "Registro realizado correctamente",
          "success"
        );
        $("#fu_cliente").val("");
        location.reload();
      },
    });
  },
  guardarImagen: (e) => {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardarImagen").prop("disabled", true);
    $("#btnGuardarImagen").text("Procesando...");
    var formData = new FormData($("#frmImagen")[0]);
    $.ajax({
      url: "../ajax/inicio.php?op=subirImagen",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (datos) {
        $("#btnGuardarImagen").text("Guardar");
        swal(
          "Mensaje del sistema!",
          "Registro realizado correctamente",
          "success"
        );
        $("#btnGuardarImagen").prop("disabled", false);
        $("#fupImagen").val("");
        location.reload();
      },
    });
  },
  borrarImagenCliente: (id) => {
    $.post(
      "../ajax/inicio.php?op=borrarCliente",
      { id: id },
      function (data, status) {
        location.reload();
      }
    );
  },
  borrarImagen: (id) => {
    $.post("../ajax/inicio.php?op=borrar", { id: id }, function (data, status) {
      location.reload();
    });
  },
  guardaryeditar: (e) => {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardarTexto").prop("disabled", true);
    $("#btnGuardarTexto").text("Procesando...");
    var formData = new FormData($("#frmtexto")[0]);
    $.ajax({
      url: "../ajax/inicio.php?op=guardaryeditar",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (datos) {
        $("#btnGuardarTexto").text("Guardar");
        swal(
          "Mensaje del sistema!",
          "Registro realizado correctamente",
          "success"
        );
        $("#btnGuardarTexto").prop("disabled", false);
      },
    });
  },
  //Función para obtener y mostrar el registro
  mostrar: () => {
    $.post("../ajax/inicio.php?op=mostrar", function (data, status) {
      data = JSON.parse(data);
      $("#txt_texto").val(data == null ? "" : data.texto);
    });
  },
  fondo: () => {
    $.post("../ajax/inicio.php?op=background", function (data, status) {
      data = JSON.parse(data);
      $(".header_paralux").css("background-image", "url(" + data.url + ")");
      console.log(data);
    });
  },
};
acciones_inicio.init();
