<?php get_header(); ?>  

  <div id="singlePage" class="wrapper">
    <div class="container_5">
    
    <!-- starta loopen -->
    <?php while ( have_posts() ) : the_post(); ?>
    
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><div class="inside">
  		  <?php echo get_the_post_thumbnail( $post_id, 'topImage', array( 'class' => 'topimg responsive' ) ) ?>
        <div class="content">
        
          <h1 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalänk till <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
          
          <?php if ( is_archive() || is_search() ) : // Visa bara ett utdrag på arkiv- och sök-sidorna ?>
            <div class="post-excerpt">
              <?php the_excerpt( __( 'Läs mer →' ) ); ?>
            </div><!-- slut post-utdrag -->
          <?php else : ?>
            <div class="post-content">
              <?php the_content( __( 'Läs mer →' ) ); ?>
              <?php wp_link_pages(); ?>
            </div><!-- slut post-content -->
          <?php endif; ?>
          
        </div>
    
      </div></article>
    
    <?php endwhile; ?>
      
    <?php if (  $wp_query->max_num_pages > 1 ) : ?>
    <nav id="nav-nedan">
      <div class="nav-fore"><?php next_posts_link( __( '← Äldre inlägg' ) ); ?></div>
      <div class="nav-efter"><?php previous_posts_link( __( 'Nyare inlägg →' ) ); ?></div>
    </nav><!-- slut nav-nedan -->
    <?php endif; ?><!-- avsluta loopen -->

    </div>
    <div class="container_4"><div class="inside">
    		<?php get_sidebar(); ?>
    </div></div>
    <div class="clear"></div>
  </div>

<?php get_footer(); ?>