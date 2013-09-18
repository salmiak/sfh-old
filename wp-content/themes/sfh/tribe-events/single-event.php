<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 * 
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @since  2.1
 * @author Modern Tribe Inc.
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); }

$event_id = get_the_ID();

?>

  <div id="singlePage" class="wrapper">
    <div class="container_5">
    
    <?php while ( have_posts() ) :  the_post(); ?>
    
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><div class="inside">
  		  <?php echo get_the_post_thumbnail( $post_id, 'topImage', array( 'class' => 'topimg responsive' ) ) ?>
        <div class="content">
        
          <?php echo event_dateIcon( ); ?>
        
          <h1 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalänk till <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
          
          <div class="post-content">
            <?php the_content( ); ?>
            <?php wp_link_pages(); ?>
          </div><!-- slut post-content -->
          
        </div>
        
      </div></article>
      
    <?php endwhile; ?>
      
      <!-- NOT USED 
      
      All events link <a href="<?php echo tribe_get_events_link() ?>"> <?php _e( '&laquo; All Events', 'tribe-events-calendar' ) ?></a>
      Recurring info <?php tribe_events_event_recurring_info_tooltip(); ?>
      
      -->
    
    </div>
    <div class="container_4"><div class="inside">
    		<?php get_sidebar(); ?>
    </div></div>
    <div class="clear"></div>
  </div>
