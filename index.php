<?php include_once 'includes/templates/header.php' ?>

   <section class="seccion contenedor">
    <h2>La mejor conferencia de diseño web en español</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </section><!-- Seccion -->

  <!-- Esta imagen esta de prueba -->
<!-- <img src="../img/bg-talleres.jpg" alt="talleres"> -->

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">
        <source src="../video/video.mp4" type="video/mp4">
        <source src="../video/video.webm" type="video/webm">
        <source src="../video/video.ogv" type="video/ogg">
      </video>
    </div> <!-- contenedor-video -->

    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del evento</h2>
          <nav class="menu-programa">
            <a href="#talleres"><i class="fa fa-code" aria-hidden="true"></i>Talleres</a>
            <a href="#conferencias"><i class="fa fa-comment" aria-hidden="true"></i>Conferencias</a>
            <a href="#seminarios"><i class="fa fa-university" aria-hidden="true"></i>Seminarios</a>
          </nav>
          <div id="talleres" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>HTML5, CSS3  y JavaScript</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i> 16:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Juan pablo de la torre</p>
            </div>
            <div class="detalle-evento">
              <h3>Responsive Web Desing</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i> 20:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Juan pablo de la torre</p>
            </div>
            <a href="#" class="button float-right">Ver todos</a>
          </div><!--#talleres -->
        </div><!--.programa-evento-->
      </div><!--.contenedor-->
    </div><!--.contenedor-programa-->
  </section><!--programa-->


  <?php include_once 'includes/templates/invitados.php' ?><!-- Seccion de los presentadores -->

<div class="contador parallax clearfix">
    <div class="contenedor">
      <ul class="resumen-evento">
        <li><p class="numero">6</p>Invitados</li>
        <li><p class="numero">15</p>Talleres</li>
        <li><p class="numero">3</p>Dias</li>
        <li><p class="numero">9</p>Conferecias</li>
      </ul>
    </div>
</div>

 <section class="precios seccion">
   <h2>Precios</h2>

   <div class="contenedor">
     <ul class="lista-precios clearfix">
       <li>
         <div class="tabla-precio">
           <h3>Pase por dia</h3>
           <p class="numero">$30</p>
           <ul>
             <li>Bocadillos Gratis</li>
             <li>Todas las conferencias</li>
             <li>Todos los Talleres</li>
           </ul>
           <a href="#" class="button hollow">Comprar</a>
         </div>
       </li>
       <li>
        <div class="tabla-precio">
            <h3>Todos los días</h3>
            <p class="numero">$50</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button">Comprar</a>
        </div>
      </li>
      <li>
        <div class="tabla-precio">
            <h3>Pase por 2 días</h3>
            <p class="numero">$45</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>
     </ul>
   </div>
 </section>

<div id="mapa" class="mapa"></div>

 <section class="seccion">
   <h2>Testimoniales</h2>
   <div class="testimoniales contenedor clearfix">
     <div class="testimonial">
       <blockquote>
         <p>Sed mollis velit sit amet felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies.</p>
           <footer class="info-testimonial clearfix">
             <img src="img/testimonial.jpg" alt="imagen testimonial">
             <cite>Oswado Aponte Escobedo<span>Diseñador en @prisma</span></cite>
           </footer>
        </blockquote>
     </div>

   <div class="testimonial">
       <blockquote>
         <p>Sed mollis velit sit amet felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies.</p>
           <footer class="info-testimonial clearfix">
             <img src="img/testimonial.jpg" alt="imagen testimonial">
             <cite>Oswado Aponte Escobedo<span>Diseñador en @prisma</span></cite>
           </footer>
        </blockquote>
     </div>

     <div class="testimonial">
       <blockquote>
         <p>Sed mollis velit sit amet felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies.</p>
           <footer class="info-testimonial clearfix">
             <img src="img/testimonial.jpg" alt="imagen testimonial">
             <cite>Oswado Aponte Escobedo<span>Diseñador en @prisma</span></cite>
           </footer>
        </blockquote>
     </div>
   </div><!--.testimonial-->
   <!-- recordar insertar otros tres -->
 </section>

 <div class="newsletter parallax">
   <div class="contenido contenedor">
     <p> registrate al newslatter:</p>
     <h3>gdlwebcamp</h3>
     <a href="#mc_embed_signup" class="boton_newsletter button transparente">Registro</a>
   </div>
 </div><!-- newslatter -->

<section class="seccion ">
  <h2>Faltan</h2>
  <div class="cuenta-regresiva contenedor">
    <ul class="clearfix">
      <li><p class="numero">80</p>dias</li>
      <li><p class="numero">15</p>horas</li>
      <li><p class="numero">5</p>minutos</li>
      <li><p class="numero">30</p>segundos</li>
    </ul>
  </div>
</section>

<?php include_once 'includes/templates/footer.php' ?>
