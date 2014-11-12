<?php
/**
 * @package WordPress
 * @subpackage Keuze
 */

get_header(); ?>

<section class="contentpage">
	<h1><span><?php the_title(); ?></span></h1>

	<section class="inner">
		<div class="column column-image">
			<figure><?php echo get_the_post_thumbnail( get_the_ID(), 'person-big', array( 'alt' => get_the_title() ) ); ?></figure>
		</div>
		<div class="column column-text">
			<article class="post">
				<?php
					$title = get_the_title();
					$function = get_post_meta( get_the_ID(), 'function', true );
					if( ! empty( $function ) ) {
						$title .= ' <span>— ' . esc_attr( $function ) . '</span>';
					}
				?>
				<h2><?php echo $title; ?></h2>

				<?php the_content(); ?>
			</article>
		</div>
	</section>
</section>

<?php get_footer(); ?>