<?php

/*
Template Name: Labs
*/

get_header(); ?>

    <div class="grid gridObjects">

        <h1>LABS</h1>

        <div class="masonary">

                <div class="item-sizer"></div>

                <?php
                while ( have_posts() ) : the_post(); ?>

                    <a href="<?php the_permalink(); ?>" class="item">
                        <div class="post">
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                            <?php if ($image) { ?>
                            <div class="slideImage" style="background-image: url('<?php echo $image[0]; ?>')">
                            </div>
                            <?php } ?>
                            <p><?php echo get_the_date(); ?></p>
                            <h5><?php the_title(); ?></h5>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </a>

                            <?php
                        endwhile;
                    wp_reset_postdata();
                ?>

        </div>

    </div>

    <script src="<?php echo get_template_directory_uri(); ?>/js/masonry.min.js"></script>

<?php get_footer(); ?>