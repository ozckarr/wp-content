<?php get_header(); ?>

	<article <?php post_class( 'post 404-post wrapper' ); ?>>
		<header>
			<h1><?php _e( '-Error 404-','sceleton' ); ?></h1>
		</header>
		<img class="bino-404" src="<?php echo get_template_directory_uri(); ?>/images/bino_404.png" alt="bino 404 error" />
		<h3><?php _e( 'Sidan gick inte att hitta','sceleton' ); ?></h3>
	</article>

<?php get_footer(); ?>
