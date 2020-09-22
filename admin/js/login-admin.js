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
        var resultado = data;
        if(resultado.respuesta == 'exitoso') {
          Swal.fire({
            position: 'top-end',
            type: 'success',
            title: 'El usuario se conecto correctamente',
            text: 'Bienbenido@ '+resultado.usuario+'!!!',
            showConfirmButton: true,
          })
          setTimeout(function(){
            window.location.href = 'admin-area.php'
          }, 2000);
        } else {
          Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'hubo un error!',
            footer: '<b style="color:red;">Usuario o Password Incorrectos</b>'
          })
        }
      }
    })

  });
