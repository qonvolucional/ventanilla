<body>
    
    <!-- mobile-nav section start here -->
    <div class="mobile-menu">
      <nav class="mobile-header primary-menu d-lg-none">
        <div class="header-logo">
          <a href="index.html" class="logo"><img src="<?php echo base_url(); ?>assets/template/img/logo1.png" alt="logo"></a>
        </div>
        <div class="header-bar" id="open-button">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </nav>
      <nav class="menu">
        <div class="mobile-menu-area d-lg-none">
          <div class="mobile-menu-area-inner" id="scrollbar">
            <ul class="m-menu">
              <li><a href="<?php echo base_url(); ?>">Inicio</a></li>
              <li><a href="<?php echo base_url(); ?>">Quienes Somos</a></li>
              <li><a href="<?php echo base_url(); ?>">Servicios</a></li>
              <li><a href="<?php echo base_url(); ?>">Negocios Verdes</a></li>
              <li><a href="<?php echo base_url(); ?>">Registro</a></li>
              <li><a href="<?php echo base_url(); ?>">Noticias</a></li>
              <li><a href="<?php echo base_url(); ?>">Negocios Evaluados</a></li>
            </ul>
            <ul class="social-link-list d-flex flex-wrap">
              <li><a href="#" class="facebook"><i class=" fab fa-facebook-f"></i></a></li>
              <li><a href="#" class="twitter-sm"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
              <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!-- mobile-nav section ending here -->

    <!-- header section start here -->
    <header class="header-section style-2 d-none d-lg-block">
      <div class="header-top">
        <div class="container">
          <div class="htop-area row">
            <div class="htop-left">
              <ul class="htop-information">
                <li><i class="far fa-envelope"></i> negociosverdeschoco@gmail.com</li>
                <li><i class="fas fa-phone-volume"></i> +88 130 589 745 6987</li>
                <li><i class="far fa-clock"></i> Mon - Fri 09:00 - 18:00</li>
              </ul>
            </div>
            <div class="htop-right">
              <ul>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="header-bottom">
        <div class="container">
          <div class="row">
            <nav class="primary-menu">
              <div class="menu-area">
                <div class="row justify-content-between align-items-center">
                  <a href="index.html" class="logo">
                    <img src="<?php echo base_url(); ?>assets/template/img/logo1.png" alt="logo">
                  </a>
                  <div class="main-menu-area d-flex align-items-center">
                    <ul class="main-menu d-flex align-items-center">
                      <li><a class="active" href="<?php echo base_url(); ?>">Inicio</a></li>
                      <li><a href="<?php echo base_url(); ?>">Negocio Verde</a></li>
                      <li><a href="<?php echo base_url(); ?>">Registro</a></li>
                      <li><a href="<?php echo base_url(); ?>">Noticias</a></li>
                      <li><a href="<?php echo base_url(); ?>">Negocios Evaluados</a></li>
                    </ul>
                    <div class="d-none d-lg-block">
                      <ul class="search-cart">
                        <li>
                          <a href="<?php echo base_url(); ?>auth" hreclass="btn btn-success btn-sm">Iniciar Sesión</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- header section ending here -->














<!-- <body >

    <div class="nav animatedParent">
    <div id="div_logo" class="animated growIn slow">
      <a  class="brand-logo" href="#"><img class="logo center" id="logo" src="<?php echo base_url(); ?>assets/template/img/logo1.png" style="width:118px;height:118px;padding-bottom: 5px;padding-left: 5px;border-right-width: 5px;border-top-width: 5px;padding-right: 5px;padding-top: 5px;"></a> 
    </div>
      
      <ul class="hide-on-med-and-down">
        <li><a class="sub_line" style="font-family: 'Sniglet', cursive" href="">Inicio</a></li>
            <li><a class="sub_line" style="font-family: 'Sniglet', cursive" href="<?php echo base_url(); ?>sitio/quienesS">¿Quienes Somos?</a></li>
            <li><a class="sub_line" style="font-family: 'Sniglet', cursive" href="<?php echo base_url(); ?>sitio/servicios">Servicios</a></li>
            <li><a class="sub_line" style="font-family: 'Sniglet', cursive" href="<?php echo base_url(); ?>sitio/negocios">Negocios Verdes</a></li>
            <li><a class="sub_line" style="font-family: 'Sniglet', cursive" href="<?php echo base_url(); ?>sitio/registro">Registro</a></li>
            <li><a class="sub_line" style="font-family: 'Sniglet', cursive" href="<?php echo base_url(); ?>sitio/noticias">Noticias</a></li>  
            <li><a class="sub_line" style="margin-right:10px;font-family: 'Sniglet', cursive" href="<?php echo base_url(); ?>sitio/negociosE">Negocios Evaluados</a></li>
        <li><a style="font-family: 'Sniglet', cursive" href="<?php echo base_url(); ?>auth/" class="active hoverable">Iniciar Sesión</a></li>
      </ul>
  </div>



<div class="fixed-action-btn  hide-on-large-only click-to-toggle">
  <a class="btn-floating btn-large" style="background-color:#00853bb3">
    <i class="large material-icons">menu</i>
  </a>
<ul>
<li><a href="" class="btn-floating tooltipped" data-position="left" data-tooltip="inicio" style="background:#00853bb3;"><i class="material-icons">home</i></a></li> 
<li><a href="<?php echo base_url(); ?>sitio/quienes" class="btn-floating black-text tooltipped" data-position="left" data-tooltip="¿Quienes somos?" style="background:#00853bb3;"><i class="material-icons">
help</i></a></li>
<li><a href="<?php echo base_url(); ?>sitio/servicios" class="btn-floating black-text tooltipped" data-position="left" data-tooltip="Servicios" style="background:#00853bb3;"><i class="material-icons">
settings</i>Servicios</a></li>
<li><a href="<?php echo base_url(); ?>sitio/negocios" class="btn-floating black-text tooltipped" data-position="left" data-tooltip="Mercados Verdes" style="background:#00853bb3;"><i class="material-icons">
store</i>Mercados verdes</a></li>
<li><a href="<?php echo base_url(); ?>sitio/registro" class="btn-floating black-text tooltipped" data-position="left" data-tooltip="Registro" style="background:#00853bb3;"><i class="material-icons">
create</i>Registro</a></li>
<li><a href="<?php echo base_url(); ?>sitio/noticias" class="btn-floating black-text tooltipped" data-position="left" data-tooltip="Noticias" style="background:#00853bb3;"><i class="material-icons">
chrome_reader_mode</i>Noticias</a></li>
<li><a href="<?php echo base_url(); ?>sitio/negociosE" class="btn-floating black-text tooltipped" data-position="left" data-tooltip="Evaluados" style="background:#00853bb3;"><i class="material-icons">
assignment_turned_in  </i>Negocios Evaluados</a></li>
<li><a href="<?php echo base_url(); ?>auth" class="active btn-floating tooltipped" data-position="left" data-tooltip="Iniciar Sesión" style="background:#00853bb3;"><i class="material-icons">
lock_open</i>Iniciar Sesión</a></li>
</ul>
</div> -->