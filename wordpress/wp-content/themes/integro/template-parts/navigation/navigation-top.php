<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Integro
 * @since 1.0
 * @version 1.0
 */

?>
<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><?php the_custom_logo(); ?></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <?php wp_nav_menu( array(
			'theme_location' => 'top',
			'menu_id'        => 'top-menu',
			'menu_class' => 'nav navbar-nav navbar-right',
		) ); ?>
    </div><!--/.nav-collapse -->
  </div>
</nav>
