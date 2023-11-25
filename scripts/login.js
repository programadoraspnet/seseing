var tabla;
let acciones_login = {
  init: () => {
    $("#frmLogin").on("submit", function (e) {
      acciones_login.acceder(e);
    });
  },
  acceder: (e) => {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnAcceder").prop("disabled", true);
    var formData = new FormData($("#frmLogin")[0]);
    $.ajax({
      url: "../ajax/inicio.php?op=login",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (data) {
        data = JSON.parse(data);
        if (data == null) {
          alert("Usuario o contraseña incorrectas");
        } else {
          location.href = "principal.php";
        }
        $("#btnAcceder").prop("disabled", false);
      },
    });
  },
};
acciones_login.init();
