<?php
include_once 'funciones/funciones.php';
include_once 'funciones/sesiones.php';
include_once 'templates/header.php';

$id = $_GET['id'];

if (!filter_var($id, FILTER_VALIDATE_INT)) {
  die("Error");
}
// echo "<pre>";
// var_dump($_GET);
// echo "</pre>";

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
           Editar Administrador
           <small>Puedes editar los datos del administrador aquí</small>
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
                    <h3 class="card-title">Editar Administrador</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                    </div>
                  </div>

                    <div class="card-body">
                      <?php

                      $sql="SELECT * FROM admins WHERE id_admin = $id ";
                      $resultado = $conn->query($sql);
                      $admin =$resultado->fetch_assoc();


                       ?>
                    <!-- form start -->
                    <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-admin.php">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="usuario">Usuario: </label>
                          <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $admin['usuario']; ?>" placeholder="Tu Usuario">
                        </div>
                        <div class="form-group">
                          <label for="nombre">Nombre: </label>
                          <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $admin['nombre']; ?>" placeholder="Tu Nombre">
                        </div>
                        <div class="form-group">
                          <label for="password">Password: </label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="Password para iniciar secion">
                        </div>
                      </div>
                      <!-- /.card-body -->

                       <div class="card-footer">
                        <input type="hidden" name="registro" value="actualizar">
                        <input type="hidden" name="id_registro" value="<?php echo $id;?>">
                        <button type="submit" class="btn btn-primary">Guardar</button>
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
