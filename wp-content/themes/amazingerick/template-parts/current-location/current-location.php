<?php ?>
<!-- Dispalys Current Location and has a google link to the city specified in ACF Field -->

<div class="current">
            <i class="fa fa-map-marker fa-lg"></i>
            <small>Current Location: <a href="https://www.google.com/maps/place/<?php the_field('current_location','option'); ?>" target="_blank"><span class="primary bold"><?php the_field('current_location','option'); ?></span></a></small>
</div>

