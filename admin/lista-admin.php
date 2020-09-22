<?php
  include_once 'templates/header.php';
  include_once 'funciones/funciones.php';
  include_once 'funciones/sesiones.php';

?>

<body class="hold-transition sidebar-menu">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php
    include_once 'templates/barra.php';
    include_once 'templates/navegacion.php'?>

     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
         <h1>
           Listado de administradores
           <small></small>
         </h1>
       </section>

       <!-- Main content -->
       <section class="content">
         <div class="container-fluid">
           <div class="row">
             <div class="col-12">
               <div class="card">
                 <div class="card-header">
                   <h3 class="card-title">Maneja los usuarios en esta sección</h3>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body">
                   <table id="registros" class="table table-bordered table-hover">
                     <thead>
                     <tr>
                       <th>Usuario</th>
                       <th>Nombre</th>
                       <th>Acciones</th>
                     </tr>
                     </thead>
                     <tbody>
                       <?php

                        try {
                           $sql = "SELECT id_admin, usuario, nombre FROM admins";
                           $resultado = $conn->query($sql);
                         } catch (\Exception $e) {
                           $error = $e->getMessage();
                         }
                            while($admin  = $resultado->fetch_assoc()) { ?>
                              <tr>
                                <td><?php echo $admin['usuario']; ?></td>
                                <td><?php echo $admin['nombre']; ?></td>
                                <td>
                                  <a href="editar-admin.php?id=<?php echo $admin['id_admin']; ?>" class="btn bg-gradient-warning btn-flat margin">
                                    <i class="fas fa-pencil-alt"></i>
                                  </a>
                                  <a href="#" data-id="<?php echo $admin['id_admin'];?>" data-tipo="admin" class="btn btn-danger btn-flat margin borrar_registro">
                                    <i class="fas fa-trash"></i>
                                  </a>
                              </td>
                              </tr>
                        <?php } ?>
                     </tbody>
                     <tfoot>
                     <tr>
                       <th>Usuario</th>
                       <th>Nombre</th>
                       <th>Acciones</th>
                     </tr>
                     </tfoot>
                   </table>
                 </div>
                 <!-- /.card-body -->
               </div>
               <!-- /.card -->
             </div>
             <!-- /.col -->
           </div>
           <!-- /.row -->
         </div>
         <!-- /.container-fluid -->
       </section>
       <!-- /.content -->

     </div>
     <!-- /.content-wrapper -->

  <?php
    include_once 'templates/footer.php';
    include_once 'templates/footer-scripts.php';
    ?>
