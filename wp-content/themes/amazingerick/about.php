<?php

/*
Template Name: About
*/

get_header(); ?>

<section class="slideImage small" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/backgrounds/shanghai.jpg')">

    <!--    <video autoplay="false" loop="loop"><source src="--><?php //echo get_template_directory_uri(); ?><!--/video/movie.mp4" type="video/mp4"></source></video>-->
    <div class="tagline">
        <h3 class="no-caps">I am a remote Creative Web Developer</h3>
    </div>
</section>

<section class="grid gridObjects text-box">
    <h1>About Erick</h1>

    <div class="text-box">
        <?php foreach( $posts as $post):  ?>
            <?php setup_postdata($post); ?>

                <?php the_content(); ?>

            <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
    </div>

</section>

<section class="full-width">
    <div class="grid gridObjects bucket instagram">

        <h2>Instagram Feed</h2>

        <?php

        $instagram_uid = 26907561;
        $access_token = get_field('instagram_token', 'option');
        $photo_count = 3;
        $api_url = "https://api.instagram.com/v1/users/{$instagram_uid}/media/recent/?access_token={$access_token}&count={$photo_count}";

        // php function to get url json contents
        function fetchData($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT, 20);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
        }


        $json = fetchData($api_url);
        $obj = json_decode($json);

        foreach ($obj->data as $post) { ?>


            <?php

            // text or description of a post
            $pic_text = htmlentities($post->caption->text);

            // in my case i needed to add 1 day
            $pic_created_time = date("F j, Y", $post->caption->created_time);
            $pic_created_time = date("F j, Y", strtotime($pic_created_time . " +1 days"));

            // permalink on Instagram
            $pic_link = $post->link;

            // I am using https for the image source
            $pic_src = str_replace("http://", "https://", $post->images->standard_resolution->url);

            ?>


            <a href="<?php echo($pic_link); ?>" class="object " target="_blank">
                <img class="image" src="<?php echo($pic_src); ?>" alt="<?php echo($pic_text); ?>"/>

                <div class="overlay">
                    <h6><?php echo($pic_created_time); ?></h6>

                    <p><?php echo($pic_text); ?></p>
                </div>
            </a>


        <?php
        }
        wp_reset_postdata(); ?>

        <a href="https://instagram.com/erickolvrs/" target="_blank"><button class="reversed">Follow Me on Instagram<i class="fa fa-angle-right fa-lg"></i></button></a>

    </div>

</section>
<?php get_footer(); ?>