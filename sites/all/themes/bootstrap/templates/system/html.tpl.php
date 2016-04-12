<?php
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - $html_attributes:  String of attributes for the html element. It can be
 *   manipulated through the variable $html_attributes_array from preprocess
 *   functions.
 * - $html_attributes_array: An array of attribute values for the HTML element.
 *   It is flattened into a string within the variable $html_attributes.
 * - $body_attributes:  String of attributes for the BODY element. It can be
 *   manipulated through the variable $body_attributes_array from preprocess
 *   functions.
 * - $body_attributes_array: An array of attribute values for the BODY element.
 *   It is flattened into a string within the variable $body_attributes.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see bootstrap_preprocess_html()
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup templates
 */
global $base_url;
global $base_path;
global $user;
$iurl = $base_url.'/'.drupal_get_path('theme','bootstrap').'/';

?><!DOCTYPE html>
<html<?php print $html_attributes;?><?php print $rdf_namespaces;?>>
<head>
  <link rel="profile" href="<?php print $grddl_profile; ?>" />
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" media="all" href="<?php print $iurl ?>/front_files/css/style.css" />
  <link rel="stylesheet" media="all" href="<?php print $iurl ?>/front_files/css/basic.css" />
  <link rel="stylesheet" media="all" href="<?php print $iurl ?>/front_files/css/bootstrap.css" />
  <link rel="stylesheet" media="all" href="<?php print $iurl ?>/front_files/css/bootstrap-theme.css" />
  <link href='https://fonts.googleapis.com/css?family=Oxygen: 400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <?php print $head; ?>
  <title>TVUNAM - Drupal Design</title>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php print $scripts; ?>
</head>
<body>
  <script>
    $(document).ready(function($) {
      $('.dropdown').css('background-color', 'white !important');
      // $('#cultura').css('color', '#001C3A !important');
      // $("#actualidad").attr('style',  'color: white !important;');

      $('#cultura').click( function() {
        location.href = "sites/cultura.html"
      })  

      $('#actualidad').click( function() {
        location.href = "sites/actualidad.html"
      });

      $('#deportes').click( function() {
        location.href = "sites/deportes.html"
      });
    });
  </script>



  <!-- NAV HEADER -->

  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="row">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="" href="#">
        <!-- <img class="img_header img-responsive" src="images/header_unam.png"> -->
        <img class="img_header img-responsive" src="<?php print $iurl ?>/front_files/images/icons_unam/logotipotvunam.png">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a id="actualidad" href="#">ACTUALIDAD</a></li>
        <li class="dropdown">
          <a href="www.google.com" class="dropdown-toggle" id="cultura" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CULTURA <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="sites/musica.html"><span style="color: white; font-size: 14px; font-weight: 800;">-&nbsp;</span>MÚSICA</a></li>
            <li><a href="#"><span style="color: white; font-size: 14px; font-weight: 800;">-&nbsp;</span>LITERATURA</a></li>
            <li><a href="#"><span style="color: white; font-size: 14px; font-weight: 800;">-&nbsp;</span>TEATRO</a></li>
            <li><a href="sites/cine.html"><span style="color: white; font-size: 14px; font-weight: 800;">-&nbsp;</span>CINE</a></li>
            <li><a href="#"><span style="color: white; font-size: 14px; font-weight: 800;">-&nbsp;</span>DANZA</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CIENCIA <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><span style="color: white; font-size: 14px; font-weight: 800;">-&nbsp;</span>ACADEMIA</a></li>
            <li><a href="#"><span style="color: white; font-size: 14px; font-weight: 800;">-&nbsp;</span>INVESTIGACIÓN</a></li>
          </ul>
        </li>
        <li>
          <a id="deportes" href="#">DEPORTE</a>
        </li>
        <li><a href="#">PROGRAMACIÓN</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <!-- <i class="glyphicon glyphicon-search"></i> -->
        <img src="<?php print $iurl ?>/front_files/images/icons_unam/lupa.png" alt="">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar...">
        </div>
      </form>
      <a class="" href="#">
        <!-- <img class="img_header_right img-responsive" src="images/alaire.png"> -->
        <img class="img_header_right img-responsive" src="<?php print $iurl ?>/front_files/images/icons_unam/alaire.png">
      </a>
      </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <!-- NOTICE BODY -->
  <div class="container-fluid text-center">    
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="title-notice-1">
        El renancestista detrás del lente
        <div style="background-color: #E8B365; width: 60px; height: 7px; margin-left: 4px;">&nbsp;</div>
        <!-- <img class="img1-left" src="images/image1.png" alt=""> -->
      </div>

      <img class="img-responsive" src="<?php print $iurl ?>/front_files/images/peter.jpg" alt="">
      <img class="img2-left" src="<?php print $iurl ?>/front_files/images/image3.png" alt="">
      <!-- <img class="img2-left" src="images/1680/816x170-1.png" alt=""> -->
      <img class="img3-left" src="<?php print $iurl ?>/front_files/images/image4.png" alt="">
      <!-- <img class="img3-left" src="images/1680/816x170-2.png" alt=""> -->
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="col-xs-12 notice-2">
          <div class="title-notice-2">
            Guerrero y sus voces
            <div style="background-color: #E8B365; width: 60px; height: 7px; margin-left: 4px;">&nbsp;</div>
          </div>
          <!-- <img class="img-responsive img-notice-2" src="images/1680/816x510-2.png" alt=""> -->
          <img class="img-responsive img-notice-2" src="<?php print $iurl ?>/front_files/images/ayotzinapa_full.jpg" alt="">
        </div>
        

      
        <div class="col-xs-4">
          <img class="img2-left" src="<?php print $iurl ?>/front_files/images/image5.png" alt="">
          <!-- <img class="img2-left" src="images/1680/272x340.png" alt=""> -->
        </div>
      
      
        <div class="col-xs-8">
          <img class="img3-left" src="<?php print $iurl ?>/front_files/images/image7.png" alt="">
          <!-- <img class="img3-left" src="images/1680/544x340.png" alt=""> -->
        </div>
      
    </div>
  </div>
