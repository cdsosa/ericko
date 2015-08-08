<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>


<main id="main" class="grid slideImage large" role="main" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/backgrounds/lost.jpg') ">

    <section class="error-404 not-found tagline">
        <div class="page-header">
            <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>
        </div><!-- .page-header -->

    </section><!-- .error-404 -->

</main><!-- .site-main -->


<?php get_footer(); ?>
