<?php

function di_blog_post_thumbnail() {
	if( has_post_thumbnail() ) {
		if( is_singular() ) {
			?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'aligncenter img-fluid' ) ); ?>
			</div>
			<?php
		} else {
			?>
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >
					<?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'aligncenter img-fluid' ) ); ?>
				</a>
			</div>
			<?php
		}
	}
}

// Menu Fallback.
function di_blog_nav_fallback( $args ) {
	extract( $args );
	$output = null;
	if( $container ) {
		$output = '<' . $container;
		if ( $container_id ) {
			$output .= ' id="' . $container_id . '"';
		}
		if ( $container_class ) {
			$output .= ' class="' . $container_class . '"';
		}
		$output .= '>';
	}
	
	$output .= '<ul';
	if( $menu_id ) {
		$output .= ' id="' . $menu_id . '"';
	}
	if( $menu_class ) {
		$output .= ' class="' . $menu_class . '"';
	}
	$output .= '>';
	
	$output .= '<li class="menu-item menu-item-type-custom"><a class="nav-link" href="' . esc_url( home_url( '/' ) ) . '">'. __( 'Home', 'di-blog' ) .'</a></li>';
	
	$output .= '<li class="menu-item menu-item-type-custom"><a class="nav-link" href="#">'. __( 'Blog', 'di-blog' ) .'</a></li>';

	$output .= '<li class="menu-item menu-item-type-custom"><a class="nav-link" href="#">'. __( 'Responsive', 'di-blog' ) .'</a></li>';

	$output .= '<li class="menu-item menu-item-type-custom"><a class="nav-link" href="#">'. __( 'SEO Friendly', 'di-blog' ) .'</a></li>';

	$output .= '<li class="menu-item menu-item-type-custom"><a class="nav-link" href="#">'. __( 'Customizable', 'di-blog' ) .'</a></li>';
	
	if( current_user_can( 'manage_options' ) ) {
		$output .= '<li class="menu-item menu-item-type-custom"><a class="nav-link" href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '" target="_blank">'. __( 'Edit Menu', 'di-blog' ) .'</a></li>';
	}
	
	$output .= '</ul>';
	if( $container ) {
		$output .= '</' . $container . '>';
	}
	echo $output;
}
