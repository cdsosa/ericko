<?php
get_header();

    $image = get_field('hero_image');
    $get_landing_page = in_array('landing_page', get_field('html_widget'));

    if ($get_landing_page) { ?>


        <div class="background-single landing-page">

            <section class="slideImage small-med" style="background-image: url('<?php echo $image ?>')">
                <table>
                    <td>
                        <h1>Tired of Wordpress' default toolbar? </h1>
                        <h5>Simple Toolbar is your answer for a simple and modern approach.</h5>
                        <button>Download Now</button>
                    </td>
                </table>
            </section>

        </div>

    <?php } else { ?>

        <div class="background-single">

            <section class="slideImage small-med" style="background-image: url('<?php echo $image ?>')">

            </section>

            <section class="special-overlay">
                <div class="grid gridObjects single-content">

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

                    if (get_field('facebook_comments')) {

                        get_template_part('posts_parts/facebook_comments');

                    } ?>

                </div>

            </section>

        </div>

    <?php } ?>

<?php get_footer(); ?>