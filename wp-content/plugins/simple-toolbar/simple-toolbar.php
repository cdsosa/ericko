<?php
/*
Plugin Name: Simple Toolbar
Plugin URI: http://www.erick-olivares.com
Description: Plugin for utilizing a simple menu. It's a simple to solution for a cluttered toolbar.
Author: Erick Olivares
Version: 1.0
Author URI: http://www.erick-olivares.com
*/

function wpa85495_enqueue_style(){
    wp_enqueue_style('simple-toolbar', WP_PLUGIN_URL . '/simple-toolbar/simple-toolbar.min.css', false );
    wp_enqueue_style( 'prefix-font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array());
}

add_action( 'wp_enqueue_scripts', 'wpa85495_enqueue_style' );

function simple_toolbar() {

if ( is_user_logged_in() ) {

//current user email
    global $current_user;
    get_currentuserinfo();
    $email = $current_user->user_email;
    $grav_url = "http://www.gravatar.com/avatar/" . md5(strtolower(trim($email))) . "?d=" . urlencode($default) . "&s=" . $size;
    ?>

    <nav class="admin-nav">
        <a href="<?php echo site_url(); ?>/wp-admin/profile.php" target="_blank">
            <li style="background-image: url('<?php echo $grav_url ?>')">
            </li>
        </a>
        <a href="<?php echo site_url(); ?>/wp-admin/" target="_blank">
            <li>
                <i class="fa fa-home"></i>
                <nobr>Admin Dashboard</nobr>
            </li>
        </a>
        <a href="<?php echo site_url(); ?>/wp-admin/post.php?post=<?php the_ID(); ?>&action=edit" target="_blank">
            <li>
                <i class="fa fa-pencil"></i>
                <nobr>Edit Page</nobr>
            </li>
        </a>
        <a href="<?php echo site_url(); ?>/wp-admin/post-new.php" target="_blank">
            <li>
                <i class="fa fa-plus"></i>
                <nobr>New Post</nobr>
            </li>
        </a>
    </nav>

    <?php
    }
}
add_action('wp_footer','simple_toolbar');