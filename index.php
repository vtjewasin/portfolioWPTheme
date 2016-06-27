<?php get_header(); ?>

<?php get_sidebar(); ?>

<!-- Start the Loop. -->

<div class="content-area">
<div id="projects">
<ul id="title1">Projects</ul>
<div class="posts">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
			
			?>
		 
<?php endwhile; else: ?>
</div>




<!-- The very first "if" tested to see if there were any Posts to -->
<!-- display. This "else" part tells what do if there weren't any. -->
<p>Sorry, no posts matched your criteria.</p>

<!-- REALLY stop The Loop. -->
<?php endif; ?>

<div id="footer">
  		<footer><p>Viola Tjew-A-Sin 2016</p>
  		</footer> 
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
		
			
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
	
<?php get_footer(); ?>