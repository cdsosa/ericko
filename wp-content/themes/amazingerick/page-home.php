<?php

/*
Template Name: Home
*/

get_header(); ?>

<?php

    $the_query = new WP_Query(array('post_type' => array('portfolio','post'),'posts_per_page' => 1, 'order'   => 'DSC', ));
    if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post();?>

        <?php
        $image = get_field('hero_image');
        if( get_post_type() == 'portfolio' ) {
            $image = $image['url'];
        }
        ?>

        <div class="slideImage small-med" style="background-image: url('<?php echo $image ?>')">
            <div class="grid">
                <a href="<?php the_permalink(); ?>" class="post-content">
                    <h1><?php the_title(); ?></h1>
                    <p class="date"><?php echo get_the_date(); ?></p>
                    <p><?php the_excerpt(); ?></p>
                    <span class="article-read-more">Read More<i class="fa fa-caret-right"></i> </span>
                </a>
            </div>
        </div>

    <?php endwhile;
endif;
wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>


<section class="grid gridObjects">

    <div class="home-content">

        <?php $the_query = new WP_Query(array('post_type' => array('portfolio','post'),'order'   => 'DSC', 'offset' => 1, 'posts_per_page' => 1 ));
        if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post();?>

            <?php
                $image = get_field('hero_image');
                if( get_post_type() == 'portfolio' ) {
                    $image = $image['url'];
                }
            ?>

                <div class="slideImage full-block" style="background-image: url('<?php echo $image ?>')">
                    <a href="<?php the_permalink(); ?>" class="block-post-content">
                        <h6><?php the_title(); ?></h6>
                        <p class="date"><?php echo get_the_date(); ?></p>
                        <p><?php the_excerpt(); ?></p>
                        <span class="article-read-more">Read More<i class="fa fa-caret-right"></i> </span>
                    </a>
                </div>


                <?php endwhile;
                endif;
            wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>


            <div class="article-list">

            <?php $the_query = new WP_Query(array('post_type' => array('portfolio','post'),'order'   => 'DSC', 'offset' =>2, 'posts_per_page' => 6 ));
                if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post();?>

                    <?php
                    $thumb = get_field('logo');
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                    ?>

                    <a href="<?php the_permalink(); ?>" class="article-post-wrap">
                        <div class="article-image slideImage" style="background-image:url('<?php if ($thumb) { echo $thumb; } else { echo $image[0]; } ?>'); ">
                        </div>
                        <div class="article-post">
                            <h5 class="truncate"><?php the_title(); ?></h5>
                            <p class="date"><?php echo get_the_date(); ?></p>
                            <p><?php the_excerpt(); ?></p>
                            <span class="article-read-more"><?php if ($thumb) { ?>View Project <?php } else { ?> Read More<?php } ?><i class="fa fa-caret-right"></i> </span>
                        </div>
                    </a>

                <?php endwhile;
            endif;
            wp_reset_postdata();  ?>

        </div>

    </div>

    <div class="home-sidebar">

        <?php get_template_part('template-parts/services-module') ?>

        <?php get_template_part('template-parts/map-module') ?>

        <?php get_template_part('template-parts/feature-post') ?>

        <?php get_template_part('template-parts/about-me') ?>

    </div>

</section>

<?php get_template_part('template-parts/twitter-module') ?>

<?php get_footer(); ?>