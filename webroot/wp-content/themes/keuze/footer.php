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

            <div class="column">
                <h4>Column 1</h4>
                <ul>
                    <li><a href="#">iPhone app</a></li>
                    <li><a href="#">iPad app</a></li>
                    <li><a href="#">Android app</a></li>
                </ul>
            </div>
            <div class="column">
                <h4>Column 2</h4>
            </div>
            <div class="column">
                <h4>Column 3</h4>
            </div>
            <div class="column">
                <h4>Column 4</h4>
            </div>
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
