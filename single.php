<div class="single">
<?php get_header(); ?>
<?php get_sidebar(); ?>

	<div class="content-area">
		<div class="site-content">
			<ul id="title"><?php the_title( '<h1 class="project-title">', '</h1>' ); ?></ul>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>
			<?php _s_post_nav(); ?>

		<?php endwhile; // end of the loop. ?>
<div id="footer">
  		<footer><p>Viola Tjew-A-Sin 2016</p>
  		</footer> 
	</div>

</div>
</div>
</div>
</div>
</div>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script	src="<?php bloginfo('template_url'); ?>/js/jquery.nav.js" type="text/javascript" ></script>
	<script>
		
		$(document).ready(function() {
			$('#nav').onePageNav();
		});
	</script>
	
	



