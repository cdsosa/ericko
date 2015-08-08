<?php

/*
Template Name: Contact
*/

get_header(); ?>

<section class="grid gridObjects">
    <h1>Contact</h1>

    <?php foreach( $posts as $post):  ?>
        <?php setup_postdata($post); ?>

            <?php the_content(); ?>

        <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>

</section>





<?php get_footer(); ?>
