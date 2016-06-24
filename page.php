<?php get_header(); ?>

<?php get_sidebar(); ?>
<div class="content-area">
	<div id="primary" >
		<main class="site-main" >

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
			
			<div id="footer">
  		<footer><p>Viola Tjew-A-Sin 2016</p>
  		</footer> 
	</div>


		</main><!-- #main -->
		</div>
	</div><!-- #primary -->
	</div>

