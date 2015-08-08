<?php ?>
<div class="featured-post">

            <?php
            $the_query = new WP_Query(array('post_type' => array('portfolio','post'),'posts_per_page' => 1, 'order'   => 'ASC', ));
            if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post();?>

                <a href="<?php the_permalink(); ?>" class="object slideImage" style="background-image: url('<?php the_field('logo'); ?>')">
                    <h5 class="tab">Featured Project</h5>
                    <button  class="white-bg mod-fixed">View Project</button>
                </a>

            <?php endwhile;  endif;
            wp_reset_postdata();
            ?>

</div>
