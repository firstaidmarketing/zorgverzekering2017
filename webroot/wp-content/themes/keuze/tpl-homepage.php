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
            while( $insurances->have_posts() ) : $insurances->the_post();
                $short_name = get_post_meta( get_the_ID(), 'short_name', true );
                $short_name_sanitized = esc_attr( sanitize_title( $short_name ) );

                ?>
                <article class="entry">
                    <div class="icon icon-<?php echo $short_name_sanitized; ?>"></div>
                    <h3><a href="#"><?php echo esc_attr( $short_name ); ?></a></h3>
                    <p class="oneliner"><?php echo esc_attr( get_post_meta( get_the_ID(), 'oneliner', true ) ); ?></p>
                    <a href="<?php the_permalink(); ?>" class="button">Vergelijk</a>
                </article>
                <?php
            endwhile; wp_reset_postdata();
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

            <p class="readall"><a href="#" class="button">Alle items</a></p>
        </section>

        <section class="widget widget-recent-reviews">
            <h4>Laatste beoordelingen</h4>
            <ul>
                <li>
                    <div class="side">
                        4,4
                    </div>
                    <div class="text">
                        <h3><a href="#">Complex en misleidend</a></h3>
                        <p>De goedkopere Verrichtingen Polissen van Stadholland en DSW Zorgverzekeringen vergoeden, net als voo.. <a href="#">lees meer</a></p>
                    </div>
                </li>
                <li>
                    <div class="side">
                        5,0
                    </div>
                    <div class="text">
                        <h3><a href="#">Complex en misleidend</a></h3>
                        <p>De goedkopere Verrichtingen Polissen van Stadholland en DSW Zorgverzekeringen vergoeden, net als voo.. <a href="#">lees meer</a></p>
                    </div>
                </li>
                <li>
                    <div class="side">
                        2,0
                    </div>
                    <div class="text">
                        <h3><a href="#">Complex en misleidend</a></h3>
                        <p>De goedkopere Verrichtingen Polissen van Stadholland en DSW Zorgverzekeringen vergoeden, net als voo.. <a href="#">lees meer</a></p>
                    </div>
                </li>
            </ul>

            <p class="readall"><a href="#" class="button">Alle beoordelingen</a></p>
        </section>

        <article class="content">
            <h2>Over keuze.nl</h2>
            <p>
                Ben je actief op zoek naar een dienst of product en struikel je over het ruime aanbod aan vergelijkingssites? Welke vergelijker geeft betrouwbaar en compleet advies? Het antwoord op deze vragen is Keuze.nl met heldere, overzichtelijke en complete informatie over een ruim aanbod van producten en diensten. Zodat je binnen een paar stappen een goede keuze kunt maken!
            </p>
            <p>
                Op Keuze.nl heb je alle producten en diensten die je wilt vergelijken onder één dak. Geen idee hoe je een product of dienst moet vergelijken, of waar je precies op moet letten? Ook daar helpen we je bij.
            </p>
            <h3>In een paar stappen</h3>
            <p>
                Op Keuze.nl wordt het vergelijken van producten en diensten een stuk eenvoudiger. In slechts een paar simpele stappen weten wij waar je naar op zoek bent. Of je nu op zoek bent naar een autoverzekering, of de stap wilt maken naar een goedkopere energiemaatschappij; Keuze.nl laat je de resultaten zien die het best aansluiten op jouw voorkeuren. 
            </p>
            <h3>Keuzehulp</h3>
            <p>
                Schakel onze hulp in tijdens het vergelijken, wij proberen het je zo gemakkelijk mogelijk te maken. Wij bieden keuzehulp, een begrippenlijst met alle belangrijke termen én een overzicht van de meest gestelde vragen
            </p>
        </article>
    </div>  
</section>
	
<?php get_footer(); ?>