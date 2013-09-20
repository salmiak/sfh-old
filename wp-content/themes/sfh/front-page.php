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
    		  <?php the_dateIcon( $post ); ?>
      		<div class="container_6"><div class="frontpageSliderImgContainer">
        		 <?php echo get_the_post_thumbnail( $post_id, 'topImage', array( 'class' => 'withFiller' ) ) ?>
        		 <img src="<? bloginfo('template_url'); ?>/img/sliderFiller.png" class="responsive" />
      		</div></div>
      		<div class="frontpageSliderTextContainer container_3"><div class="inside">
      		  <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
      		  <p><?php the_content() ?></p>
      		  <p class="text-right"><a href="<?php the_permalink(); ?>">Läs mer</a></p>
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
	
	<div id="frontpageContent" class="wrapper">
		<div id="frontpageEventsFeed" class="container_5">
		
		  <div><div class="inside">
  		  <ul class="categorySelector">
    		  <li class="active">Alla</li>
    		  <li>Bio</li>
    		  <li>Events</li>
  		  </ul>
		  </div></div>
		  
		  <div class="clear"></div>
		  
		  <?php // The Query
      $the_query = new WP_Query( 'post_type=tribe_events' );
      
      // The Loop
      if ( $the_query->have_posts() ) {
      	while ( $the_query->have_posts() ) {
      		$the_query->the_post(); ?>
    
  		<article class="inside withPadding">
  		  <a href="<?php the_permalink(); ?>">
  		    <?php echo get_the_post_thumbnail( $post_id, 'topImage', array( 'class' => 'topimg responsive' ) ) ?>
  		  </a>
  		  <!-- <img src="<?php bloginfo('template_url'); ?>/testimg/event2.jpg" class="topimg responsive" /> -->
  		  
  		  <div class="content">
  		    <?php the_dateIcon( $post ); ?>
    		  <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
    		  <p><?php the_content() ?></p>
    		  <p class="text-right"><a href="<?php the_permalink(); ?>">Läs mer</a></p>
  		  </div>
  		  
  		  <!-- <?php var_dump($post); ?> -->
  		  
  		</article>
  		<div class="clear"></div>
      		
      	<?php }
      } else {
      	// no posts found
      }
      /* Restore original Post Data */
      wp_reset_postdata();
      ?>
  		
		</div>
		<div id="frontpageSidebar" class="container_4"><div class="inside">
  		
  		<aside class="">
    		En widget
    		<?php get_sidebar(); ?>
  		</aside>
  		
		</div></div>
		
		<div class="clear"></div>
	</div>
		
<?php get_footer(); ?>