<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EliteShop
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="container pb-5 pt-4">
			<div id="carouselExampleDark" class="carousel carousel-dark slide overflow-hidden rounded">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
					
				</div>
					<div class="carousel-inner">
						<div class="carousel-item active" data-bs-interval="10000">
							<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/slider/slide1.jpg" class="d-block w-100" alt="..."></a>				

							<div class="carousel-caption d-none d-md-block">
								<h5>Best equipment for your trainings!</h5>
								<p>Some representative placeholder content for the first slide.</p>
								<button type="button" class="btn btn-primary">Shop now</button>
							</div>
						</div>
						<div class="carousel-item" data-bs-interval="2000">
							<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/slider/slide2.jpg" class="d-block w-100" alt="..."></a>					
							<div class="carousel-caption d-none d-md-block">
								<h5>Second slide label</h5>
								<p>Some representative placeholder content for the second slide.</p>
								<button type="button" class="btn btn-yellow">Shop now</button>
							</div>
						</div>			
					
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</section>

		<section class="container">
			
			<h1 class="text-center pt-5">New arrivals</h1>
			<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel erat et nunc viverra aliquet. Aliquam in felis sit amet augue.</p>
			
			<div class="pt-5 pb-5">
				<?php echo do_shortcode('[products columns=4 limit=4]'); ?>
			</div>

		</section>


		<section class="categories pt-5 pb-5">
			<div class="container">

				<h1 class="text-center">Categories</h1>
				<p class="text-center">We offer a number of high quality products in different categories</p>
			

			<div class="row cat pt-5">

			<div class="categories__col col-md-4 col-sm-12">
				<div class="position-relative">
					<a href="#" class="col-md-12 w-100 h-100 d-block rounded overflow-hidden">
						<img src="<?php echo get_template_directory_uri(); ?>/img/categories/1.jpg" alt="..." class="w-100" load="lazy">
						<h3 class="position-absolute bottom-0 start-0 end-0 p-3 mb-0 text-center bg-yellow  text-black">Men apparel</h3>
					</a>
				</div>
			</div>
			
			<div class="categories__col col-md-4 col-sm-12">
				<div class="position-relative">
					<a href="#" class="col-md-12 w-100 h-100 d-block rounded overflow-hidden">
						<img src="<?php echo get_template_directory_uri(); ?>/img/categories/2.jpg" alt="..." class="w-100" load="lazy">
						<h3 class="position-absolute bottom-0 start-0 end-0 p-3 mb-0 text-center bg-yellow text-black">Women apparel</h3>
					</a>
				</div>
			</div>

			<div class="categories__col col-md-4 col-sm-12">
				<div class="position-relative">
					<a href="#" class="col-md-12 w-100 h-100 d-block rounded overflow-hidden">
						<img src="<?php echo get_template_directory_uri(); ?>/img/categories/3.jpg" alt="..." class="w-100" load="lazy">
						<h3 class="position-absolute bottom-0 start-0 end-0 p-3 mb-0 text-center bg-yellow text-black">Accesories</h3>
					</a>
				</div>
			</div>
			</div>
		</section>

		<section class="container">
			
			<h1 class="text-center pt-5">Special offers</h1>
			<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel erat et nunc viverra aliquet. Aliquam in felis sit amet augue.</p>
			
			<div class="pt-5 pb-5">
				<?php echo do_shortcode('[sale_products columns=4 limit=4]'); ?>
			</div>

		</section>

	</main><!-- #main -->
	
<?php

get_footer();
