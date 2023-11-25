$(window).load(function(){
  $.post("../ajax/inicio.php?op=background", function (data, status) {
    data = JSON.parse(data);
    $('.header_paralux').css('background-image', 'url(' + data.url + ')');
  });
});