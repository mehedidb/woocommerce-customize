// remove previouse image thumb.(reff on content-product.php)
<?php remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);



//* Add gallery thumbs to woocommerce shop page refference https://www.wpstud.io/product-gallery-images-shop-page/
<?php
add_action('woocommerce_shop_loop_item_title','wps_add_extra_product_thumbs', 5);
function wps_add_extra_product_thumbs() {

	if ( is_shop() ) {

		global $product;

		$attachment_ids = $product->get_gallery_attachment_ids();

		echo '<div class="product-thumbs">';

		foreach( array_slice( $attachment_ids, 0,3 ) as $attachment_id ) {

		  	$thumbnail_url = wp_get_attachment_image_src( $attachment_id,'default' );

		  	echo '<img class="thumb" src="' . $thumbnail_url[0] . '">';

		}

		echo '</div>';
	
	}

}



//* or you can use the code.
add_action('woocommerce_shop_loop_item_title','wps_add_extra_product_thumbs', 5);
function wps_add_extra_product_thumbs() {

	if ( is_shop() ) {

		global $product;

		$attachment_ids = $product->get_gallery_attachment_ids(); ?>

		<div class="product-thumbs">

		<?php foreach( $attachment_ids as $attachment_id ) :

		  	$thumbnail_url = wp_get_attachment_image_src( $attachment_id,'default' ); ?>
		  	<img class="thumb" src="<?php echo $thumbnail_url[0]; ?>">

		<?php endforeach; ?>

		</div>

		<?php	
	}

}
