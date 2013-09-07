<?php get_header(); ?>
		
	<div id="frontpageSlider" class="wrapper">
		<div class="container_9">
		
		  <div id="frontpageSliderContainer" class="cycle-slideshow" data-cycle-slides="> .slide" data-cycle-timeout="7000">
    		<div class="cycle-pager"></div>
  		  
  		  <?php // The Query
        $the_query = new WP_Query( 'post_type=tribe_events&posts_per_page=3' );
        
        // The Loop
        if ( $the_query->have_posts() ) {
        	while ( $the_query->have_posts() ) {
        		$the_query->the_post(); ?>
  		
    		<div class="slide">
      		<div class="container_6"><div class="frontpageSliderImgContainer">
        		 <?php echo get_the_post_thumbnail( $post_id, 'topImage', array( 'class' => 'responsive' ) ) ?>
      		</div></div>
      		<div class="frontpageSliderTextContainer container_3"><div class="inside">
      		  <h2 class="title"><?php the_title() ?></h2>
            <p><?php the_content() ?></p>
      		</div></div>
      		<div class="clear"></div>
    		</div>
        		
        	<?php }
        } else {
        	// no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>
  		</div>
  		
		
		</div>
		<div class="clear"></div>
	</div>
	
	
  		<!--<div class="slide">
    		<div class="container_6"><div class="frontpageSliderImgContainer">
      		<img src="<?php bloginfo('template_url'); ?>/testimg/event1.jpg" class="responsive" />
    		</div></div>
    		<div class="frontpageSliderTextContainer container_3"><div class="inside">
    		
    		  <h2 class="title">Rubriken på detta event 1</h2>
    		  <p>Här är ett eventets beskrivning. Det är lagom långt för att väcka lite intresse.</p>
    		
    		</div></div>
    		<div class="clear"></div>
  		</div>
		
  		<div class="slide">
    		<div class="container_6"><div class="frontpageSliderImgContainer">
      		<img src="<?php bloginfo('template_url'); ?>/testimg/event2.jpg" class="responsive" />
    		</div></div>
    		<div class="frontpageSliderTextContainer container_3"><div class="inside">
    		
    		  <h2 class="title">Rubriken på detta event 2</h2>
    		  <p>Här är ett eventets beskrivning. Det är lagom långt för att väcka lite intresse.</p>
    		
    		</div></div>
    		<div class="clear"></div>
  		</div>
		
  		<div class="slide">
    		<div class="container_6"><div class="frontpageSliderImgContainer">
      		<img src="<?php bloginfo('template_url'); ?>/testimg/event3.jpg" class="responsive" />
    		</div></div>
    		<div class="frontpageSliderTextContainer container_3"><div class="inside">
    		
    		  <h2 class="title">Rubriken på detta event 3</h2>
    		  <p>Här är ett eventets beskrivning. Det är lagom långt för att väcka lite intresse.</p>
    		
    		</div></div>
    		<div class="clear"></div>
  		</div> -->
	
	<div id="frontpageContent" class="wrapper">
		<div id="frontpageEventsFeed" class="container_5">
		
		  <div><div class="inside">
  		  <ul class="categorySelector">
    		  <li class="active">Alla</li>
    		  <li>Bio</li>
    		  <li>Events</li>
  		  </ul>
		  </div></div>
		  
		  <?php // The Query
      $the_query = new WP_Query( 'post_type=tribe_events' );
      
      // The Loop
      if ( $the_query->have_posts() ) {
      	while ( $the_query->have_posts() ) {
      		$the_query->the_post(); ?>
    
  		<article class="inside">
  		  <?php echo get_the_post_thumbnail( $post_id, 'topImage', array( 'class' => 'topimg responsive' ) ) ?>
  		  <!-- <img src="<?php bloginfo('template_url'); ?>/testimg/event2.jpg" class="topimg responsive" /> -->
  		  <h2 class="title"><?php the_title() ?></h2>
  		  <p><?php the_content() ?></p>
  		</article>
  		<div class="clear"></div>
      		
      	<?php }
      } else {
      	// no posts found
      }
      /* Restore original Post Data */
      wp_reset_postdata();
      ?>
		
  		<!--
  		<article class="inside">
  		  <img src="<?php bloginfo('template_url'); ?>/testimg/event2.jpg" class="topimg responsive" />
  		  <h2 class="title">Rubriken på detta event</h2>
  		  <p>Här är ett eventets beskrivning. Det är lagom långt för att väcka lite intresse.</p>
  		</article>
  		<div class="clear"></div>
		
  		<article class="inside">
  		  <h2 class="title">Rubriken på detta event utan bild</h2>
  		  <p>Här är ett eventets beskrivning. Det är lagom långt för att väcka lite intresse.</p>
  		</article>
  		<div class="clear"></div>
		
  		<article class="inside">
  		  <img src="<?php bloginfo('template_url'); ?>/testimg/event1.jpg" class="topimg responsive" />
  		  <h2 class="title">Rubriken på detta event</h2>
  		  <p>Här är ett eventets beskrivning. Det är lagom långt för att väcka lite intresse.</p>
  		</article>
  		<div class="clear"></div>
  		-->
  		
		</div>
		<div id="frontpageSidebar" class="container_4"><div class="inside">
  		
  		<aside class="">
    		En widget
  		</aside>
  		
		</div></div>
		
		<div class="clear"></div>
	</div>
		
<?php get_footer(); ?>