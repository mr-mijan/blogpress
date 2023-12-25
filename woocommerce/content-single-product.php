<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<!-- start of breadcumb-section -->
	<div class="wpo-breadcumb-area">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="wpo-breadcumb-wrap">
						<h2><?php woocommerce_page_title(); ?></h2>
						<ul>
							<li class="page_nav"><?php woocommerce_breadcrumb(); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end of wpo-breadcumb-section-->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<?php 
			/**
			 * Hook: woocommerce_before_single_product.
			 *
			 * @hooked woocommerce_output_all_notices - 10
			 */
			do_action( 'woocommerce_before_single_product' );

			if ( post_password_required() ) {
				echo get_the_password_form(); // WPCS: XSS ok.
				return;
			}
			?>
			</div>
		</div>
	</div>
	<!-- start wpo-shop-single-section -->
	<section class="wpo-shop-single-section section-padding">
	<div class="container">
		<div class="row">
			<div class="col col-lg-6 col-12">
				<div class="shop-single-slider">
					<div class="slider-for">
						<div><img src="assets/images/shop/shop-single/1.jpg" alt></div>
						<div><img src="assets/images/shop/shop-single/2.jpg" alt></div>
						<div><img src="assets/images/shop/shop-single/5.jpg" alt></div>
						<div><img src="assets/images/shop/shop-single/4.jpg" alt></div>
						<div><img src="assets/images/shop/shop-single/6.jpg" alt></div>
						<div><img src="assets/images/shop/shop-single/2.jpg" alt></div>
						<div><img src="assets/images/shop/shop-single/3.jpg" alt></div>
					</div>
					<div class="slider-nav">
						<div><img src="assets/images/shop/shop-single/thumb/img-1.jpg" alt></div>
						<div><img src="assets/images/shop/shop-single/thumb/img-2.jpg" alt></div>
						<div><img src="assets/images/shop/shop-single/thumb/img-3.jpg" alt></div>
						<div><img src="assets/images/shop/shop-single/thumb/img-4.jpg" alt></div>
						<div><img src="assets/images/shop/shop-single/thumb/img-6.jpg" alt></div>
						<div><img src="assets/images/shop/shop-single/thumb/img-2.jpg" alt></div>
						<div><img src="assets/images/shop/shop-single/thumb/img-3.jpg" alt></div>
					</div>
				</div>
			</div>

			<div class="col col-lg-6 col-12">
				<div class="product-details">
					<h2><?php woocommerce_template_single_title(); ?></h2>
					<div class="product-rt">
						<div class="rating"><?php woocommerce_template_single_rating(); ?></div>
					</div>
					<div class="price"><?php woocommerce_template_single_price(); ?></div>
							<?php woocommerce_template_single_excerpt(); ?>
					<div class="product-option">
						<?php woocommerce_template_single_add_to_cart(); ?>
					</div> <!-- end option -->
					<div class="tg-btm"><?php woocommerce_template_single_meta(); ?></div>
				</div> <!-- end product details -->
			</div> <!-- end col -->
		</div> <!-- end row -->
	</div> <!-- end of container -->
	</section>
<!-- end of wpo-shop-single-section -->
	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
