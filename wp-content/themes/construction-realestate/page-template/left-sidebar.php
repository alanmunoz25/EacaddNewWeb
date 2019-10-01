<?php
/**
 * Template Name:Page with Left Sidebar
 */

get_header(); ?>

<?php do_action( 'construction_realestate_page_left_header' ); ?>

<div class="container">
    <main id="maincontent" class="middle-align">
        <div class="main-wrapper row">       
    		<div id="sidebar" class="col-lg-4 col-md-4">
    			<?php dynamic_sidebar('sidebar-2'); ?>
    		</div>		 
    		<div class="content_box col-lg-8 col-md-8">
                <h1><?php the_title();?></h1> 
    			<?php while ( have_posts() ) : the_post(); ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?> post thumbnail image">
                    <?php the_content(); ?>                
                <?php endwhile; // end of the loop. ?>
                <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || '0' != get_comments_number() ) {
                        comments_template();
                    }
                ?>
            </div>
            <div class="clear"></div>    
        </div>
    </main>
</div>

<?php do_action( 'construction_realestate_page_left_footer' ); ?>

<?php get_footer(); ?>