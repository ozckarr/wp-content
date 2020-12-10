<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<article class="wrapper" id="post-<?php the_ID(); ?>" <?php post_class() ?>>
				<header>
					<h4 class="post-title bingo-list"><a href="<?php echo get_permalink(); ?>">
						<?php the_title(); ?>
					</h4>
					<?php locate_template( array( 'includes/components/post-meta.php' ), true ); ?>
				</header>
			</article>
		<?php endwhile; ?>

		<?php locate_template( array( 'includes/components/pagination.php' ), true ); ?>

	<?php else : ?>

		<h1><?php _e( 'No posts', 'sceleton' ); ?></h1>

	<?php endif; ?>

<?php get_footer(); ?>
