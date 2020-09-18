$(document).ready(function(){
  $('#crear-admin').on('submit', function(e){
    e.preventDefault();

    var datos = $(this).serializeArray();

    $.ajax({
      type: $(this).attr('method'),
      data: datos,
      url: $(this).attr('action'),
      dataType: 'json',
      success: function(data) {
        console.log(data);
        var resultado = data;
        if(resultado.respuesta == 'exito') {
          Swal.fire({
            position: 'top-end',
            type: 'success',
            title: 'El administrador se creo correctamente',
            showConfirmButton: true,
          })
        } else {
          Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'hubo un error!',
            footer: '<b>Debes ingresar otro nombre de administrador</b>'
          })
        }

      }
    })

  });

  // login

  $('#login-admin').on('submit', function(e){
    e.preventDefault();

    var datos = $(this).serializeArray();

    $.ajax({
      type: $(this).attr('method'),
      data: datos,
      url: $(this).attr('action'),
      dataType: 'json',
      success: function(data) {
        console.log(data);
      }
    })

  });
});
