<?php
/**
 * The template part for displaying grid layout
 * @package Construction Realestate
 * @subpackage construction_realestate
 * @since 1.0
 */
?>
<div class="col-lg-4 col-md-4">
  <article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <h3 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" alt="<?php the_title(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
  	<i class="fa fa-calendar" aria-hidden="true"></i><span class="entry-date"><a href="<?php echo esc_url( get_permalink() ); ?>" alt="<?php the_title(); ?>"><?php the_time( get_option( 'date_format' ) ); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></span>
    <div class="box-image">
      <?php 
        if(has_post_thumbnail()) { 
          the_post_thumbnail(); 
        }
      ?>
    </div>
    <div class="new-text">
      <?php the_excerpt();?>
    </div>	
  	<div class="cat-box">
      <i class="fas fa-folder-open"></i>
  	 <?php foreach((get_the_category()) as $category) { echo esc_html($category->cat_name) . ' '; } ?>
  	</div>	
    <div class="clearfix"></div>
  </article>
</div>
