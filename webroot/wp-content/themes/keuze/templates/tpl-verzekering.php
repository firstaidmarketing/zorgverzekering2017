<?php
/**
 * @package WordPress
 * @subpackage Keuze
 * Template Name: Verzekering: overzicht
 */

get_header(); ?>

<?php get_template_part( 'breadcrumbs' ); ?>

<section class="search-overview" id="overview-tabs">
	<ul class="nav nav-tab">
		<li class="r-tabs-state-active"><a href="#keuzehulp">Keuzehulp</a></li>
		<li><a href="#vergelijken">Vergelijk</a></li>
	</ul>

	<?php get_template_part( 'templates/overview', 'top' ); ?>

	<div class="results">
		<section id="vergelijken" class="tab">
			<div id="kz"><?php the_field( 'komparu_script' ); ?></div>
		</section>

		<section id="keuzehulp" class="tab">
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
	</div>

</section>

<?php get_footer(); ?>