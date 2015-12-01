<footer>
    <section class="contact-mod">
        <div class="contact-info">
            <h4 class="center">Let's work together</h4>
            <p>I'm currently taking on select development and design projects.</p>
        </div>
        <?php the_field('contact_form', 'option'); ?>
    </section>

    <div class="grid">

        <p class="footer-line">&copy; 2015 Erick Olivares&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provo, Utah</p>

        <div class="social-icons">
            <?php if( have_rows('social_media', 'option') ): ?>
                <?php while( have_rows('social_media', 'option') ): the_row();

                    $sm_site= get_sub_field('social_media_site');
                    $sm_url = get_sub_field('social_media_url');

                    ?>
                    <a href="<?php echo $sm_url ?>" target="_blank">
                        <i class="fa <?php echo $sm_site ?>"></i>
                    </a>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>

</footer>

    <!-- Include js plugin -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
    <!-- Include js plugin -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

    <?php if ( !is_user_logged_in() ) { ?>
        <!-- Google Analytics -->
        <? get_template_part( '../../../ga');
    } else { ?>
        <!-- Google Analytics is blocked for users logged in -->
    <? }?>

    <?php wp_footer(); ?>
</body>
</html>