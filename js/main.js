(function() {
  "use strict";

  var regalo = document.getElementById('regalo');
  document.addEventListener('DOMContentLoaded', function(){

    // Mapa
    // var map = L.map('mapa').setView([18.01887, -102.208219], 17);
    //
    // L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    //     attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    // }).addTo(map);
    //
    // L.marker([18.01887, -102.208219]).addTo(map)
    //     .bindPopup('GDLWEBCAMP 2020,<br> Boletos Dispinibles')
    //     .openPopup();


    // Campos Datos Usuarios
    var nombre = document.getElementById('nombre');
    var apellido = document.getElementById('apellido');
    var email = document.getElementById('email');

    // Campos Pases
    var pase_dia = document.getElementById('pase_dia');
    var pase_dosdias = document.getElementById('pase_dosdias');
    var pase_completo = document.getElementById('pase_completo');

    // Botones y divs
    var calcular = document.getElementById('calcular');
    var errorDiv = document.getElementById('error');
    var botonRegistro = document.getElementById('btnRegistro');
    // var resultado = document.getElementById('lista-productos');

    var lista_productos = document.getElementById('lista-productos');
    var suma = document.getElementById('suma-total');

    // Extras
    var etiquetas = document.getElementById('etiquetas');
    var camisas = document.getElementById('camisa_evento');

    botonRegistro.disable = true;

    calcular.addEventListener('click', calcularMontos);

    pase_dia.addEventListener('input', mostrarDias);
    pase_dosdias.addEventListener('input', mostrarDias);
    pase_completo.addEventListener('input', mostrarDias);

    nombre.addEventListener('blur', validarCampos);
    apellido.addEventListener('blur', validarCampos);
    email.addEventListener('blur', validarCampos);
    email.addEventListener('blur', validarMail);

    function validarCampos() {
      if(this.value == '') {
        errorDiv.style.display = 'block';
        errorDiv.innerHTML = 'este campo es obligatorio';
        this.style.border = ' 1px solid red';
      } else {
        errorDiv.style.display = 'none';
        this.style.border = '1px solid #cccccc';
      }
    }

    function validarMail() {
      if(this.value.indexOf('@') > -1) {
        errorDiv.style.display = 'none';
        this.style.border = '1px solid #cccccc';
      } else {
        errorDiv.style.display = 'block';
        errorDiv.innerHTML = 'debe tener al menos una @';
        this.style.border = '1px solid red';
        errorDiv.style.border = '1px solid red';
      }
    }

    function calcularMontos(){
      // event.preventDefault();
      if(regalo.value === '') {
        alert ("Debes elegir un regalo");
        regalo.focus();
      } else {
        var boletosDia = parseInt(pase_dia.value, 10) || 0,
            boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
            boletoCompletos = parseInt(pase_completo.value, 10) || 0,
            cantidadCamisas = parseInt(camisas.value, 10) || 0,
            cantidadEtiquetas = parseInt(etiquetas.value, 10) || 0;

        var totalPagar =
            boletosDia * 30 +
            boletos2Dias * 45 +
            boletoCompletos * 50 +
            cantidadCamisas * 10 * .93 +
            cantidadEtiquetas * 2;

        var listadoProductos = [];


        if(boletosDia >= 1) {
          listadoProductos.push(boletosDia + ' Pase por día');
        }
        if (boletos2Dias >= 1) {
          listadoProductos.push(boletos2Dias + ' Pase por dos dias');
        }
        if(boletoCompletos >= 1) {
          listadoProductos.push(boletoCompletos + ' Pase por tres dias');
        }
        if (cantidadCamisas >= 1) {
          listadoProductos.push(cantidadCamisas + ' Camisas');
        }
        if (cantidadEtiquetas >= 1) {
          listadoProductos.push(cantidadEtiquetas + ' Etiqutas');
        }


        lista_productos.style.display = 'block';
        lista_productos.innerHTML = '';
        for (var i = 0; i < listadoProductos.length; i++) {
           lista_productos.innerHTML += listadoProductos[i] + '<br/>'
        }
        	suma.innerHTML = '$ ' + totalPagar.toFixed(2);

        	botonRegistro.disabled = false;
          document.getElementById('total_pedido').value = totalPagar;
      }
    }

    // Mostrar los dia de los cursos

    function mostrarDias() {
      var boletosDia = parseInt(pase_dia.value, 10) || 0,
          boletos2Dias = parseInt(pase_dosdias.value, 10) ||0,
          boletoCompletos =parseInt(pase_completo.value, 10) || 0;

      var diasElegidos = [];

      if (boletosDia > 0) {
        diasElegidos.push('viernes');
      }

      if (boletos2Dias > 0) {
        diasElegidos.push('viernes', 'sabado');
      }

      if (boletoCompletos > 0) {
        diasElegidos.push('viernes', 'sabado', 'domingo');
      }

      // muestra los seleccionados
      for (var i = 0; i < diasElegidos.length; i++) {
        document.getElementById(diasElegidos[i]).style.display = 'block';
      }

      // Los ocultan si vuelven a 0
      if (diasElegidos.length == 0) {
        var todosDias = document.getElementsByClassName('contenido-dia');
        for (let i = 0; i < todosDias.length; i++) {
          todosDias[i].style.display = 'none';
        }
      }
    }

    // Agregar clase al menu
    $('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
    $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
    $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');

    // Menu fijo
    var windowHeigth =$(window).height();
    var barraAltura = $('.barra').innerHeigth;
    $(window).scroll(function(){
      var scroll = $(window).scrollTop();
      if (scroll > windowHeigth) {
        $('.barra').addClass('fixed');
        $('body').css({'margin-top':barraAltura + 'px'});
      } else {
        $('.barra').removeClass('fixed');
        $('body').css({'margin-top': '0px'});
      }
    });

    // Menu responcive
    $('.menu-movil').on('click', function(){
      $('.navegacion-principal').slideToggle();
    });

    // Reaccionar a resize en la pantalla

    var breakpoint = 768;
    $(window).resize(function(){
      if($(document).width() >=breakpoint) {
        $('.navegacion-principal').show();
      } else {
        $('.navegacion-principal').hide();
      }
    });

  // Programa de Conferencia

  }); //DOM CONTENT LOADED

  $(function() {

    // Agregar la clase al Menu
    $('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
    $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
    $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');

    // Colorbox
    $('.invitado-info').colorbox({inline:true, width:"50%"});

  });
})();
