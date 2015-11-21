<?php

/*
Template Name: Client-Wars
*/

get_header(); ?>
    <?php $image = get_field('hero_image'); ?>
    <section class="slideImage small-med" style="background-image: url('<?php echo $image ?>')">

    </section>

    <section>
        <div class="grid gridObjects single">

            <h1><?php the_title(); ?></h1>
            <h6 class="date"><?php echo get_the_date(); ?></h6>

            <div class="wix">
                <?php
                while ( have_posts() ) : the_post();

                    the_content();

                endwhile;
                ?>
            </div>

            <?php

            $widget = get_field('html_widget');

            if ($widget) {


                if (in_array('score_block', $widget)) {

                    get_template_part('posts_parts/score_block');

                }

                if (in_array('timer', $widget)) {

                    get_template_part('posts_parts/gumdrops');

                }

            }


            ?>



            <?php

            if (get_field('facebook_comments')) {

                get_template_part('posts_parts/facebook_comments');

            } ?>

        </div>

    </section>

<?php get_footer(); ?>