<?php include_once 'includes/templates/header.php' ?>

  <?php
  try {
    require_once ("includes/funciones/db_conexion.php");
    $sql = " SELECT nombre_invitado, apellido_invitado, url_imagen ";
    $sql .= " FROM invitados ";
    // $sql .= " INNER JOIN categoria_evento ";
    // $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
    // $sql .= " INNER JOIN invitados ";
    // $sql .= " ON eventos.id_inv = invitados.invitado_id ";
    // $sql .= " ORDER BY evento_id ";
    $resultado =$conn->query($sql);
  } catch (\Exception $e) {
    echo $e->getMessage();
  } ?>
   <section class="invitados contenedor seccion">
    <h2>Nuestros Invitados</h2>
      <ul class="lista-invitados clearfix">
      <?php
        while ( $invitados = $resultado->fetch_assoc()) {   ?>
           <li>
             <div class="invitado">
               <img src="img/<?php echo $invitados['url_imagen']; ?>" alt="invitado uno">
               <p><?php echo  $invitados['nombre_invitado'] ." ". $invitados['apellido_invitado'] ?></p>
             </div>
           </li>
      <?php } //while del fetch_assoc()?>
    </ul>
 </section><!-- Seccion de los presentadores -->
  <?php
  $conn->close();
  ?>


<?php include_once 'includes/templates/footer.php' ?>
