<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="thumbnail">
		<?php the_title( sprintf( '<a href="%s" rel="bookmark"><header class="entry-header"><h1 class="entry-title">', esc_url( get_permalink() ) ), '</h1></header></a>' ); ?>
		<?php echo '<p class="caption">' . get_post( get_post_thumbnail_id() )->post_excerpt . '</p>';?>
		<?php if ( 'post' == get_post_type() ) : ?>
		<?php endif; ?>
	<?php the_post_thumbnail(array(400,300), array('class' => 'alignleft')); ?>
	</div>

</article><!-- #post-## -->