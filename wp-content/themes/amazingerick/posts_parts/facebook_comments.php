<?php ?>
<div id="fb-root"></div>
        <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=798820606848558";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>


        <div class="fb-comments" data-href="<?php echo site_url(); ?>/labs/<?php  global $post; $post_slug=$post->post_name; echo $post_slug; ?>" data-width="100%" data-numposts="5" data-colorscheme="light" style="margin-top:80px;">
</div>
<?php
?>