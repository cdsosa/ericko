<?php
get_header(); ?>



<section>
    <div class="grid gridObjects">

        <h1><?php the_title(); ?></h1>

        <?php foreach( $posts as $post):  ?>
            <?php setup_postdata($post); ?>


                <aside>

                    <?php if (get_field('logo') ) { ?>
                        <img src="<?php the_field('logo') ?>" />
                    <?php } ?>

                    <div class="text">

                        <?php if (get_field('location') ) { ?>
                            <h6>Location</h6>
                            <p><?php the_field('location') ?></p>
                        <? } ?>

                        <?php if (get_field('url') ) { ?>
                            <h6>Website</h6>
                            <a href="<?php the_field('url') ?>" target="_blank">
                                <i class="fa fa-link"></i>
                                <p>Visit Website</p>
                            </a>
                        <?php } ?>

                        <?php if (get_field('services') ) { ?>
                            <h6>Services</h6>
                            <p><?php the_field('services') ?></p>
                        <?php } ?>

                    </div>

                </aside>

                <div class="content single-client gridObjects portfolio-mod">

                    <?php

                    $posts = get_field('projects');

                    if( $posts ): ?>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>

                            <a href="<?php the_permalink(); ?>" class="object slideImage" style="background-image: url('<?php the_field('logo'); ?>')">
                                <div class="overlay slideImage">
                                    <h5 class="tagline"><?php the_title();?></h5>
                                </div>
                            </a>

                        <?php endforeach; ?>

                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif; ?>

                </div>

            <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>


</section>

<?php get_footer(); ?>
