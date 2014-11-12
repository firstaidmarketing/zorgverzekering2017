<?php
/**
 * @package WordPress
 * @subpackage Keuze
 */

get_header(); ?>

	
<section class="contentpage">
	<h1><span><?php _e('Page not found (404 error)', 'keuze'); ?></span></h1>

	<section class="inner">
		<article class="post">
			<h2><?php _e('Unfortunetaly this page doesn\'t exist', 'keuze' ); ?></h2>

			<p><?php printf( __( 'Go back to the %shomepage%s.', 'keuze' ), '<a href="' . get_home_url() . '">', '</a>' ); ?></p>
		</article>
	</section>
</section>

<?php get_footer(); ?>