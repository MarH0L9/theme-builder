<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EliteShop
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="bg-primary text-white pt-5 pb-5 text-center justify-content-center">

			
			<div class="container">
			<div class="row">
				<div class="col-2">
						<h5>Information</h5>
						<ul class="list-unstyled">
							<li><a href="#" class="text-white">About us</a></li>
							<li><a href="#" class="text-white">Contact us</a></li>
							<li><a href="#" class="text-white">Terms & Conditions</a></li>
							<li><a href="#" class="text-white">Privacy Policy</a></li>
						</ul>
				</div>
				<div class="col-2">
					<h5>My account</h5>
					<?php dynamic_sidebar('footer-widget-col-one');?>
						
				</div>
				<div class="col-md-4 ms-auto">
					<h5>Customer service</h5>
				</div>
			</div>
			
			</div>
			</div>
			</div>
			<div class="row bg-yellow">
					<div class="col d-flex justify-content-center">
						<a href="#" class="text-black"><i class="bi bi-facebook fs-3"></i></a>
						<a href="#" class="text-black"><i class="bi bi-instagram fs-3 ms-3"></i></a>
						<a href="#" class="text-black"><i class="bi bi-twitter fs-3 ms-3"></i></a>
					</div>
				</div>
			<div class="pt-2 pb-2 ">
				<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col">
						<p>&copy; <?php bloginfo('name');?> <?php echo date('Y');?> / Created by <a>Marco</a></p>
					</div>
					<div class="col h-25 d-inline-block text-end">
						<img src="<?php echo get_template_directory_uri();?>/img/PM.png" alt="..." class="img-fluid" loading="lazy">
					</div>
				</div>
				
				
				</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
