<?php
/**
 * 
 * @package matatuna
 * @subpackage matatuna
 * @since 0.0.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header id="site-header" class="header-footer-group" role="banner">
		<div class="header-inner section-inner">
			<div class="header-titles-wrapper">
				<button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal"
					data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field"
					aria-expanded="false">
					<span class="toggle-inner">
						<span class="toggle-icon"></span>
						<span class="toggle-text"></span>
					</span>
				</button><!-- .search-toggle -->

				<div class="header-titles">
					<?php
					// Site title or logo.
					matatuna_site_logo();

					// Site description.
					matatuna_site_description();
					?>
				</div><!-- .header-titles -->

				<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"
					data-toggle-body-class="showing-menu-modal" aria-expanded="false"
					data-set-focus=".close-nav-toggle">
					<span class="toggle-inner">
						<span class="toggle-icon">
							<?php // twentytwenty_the_theme_svg( 'ellipsis' ); ?>
						</span>
						<span class="toggle-text"><?php // _e( 'Menu', 'twentytwenty' ); ?></span>
					</span>
				</button><!-- .nav-toggle -->
			</div><!-- .header-titles-wrapper -->

			<div class="header-navigation-wrapper">
				<?php if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) : ?>
				<nav class="primary-menu-wrapper" aria-label="<?php // esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>"
					role="navigation">
					<ul class="primary-menu reset-list-style">
						<?php
						// if ( has_nav_menu( 'primary' ) ) {
						// 	wp_nav_menu(
						// 		array(
						// 			'container'  => '',
						// 			'items_wrap' => '%3$s',
						// 			'theme_location' => 'primary',
						// 		)
						// 	);
						// } elseif ( ! has_nav_menu( 'expanded' ) ) {
						// 	wp_list_pages(
						// 		array(
						// 			'match_menu_classes' => true,
						// 			'show_sub_menu_icons' => true,
						// 			'title_li' => false,
						// 			'walker'   => new TwentyTwenty_Walker_Page(),
						// 		)
						// 	);
						// }
						?>
					</ul>
				</nav><!-- .primary-menu-wrapper -->
				<?php
				endif;

				if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) : ?>
				<div class="header-toggles hide-no-js">
					<?php if ( has_nav_menu( 'expanded' ) ) : ?>
					<div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">
						<button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal"
							data-toggle-body-class="showing-menu-modal" aria-expanded="false"
							data-set-focus=".close-nav-toggle">
							<span class="toggle-inner">
								<span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
								<span class="toggle-icon">
									<?php // twentytwenty_the_theme_svg( 'ellipsis' ); ?>
								</span>
							</span>
						</button><!-- .nav-toggle -->
					</div><!-- .nav-toggle-wrapper -->
					<?php
					endif;

					if ( true === $enable_header_search ) : ?>
					<div class="toggle-wrapper search-toggle-wrapper">
						<button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal"
							data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field"
							aria-expanded="false">
							<span class="toggle-inner">
								<?php // twentytwenty_the_theme_svg( 'search' ); ?>
								<span class="toggle-text"><?php _e( 'Search', 'twentytwenty' ); ?></span>
							</span>
						</button><!-- .search-toggle -->
					</div>
					<?php endif; ?>
				</div><!-- .header-toggles -->
				<?php endif; ?>
			</div><!-- .header-navigation-wrapper -->
		</div><!-- .header-inner -->
	</header><!-- #site-header -->