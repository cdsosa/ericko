<?php

/*
Template Name: Portfolio
*/

get_header(); ?>

<section class="portfolio-mod">
    <div class="grid gridObjects portfolio-mod">
        <h1>Portfolio</h1>
        <?php
        $posts = get_field('choose_client');
        if( $posts ): ?>
            <?php foreach( $posts as $post):  ?>
                <?php setup_postdata($post); ?>

                <a href="<?php the_permalink(); ?>" class="object slideImage" style="background-image: url('<?php the_field('logo'); ?>')" rel="nofollow">
                    <div class="overlay slideImage">
                        <h5 class="tagline"><?php the_title();?></h5>
                    </div>
                </a>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
