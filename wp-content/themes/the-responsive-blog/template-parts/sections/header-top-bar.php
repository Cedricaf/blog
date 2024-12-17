<?php
// Return if disabled top bar in customizer
if( get_theme_mod( 'tpbr_endis', '1' ) == '0' ) {
	return;
}
?>

<div class="container-fluid topbar" >
	<div class="container topbar-container" >
		<div class="row topbar-row" >

			<div class="col-md-6 topbar-first-col-md-6" >

				<?php
				echo '<p class="topbar-lft-p">';

					if( get_theme_mod( 'tpbr_left_vw', '1' ) == 1 ) {

						// 1 for display current date
						echo '<span class="fa fa-clock-o"></span> ' . esc_html( date("l, d F, Y") );

					} elseif( get_theme_mod( 'tpbr_left_vw', '1' ) == 2 ) {

						// 2 for display loc, phn, mail
						if( get_theme_mod( 'tpbr_loc', __( 'Xyz Street, New York, USA', 'the-responsive-blog' ) ) ) {
							echo '<span class="fa fa-map-marker"></span> ';
							echo esc_html( get_theme_mod( 'tpbr_loc', __( 'Xyz Street, New York, USA', 'the-responsive-blog' ) ) );
						}


						if( get_theme_mod( 'tpbr_phn', '0123456789' ) ) {
							?>
							<a class="the-responsive-blog-sep" href="tel:<?php echo esc_attr( get_theme_mod( 'tpbr_phn', '0123456789' ) ); ?>"><span class="fa fa-phone"></span> <?php echo esc_html( get_theme_mod( 'tpbr_phn', '0123456789' ) ); ?></a>
							<?php 
						}


						if( get_theme_mod( 'tpbr_mail', 'info@example.com' ) ) {
							?>
							<a class="the-responsive-blog-sep" href="mailto:<?php echo esc_attr( get_theme_mod( 'tpbr_mail', 'info@example.com' ) ); ?>"> <span class="fa fa-envelope-o"></span> <?php echo esc_html( get_theme_mod( 'tpbr_mail', 'info@example.com' ) ); ?></a>
							<?php
						}

					} else {
						// 3 selected, nothing to display
					}

				echo '</p>';
				?>

			</div>

			<div class="col-md-6 topbar-last-col-md-6" >
				<?php
				if( has_nav_menu( 'top-bar-menu' ) ) {
					wp_nav_menu( array(
					'theme_location'    => 'top-bar-menu',
					'depth'             =>  1,
					'container'         => 'ul',
					'menu_id' 			=> 'top-bar-menu-id',
					'menu_class'        => 'top-bar-menu-class',
					));
				} else {
				?>
				<ul id="top-bar-menu-id" class="top-bar-menu-class top-bar-menu-class-pr">
					<li class="menu-item"><a href="#"><?php esc_html_e( 'Typography', 'the-responsive-blog' ) ?></a></li>
					<li class="menu-item"><a href="#"><?php esc_html_e( 'Elementor', 'the-responsive-blog' ) ?></a></li>
					<li class="menu-item"><a href="#"><?php esc_html_e( 'WooCommerce', 'the-responsive-blog' ) ?></a></li>

					<?php
					if( current_user_can( 'manage_options' ) ) {
						?>
						<li class="menu-item"><a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>" target="_blank"><?php esc_html_e( 'Edit', 'the-responsive-blog' ); ?></a></li>
						<?php
					}
					?>

				</ul>
				<?php
				}
				?>
			</div>

		</div>
	</div>
</div>
