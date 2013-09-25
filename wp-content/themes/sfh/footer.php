  <footer>
    <div class="gradients"></div>
    <div class="wrapper">
      <div class="container_5"><div class="inside">
        <ul class="no-decoration">
        <?php
        wp_list_pages(
          array(
            'exclude' => '',
            'title_li' => '',
          )
        );
        ?>
        </ul>
      </div></div>
      <div class="container_4">
        <div class="inside">
          <div class="map">Google karta</div>
          <adress>
            Skaftö Folkteshus<br/>
            Alfågelstigen 2<br/>
            451 79 Grundsund
          </adress>
          <p class="contantInfo"><strong>Tel</strong> 0705 321 995<br/>
            <strong>Mail </strong> info@skaftofolketshus.se
          </p>
          <div class="clear"></div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </footer>

	
	<!-- Skript som uppdaterar media-query när man ändrar storlek på webbläsarfönster - http://code.google.com/p/css3-mediaqueries-js/ -->
	<!-- <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/css3-mediaqueries.js"></script>	   -->
	
	<script src="<?php bloginfo('template_url'); ?>/js/lib/jquery.cycle2.min.js" charset="utf-8"></script>
  
  <script src="<?php bloginfo('template_url'); ?>/js/sfh.js" charset="utf-8"></script>
		
	<?php wp_footer(); ?> 
		
	</body>
</html>