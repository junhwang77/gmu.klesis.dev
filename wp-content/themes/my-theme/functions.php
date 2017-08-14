<?php
add_action( 'wp_enqueue_scripts', 'mat_assets' );
function mat_assets() {
	wp_enqueue_style( 'my-awesome-theme', get_stylesheet_uri() );
}

add_action( 'widgets_init', 'mat_widget_areas' );
function mat_widget_areas() {
	register_sidebar( array(
		'name' => 'Theme Sidebar',
		'id' => 'mat-sidebar',
		'description' => 'The main sidebar shown on the right in our theme',
		'before_widget' => '<li id="1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h3 class="widget-title">',
			'after_title'  => '</h3>',
	));
}

register_nav_menus( array(
	'header-menu' => 'Our Header Menu',
));

function my_tracking_code() {
	echo 'Paste tracking code from Google Analytics here';
}
add_action( 'wp_footer', 'my_tracking_code' );

function our_author_notification( $id, $post ) {
    $author = $post->post_author;
    $name = get_the_author_meta( 'display_name', $author );
    $email = get_the_author_meta( 'user_email', $author );

    $link = get_permalink( $id );

    $message = 'Hello ' . $name . ", \n\n" . "Your artcile <a href='" . $link . "'>" . $post->post_title . "</a> has been published.";
    wp_mail( $email, 'One of your posts has been published', $message );

}
add_action( 'publish_post', 'our_author_notification', 10, 2 );


function our_excerpt_more( $more ) {
	return "there's more...";
}
add_filter( 'excerpt_more', 'our_excerpt_more' );

function in_content_ad( $content ) {
  $ad = '<div class="in-content-ad"><img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=Advertisement&w=250&h=250"></div>';
  return $ad . $content;
}
add_filter( 'the_content', 'in_content_ad' );

function tweet_link( $content ) {
	$url = 'https://twitter.com/intent/tweet';
	$url .= '?url=' . get_permalink();

	$account = get_option( 'twitter_account' );
	if( !empty( $account ) ) {
		$url .= '&via=' . $account;
	}

	return $content . '<p><a href="' . $url . '">Tweet about this</a></p>';
}
add_action( 'the_content', 'tweet_link' );

add_action('admin_menu', 'tweetlink_settings_menu');

function tweetlink_settings_menu() {
	add_menu_page('Tweet Link Settings', 'Tweet Link', 'manage_options', 'tweetlink-settings', 'tweetlink_settings_page', 'dashicons-twitter');
}


add_action( 'admin_init', 'tweetlink_settings' );

function tweetlink_settings() {
	register_setting( 'tweetlink_settings', 'twitter_account' );
}

function tweetlink_settings_page() {
?>
<div class="wrap">
<h2>Tweet Link Settings</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'tweetlink_settings' ); ?>
    <?php do_settings_sections( 'tweetlink_settings' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Twitter Account</th>
        <td><input type="text" name="twitter_account" value="<?php echo esc_attr( get_option('twitter_account') ); ?>" /></td>
        </tr>
    </table>

    <?php submit_button(); ?>

</form>
</div>

<?php
}
