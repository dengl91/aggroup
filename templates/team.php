<?php
/**
 * Team
 * @package alphagreen
 * Template Name: Team
 */
get_header(); ?>

    <?php
        $theme_path = get_stylesheet_directory_uri();
    ?>

    <section>
        <div class="container">
            <h1>Excellent team with <i>experienced advisors</i></h1>
            <h4>Well rounded core team supported by strong periphery of tech, growth and content professinals, as wellas seasoned advisors</h4>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="team__item">
                        <div class="team__img">
                            <img src="<?php echo $theme_path; ?>/assets/img/team-1.png" alt="Alexej Pikovsky">
                        </div>
                        <div class="team__title">Alexej Pikovsky</div>
                        <div class="team__position">CEO / Founder</div>
                        <div class="team__description">
                            8 years in PE/VC/IBD<br>
                            Completed $7bn + of M&A transactions<br>
                            and 10+ investments in VC/PE<br>
                            Board level experience<br>
                            MSc from Imperial College London
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="team__item">
                        <div class="team__img team__img--second">
                            <img src="<?php echo $theme_path; ?>/assets/img/team-2.png" alt="Viktor Khliupko">
                        </div>
                        <div class="team__title">Viktor Khliupko</div>
                        <div class="team__position">CTO / Founder</div>
                        <div class="team__description">
                            10 years of Magento 2 (Adobe)<br>
                            development experience<br>
                            Former CTO at Sugartrends<br>
                            (Etsy competitor in Germany)<br>
                            Built a team of 20 at Firebear Studio<br>
                            MSc in Computer Science and AI
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="team__item">
                        <div class="team__img team__img--third">
                            <img src="<?php echo $theme_path; ?>/assets/img/team-3.png" alt="Aman Ghataura">
                        </div>
                        <div class="team__title">Alexej Pikovsky</div>
                        <div class="team__position">CEO / Founder</div>
                        <div class="team__description">
                            8 years in PE/VC/IBD<br>
                            Completed $7bn + of M&A transactions<br>
                            and 10+ investments in VC/PE<br>
                            Board level experience<br>
                            MSc from Imperial College London
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="team__item">
                        <div class="team__img team__img--third">
                            <img src="<?php echo $theme_path; ?>/assets/img/team-4.png" alt="Elina Boradzova">
                        </div>
                        <div class="team__title">Elina Boradzova</div>
                        <div class="team__position">Head of Content</div>
                        <div class="team__description">
                            Leads team of 20+ content<br>
                            writers and oversees research<br>
                            and publishing. BA from Queen<br>
                            Marry University London
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="team__item">
                        <div class="team__img team__img--third">
                            <img src="<?php echo $theme_path; ?>/assets/img/team-5.png" alt="Julie Scheurl">
                        </div>
                        <div class="team__title">Julie Scheurl</div>
                        <div class="team__position">Key Account Manager</div>
                        <div class="team__description">
                            Marketing and Communication<br>
                            experience across fashion<br>
                            and e-commerce incl. Harper’s Bazaar.<br>
                            BA from Instituto Marangoni London
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>