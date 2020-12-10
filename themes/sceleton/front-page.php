<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class("wrapper"); ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="page-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry">
				<?php the_content(); ?>
				<button><a href="<?php echo get_post_type_archive_link('bingo'); ?>">Bingos</a></button>
			</div>
		</article>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
