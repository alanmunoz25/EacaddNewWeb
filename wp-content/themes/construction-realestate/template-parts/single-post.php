<?php
/**
 * The template part for displaying single-post
 *
 * @package Construction Realestate
 * @subpackage construction_realestate
 * @since 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-services'); ?>>
	<h3><?php the_title();?></h3>
	<?php /* <div class="metabox">
		<i class="far fa-calendar-alt"></i><span class="entry-date"><a href="<?php echo esc_url( get_permalink() ); ?>" alt="<?php the_title(); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></span>
		<i class="fas fa-user"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>" alt="<?php the_title(); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></span>
		<i class="fas fa-comments"></i><span class="entry-comments"> <?php comments_number( __('0 Comment', 'construction-realestate'), __('0 Comments', 'construction-realestate'), __('% Comments', 'construction-realestate') ); ?> </span>
	</div> */ ?>
	<?php // if(has_post_thumbnail()) { ?>
		<!-- <hr>
		<div class="feature-box">	
			<?php // the_post_thumbnail(); ?> 
		</div>
		<hr>					 -->
	<?php // } 
	the_content();

	wp_link_pages( array(
		'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'construction-realestate' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'construction-realestate' ) . ' </span>%',
		'separator'   => '<span class="screen-reader-text">, </span>',
	) );
		
	if ( is_singular( 'attachment' ) ) {
		// Parent post navigation.
		the_post_navigation( array(
			'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'construction-realestate' ),
		) );
	} elseif ( is_singular( 'post' ) ) {
		// Previous/next post navigation.
		the_post_navigation( array(
			'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'construction-realestate' ) . '</span> ' .
				'<span class="screen-reader-text">' . __( 'Next post:', 'construction-realestate' ) . '</span> ' .
				'<span class="post-title">%title</span>',
			'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'construction-realestate' ) . '</span> ' .
				'<span class="screen-reader-text">' . __( 'Previous post:', 'construction-realestate' ) . '</span> ' .
				'<span class="post-title">%title</span>',
		) );
	}

	echo '<div class="clearfix"></div>';

	the_tags(); 

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
	?>
</article>