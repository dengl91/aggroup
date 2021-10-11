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
                        <div class="feature__description">Benefit from our expertise in performance marketing, SEO and tech expertise</div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="feature__item">
                        <div class="feature__img">
                            <img src="<?php echo $theme_path; ?>/assets/img/icons/case.svg" alt="List">
                        </div>
                        <div class="feature__title">List with Alphagreen</div>
                        <div class="feature__description">Be part of Europe’s largest marketplace for holistic health</div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="feature__item">
                        <div class="feature__img">
                            <img src="<?php echo $theme_path; ?>/assets/img/icons/wallet.svg" alt="Sell">
                        </div>
                        <div class="feature__title">Sell my business</div>
                        <div class="feature__description">We acquire high caliber profitable health & wellness brands</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="acquire">
        <div class="container">
            <h2>Alphagreen group is a <i>global acquisition</i><br> and incubation platform with <span>a health</span><br> & <span>wellness focus</span></h2>
            <h4>Scale via our own distribution channels and an extensive external omni-channel network</h4>
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
                                <img src="<?php echo $theme_path; ?>/assets/img/alphagreen.svg" width="215" height="18" alt="Alphagreen">
                                <img src="<?php echo $theme_path; ?>/assets/img/yawns.svg" width="90" height="30" alt="Yawns">
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
                            We scale brands using our expertise in growth hacking, existing tech infrastructure and an experienced team.<br><br>
                            Distribution includes via DTC, alphagreen.io and external marketplaces such as Amazon
                            <div class="feature__logos">
                                <a href="https://nuoptima.com/">
                                    <img src="<?php echo $theme_path; ?>/assets/img/nuoptima.svg" width="140" height="40" alt="Nuoptima">
                                </a>
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