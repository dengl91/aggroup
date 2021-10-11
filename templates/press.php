<?php
/**
 * Press
 * @package alphagreen
 * Template Name: Press
 */
get_header(); ?>

<?php
        $theme_path = get_stylesheet_directory_uri();
    ?>

<section class="green">
    <div class="container">
        <h1>Alphagreen <i>Press</i> Centre</h1>
        <div class="contact__row">
            <div class="col-md-6 col-12">
                <div class="contact__title">Git test:</div>
                <div class="contact__text">
                    <a href="mailto:alphagreen@shift6.org">alphagreen@shift6.org</a>
                    <a href="mailto:julie@alphagreen.io">julie@alphagreen.io</a>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="contact__socials">
                    <a href="" class="contact__social twitter" target="_blank">Twitter</a>
                    <a href="" class="contact__social medium" target="_blank">Medium</a>
                    <a href="" class="contact__social facebook" target="_blank">Facebook</a>
                    <a href="" class="contact__social instagram" target="_blank">Twitter</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row content__row mx-auto">
            <div class="col-md-6 col-12">
                <div class="content__text">With an abundance of products and brands on the market, it is our
                    responsibility to ensure the health and safety of our community. Alphagreen is dedicated to
                    producing the most reliable and current information on CBD and Cannabis, consolidating hours of
                    fact-finding into a digestible format that is easy to follow, whether you’re a novice or a
                    specialist.</div>
            </div>
            <div class="col-md-6 col-12">
                <img src="<?php echo $theme_path; ?>/assets/img/pills.jpg" class="content__img" alt="Pills">
            </div>
            <div class="col-md-6 col-12">
                <img src="<?php echo $theme_path; ?>/assets/img/drops.jpg" class="content__img" alt="Drops">
            </div>
            <div class="col-md-6 col-12">
                <div class="content__text">Our Think Tank is backed by the voices of our trusted partners who have
                    accumulated years of experience and expertise in their respective fields of medicine, academia,
                    research, politics, and also personal experience with cannabinoids and alternative healthcare.</div>
            </div>
            <div class="col-md-6 col-12">
                <div class="content__text">Our vision is not only to provide cutting-edge content, but also to bring
                    together our Thought Leaders to share their voices and opinions that will allow us to positively
                    shape the future of the cannabis industry together.</div>
            </div>
            <div class="col-md-6 col-12">
                <img src="<?php echo $theme_path; ?>/assets/img/bottle.jpg" class="content__img" alt="Pills">
            </div>
            <div class="col-md-6 col-12">
                <img src="<?php echo $theme_path; ?>/assets/img/hand.jpg" class="content__img" alt="Drops">
            </div>
            <div class="col-md-6 col-12">
                <div class="content__text">We take great pride in being at the forefront of innovation thanks to our
                    reliable industry network and in-house research team. We act in compliance with regulatory bodies in
                    order to provide the best guidance and advice to consumers when it comes to their health and
                    wellbeing. Our committed Thought Leaders stand with us so that we may help those in need, and also
                    to support this industry as it continues to develop and grow.</div>
            </div>
        </div>
    </div>
</section>

<section>
    <h3>Featured in</h3>
    <div class="glide">
        <div class="glide__track" data-glide-el="track">
            <div class="glide__slides">
                <?php
                    $images = get_field( 'featured_in' );
                    if ( $images ) :
                        foreach ( $images as $image ) :
                    ?>
                <div class="featured__slide glide__slide">
                    <img src="<?php echo $image; ?>" alt="press">
                </div>
                <?php
                        endforeach;
                    endif;
                    ?>
            </div>
            <div data-glide-el="controls">
                <div data-glide-dir=">" class="glide__next"></div>
                <div data-glide-dir="<" class="glide__prev"></div>
            </div>
        </div>
    </div>
</section>

