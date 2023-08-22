<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <?php if (isset($args['title'])) {
            echo $args['title'];
        } else {
            echo 'Unknow page';
        } ?>
    </title>

    <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/images/icons/favicon.png" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/index.css" type="text/css"
        media="screen" />
    <link rel="stylesheet"
        href="<?php bloginfo('template_url'); ?>/assets/css/cdnjs.cloudflare.com_ajax_libs_OwlCarousel2_2.3.4_assets_owl.carousel.css"
        type="text/css" media="screen" />
    <link rel="stylesheet"
        href="<?php bloginfo('template_url'); ?>/assets/css/cdnjs.cloudflare.com_ajax_libs_OwlCarousel2_2.3.4_assets_owl.theme.default.min.css"
        type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css" type="text/css"
        media="screen" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body>
    <div style="height: 100vh" class="<?php
        echo isset($args['slug']) && $args['slug'] === 'blog' ? 'gouk__blog-page' : '';
        echo isset($args['slug']) && $args['slug'] === 'article' ? 'gouk-article' : '' ?>">
        <div class style="background: white">
            <section
                style="background: <?php echo isset($args['slug']) && $args['slug'] === 'blog' ? '#FFFBEB' : 'white' ?>">
                <div class="row mx-auto">
                    <div class="__px-100px container-fluid gouk--header">
                        <div class="Frame9198 row mx-auto justify-content--space-between">
                            <div class="Frame9545 pl-0 col-3 col-md-3 col-lg-3">
                                <a href="<?php echo get_site_url()?>">
                                    <div class=" logo">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/gouk_logo_150x34.svg' ?>"
                                            alt />
                                    </div>
                                </a>
                            </div>
                            <div class="frame9197 my-auto col-9 col-md-9 col-lg-9">

                                <nav class="nav-bar">
                                    <input type="checkbox" id="drop-down-cbox" />
                                    <label for="drop-down-cbox">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </label>

                                    <ul
                                        class="main-nav my-auto small-caps d-flex justify-content-between align-items-cente">
                                        <li>
                                            <div class="frame9461">
                                                <a class="AboutUs" href="https://goldenowl.asia/about-us">About us</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="frame9461">
                                                <a class="Service
                                                <?php if (isset($args['active']) && $args['active'] === 'services') {
                                                    echo 'active';
                                                } ?>
                                                                    " href="
                                                                    <?php echo get_permalink(get_page_by_path('services')) ?>
                                                                    ">Service</a>
                                                <div class="Frame9456">
                                                    <img width="12px" height="14px"
                                                        src="<?php bloginfo('template_url'); ?>/assets/images/icons/open_dropdown_13x14.svg"
                                                        alt srcset />
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="frame9461">
                                                <a class="Blog 
                                                <?php if (isset($args['active']) && $args['active'] === 'blog') {
                                                    echo 'active';
                                                } ?>
                                                                " href="
                                                                <?php echo get_permalink(get_page_by_path('blog')) ?>
                                                                ">Blog</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="frame9461">
                                                <a class="Partners"
                                                    href="https://goldenowl.asia/partnership">Partners</a>
                                            </div>
                                        </li>
                                        <li>

                                            <div class="frame9461">
                                                <a class="SuccessStories"
                                                    href="https://goldenowl.asia/portfolio">Success
                                                    Stories</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="frame9466">
                                                <a class="ContactUs" href="https://goldenowl.asia/contact-us">Contact
                                                    us</a>
                                            </div>
                                        </li>
                                    </ul>
                            </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>