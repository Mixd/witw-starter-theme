<article class="entry <?php echo is_sticky() ? ' sticky"' : '' ?>">
	<header class="entry__head">
		<h1 class="entry__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php
			$date = get_the_date('d/m/Y');
		?>
		<div class="entry__info">
			<p class="entry__date entry__date--small icon--calendar"><?php echo $date; ?></p>
		</div>
	</header>
	<div class="entry__summary cms-area cf">
		<p><?php echo get_the_excerpt(); ?></p>
	</div>
</article>