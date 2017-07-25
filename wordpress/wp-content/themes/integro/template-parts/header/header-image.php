<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Integro
 * @since 1.0
 * @version 1.0
 */

?>
<div class="container-fluid">
	<div class="single-featured-image-header row featured-image">
		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" class="img-responsive"/>

		<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
		
	</div>
</div><!-- .single-featured-image-header -->