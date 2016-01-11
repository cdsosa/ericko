<?php
$tw_at = get_field('twitter_access_token', 'option');
$tw_ats = get_field('twitter_access_token_secret', 'option');
$tw_ck = get_field('twitter_consumer_key' , 'option');
$tw_s = get_field('twitter_consumer_secret' , 'option');
?>
<section class="twitter">
    <div class="wrapper">

        <h2>Twitter Feed</h2>

        <?php require_once('TwitterAPIExchange.php');

        $settings = array(
            'oauth_access_token' =>  $tw_at ,
            'oauth_access_token_secret' => $tw_ats,
            'consumer_key' => $tw_ck,
            'consumer_secret' => $tw_s
        );

        $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
        $requestMethod = "GET";
        if (isset($_GET['user']))  {$user = $_GET['user'];}  else {$user  = "ericksempire";}
        if (isset($_GET['count'])) {$count = $_GET['count'];} else {$count = 3;}

        $getfield = "?screen_name=$user&count=$count";
        $twitter = new TwitterAPIExchange($settings);
        $string = json_decode($twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest(),$assoc = TRUE);

        $media_url = $result->entities->media[0]->media_url;

        if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
        foreach($string as $items)

        {

            $datetime = new DateTime($items['created_at']);
            $datetime->setTimezone(new DateTimeZone('America/Denver'));


            echo "<div class='col-33'>"; ?>

<!--            <a href="https://twitter.com/EricksEmpire" class="head" target="_blank">
                <img src="<?php /*echo $items['user']['profile_image_url'] */?>" />
                <h5>@<?php /*echo $items['user']['screen_name'] */?></h5>
            </a>-->

            <p><?php echo $items['text'] ?></p>
            <small><?php echo $datetime->format('M dS Y - g:ia'); ?></small>

            <?php echo "</div>";
        }

        ?>
        <a href="https://twitter.com/EricksEmpire" target="_blank" rel="nofollow">
            <button class="reversed">Follow me on Twitter<i class="fa fa-twitter fa-lg"></i> </button>
        </a>

    </div>
</section>