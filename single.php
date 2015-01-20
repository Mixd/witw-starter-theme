<?php get_header(); ?>


<?php if ( have_posts() ) { ?>
	<div class="content__left">
		<?php while ( have_posts() ) : the_post(); ?>

			<article class="entry <?php echo is_sticky() ? ' sticky"' : '' ?>">
				<header class="entry__head">
					<h1 class="entry__title"><?php the_title(); ?></h1>
					<?php
						$date = get_the_date('d/m/Y');
					?>
					<div class="entry__info">
						<p class="entry__date entry__date--small icon--calendar"><?= $date; ?></p>
					</div>
				</header>
				<div class="entry__summary cms-area cf">
					<?php the_content(); ?>
				</div>

				<footer class="entry__meta">
					<ul class="entry__tags">
						<li class="entry__tags--title">Tags:</li>
						<?php the_tags( '<li>', '</li><li>' , '</li>' ); ?>
					</ul>
				</footer>
			</article>

		<?php endwhile; ?>
	</div>

	<?php get_sidebar(); ?>
<?php } ?>

<?php get_footer(); ?>