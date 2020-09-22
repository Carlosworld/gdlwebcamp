$(document).ready(function() {
  $('.sidebar-menu').tree()


    $("#registros").DataTable({
      "paging": true,
      "pageLength": 10,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
      "language": {
          paginate: {
            next: 'Siguiente',
            previous: 'Anterior',
            last: 'Ultimo',
            first: 'primero'
          },
          info: 'Mostrando _START_a_END_de_TOTAL_ resultados',
          emptyTable:'No hay registros',
          infoEmpty: '0 registros',
          search: 'Buscar',

          lengthChange: {
            show: 'Mostrar',
            entries: 'Entradas'
          }
      }
    });

})
