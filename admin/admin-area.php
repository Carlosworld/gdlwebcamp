<?php include_once 'templates/header.php'; ?>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include_once 'templates/barra.php'; ?>
  <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include_once 'templates/navegacion.php' ?>
    <!-- .sidebar container -->

    <!-- =============================================== -->

     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
         <h1>
           Panel de Administración
           <small>Administra tu sitio desde este panel o en el menú de la izquierda</small>
         </h1>


       </section>

     </div>
     <!-- /.content-wrapper -->

  <?php
    include_once 'templates/footer.php';
    include_once 'templates/footer-scripts.php';
    ?>