<section class="green">
    <div class="container">
        <h2>Using our <i>logo</i></h2>
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="feature__item">
                    <div class="feature__img">
                        <img src="<?php echo $theme_path; ?>/assets/img/icons/download.svg" alt="Download">
                    </div>
                    <div class="feature__description">Please download our logos and use them any time you’d like to
                        write about us.</div>

                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="feature__item">
                    <div class="feature__img">
                        <img src="<?php echo $theme_path; ?>/assets/img/icons/pen.svg" alt="Pen">
                    </div>
                    <div class="feature__description">Our team has put a lot of time and thought into designing these
                        logos, and we ask that you don’t make any alterations to these files.</div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="feature__item">
                    <div class="feature__img">
                        <img src="<?php echo $theme_path; ?>/assets/img/icons/resize.svg" alt="Resize">
                    </div>
                    <div class="feature__description">You can resize them as needed, but please refrain from cropping or
                        other modifications.</div>
                </div>
            </div>
        </div>
        <div class="row logos">
            <div class="col-md-4 col-12">
                <div class="logo__item">
                    <div class="logo-preview"> <img src="<?php echo $theme_path; ?>/assets/img/logo.svg"></div>
                    <div class="logo-download">
                        <a href="#">72 dpi <img src="<?php echo $theme_path; ?>/assets/img/icons/arrow-down.svg"></a>
                        <a href="#">300 dpi <img src="<?php echo $theme_path; ?>/assets/img/icons/arrow-down.svg"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="logo__item">
                    <div class="logo-preview"> <img src="<?php echo $theme_path; ?>/assets/img/logo.svg"></div>
                    <div class="logo-download">
                        <a href="#">72 dpi <img src="<?php echo $theme_path; ?>/assets/img/icons/arrow-down.svg"></a>
                        <a href="#">300 dpi <img src="<?php echo $theme_path; ?>/assets/img/icons/arrow-down.svg"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="logo__item">
                    <div class="logo-preview"> <img src="<?php echo $theme_path; ?>/assets/img/logo.svg"></div>
                    <div class="logo-download">
                        <a href="#">72 dpi <img src="<?php echo $theme_path; ?>/assets/img/icons/arrow-down.svg"></a>
                        <a href="#">300 dpi <img src="<?php echo $theme_path; ?>/assets/img/icons/arrow-down.svg"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <h2>Using our <i>slogan</i></h2>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="slogan__item">
                    <p class="version-title">Short Version</p>
                    <p class="version-text">“The leading marketplace for CBD, Alphagreen”.</p>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="slogan__item">
                    <p class="version-title">Short Version</p>
                    <p class="version-text">“Alphagreen is the leading marketplace for CBD and alternative healthcare
                        products”</p>
                </div>
            </div>
            <div class="col-md-12 col-12">
                <div class="slogan__item">
                    <p class="version-title">Short Version</p>
                    <p class="version-text">“Alphagreen is the leading marketplace for CBD and alternative healthcare
                        products, as well as providing an end-to-end scalable
                        tech-solution for brands”</p>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="">
    <div class="container">
        <h2> Our<i> innovations incubator</i></h2>
        <div class="row content__row mx-auto">
            <div class="col-md-6 col-12">
                <div class="content__text">With an abundance of products and brands on the market, it is our
                    responsibility to ensure the health and safety of our community. Alphagreen is dedicated to
                    producing the most reliable and current information on CBD and Cannabis, consolidating hours of
                    fact-finding into a digestible format that is easy to follow, whether you’re a novice or a
                    specialist.</div>
            </div>
            <div class="col-md-6 col-12">
                <img src="<?php echo $theme_path; ?>/assets/img/pills.jpg" class="content__img" alt="Pills">
            </div>
            <div class="col-md-6 col-12">
                <img src="<?php echo $theme_path; ?>/assets/img/drops.jpg" class="content__img" alt="Drops">
            </div>
            <div class="col-md-6 col-12">
                <div class="content__text">Our Think Tank is backed by the voices of our trusted partners who have
                    accumulated years of experience and expertise in their respective fields of medicine, academia,
                    research, politics, and also personal experience with cannabinoids and alternative healthcare.</div>
            </div>

        </div>

    </div>
