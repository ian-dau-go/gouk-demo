<?php

get_header(); ?>

<?php if (is_home() && !is_front_page() && !empty(single_post_title('', false))) : ?>
    <header class="page-header alignwide">
        <h1 class="page-title">
            <?php single_post_title(); ?>
        </h1>
    </header>
<?php endif; ?>

<section>
    <div class="row mx-auto">
        <div class="__px-100px py-3 container-fluid col-12">
            <div class="col-sm-12 col-md-12 col-lg-9 frame34719">
                <div class="col-12 Unleash fz-m">
                    <span>Unleash the Power with</span>
                    <span class="golden-owl">
                        Golden Owl<br /></span>
                    <span>Your Expert IT Consulting</span>
                </div>
                <div class="col-12 frame34718">
                    <div class="WelcomeToGoldenOwl">
                        <span>Welcome to</span>
                        <span class="golden-owl">Golden Owl
                            Consulting</span><span>, the leading IT outsourcing
                            company in
                            Southeast Asia.
                        </span>
                    </div>
                    <a class="frame9529 ContactUs" href="https://goldenowl.asia/contact-us">
                        <div class="frame9529__button--contact">
                            Contact us
                        </div>
                        <div class="FiRrAngleSmallRight" style="width: 22px; position: relative">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/fi-rr-angle-small-right.svg' ?>" alt>
                        </div>
                    </a>
                </div>
            </div>
            <div class="banner-container col-sm-12 col-md-12 position-relative">
                <div class="image-stack">
                    <div class="image-stack__item image-stack__item--top">
                        <div class="box">
                            <img class="--img" src="<?php echo get_template_directory_uri() . '/assets/images/banner2.svg' ?>" />
                            <div class="bottom-right">
                                <div class="eesify">
                                    <span>eesify</span>
                                    <br />
                                    <a class="text-decoration-none text-white" href="https://goldenowl.asia/portfolio/playsquad">
                                        View portfolio&nbsp;
                                        <img style="width: 15px; height: 8px;" src="<?php echo get_template_directory_uri() . '/assets/images/fi-rs-arrow-right.svg' ?>" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-stack__item image-stack__item--bottom">
                        <div class="box">
                            <img class="--img" src="<?php echo get_template_directory_uri() . '/assets/images/screencapture-eesify-2023-06-27-12_22_25 1.png' ?>" />
                            <div class="bottom-right">
                                <div class="pace">
                                    <span>Pace.</span>
                                    <br />
                                    <a class="text-decoration-none text-white" href="https://goldenowl.asia/portfolio/pace">
                                        View portfolio&nbsp;
                                        <img style="width: 15px; height: 8px;" src="<?php echo get_template_directory_uri() . '/assets/images/fi-rs-arrow-right.svg' ?>" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
