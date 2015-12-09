<?php

/*
Template Name: Clients
*/

get_header(); ?>

<section>

    <div class="grid gridObjects bucket clients">

        <h1>Clients</h1>

        <?php

        $posts = get_field('choose_client');

        if( $posts ): ?>
            <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>

            <div class="object boxed" style="background-image: url('<?php echo get_field('thumbnail_image')['url']?>')">
                <img src="<?php the_field('logo'); ?>" />
                <?php if (get_field('url')) { ?>
                    <a href="<?php the_field('url'); ?>" target="_blank" rel="nofollow">
                        <i class="fa fa-external-link"></i>
                    </a>
                <?php } ?>
            </div>

            <?php endforeach; ?>

            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>

    </div>

</section>

<section class="testimonials" style="background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2015/12/ace-build-bg.png')">
    <div class="grid gridObjects">
        <table>
            <td>
                <div class="quoter" style="background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2015/04/acebuildingmaterials.png')">
                </div>
                <div class="quote">
                    <h4>"Erick has been a valuable asset to building our corporate collateral.  His friendly service combined with his quality of work has benefited our organization."</h4>
                    <h6>- Jessica Zakarya, <em>Ace Building Materials</em></h6>
                </div>
            </td>
        </table>
    </div>
</section>


    <div class="map">

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCO4UbVs-d3Zbq6WzZ6uL7u3KQYwTdnlRM"></script>
        <script>
            function initialize() {
                var mapOptions = {
                    zoom: 6,
                    scrollwheel: false,
                    center: new google.maps.LatLng(37.4499550, -115.7347540),
                    styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
                }
                var map = new google.maps.Map(document.getElementById('map-canvas'),
                    mapOptions);

                new google.maps.Marker({
                    animation: google.maps.Animation.DROP,
                    position: new google.maps.LatLng(40.2779770, -111.6577290),
                    map: map,
                    icon: "<?php echo get_template_directory_uri(); ?>/img/marker/marker-BlueZone.png"
                });

                new google.maps.Marker({
                    animation: google.maps.Animation.DROP,
                    position: new google.maps.LatLng(33.9835030, -118.4301290),
                    map: map,
                    icon: "<?php echo get_template_directory_uri(); ?>/img/marker/marker-Freshwire.png"
                });

                new google.maps.Marker({
                    animation: google.maps.Animation.DROP,
                    position: new google.maps.LatLng(34.0746470, -118.2694630),
                    map: map,
                    icon: "<?php echo get_template_directory_uri(); ?>/img/marker/marker-DC.png"
                });

                new google.maps.Marker({
                    animation: google.maps.Animation.DROP,
                    position: new google.maps.LatLng(34.1799860, -118.4664250),
                    map: map,
                    icon: "<?php echo get_template_directory_uri(); ?>/img/marker/marker-PowerGuard.png"
                });

    //            new google.maps.Marker({
    //                animation: google.maps.Animation.DROP,
    //                position: new google.maps.LatLng(40.5731830, -111.9112850),
    //                map: map,
    //                icon: "<?php //echo get_template_directory_uri(); ?>///img/marker/marker-ErickOlivares.png"
    //            });

            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

        <section id="map-canvas" style="width:100%;height:600px;"></section>

    </div>

</section>

<?php get_footer(); ?>
