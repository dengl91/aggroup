<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package alphagreen
 */

?>

    <?php
        $theme_path = get_stylesheet_directory_uri();
    ?>

	<footer class="footer">
		<div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="footer__logo">
                        <img src="<?php echo $theme_path; ?>/assets/img/logo-w.svg" width="280" height="24" alt="Alphagreen">
                    </div>
                    <div class="footer__text">
                        234 Shelton Street,<br>
                        London, 125-492
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="footer__title">About Us</div>
                    <a href="" class="footer__link">Carreers</a>
                    <a href="" class="footer__link">Our Team</a>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="footer__title">How we work</div>
                    <a href="" class="footer__link">Build</a>
                    <a href="" class="footer__link">Acquire</a>
                    <a href="" class="footer__link">Scale</a>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="footer__title">Our Sectors</div>
                    <a href="" class="footer__link">Pain</a>
                    <a href="" class="footer__link">Sleep</a>
                    <a href="" class="footer__link">Anxiety</a>
                </div>
            </div>
            <div class="footer__copyright">Copyrights 2021 @ Yawns</div>
        </div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
