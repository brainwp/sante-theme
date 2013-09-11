<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

	<div class="three-fourth"> 
		
		<header>

			<h3 class="permalink"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'site5framework' ); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h3>
			
		</header> <!-- end article header -->

	
		<?php the_excerpt(); ?>

	</div> <!-- end article section -->
						
</article> <!-- end article -->