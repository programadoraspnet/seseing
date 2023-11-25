var tabla;
let acciones_nosotros = {
  init: () => {
    //acciones_nosotros.mostrar();
    $("#frmnosotros").on("submit", function (e) {
      acciones_nosotros.guardaryeditar(e);
    });  
    $("#frmVisionMision").on("submit", function (e) {
        acciones_nosotros.guardaryeditarnosotros(e);
      });  
      $("#frmICliente").on("submit", function (e) {
        acciones_nosotros.guardarImagenCliente(e);
      });
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
          swal("Mensaje del sistema!","Registro realizado correctamente","success")
          $("#fu_cliente").val("");
          location.reload();
        },
      });
  },
  guardaryeditar: (e) => {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardarNosotros").prop("disabled", true);
    $("#btnGuardarNosotros").text("Procesando...");
    var formData = new FormData($("#frmnosotros")[0]);
    $.ajax({
      url: "../ajax/nosotros.php?op=guardaryeditar",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (datos) {
        $("#btnGuardarNosotros").text("Guardar");
        $("#btnGuardarNosotros").prop("disabled", false);
        swal("Mensaje del sistema!","Registro realizado correctamente","success")
        location.reload();
      },
    });
  },
  guardaryeditarnosotros:(e)=>{
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardarNosotrosVision").prop("disabled", true);
    $("#btnGuardarNosotrosVision").text("Procesando...");
    var formData = new FormData($("#frmVisionMision")[0]);
    $.ajax({
      url: "../ajax/nosotros.php?op=guardaryeditarNosotros",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (datos) {
        swal("Mensaje del sistema!","Registro realizado correctamente","success")
        $("#btnGuardarNosotrosVision").text("Guardar");
        $("#btnGuardarNosotrosVision").prop("disabled", false);
        location.reload();
      },
    });
  }
};
acciones_nosotros.init();
