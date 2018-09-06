<?php get_header(); ?>

<div class="contents">
<main>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article>
				<?php the_title( '<h1>', '</h1>' ); ?>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	<?php endif; ?>
</main>

<?php
 get_sidebar();
 get_footer();
