<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article <?php post_class("wrapper") ?> id="post-<?php the_ID(); ?>">
			<div class="entry">

				<?php $bingoNumbers = range(1, 25);
					//controls order
					//Replace with match specific later
					shuffle($bingoNumbers);

					?>

				<div class="bingo-wrapper">
					<?php
						for ($i=0; $i < 25; $i++) {
						$test = get_field('bingo_title_' . $bingoNumbers[ $i ]);

						if(get_field('bingo_checked_' . $bingoNumbers[ $i ]) === 'checked'){
							$checked = '<div class="bingo-box-checked"></div>';
						} else {
							$checked = "";
						}
						
						echo '<div value="' . $i . '" class="bingo-box bingo-box-' . $bingoNumbers[ $i ] . '">' .
								'<p>' .
									$test .
								'</p>' .
							 $checked .
						'</div>';

					} ?>
				</div>
				
				<div class="bingo-square-container">
				<?php 
					for ($i=1; $i <= 25; $i++) { ?>
						<div class="bingo-square-content bingo-square-content-<?php echo $i; ?>">
						<?php 
							$box_title = get_field('bingo_title_' . $i);
							$box_description = get_field('bingo_description_' .  $i);
						?>
							<div class="bingo-square-content-description">
								<h3><?php echo $box_title; ?></h3>
								<p><?php echo $box_description; ?></p>
							</div>
							<div class="bingo-square-content-box-container">
								<div class="bingo-square-content-box">
									<p><?php echo $box_title; ?></p>
								</div>
								<div class="bingo-square-check">
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</article>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
