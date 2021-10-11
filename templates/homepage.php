<?php
/**
 * Homepage
 * @package alphagreen
 * Template Name: Homepage
 */
get_header(); ?>

    <?php
        $theme_path = get_stylesheet_directory_uri();
    ?>

    <section class="banner">
		<div class="container">
            <div class="banner__img">
                <img src="<?php echo $theme_path; ?>/assets/img/main-preloader.svg" data-load="<?php echo $theme_path; ?>/assets/img/main-img_animated.svg" width="1180" height="348" alt="Alphagreen Group" draggable="false">
            </div>
            <div class="banner__subtitle">We incubate, acquire and scale next generation brands</div>
            <a href="/" class="btn">Growth with us</a>
		</div>
	</section>

    <section class="green">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="feature__item">
                        <div class="feature__img">
                            <img src="<?php echo $theme_path; ?>/assets/img/icons/grow.svg" alt="Grow">
                        </div>
                        <div class="feature__title">Grow my business</div>
                        <div class="feature__description">Receive premium pricing from Top Tier financial institutions. Pricing from Top Tier financial institutions.</div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="feature__item">
                        <div class="feature__img">
                            <img src="<?php echo $theme_path; ?>/assets/img/icons/case.svg" alt="List">
                        </div>
                        <div class="feature__title">List with Alphagreen</div>
                        <div class="feature__description">With Consulting WP you’ll get no re-quotes, no dealer intervention and fair order execution.</div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="feature__item">
                        <div class="feature__img">
                            <img src="<?php echo $theme_path; ?>/assets/img/icons/wallet.svg" alt="Sell">
                        </div>
                        <div class="feature__title">Sell my business</div>
                        <div class="feature__description">Trade Forex and CFDs with the world’s best trading platforms on your desktop or mobile device.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="acquire">
        <div class="container">
            <h2>Alphagreen group is a <i>global acquisition</i><br> and incubation platform with <span>a health</span><br> & <span>wellness focus</span></h2>
            <h4>Own distribution through the Alphagreen.io marketplace, incubated own D2C brands and external distribution through Amazon. Strong deal pipeline of health and wellness stand alone and Amazon FBA brands to hyperscale revenue supported by our marketing and intelligence</h4>
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="feature__item">
                        <div class="feature__img">
                            <img src="<?php echo $theme_path; ?>/assets/img/icons/build.svg" alt="Build">
                        </div>
                        <div class="feature__title">Build</div>
                        <div class="feature__description">
                            We Incubate brands using our marketplace and other sources to inform us on consumer demand. We automate the sales of products across various eCommerce channels, from DTC, on Alphagreen.io, Amazon, affiliates and other channels
                            <div class="feature__logos">
                                <img src="<?php echo $theme_path; ?>/assets/img/yawns.svg" width="90" height="30" alt="Yawns">
                                <img src="<?php echo $theme_path; ?>/assets/img/petcan.svg" width="96" height="30" alt="Petcan">
                                <img src="<?php echo $theme_path; ?>/assets/img/alphagreen.svg" width="215" height="18" alt="Alphagreen">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="feature__item">
                        <div class="feature__img">
                            <img src="<?php echo $theme_path; ?>/assets/img/icons/bag.svg" alt="Acquire">
                        </div>
                        <div class="feature__title">Acquire</div>
                        <div class="feature__description">
                            We Acquire high caliber profitable health and wellness brands. We use our data and network to qualify existing products to forecast future growth and automate the management of assets once acquired
                            <a href="">Amazon FBA Brands</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="feature__item">
                        <div class="feature__img">
                            <img src="<?php echo $theme_path; ?>/assets/img/icons/user.svg" alt="Scale">
                        </div>
                        <div class="feature__title">Scale</div>
                        <div class="feature__description">
                            We scale brands using our existing expertise in marketing, market intelligence and growth-hacking<br><br>
                            - Own distribution through <b>Alphagreen.io</b> marketplace<br><br>
                            - Direct-to-Consumer through standalone websites<br><br>
                            - External distribution through marketplaces <b>Amazon</b>
                            <div class="feature__logos">
                                <img src="<?php echo $theme_path; ?>/assets/img/nuoptima.svg" width="101" height="26" alt="Nuoptima">
                                <img src="<?php echo $theme_path; ?>/assets/img/amazon.svg" width="92" height="28" alt="Amazon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="green">
        <div class="container">
            <h2>I'm <i>ready</i> to</h2>
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="ready__item">
                        <div class="ready__title">Grow my business</div>
                        <div class="ready__description">We’re building a platform of technology, tools and resources for sellers. See how you can accelerate your brand.</div>
                        <a href="" class="ready__link">Learn more</a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="ready__item">
                        <div class="ready__title">List with Alphagreen</div>
                        <div class="ready__description">We advise sellers on raising funds. Learn about your financing options.</div>
                        <a href="" class="ready__link">Learn more</a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="ready__item">
                        <div class="ready__title">Sell my business</div>
                        <div class="ready__description">We buy great businesses. Understand what your business is worth and whether you’re ready to sell.</div>
                        <a href="" class="ready__link">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>