<?php
/**
 * @package WordPress
 * @subpackage Keuze
 */

get_header(); ?>

	
<section class="contentpage">
	<h1><span><?php the_title(); ?></span></h1>

	<section class="inner">
		<?php if(have_posts()) while(have_posts()) : the_post(); ?>

		<article class="post">
			<?php the_content(); ?>
		</article>

		<?php endwhile; ?>
	</section>
</section>

<?php get_footer(); ?>