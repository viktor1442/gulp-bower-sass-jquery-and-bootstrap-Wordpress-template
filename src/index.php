<?php get_header(); ?>

	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<article>
					<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					<?php endwhile; ?>
					<?php endif; ?>
				</article>
			</div>
		</div>
	</div>

<?php get_footer(); ?>