<?php
include_once 'funciones/funciones.php';
include_once 'funciones/sesiones.php';
include_once 'templates/header.php';
?>

<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
<?php
include_once 'templates/barra.php';
include_once 'templates/navegacion.php';
?>
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
         <h1>
           Crear Administrador
           <small>Llenar el formulario para crear un administrador</small>
         </h1>
       </section>
        <div class="container-fluid">
          <div class="row">
             <div class="col-md-8">
              <!-- Main content -->
              <section class="content">
                <!-- Default box -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Crear Administrador</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                    </div>
                  </div>
                    <!-- form start -->
                    <div class="card-body">
                    <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-admin.php">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="usuario">Usuario: </label>
                          <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Tu Usuario">
                        </div>
                        <div class="form-group">
                          <label for="nombre">Nombre: </label>
                          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu Nombre">
                        </div>
                        <div class="form-group">
                          <label for="password">Password: </label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="Password para iniciar secion">
                        </div>
                      </div>
                      <!-- /.card-body -->

                       <div class="card-footer">
                        <input type="hidden" name="registro" value="nuevo">
                        <button type="submit" class="btn btn-primary">Añadir</button>
                       </div>
                    </form>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

              </section>
              <!-- /.content -->
            </div>
          </div>
        </div>
     </div>
     <!-- /.content-wrapper -->

  <?php
    include_once 'templates/footer.php';
    include_once 'templates/footer-scripts.php';
    ?>