</section>

<section>
    <div class="container">
        <h2> Our <i>specialists</i></h2>
        <div class="glide glide-team">
            <div class="glide__track" data-glide-el="track">
                <div class="glide__slides">
                    <div class="team__item">
                            <div class="team__img">
                                <img src="<?php echo $theme_path; ?>/assets/img/team-1.png" alt="Alexej Pikovsky">
                            </div>
                            <div class="team__title">Alexej Pikovsky</div>
                            <div class="team__position">CEO / Founder</div>
                        </div>
                        <div class="team__item">
                            <div class="team__img">
                                <img src="<?php echo $theme_path; ?>/assets/img/team-1.png" alt="Alexej Pikovsky">
                            </div>
                            <div class="team__title">Alexej Pikovsky</div>
                            <div class="team__position">CEO / Founder</div>
                        </div>
                        <div class="team__item">
                            <div class="team__img">
                                <img src="<?php echo $theme_path; ?>/assets/img/team-1.png" alt="Alexej Pikovsky">
                            </div>
                            <div class="team__title">Alexej Pikovsky</div>
                            <div class="team__position">CEO / Founder</div>
                        </div>
                        <div class="team__item">
                            <div class="team__img">
                                <img src="<?php echo $theme_path; ?>/assets/img/team-1.png" alt="Alexej Pikovsky">
                            </div>
                            <div class="team__title">Alexej Pikovsky</div>
                            <div class="team__position">CEO / Founder</div>
                        </div>
                        <div class="team__item">
                            <div class="team__img">
                                <img src="<?php echo $theme_path; ?>/assets/img/team-1.png" alt="Alexej Pikovsky">
                            </div>
                            <div class="team__title">Alexej Pikovsky</div>
                            <div class="team__position">CEO / Founder</div>
                        </div>
                    </div>
                    <div data-glide-el="controls">
                        <div data-glide-dir=">" class="glide__next"></div>
                        <div data-glide-dir="<" class="glide__prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <h3>Key studies and guides</h3>
    <div class="row">
        <div class="col-md-4 col-12 bottom-menu">
            <h3>blog</h3>
            <ul>
                <li><a href="">CBD and Health: Testimonials for the multi-purpose ‘supplement’</a></li>
                <li><a href="">Alternative Funding Routes for CBD Companies</a></li>
                <li><a href="">An Overview of the Top Studies and Clinical Trials for CBD</a></li>
            </ul>
        </div>
        <div class="col-md-4 col-12 bottom-menu">
            <h3>Academy</h3>
            <ul>
                <li><a href="">Expand Your Knowledge of CBD Oil</a></li>
                <li><a href="">What is CBD oil and its juridical status?</a></li>
                <li><a href="">What is CBD oil and its juridical status?</a></li>
            </ul>
        </div>
        <div class="col-md-4 col-12 bottom-menu">
            <h3>UK’s Biggest CBD Survey </h3>
            <ul>
                <li><a href="">Survey Analysis</a></li>
                <li><a href="">CBD and Health: Testimonials for the multi-purpose ‘supplement’</a></li>
            </ul>
        </div>
   
    </div>

    </div>
</section>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
<script>
    let glide = new Glide('.glide', {
        type: 'carousel',
        perView: 5,
        gap: 30,
        breakpoints: {
            768: {
                perView: 2
            }
        }
    });
    glide.mount();

    let glide_team = new Glide('.glide-team', {
        type: 'carousel',
        perView: 3,
        gap: 30,
        breakpoints: {
            768: {
                perView: 2
            }
        }
    });
    glide_team.mount();
</script>

<?php get_footer(); ?>