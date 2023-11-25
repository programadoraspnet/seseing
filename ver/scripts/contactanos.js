var accion_contacto = {
  init: () => {
    //acciones_nosotros.mostrar();
    $("#frmcontacto").on("submit", function (e) {
      accion_contacto.guardaryeditar(e);
    });
  },
  guardaryeditar: (e) => {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnEnviar").prop("disabled", true);
    $("#btnEnviar").text("Procesando...");
    var formData = new FormData($("#frmcontacto")[0]);
    $.ajax({
      url: "../ajax/contactanos.php?op=enviarCorreo",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (datos) {
        console.log(datos);
        $("#btnEnviar").text("Guardar");
        $("#btnEnviar").prop("disabled", false);
        $("#txtnombre").val("");
        $("#txtemail").val("");
        $("#telefono").val("");
        $("#txtmensaje").val("");
        swal("Mensaje del sistema!","Mensaje Enviado","success")
      },
    });
  },
};
accion_contacto.init();
