<?php
/**
 * Our sectors
 * @package alphagreen
 * Template Name: Our sectors
 */
get_header(); ?>

    <?php
        $theme_path = get_stylesheet_directory_uri();
    ?>

    <section>
        <div class="container">
            <h1>Key <i>health problems</i> in modern society</h1>
            <h4>A large of global population suffers from pain, sleep or axiety. Next generation brands and ingredients are constanly developed, but there is a lack of awareness, education and access to high quality products</h4>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mb-md-4">
                    <div class="sector__item" data-bg="<?php echo $theme_path; ?>/assets/img/sector1-bg.jpg">
                        <div class="sector__title">Pain</div>
                        <div class="sector__subtitle">Tager products</div>
                        <div class="sector__description">Electriv heat pads, muscle stimulators, pain relief, back stretcher, knee replacement support, deep tissue massger, compression sleeve support, heating pads, pain relief cremes, muscle and joint gels, tiger balms, plasters, patches</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-md-4">
                    <div class="sector__item" data-bg="<?php echo $theme_path; ?>/assets/img/sector2-bg.jpg">
                        <div class="sector__title">Sleep</div>
                        <div class="sector__num">31%</div>
                        <div class="sector__subtitle">of adults suffer<br> from sleepless nights</div>
                        <div class="sector__description">Aviva</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-md-4">
                    <div class="sector__item" data-bg="<?php echo $theme_path; ?>/assets/img/sector3-bg.jpg">
                        <div class="sector__title">Anxiety</div>
                        <div class="sector__num">24%</div>
                        <div class="sector__subtitle">of people suffer<br> from anxiety disorders</div>
                        <div class="sector__description">Dialogues in Clinical Neuroscience</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>