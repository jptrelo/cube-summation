<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Integro
 * @since Integro 1.0
 */
?>

<article class="row" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="col-sm-4 c_h_home_page">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="col-sm-8">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->