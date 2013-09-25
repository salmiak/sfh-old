<?php 
/* Template name: Kontaktsida */
get_header(); ?>  

  <div id="singlePage" class="wrapper">
    <div class="container_6">
    
    <!-- starta loopen -->
    <?php while ( have_posts() ) : the_post(); ?>
    
  		<article class="inside withPadding">
  		  <div class="headerMap">
  		    <div id="map-canvas"></div>
    		  <img src="<? bloginfo('template_url'); ?>/img/sliderFiller.png" class="responsive" />
  		  </div>
  		      		  
  		  <div class="content">
  		    <?php the_dateIcon( $post ); ?>
    		  <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
  		    <div class="cats"><?php echo get_cat_list($post);  ?></div>
  		    <?php the_content() ?>
    		  <p class="text-right"><a href="<?php the_permalink(); ?>">Läs mer</a></p>
  		  </div>
  		  
  		</article>
  		<div class="clear"></div>
    
    <?php endwhile; ?>

    </div>
    <div class="container_3"><div class="inside">
    		<?php get_sidebar(); ?>
    </div></div>
    <div class="clear"></div>
  </div>
  
  <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDdAab4iBu6CngaYOQk3b42c9VdjswHNw&sensor=false">
    </script>
    <script type="text/javascript">
      function initialize() {
      
        var myLatlng = new google.maps.LatLng(58.21437,11.4227);
        var mapOptions = {
          zoom: 15,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
      
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title:"Skaftö Folkhets hus"
        });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

<?php get_footer(); ?>