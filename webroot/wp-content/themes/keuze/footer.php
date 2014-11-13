<?php
/**
 * @package WordPress
 * @subpackage Keuze
 */
?>

</div> <!-- .content-holder -->
<footer id="footer">
    <div class="outer-wrapper">
        <div class="left">
            <div class="logo">
                <a href="<?php echo get_home_url(); ?>" class="logo"><img src="<?php echo keuze_theme_url( 'assets/images/logo.png' ); ?>" alt="Keuze.nl logo"></a>
            </div>

            <?php dynamic_sidebar( 'sidebar-footer' ); ?>
        </div>
        <div class="right">
            <h4>Wij werken o.a. samen met:</h4>
            <figure><img src="<?php echo keuze_theme_url( 'assets/images/partners.png' ); ?>" alt="Keuze.nl partners"></figure>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
