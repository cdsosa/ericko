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
$the_query = new WP_Query(
    array(
        'post_type' => array('services'),
        'posts_per_page' => -1,
        'order'   => 'ASC', )
    );
    $i=1;

    if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post();
        $i++;
        ?>
            <?php if(($i % 2) == 1) { ?>
                <section class="services odd">
                    <div class="wrapper" id="<?php the_title();?>">
                        <div class="col-50">
                            <img src="<?php the_field('icon');?>">
                        </div>
                        <div class="col-50">
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
            <?php } else { ?>
                <section class="services even">
                    <div class="wrapper" id="<?php the_title();?>">
                        <div class="col-50">
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
                        <div class="col-50">
                            <img src="<?php the_field('icon');?>">
                        </div>
                    </div>
                </section>
            <?php } ?>


    <?php endwhile;  endif;
wp_reset_postdata();
    ?>


<section id="bluezone-labs" class="testimonials" style="background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2015/12/bluezone-bg.png')">
    <div class="grid gridObjects">
        <table>
            <td>
                <div class="quoter" style="background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2015/04/bluezone1.png')"></div>
                <div class="quote">
                    <h4>"We love Erick’s work, he is creative, responsive and understands marketing online.  Without hesitation we recommend Erick!!"</h4>
                    <h6>- Aaron Stewart, <em>BlueZone Labs</em></h6>
                </div>
            </td>
        </table>
    </div>
</section>

<?php get_footer(); ?>
