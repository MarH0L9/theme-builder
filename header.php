<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EliteShop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'eliteshop' ); ?></a>


	<div class="announcement-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<ul class="announcement-bar__list ">
						<li><i class="bi bi-telephone rounded-circle"></i>
							<a href="123-456-7890" class="text-decoration-none">123-456-7890</a>
						</li>

						<li><i class="bi bi-envelope rounded-circle"></i>
							<a href="mailto:info@eliteshop.com" class="text-decoration-none">info@eliteshop.com</a>
						</li>
					</ul>

				</div>
                <div class="col-md-8 d-flex justify-content-end">
				<ul class="announcement-bar__list">
						<li><i class="bi bi-truck rounded-circle"></i>
							FREE EU SHIPPING ON ORDERS OVER €100
						</li>

						<li><i class="bi bi-clock rounded-circle"></i>
							30 DAYS RETURN POLICY
						</li>
						<li><i class="bi bi-person rounded-circle"></i>
							24/7 CUSTOMER SUPPORT
						</li>
					</ul>

				</div>

			</div>
		</div>
	</div>

	<header id="masthead" class="site-header bg-yellow">

		<div class="site-branding">
		<div class="container pt-2">
			<div class="row align-items-center">

				<div class="col site-header__logo justify-content-center justify-content-md-start pb-2">
					<?php the_custom_logo(); ?>
				</div>
				<div class="col-sm-12 col-md-5"><?php aws_get_search_form( true ); ?></div>
				<div class="col justify-content-md-end align-items-center">
					<a href="<?php echo wc_get_cart_url();?>"><i class="bi bi-bag-dash p-2"></i></a>
				<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
				</div>
				
			</div>	
		</div>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">

			<div class="container d-flex justify-content-center" >
				<div class="row">
					<div class="col-12 d-flex justify-content-center align-items-center">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<i class="bi bi-list"></i>
						<?php esc_html_e( 'Primary Menu', 'eliteshop' ); ?></button>
					</div>

					<div class="col-12" text-center>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</div>
				</div>
			</div>

			
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
