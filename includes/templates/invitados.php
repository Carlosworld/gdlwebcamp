<?php
try {
  require_once ("includes/funciones/db_conexion.php");
  $sql = " SELECT invitado_id, nombre_invitado, apellido_invitado, descripcion, url_imagen ";
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
             <a class="invitado-info" href="#invitado<?php echo $invitados['invitado_id'];?>">
               <img src="img/<?php echo $invitados['url_imagen']; ?>" alt="invitado uno">
               <p><?php echo  $invitados['nombre_invitado'] ." ". $invitados['apellido_invitado'] ?></p>
             </a>
           </div>
         </li>
         <div style="display:none;">
           <div class="invitado-info" id="invitado<?php echo $invitados['invitado_id']; ?>">
             <h2><?php echo $invitados['nombre_invitado']." ".$invitados['apellido_invitado'] ?></h2>
             <img src="img/<?php echo $invitados['url_imagen']; ?>" alt="invitado uno">
             <p><?php echo $invitados['descripcion']?></p>
           </div>
         </div>
    <?php } //while del fetch_assoc()?>
  </ul>
</section><!-- Seccion de los presentadores -->
<?php
$conn->close();
?>
