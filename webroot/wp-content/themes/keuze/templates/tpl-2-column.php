<?php
/**
 * @package WordPress
 * @subpackage Keuze
 * Template Name: Verzekering: menu links
 */

get_header(); ?>

<?php get_template_part( 'breadcrumbs' ); ?>

<section class="search-overview">
	
	<?php get_template_part( 'templates/overview', 'top' ); ?>

	<section class="results">
		<aside class="left">
			<?php get_sidebar('verzekering-left'); ?>
		</aside>
		<div class="right">
			<div class="inner">
				<article class="post" itemscope itemtype="http://schema.org/Article">
					<h1 itemprop="name"><?php echo keuze_get_title( get_the_ID() ); ?></h1>
					<?php the_content(); ?>
				</article>
			</div>
		</div>
	</section>

</section>

<?php get_footer(); ?>