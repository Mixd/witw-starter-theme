<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<div class="content__left">
		<section class="entries">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'parts/loop' ); ?>
			<?php endwhile; ?>
		</section>
	</div>

<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>