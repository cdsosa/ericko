<?php

$the_query = new WP_Query(array('post_type' => array('quotes'),'posts_per_page' => 1, 'orderby'   => 'rand', ));
if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post();?>

    <?php
    $img = get_field('image');
    $url = $img["url"];
    $location = get_field('location', $img['id']);
    ?>

    <section class="slideImage small" style="background-image: url('<?php echo $url ?>')">
        <div class="tagline">
            <h4 class="no-caps">"<?php the_field('quote'); ?>"</h4>
            <h5 class="no-caps">-<?php the_field('quoter'); ?></h5>
        </div>
<!--        <h6 class="location">--><?php // echo $location ?><!--</h6>-->
    </section>

<?php endwhile;  endif;
wp_reset_postdata();
?>
