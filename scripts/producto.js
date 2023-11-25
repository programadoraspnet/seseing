var accion_producto = {
  init: () => {
    $("#frmProducto").on("submit", function (e) {
      accion_producto.guardarTitulo(e);
    });
    $("#frmImagenes").on("submit", function (e) {
      accion_producto.guardarImagen(e);
    });
    $("#frmCaracteristica").on("submit", function (e) {
      accion_producto.guardarCaracteristica(e);
    });
    accion_producto.listar();
  },
  add: () => {
    $("#div_general").show();
    accion_producto.limpiarTitulo();
  },
  cerrarImagenProducto:()=>{
    $("#div_generalImagen").hide();
  },
  cerrarCaracteristicaProducto:()=>{
    $("#div_generalCaracteristicas").hide();
  },
  mostrar:(id)=>{
    $("#div_general").show();
    $(".title").text("Editar Registro");
    $.post("../ajax/producto.php?op=mostrar",{id:id}, function (data) {
      data = JSON.parse(data);
      console.log(data);
      $("#id").val(data.idcilindro);
      $("#txtDescripcion").val(data.vc_descripcion);
    });
  },
  eliminar:(id)=>{
    $.post("../ajax/producto.php?op=eliminar",{id:id}, function (r) {
      swal("Mensaje del sistema!",r,"success");
      accion_producto.listar();
    });
  },
  limpiarTitulo:()=>{
    $("#id").val("");
    $("#txtDescripcion").val("");
    $(".title").text("Nuevo Registro");
  },
  listaImagenes:(id)=>{
    $("#div_generalImagen").show();
    $("#idcilindro").val(id);
    $.post("../ajax/producto.php?op=listarImagen",{idcilindro:id}, function (r) {
      $("#tab_imagenes tbody").empty().append(r);
    });
  },
  listaCaracteristicas:(id)=>{
    $("#div_generalCaracteristicas").show();
    $("#txtCaracteristica").val("");
    $("#idcilindroCaracteristica").val(id);
    $.post("../ajax/producto.php?op=listarCaracteristica",{idcilindro:id}, function (r) {
      $("#tab_caracteristica tbody").empty().append(r);
    });
  },
  eliminarImagen:(id)=>{
    $.post("../ajax/producto.php?op=eliminarImagenCilindro",{idimagencilindro:id}, function (r) {
      swal("Mensaje del sistema!",r,"success");
      $.post("../ajax/producto.php?op=listarImagen",{idcilindro:$("#idcilindro").val()}, function (r) {
        $("#tab_imagenes tbody").empty().append(r);
      });
    });
  },
  listar:()=>{
    $.post("../ajax/producto.php?op=listar", function (r) {
      $("#tbProducto tbody").empty().append(r);
    });
  },
  guardarCaracteristica: (e)=> {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardarCaracteristica").prop("disabled", true);
    $("#btnGuardarCaracteristica").text("Procesando...");
    var formData = new FormData($("#frmCaracteristica")[0]);
    $.ajax({
      url: "../ajax/producto.php?op=guardarCaracteristica",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (datos) {
        $("#btnGuardarCaracteristica").text("Guardar");
        $("#btnGuardarCaracteristica").prop("disabled", false);
        swal("Mensaje del sistema!",datos,"success");
        $("#txtCaracteristica").val("");
        $.post("../ajax/producto.php?op=listarCaracteristica",{idcilindro:$("#idcilindroCaracteristica").val()}, function (r) {
          $("#tab_caracteristica tbody").empty().append(r);
        });
      }
    });
  },
  eliminarCaracteristica:(idx)=>{
    $.post("../ajax/producto.php?op=eliminarCaracteristicaCilindro",{idcilindroCaracteristica:idx}, function (r) {
      swal("Mensaje del sistema!",r,"success");
      $.post("../ajax/producto.php?op=listarCaracteristica",{idcilindro:$("#idcilindroCaracteristica").val()}, function (r) {
        $("#tab_caracteristica tbody").empty().append(r);
      });
    });
  },
  guardarImagen: (e)=> {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardarImage").prop("disabled", true);
    $("#btnGuardarImage").text("Procesando...");
    var formData = new FormData($("#frmImagenes")[0]);
    $.ajax({
      url: "../ajax/producto.php?op=guardarImagen",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (datos) {
        $("#btnGuardarImage").text("Guardar");
        $("#btnGuardarImage").prop("disabled", false);
        $("#fupI").val("");
        swal("Mensaje del sistema!",datos,"success");
        $.post("../ajax/producto.php?op=listarImagen",{idcilindro:$("#idcilindro").val()}, function (r) {
          $("#tab_imagenes tbody").empty().append(r);
        });
      }
    });
  },
  guardarTitulo: (e)=> {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardar").prop("disabled", true);
    $("#btnGuardar").text("Procesando...");
    var formData = new FormData($("#frmProducto")[0]);
    $.ajax({
      url: "../ajax/producto.php?op=guardaryeditar",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (datos) {
        $("#btnGuardar").text("Guardar");
        $("#btnGuardar").prop("disabled", false);
        swal("Mensaje del sistema!",datos,"success");
        $("#div_general").hide();
        accion_producto.limpiarTitulo();
        accion_producto.listar();
      },
    });
  }
};
accion_producto.init();