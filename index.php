<?php get_header(); ?>

<?php if ( have_posts() ) { ?>
    <div class="content__left">
        <?php while ( have_posts() ) : the_post(); ?>

            <div class="page">
                <h1 class="page__title"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>

            
        <?php endwhile; ?>
    </div>

    <?php get_sidebar(); ?>
<?php } ?>

<?php get_footer(); ?>