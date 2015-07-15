<?php
/**
 * @package WordPress
 * @subpackage Keuze
 * Template Name: Homepage
 */

get_header(); ?>

<?php
    $insurances = new WP_Query( array(
        'post_type' => 'page',
        'posts_per_page' => -1,
        'orderby' => 'menu_order title',
        'order' => 'ASC',
        'meta_query' => array(
            array(
                'key' => 'is_insurance',
                'value'   => '1',
                'compare' => '='
            )
        )
    ));
?>
<section class="featured">
    <div class="wrapper">
        <div id="form-tabs">
            <ul class="nav">
                <?php 
                    while( $insurances->have_posts() ) : $insurances->the_post();
                        $short_name = get_post_meta( get_the_ID(), 'short_name', true );
                        $short_name_sanitized = esc_attr( sanitize_title( $short_name ) );

                        echo '<li><a href="#tab-' . $short_name_sanitized . '">' . esc_attr( $short_name ) . '</a></li>';
                    endwhile; wp_reset_postdata();
                ?>
            </ul>

            <div class="panels">
                <?php
                    while( $insurances->have_posts() ) : $insurances->the_post();
                        $title = get_post_meta( get_the_ID(), 'homepage_form_title', true );
                        if( empty( $title ) ) {
                            $title = get_the_title() . ' vergelijken';
                        }
                        $short_name = get_post_meta( get_the_ID(), 'short_name', true );
                        $short_name_sanitized = esc_attr( sanitize_title( $short_name ) );
                        ?>
                        <div class="tab" id="tab-<?php echo $short_name_sanitized; ?>">
                            <h2><?php echo esc_attr( $title ); ?></h2>
                            <div class="form">
                                <?php get_template_part( 'templates/forms/' . $short_name_sanitized ); ?>
                            </div>
                            <div class="text">
                                <?php echo wpautop( get_post_meta( get_the_ID(), 'homepage_text_form', true ) ); ?>
                            </div>
                        </div>
                        <?php
                    endwhile; wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>  
</section>

<section class="section section-grey">
    <div class="wrapper home-entries">
        <?php
            $blocks = get_field( 'verzekeringen', 'option' );
            if( ! empty( $blocks ) && is_array( $blocks ) ) :
	            foreach ( $blocks as $block ) {
		            $short_name = get_post_meta( $block['page']->ID, 'short_name', true );
		            $short_name_sanitized = esc_attr( sanitize_title( $short_name ) );
		            ?>
		            <article class="entry">
			            <div class="icon icon-<?php echo $short_name_sanitized; ?>"></div>
			            <h3><a href="#"><?php echo esc_attr( $short_name ); ?></a></h3>
			            <p class="oneliner"><?php echo esc_attr( get_post_meta( $block['page']->ID, 'oneliner', true ) ); ?></p>
			            <a href="<?php echo get_permalink( $block->ID ); ?>" class="button">Vergelijk</a>
		            </article>
		            <?php
                }
            endif;
        ?>
    </div>
</section>

<section class="section section-grey why-keuze">
    <h2>Waarom keuze.nl?</h2>

    <div class="usps">
        <ul>
        <li>Vergelijk en sluit direct af</li>
            <li>Eenvoudige keuzehulp</li>
            <li>Betrouwbare merken</li>
            <li>Bespaar veel geld</li>
        </ul>
    </div>
</section>

<section class="section section-grey">
    <div class="wrapper sidebar sidebar-home">
        <section class="widget widget-recent-news">
            <h4>Blog en nieuws</h4>
            <?php
                $posts = new WP_Query( array(
                    'post_type' => 'post',
                    'posts_per_page' => 3
                ));

                if( $posts->have_posts() ) :

                    echo '<ul>';

                    while( $posts->have_posts() ) : $posts->the_post(); 
                        ?>
                        <li>
                            <div class="side">
                                <span class="day"><?php the_date( 'j' ); ?></span>
                                <span class="month"><?php strtolower( the_date( 'M' ) ); ?></span>
                            </div>
                            <div class="text">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php the_excerpt(); ?>
                            </div>
                        </li>
                        <?php
                    endwhile;

                    echo '</ul>';

                    wp_reset_postdata();
                endif;
            ?>

            <p class="readall"><a href="<?php echo trailingslashit( get_home_url( null, 'nieuws' ) ); ?>" class="button">Alle items</a></p>
        </section>

        <section class="widget">
            <h4>Over Keuze.nl</h4>
	        <?php the_content(); ?>
        </section>
    </div>  
</section>
	
<?php get_footer(); ?>