</body>
</html>
<footer class="page-footer" style="background-color: #00853bed;">
<div class="container">
  <div class="row">
    <div class="col l8 s12">
      <h5 class="white-text"><i class="fa fa-globe" aria-hidden="true"></i> Información de Contacto</h5>
      <p class="grey-text text-lighten-4">
          <i class="fa fa-map-marker"></i>Corporación Autónoma Regional para el Desarrollo Sostenible del Chocó-Codechocó<br>
          <i class="fa fa-map-marker"></i>
          Subdirección de Planeación - Oficina Ventanilla de Emprendimientos Verdes<br> 
          Coordinación general de la Ventanilla: <br>
          <b>YOVANNY RODRÍGUEZ CÓRDOBA</b> <br>
          Correo: yrodriguez@codechoco.gov.co <br> <br>

          
          <i class="fa fa-map-marker"></i> Quibdó - Chocó <br>
          <i class="fa fa-building" aria-hidden="true"></i> Cra 4 No. 22-96. Quibdó – Chocó – Colombia
          
          <br> <i class="fa fa-envelope-o"></i> Correos:
          negociosverdes@codechoco.gov.co <br>
          
      </p>
    </div>
    <!-- <div class="col l4 offset-l2 s12">
      <h5 class="white-text"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Lineas de Atención</h5>
      <ul>
        <li><a class="grey-text text-lighten-3" href="#!"><i class="fa fa-phone"></i> Domicilio: 6714 658 - 6712 347</a></li>
        <li><a class="grey-text text-lighten-3" href="#!"><i class="fa fa-bell"></i> Denuncia Ciudadana:</a></li>
        <li><a class="grey-text text-lighten-3" href="#!"><i class="fa fa-mobile" aria-hidden="true"></i> Linea de Emergencias: 312 711 9708 </a></li>
        
      </ul>
    </div> -->
  </div>
</div>
<div class="footer-copyright" style="background-color: #00853b">
  <div class="container">
  © <?php echo date('Y'); ?> Copyright
 <a class="grey-text text-lighten-4 right" href="#!"> Desarrollo: <i class="fa fa-code"></i> Harinson Palacios | David Raga
  </div>
</div>
</footer>

<script src="<?php echo base_url(); ?>assets/template/js/materialize.min.js"  type="text/javascript"></script>
<script src='<?php echo base_url(); ?>assets/template/js/css3-animate-it.js'></script>
<script src='<?php echo base_url(); ?>assets/template/slick/slick.min.js'></script>
<script src='<?php echo base_url(); ?>assets/template/js/slider_1.js'></script>
<!-- <script src='js/index.js'></script> -->
<script src="<?php echo base_url(); ?>assets/template/js/style.js"  type="text/javascript"></script>
<script type="text/javascript">
   $(document).ready(function(){
    $('.carousel.carousel-slider').carousel({fullWidth: true});
    $('.carousel.carousel-slider').carousel({duration:50});
      $('.carousel.carousel-slider').carousel('next');
      $(".button-collapse").sideNav();
      $('select').material_select();
      $('.parallax').parallax();
      $('.slider').slider({height:700});
     

   
      }); 
</script>