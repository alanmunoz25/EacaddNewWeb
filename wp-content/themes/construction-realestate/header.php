<?php
/**
 * The Header for our theme.
 * @package Construction Realestate
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'construction-realestate' ) ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
  <div id="header">
    <button class="toggleMenu toggle"><?php esc_html_e('Menu','construction-realestate'); ?></button>
    <a class="screen-reader-text skip-link" href="#maincontent" alt="<?php esc_html_e( 'Skip to content', 'construction-realestate' ); ?>"><?php esc_html_e( 'Skip to content', 'construction-realestate' ); ?></a>
      <div class="top_headbar">
        <div class="socialbox">
          <?php if( get_theme_mod( 'construction_realestate_cont_facebook') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'construction_realestate_cont_facebook','' ) ); ?>" alt="<?php esc_attr_e( 'Facebook','construction-realestate' );?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_attr_e( 'Facebook','construction-realestate' );?></span></a>
          <?php } ?>
          <?php if( get_theme_mod( 'construction_realestate_cont_twitter' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'construction_realestate_cont_twitter','' ) ); ?>" alt="<?php esc_attr_e( 'Twitter','construction-realestate' );?>"><i class="fab fa-twitter" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_attr_e( 'Twitter','construction-realestate' );?></span></a>
          <?php } ?>
          <?php if( get_theme_mod( 'construction_realestate_google_plus') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'construction_realestate_google_plus','' ) ); ?>" alt="<?php esc_attr_e( 'Google','construction-realestate' );?>"><i class="fab fa-google-plus-g" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_attr_e( 'Google','construction-realestate' );?></span></a>
          <?php } ?>
          <?php if( get_theme_mod( 'construction_realestate_pinterest') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'construction_realestate_pinterest','' ) ); ?>" alt="<?php esc_attr_e( 'Pinterest','construction-realestate' );?>"><i class="fab fa-pinterest" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_attr_e( 'Pinterest','construction-realestate' );?></span></a>
          <?php } ?>
          <?php if( get_theme_mod( 'construction_realestate_tumblr') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'construction_realestate_tumblr','' ) ); ?>" alt="<?php esc_attr_e( 'Tumblr','construction-realestate' );?>"><i class="fab fa-tumblr" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_attr_e( 'Tumblr','construction-realestate' );?></span></a>
          <?php } ?>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 logo_bar">
            <div class="logo">
              <a href="/">
                <img src="<?php echo esc_attr( get_template_directory_uri()) ?>/images/logo.jpg" width="446" height="124" alt="">    
          </a>
            </div>     
          </div>
          <div class="col-lg-8 col-md-8 row contact">
            <div class="col-lg-12 col-md-12"> <p style="float: right;">
            ARQUITECTURA, INGENIERÍA Y DISEÑO DE INTERIORES Y CONSTRUCCIONES
          </p>
              <?php if( get_theme_mod( 'construction_realestate_location','' ) != '') { ?>
                <div class="row">
                  <div class="col-lg-2 col-md-4 p-0">
                    <img src="<?php echo esc_attr( get_template_directory_uri()) ?>/images/Location-Icon.png" alt="">
                  </div>
                  <div class="col-lg-10 col-md-8 p-0">
                    <p class="f_para"><?php echo esc_html( get_theme_mod('construction_realestate_location','') ); ?></p>
                    <p><?php echo esc_html( get_theme_mod('construction_realestate_location1','') ); ?></p>         
                  </div>
                </div>
              <?php }?>
            </div>
            <!-- <div class="col-lg-4 col-md-4"> // COLUMNA ENTRE EL SLOGAN Y NUMEROS
              < ?php if( get_theme_mod( 'construction_realestate_time','' ) != '') { ?>
                <div class="row">
                  <div class="col-lg-2 col-md-4 p-0">
                    <img src="< ?php echo esc_attr( get_template_directory_uri() ) ?>/images/Time-Icon.png" alt="">
                  </div>
                  <div class="col-lg-10 col-md-8 p-0">              
                    <p class="f_para">< ?php echo esc_html( get_theme_mod('construction_realestate_time','') ); ?></p>
                    <p>< ?php echo esc_html( get_theme_mod('construction_realestate_time1','') ); ?></p>             
                  </div>
                </div>
              < ?php }?>
            </div> -->
            <div class="col-lg-8 col-md-8"></div>
            <div class="col-lg-4 col-md-4">
            <p style="float: right;"><?php echo do_shortcode('[gtranslate]'); ?></p>
              <?php if( get_theme_mod( 'construction_realestate_number','' ) != '') { ?>
                <div class="row">
                  <div class="col-lg-2 col-md-4 p-0">
                    <img src="<?php echo esc_attr( get_template_directory_uri() ) ?>/images/Call-Icon.png" alt="">
                  </div>
                  <div class="col-lg-10 col-md-8 p-0 phone-header">            
                    <p class="f_para"><?php echo esc_html( get_theme_mod('construction_realestate_number','') ); ?></p>
                    <p><?php echo esc_html( get_theme_mod('construction_realestate_number1','') ); ?></p>        
                  </div>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
      <nav class="menus">
        <div class="menubox header container">
          <div class="nav">
           <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
          </div>
        </div>
      </nav>
  </div>
</header>
<?php /** header **/ ?>
