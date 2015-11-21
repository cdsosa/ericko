<section class="contact-mod">
    <div class="contact-info">
        <h5 class="center">Let's work together</h5>
        <p>I'm currently taking on select development and design projects.</p>
    </div>
    <?php the_field('contact_form', 'option'); ?>
</section>

<footer>
    <div class="grid">

        <p>&copy; 2015 All rights reserved Erick Olivares</p>

        <div class="social-icons">
            <a href="https://www.behance.net/erickolivares" target="_blank">
                <i class="fa fa-behance fa-lg"></i>
            </a>
            <a href="https://github.com/erickolivares" target="_blank">
                <i class="fa fa-github fa-lg"></i>
            </a>
            <a href="https://www.facebook.com/Salvy102" target="_blank">
                <i class="fa fa-facebook fa-lg"></i>
            </a>
            <a href="https://twitter.com/EricksEmpire" target="_blank">
                <i class="fa fa-twitter fa-lg"></i>
            </a>
            <a href="http://instagram.com/erickolvrs" target="_blank">
                <i class="fa fa-instagram fa-lg"></i>
            </a>
            <a href="https://www.linkedin.com/profile/view?id=113044967&trk=nav_responsive_tab_profile" target="_blank">
                <i class="fa fa-linkedin fa-lg"></i>
            </a>
            <a href="mailto:erickolivares21@gmail.com?subject=Flip my Design Around!&body=Hello Erick, Can you design my website... logo... ">
                <i class="fa fa-envelope fa-lg"></i>
            </a>
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