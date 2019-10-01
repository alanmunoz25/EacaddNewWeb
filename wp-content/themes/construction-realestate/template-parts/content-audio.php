<?php
/**
 * The template part for displaying audio post
 * @package Construction Realestate
 * @subpackage construction_realestate
 * @since 1.0
 */
?>

<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $audio = false;

  // Only get audio from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
  }
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>    
  <h3 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" alt="<?php the_title(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
  <i class="fa fa-calendar" aria-hidden="true"></i><span class="entry-date"><a href="<?php echo esc_url( get_permalink() ); ?>" alt="<?php the_title(); ?>"><?php the_time( get_option( 'date_format' ) ); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></span>
  <div class="box-image">
    <?php
      if ( ! is_single() ) {

        // If not a single post, highlight the audio file.
        if ( ! empty( $audio ) ) {
          foreach ( $audio as $audio_html ) {
            echo '<div class="entry-audio">';
              echo $audio_html;
            echo '</div><!-- .entry-audio -->';
          }
        };

      };
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