<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>


<section class="slideImage large" id="main" role="main" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/backgrounds/lost.jpg') ">

    <div class="grid">
        <h1 class="tagline"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>
    </div>

</section>


<?php get_footer(); ?>
