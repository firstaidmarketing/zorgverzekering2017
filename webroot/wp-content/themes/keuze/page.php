<?php
/**
 * @package WordPress
 * @subpackage Keuze
 */

get_header(); ?>

<?php get_template_part( 'breadcrumbs' ); ?>

<section class="main-content">
	<div class="inner">
		<div class="content-wrapper">
			<article class="post" itemscope itemtype="http://schema.org/Article">
				<h1 itemprop="name"><?php the_title(); ?></h1>

				<?php the_content(); ?>
			</article>
		</div>
	</div>
</section>

<?php get_footer(); ?>