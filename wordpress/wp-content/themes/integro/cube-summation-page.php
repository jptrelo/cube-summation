<?php
/**
 * Template Name: Cube Summation
 *
 * @package WordPress
 * @subpackage Integro
 * @since Integro 1.0
 */
get_header(); 
//Default Values
$btnSample = "Sample";
$btnSubmit = "Sample";

?>

<form name="frmCubeSummation" class="form-horizontal" id="frmCubeSummation" method="POST" onsubmit="return false;">
    <div class="row">
        <div class="col-sm-12">
        <?php if ( have_posts() ) :
        		// Start the loop.
				while ( have_posts() ) : the_post(); 
				$btnSample = get_post_meta($post->ID, "btnSample", $single = true); 
				$btnSubmit = get_post_meta($post->ID, "btnSubmit", $single = true); ?>

            <h1><?php the_title(); ?></h1>
            <P><?php the_content(); ?></P>

            <?php 
		            // End the loop.
				endwhile;
				
			endif;
			?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">   
            <textarea name="input" id="input" rows="20" cols="40" class="form-control">
            
            </textarea>
            <input type="hidden" name="wp" value="1">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6" style="text-align:right;">
            <button type="button" id="sampleInputBtn" class="btn btn-default">
            <?php echo $btnSample; ?>
            </button>
            <button type="submit" class="btn btn-success" id="btnSubmit"><?php echo $btnSubmit; ?></button>                            
        </div>
    </div>
</form>


<?php get_footer(); ?>