</div>


  <!-- PRE FOOTER -->
  <div class="pre_footer container-fluid text-center">
  <div class="row">
    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
      <!-- <img class="img-responsive" style="margin-left: 45px;" src="images/nosotros.png" alt=""> -->
      <span class="we-container">
        <i class="fa fa-codepen fa-lg"></i>
        <!-- <img src="images/icons_unam/nosotros.png" alt=""> -->
      </span>
      <span>NOSOTROS</span>
    </div>
    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
      <div class="col-lg-4 col-md-5 ol-xs-12">
        <!-- <img class="img-responsive" src="images/newsletter.png" alt=""> -->
          <span>
            <i class="fa fa-newspaper-o fa-lg"></i>
            <!-- <img src="images/icons_unam/newsletter.png" alt=""> -->
          </span>
          <span>SUSCRÍBETE A NUESTRO NEWSLETTER</span>
      </div>
      <div class="col-lg-8 col-md-7 col-xs-12">
        <div class="">
          <input type="text" class="newsletter_input form-control" placeholder="Email....">
        </div>
        
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <!-- <img class="img-responsive" style="float: right" src="images/siguenos.png" alt=""> -->
      <span>SIGUENOS</span>
      <span class="icons-container">
        <i class="fa fa-youtube-play fa-lg"></i>
        <i class="fa fa-instagram fa-lg"></i>
        <i class="fa fa-twitter fa-lg"></i>
        <i class="fa fa-facebook fa-lg"></i>
      </span>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
      <span>CONTACTO</span>
      <span class="contact-container">
          <i class="fa fa-envelope fa-lg"></i>
      </span>
      <!-- <img class="img-responsive" style="float: right" src="images/contacto.png" alt=""> -->
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="container-fluid text-center">
  <div class="row">
    <div class="col-lg-9 col-md-7  col-sm-12 col-xs-12">
      <span class="text_footer">Dirección General de Televisión Universitaria. Av. Insurgentes Sur 3000, Cuidad de México, Del.Coyoacan, CP. 04510 Todos Los Derechos Reservados 2016.</span>

    </div>
    <div class="col-lg-3 col-md-5  col-sm-12 col-xs-12">
      <!-- <img style="display: inline-block" class="img-responsive" src="images/unam_footer.png" alt=""></img> -->
      <img style="display: inline-block" class="img-responsive" src="<?php print $iurl ?>/front_files/images/icons_unam/logotipounam.png" alt=""></img>
      <img style="display: inline-block" class="img-responsive" src="<?php print $iurl ?>/front_files/images/icons_unam/logotipodifusion.png" alt=""></img>
    </div>
  </div>
</footer>
  
  <!--?php print $page; ?-->
</body>
</html>
