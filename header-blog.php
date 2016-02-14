<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package millerweiner
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- From HTML -->
  <title>Miller Weiner Communications</title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>

<!-- 0. BRAND  -->
<!-- 0.1 Navigation  -->
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

<!-- 0.2 Logo  -->          
    <a class="logo navbar-brand" data-target="#featured" data-slide-to="0" class="opaque" <?php echo "href='" . site_url() . "/#featured'>" ?><img src="<?php bloginfo('template_directory'); ?>//images/logo/mwLogo.png"></a>      
      </div>

<!-- Navigation continued  -->      
      <div class="collapse navbar-collapse" id="collapse">
        <ul class="nav navbar-nav navbar-right">
         <!--  <li><a <?php echo "href='" . site_url() . "/#media'>" ?>Media Services</a></li>
          <li><a <?php echo "href='" . site_url() . "/#spokespeople'>" ?>Spokespeople</a></li>
          <li><a <?php echo "href='" . site_url() . "/#tour'>" ?>Media Tour</a></li>
          <li><a <?php echo "href='" . site_url() . "/#news'>" ?>News</a></li>
          <li><a <?php echo "href='" . site_url() . "/#clients'>" ?>Clients</a></li> -->

          <li data-target="#featured" data-slide-to="1" class="opaque"><a <?php echo "href='" . site_url() . "/'>" ?>Media Services</a></li>
          <li data-target="#featured" data-slide-to="2" class="opaque"><a <?php echo "href='" . site_url() . "/'>" ?>Spokespeople</a></li>
          <li data-target="#featured" data-slide-to="3" class="opaque"><a <?php echo "href='" . site_url() . "/'>" ?>Media Tour</a></li>
          <li data-target="#featured" data-slide-to="4" class="opaque"><a <?php echo "href='" . site_url() . "/'>" ?>News</a></li>
          <li data-target="#featured" data-slide-to="5" class="opaque"><a <?php echo "href='" . site_url() . "/'>" ?>Clients</a></li>
          
          <br/>

<!-- 0.3 Address  -->         
          <ul>
            <li><a id="address" href="mailto:barry@miller-weiner.com">7004 Boulevard East, Suite 25E, Guttenberg, NJ 07093 Tel 551.697.3007 barry@miller-weiner.com </a></li>
          </ul>
          
<!-- Navigation continued  -->         
        </ul> 
      </div><!-- collapse navbar-collapse -->
    </div><!-- container -->
  </nav>

  
</header>


