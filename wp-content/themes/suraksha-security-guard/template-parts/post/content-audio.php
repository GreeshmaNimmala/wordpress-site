<?php
/**
 * Template part for displaying posts
 * @package WordPress
 * @subpackage suraksha-security-guard
 * @since 1.0
 * @version 1.4
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
<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="article_content">      
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
    <div class="article-text">
      <h4><?php the_title();?></h4>
      <p><?php $excerpt = get_the_excerpt();
        echo esc_html( suraksha_security_guard_string_limit_words( $excerpt,50 ) ); ?></p>
      <div class="metabox">              
        <i class="fas fa-user"></i><span class="entry-author"><?php the_author(); ?></span>
        <i class="fas fa-comments"></i><span class="entry-comments"><?php comments_number( __('0 Comments','suraksha-security-guard'), __('0 Comments','suraksha-security-guard'), __('% Comments','suraksha-security-guard') ); ?></span>
        <i class="far fa-calendar-alt"></i><span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
      </div>
      <div class="read-btn">             
        <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'READ MORE', 'suraksha-security-guard' ); ?>"><?php esc_html_e('READ MORE','suraksha-security-guard'); ?>                
        </a>          
      </div>
      <hr class="horizontal">
    </div>      
    <div class="clearfix"></div> 
  </div>
</div>