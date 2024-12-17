<?php
// Used on social widget.
$s_link_tab = '';
if( get_theme_mod( 's_link_open', '1' ) == '1' ) {
	$s_link_tab = 'target="_blank"';
}

if( get_theme_mod( 'sprofile_link_facebook', 'http://facebook.com' ) ) {
?>
	<a title="<?php esc_attr_e( 'Facebook', 'di-blog' ); ?>" rel="nofollow" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_facebook', 'http://facebook.com' ) ); ?>"><span class="fa fa-facebook bgtoph-icon-clr"></span></a>
<?php
}
?>

<?php
if( get_theme_mod( 'sprofile_link_twitter', 'http://twitter.com' ) ) {
?>
	<a title="<?php esc_attr_e( 'Twitter', 'di-blog' ); ?>" rel="nofollow" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_twitter', 'http://twitter.com' ) ); ?>"><span class="fa fa-twitter bgtoph-icon-clr"></span></a>
<?php
}
?>

<?php
if( get_theme_mod( 'sprofile_link_youtube', 'http://youtube.com' ) ) {
?>
	<a title="<?php esc_attr_e( 'YouTube', 'di-blog' ); ?>" rel="nofollow" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_youtube', 'http://youtube.com' ) ); ?>"><span class="fa fa-youtube bgtoph-icon-clr"></span></a>
<?php
}
?>

<?php
if( get_theme_mod( 'sprofile_link_tiktok' ) ) {
?>
	<a title="<?php esc_attr_e( 'TikTok', 'di-blog' ); ?>" rel="nofollow" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_tiktok' ) ); ?>"><span class="fa fa-svg-tiktok bgtoph-icon-clr">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
			<path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
		</svg>
	</span></a>
<?php
}
?>

<?php
if( get_theme_mod( 'sprofile_link_vk' ) ) {
?>
	<a title="<?php esc_attr_e( 'VK', 'di-blog' ); ?>" rel="nofollow" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_vk' ) ); ?>"><span class="fa fa-vk bgtoph-icon-clr"></span></a>
<?php
}
?>

<?php
if( get_theme_mod( 'sprofile_link_okru' ) ) {
?>
	<a title="<?php esc_attr_e( 'Ok.ru', 'di-blog' ); ?>" rel="nofollow" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_okru' ) ); ?>"><span class="fa fa-odnoklassniki bgtoph-icon-clr"></span></a>
<?php
}
?>

<?php
if( get_theme_mod( 'sprofile_link_linkedin' ) ) {
?>
	<a title="<?php esc_attr_e( 'Linkedin', 'di-blog' ); ?>" rel="nofollow" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_linkedin' ) ); ?>"><span class="fa fa-linkedin bgtoph-icon-clr"></span></a>
<?php
}
?>

<?php
if( get_theme_mod( 'sprofile_link_pinterest' ) ) {
?>
	<a title="<?php esc_attr_e( 'Pinterest', 'di-blog' ); ?>" rel="nofollow" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_pinterest' ) ); ?>"><span class="fa fa-pinterest-p bgtoph-icon-clr"></span></a>
<?php
}
?>

<?php
if( get_theme_mod( 'sprofile_link_instagram' ) ) {
?>
	<a title="<?php esc_attr_e( 'Instagram', 'di-blog' ); ?>" rel="nofollow" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_instagram' ) ); ?>"><span class="fa fa-instagram bgtoph-icon-clr"></span></a>
<?php
}
?>

<?php
if( get_theme_mod( 'sprofile_link_telegram' ) ) {
?>
	<a title="<?php esc_attr_e( 'Telegram', 'di-blog' ); ?>" rel="nofollow" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_telegram' ) ); ?>"><span class="fa fa-telegram bgtoph-icon-clr"></span></a>
<?php
}
?>

<?php
if( get_theme_mod( 'sprofile_link_snapchat' ) ) {
?>
	<a title="<?php esc_attr_e( 'Snapchat', 'di-blog' ); ?>" rel="nofollow" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_snapchat' ) ); ?>"><span class="fa fa-snapchat bgtoph-icon-clr"></span></a>
<?php
}
?>

<?php
if( get_theme_mod( 'sprofile_link_flickr' ) ) {
?>
	<a title="<?php esc_attr_e( 'Flickr', 'di-blog' ); ?>" rel="nofollow" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_flickr' ) ); ?>"><span class="fa fa-flickr bgtoph-icon-clr"></span></a>
<?php
}
?>

<?php
if( get_theme_mod( 'sprofile_link_reddit' ) ) {
?>
	<a title="<?php esc_attr_e( 'Reddit', 'di-blog' ); ?>" rel="nofollow" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_reddit' ) ); ?>"><span class="fa fa-reddit bgtoph-icon-clr"></span></a>
<?php
}
?>

<?php
if( get_theme_mod( 'sprofile_link_tumblr' ) ) {
?>
	<a title="<?php esc_attr_e( 'Tumblr', 'di-blog' ); ?>" rel="nofollow" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_tumblr' ) ); ?>"><span class="fa fa-tumblr bgtoph-icon-clr"></span></a>
<?php
}
?>

<?php
if( get_theme_mod( 'sprofile_link_yelp' ) ) {
?>
	<a title="<?php esc_attr_e( 'Yelp', 'di-blog' ); ?>" rel="nofollow" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_yelp' ) ); ?>"><span class="fa fa-yelp bgtoph-icon-clr"></span></a>
<?php
}
?>

<?php
if( get_theme_mod( 'sprofile_link_whatsappno' ) ) {
?>
	<a class="whatsapp-large" rel="nofollow" title="<?php esc_attr_e( 'WhatsApp', 'di-blog' ); ?>" <?php echo $s_link_tab; ?> href="https://web.whatsapp.com/send?text=&phone=<?php echo esc_attr( get_theme_mod( 'sprofile_link_whatsappno' ) ); ?>&abid=<?php echo esc_attr( get_theme_mod( 'sprofile_link_whatsappno' ) ); ?>"><span class="fa fa-whatsapp bgtoph-icon-clr"></span></a>

	<a class="whatsapp-small" rel="nofollow" title="<?php esc_attr_e( 'WhatsApp', 'di-blog' ); ?>" <?php echo $s_link_tab; ?> href="whatsapp://send?text=&phone=<?php echo esc_attr( get_theme_mod( 'sprofile_link_whatsappno' ) ); ?>&abid=<?php echo esc_attr( get_theme_mod( 'sprofile_link_whatsappno' ) ); ?>"><span class="fa fa-whatsapp bgtoph-icon-clr"></span></a>
<?php
}
?>

<?php
if( get_theme_mod( 'sprofile_link_skype' ) ) {
?>
	<a title="<?php esc_attr_e( 'Skype', 'di-blog' ); ?>" rel="nofollow" <?php echo $s_link_tab; ?> href="skype:<?php echo esc_attr( get_theme_mod( 'sprofile_link_skype' ) ); ?>?add"><span class="fa fa-skype bgtoph-icon-clr"></span></a>
<?php
}
