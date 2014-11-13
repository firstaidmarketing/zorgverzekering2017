<?php
/**
 * @package WordPress
 * @subpackage Keuze
 * Template Name: Verzekering: vragenlijst
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

					<?php
						if( have_rows( 'question_set' ) ) :

							while ( have_rows( 'question_set' ) ) : the_row();
								echo '<div class="accordion question-set">';								
								echo '<h3>' . get_sub_field('title') . '</h3>';
								echo '<ol class="questions">';

								while ( have_rows( 'questions' ) ) : the_row();

									$question = get_sub_field( 'question' );
									$question_sanitized = sanitize_title( $question );
									echo '<li>';
									echo '<a href="#' . $question_sanitized . '">' . $question . '</a>';
									echo '<div class="answer" id="' . $question_sanitized . '">' . get_sub_field('answer') . '</div>';
									echo '</li>';

								endwhile;

								echo '</ol>';
								echo '</div>';
							endwhile;

						endif;
					?>
				</article>
			</div>
		</div>
	</section>

</section>

<?php get_footer(); ?>