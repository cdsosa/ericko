<?php

/*
Template Name: Services
*/

get_header(); ?>

<section>
    <div class="grid gridObjects buffer-top">
        <h1>Services</h1>
</section>

    <?php
    $the_query = new WP_Query(array('post_type' => array('services'),'posts_per_page' => -1, 'order'   => 'ASC', ));
        if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post();?>
            <section class="full-width alt">
                <div class="row" id="<?php the_title();?>">
                    <div class="col-25 imgRow">
                        <img src="<?php the_field('icon');?>">
                    </div>
                    <div class="col-75 leftCol">
                        <h4><?php the_title();?></h4>
                        <?php the_content(); ?>
                        <ul>
                        <?php if (get_field('feature-list')): ?>
                            <?php while (have_rows('feature-list')): the_row(); ?>
                                <li><?php the_sub_field('feature');?></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </section>

        <?php endwhile;  endif;
    wp_reset_postdata();
    ?>


<?php //get_template_part( 'quotes'); ?>

<?php get_footer(); ?>
