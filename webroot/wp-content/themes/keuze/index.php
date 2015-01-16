<?php
/**
 * @package WordPress
 * @subpackage Keuze
 */

get_header(); ?>

<?php get_template_part( 'breadcrumbs' ); ?>

<section class="main-content">
	<div class="inner">
		<h1>Nieuws</h1>

		<div class="content-wrapper">
			<?php while( have_posts() ) : the_post(); ?>
			<article class="post" itemscope itemtype="http://schema.org/Article">
				<h2 itemprop="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_excerpt(); ?>
			</article>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>