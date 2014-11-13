<?php
/**
 * @package WordPress
 * @subpackage Keuze
 */

get_header(); ?>

<?php get_template_part( 'breadcrumbs' ); ?>

<section class="main-content">
	<div class="inner">
		<article class="post">
			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>		
		</article>
	</div>
</section>

<?php get_footer(); ?>