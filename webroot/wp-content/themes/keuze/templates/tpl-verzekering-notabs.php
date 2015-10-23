<?php
/**
 * @package WordPress
 * @subpackage Keuze
 * Template Name: Verzekering: overzicht (zonder tabs)
 */

get_header(); ?>

<?php get_template_part( 'breadcrumbs' ); ?>

<?php
// Define parent URL
$on_compare_page = true;
$compare_url = get_permalink();
$current_url = parse_url( $compare_url );
$path = array_values( array_filter( explode( '/', $current_url['path'] ) ) );

if( count( $path ) > 1 ) {
	$compare_post = get_page_by_path( '/' . $path[0] . '/', OBJECT, 'page' );
	if( null != $compare_post ) {
		$compare_url = get_permalink( $compare_post->ID );

		$on_compare_page = false;
	}
}

?>

<section class="search-overview <?php echo $on_compare_page ? 'on-compare-page' : ''; ?>">
	<?php get_template_part( 'templates/overview', 'top' ); ?>

	<div class="results">
		<section id="keuzehulp" class="tab">
			<div>
				<div class="comparehow"><a href="/keuze-nl/zo-werkt-keuze-nl/">Lees hier hoe wij onze vergelijking maken</a></div>
				<?php
				$komparu_script = get_field( 'komparu_script' );
				$content = do_shortcode( $komparu_script );

				echo $content;
				?>
			</div>
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
