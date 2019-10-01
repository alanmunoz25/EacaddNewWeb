<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<?php do_action( 'construction_realestate_above_slider' ); ?>

<?php /** slider section **/ ?>
<?php if( get_theme_mod('construction_realestate_slider_hide_show',true) != ''){ ?>
  <section id="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
      <?php $slider_page = array();
        for ( $count = 1; $count <=4; $count++ ) {
          $mod = intval( get_theme_mod( 'construction_realestate_slider' . $count ));
          if ( 'page-none-selected' != $mod ) {
            $slider_page[] = $mod;
          }
        }
        if( !empty($slider_page) ) :
        $args = array(
            'post_type' => 'page',
            'post__in' => $slider_page,
            'orderby' => 'post__in'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          $i = 1;
      ?>
      <div class="carousel-inner" role="listbox">
        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
          <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?> post thumbnail image"/>
          <div class="carousel-caption">
            <div class="inner_carousel">
              <h2><?php the_title();?></h2>
              <p><?php $excerpt = get_the_excerpt(); echo esc_html( construction_realestate_string_limit_words( $excerpt, esc_attr(get_theme_mod('construction_realestate_slider_excerpt_number','30')))); ?></p>
            </div>
            <div class="slide-button">
              <a class="read-more" href="<?php echo esc_url( get_permalink() );?>" alt="<?php esc_html_e( 'Know More','construction-realestate' );?>"><?php esc_html_e( 'Know More','construction-realestate' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Know More','construction-realestate' );?></span></a>
            </div> 
          </div>
        </div>
        <?php $i++; endwhile; 
        wp_reset_postdata();?>
      </div>
      <?php else : ?>
      <div class="no-postfound"></div>
        <?php endif;
      endif;?>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" alt="<?php esc_attr_e( 'Previous','construction-realestate' );?>">
        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="far fa-arrow-alt-circle-left"></i></span>
        <span class="screen-reader-text"><?php esc_attr_e( 'Previous','construction-realestate' );?></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" alt="<?php esc_attr_e( 'Next','construction-realestate' );?>">
        <span class="carousel-control-next-icon" aria-hidden="true"><i class="far fa-arrow-alt-circle-right"></i></span>
        <span class="screen-reader-text"><?php esc_attr_e( 'Next','construction-realestate' );?></span>
      </a>
    </div>  
    <div class="clearfix"></div>
  </section> 
<?php }?>

<?php do_action( 'construction_realestate_below_slider' ); ?>

<?php /** About Us section **/ ?>
<?php if( get_theme_mod('construction_realestate_sec_title') != '' || get_theme_mod( 'construction_realestate_about_post_setting' )!= ''){ ?>
  <section id="about">
    <div class="container">
      <?php if( get_theme_mod('construction_realestate_sec_title') != ''){ ?>
        <h3><?php echo esc_html(get_theme_mod('construction_realestate_sec_title','')); ?></h3>
      <?php }?>
      <?php
      $postData =  get_theme_mod('construction_realestate_about_post_setting');
          if($postData){
            $args = array( 'name' => esc_html($postData ,'construction-realestate'));
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post(); ?>
          <div class="mainbox">
            <h4><a href="<?php echo esc_url( get_permalink() ); ?>" alt="<?php the_title(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h4>
            <p><?php $excerpt = get_the_excerpt(); echo esc_html( construction_realestate_string_limit_words( $excerpt, esc_attr(get_theme_mod('construction_realestate_about_excerpt_number','30')))); ?></p>
            <div class="clearfix"></div>
          </div>
        <?php endwhile; 
        wp_reset_postdata();?>
        <?php else : ?>
           <div class="no-postfound"></div>
         <?php
        endif;} ?>
        <div class="clearfix"></div>
    </div> 
  </section>
<?php }?>

<?php do_action( 'construction_realestate_below_about' ); ?>

<div class="container">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>