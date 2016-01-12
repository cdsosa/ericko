<?php

/*
Template Name: Home
*/

get_header(); ?>

<?php

    $the_query = new WP_Query(
        array(
            'post_type' => array(
                'portfolio','post'
            ),
            'posts_per_page' => 1,
            'category__not_in'=> 4,
            'order'   => 'DSC',
            'post_status' => 'publish'
        )
    );
    if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post();?>

        <?php
        $image = get_field('hero_image');
        if( get_post_type() == 'portfolio' ) {
            $image = $image['url'];
        }
        ?>

        <section class="billboard parallax" style="background-image: url('<?php echo $image ?>')">
            <div class="wrapper">
                <?php if(get_field('video')) { ?>
                    <table class="heading">
                        <td>
                            <h1><?php the_title(); ?></h1>
                            <?php //the_excerpt(); ?>
                            <a class="lightbox-trigger">
                                <button class="article-read-more">
                                    Watch Video Now
                                <i class="fa fa-caret-right"></i></button>
                            </a>
                        </td>
                    </table>
                <?php } ?>
            </div>
        </section>

        <?php if(get_field('video')) { ?>
            <section class="lightbox">
                <i class="fa fa-times"></i>
                <div class="video-container">
                    <?php the_field('video')?>
                </div>
            </section>
        <?php }?>

    <?php endwhile;
endif;
wp_reset_postdata(); ?>


<section class="service-list">
    <div class="wrapper">
        <?php
        $the_query = new WP_Query(
            array(
                'post_type' => array('services'),
                'posts_per_page' => -1,
                'order'   => 'ASC', )
        );
        $i=0;
        if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post();
            $i++;
            ?>
            <?php if(($i % 2) == 1) { ?>
                <a href="<?php the_field('url')?>" class="col-25">
                    <div class="feature">
                        <table>
                            <td>
                                <h4><?php the_title();?></h4>
                            </td>
                        </table>
                    </div>
                    <div class="service-image" style="background-image: url('<?php the_field('background')?>');">
                    </div>
                </a>
            <?php } else { ?>
                <a href="<?php the_field('url')?>" class="col-25">
                    <div class="service-image" style="background-image: url('<?php the_field('background')?>');">
                    </div>
                    <div class="feature">
                        <table>
                            <td>
                                <h4><?php the_title();?></h4>
                            </td>
                        </table>
                    </div>
                </a>
            <?php } ?>
        <?php endwhile;  endif;
        wp_reset_postdata();
        ?>
    </div>
</section>

<section class="portfolio-mod">
    <div class="grid gridObjects portfolio-mod">
        <h2>Portfolio</h2>
        <?php
        $the_query = new WP_Query(
            array(
                'post_type' => array('portfolio'),
                'posts_per_page' => 3,
                'order'   => 'ASC', )
        );

        if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="object slideImage" style="background-image: url('<?php the_field('logo'); ?>')" rel="nofollow">
                <div class="overlay slideImage">
                    <h5 class="tagline"><?php the_title();?></h5>
                </div>
            </a>
        <?php endwhile;  endif;
        wp_reset_postdata();
        ?>
    </div>
</section>


<?php get_template_part('template-parts/twitter-module') ?>

<?php get_footer(); ?>