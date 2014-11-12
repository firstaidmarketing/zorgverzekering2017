<?php
/**
 * @package WordPress
 * @subpackage Keuze
 * Template Name: Verzekeringspagina
 */

get_header(); ?>

	
<section class="contentpage">
	<h1><span><?php the_title(); ?></span></h1>

	<section class="inner">
		<article class="post">
			<?php the_content(); ?>
		</article>
	</section>
</section>

<?php get_footer(); ?>