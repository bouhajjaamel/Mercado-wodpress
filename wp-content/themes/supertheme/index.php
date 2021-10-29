<?php get_header(); ?>

        <h1><?php bloginfo('name'); ?></h1>
<main>
    <?php while(have_posts()) : the_post(); ?>
        <article>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('medium'); ?>
                <h2><?php the_title(); ?></h2>
        </a>
            <?php the_content(); ?>  
        <a href="<?php the_permalink(); ?>">
         lire
        </a>
        </article>
    <?php endwhile; ?>
</main>
<?php get_footer(); ?>

  

  