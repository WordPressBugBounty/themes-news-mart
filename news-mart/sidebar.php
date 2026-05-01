<?php
/**
 * The sidebar containing the main widget area
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package news-mart
 */


if ( is_active_sidebar( 'sidebar-main' ) ) : ?>

<div class="col-lg-4 col-md-6 col-sm-12">

	<div class="sidebar vrsn-four">
	
		<?php // call main sidebar.

		dynamic_sidebar( 'sidebar-main' ); ?>	
		
	</div>
	
</div>	


<?php endif; ?>