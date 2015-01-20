<?php
	// Template Name: Contact
	get_header();
?>

<?php if ( have_posts() ) { ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <div class="content">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>

            (this is a custom page template)
        </div>

    <?php endwhile; ?>
<?php } ?>

<?php get_footer(); ?>