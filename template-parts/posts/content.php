<?php

$post = get_post(get_the_ID());

?>
<section>
    <div class="row mx-auto">
        <div class="container-fluid __px-100px py-5">
            <div class="banner">
                <img src="<?php
                            echo has_post_thumbnail($post->ID) ?
                                get_the_post_thumbnail_url($post->ID) :
                                get_template_directory_uri() . '/assets/images/blog/blog_default.jpeg' ?>" alt="">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="row mx-auto">
        <div class="row mx-auto article container-fluid __px-100px py-5">
            <div class="row mx-auto d-flex">
                <div
                    class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 sidebar py-3 order-lg-0 order-md-0 order-sm-0 order-1">
                    <div class="sidebar-card">
                        <div class="text-uppercase sidebar-header" id='table-of-content-title'>

                        </div>
                        <div class="sidebar-body">
                            <ul class="list-group" id="table-of-contents">
                            </ul>
                        </div>
                        <div class="sidebar-logo-group d-flex">
                            <a href="https://www.facebook.com/goldenowl.asia"> <img width="32px" height="32px"
                                    src="<?php bloginfo('template_url'); ?>/assets/images/posts/icon_facebook_32x32.svg"
                                    alt=""></a>
                            <a href="https://twitter.com/goldenowlasia"><img width="32px" height="32px"
                                    src="<?php bloginfo('template_url'); ?>/assets/images/posts/icon_twitter_32x32.svg"
                                    alt=""></a>
                            <a href="https://www.linkedin.com/company/golden-owl-consulting/mycompany/"><img
                                    width="32px" height="32px"
                                    src="<?php bloginfo('template_url'); ?>/assets/images/posts/icon_linkedin_32x32.svg"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9 col-12 article py-3">
                    <div class="datetime text-uppercase d-flex justify-content--space-between">
                        <span class="">
                            <img width="22px" height="18px"
                                src="<?php bloginfo('template_url'); ?>/assets/images/posts/icon_create_22x18.svg"
                                alt="">
                            <?php echo  DateTime::createFromFormat('Y-m-d H:i:s', $post->post_modified)->format('M j, Y'); ?>
                        </span>
                        <span>
                            <img width="22px" height="18px"
                                src="<?php bloginfo('template_url'); ?>/assets/images/posts/icon_clock_18x18.svg"
                                alt="">
                            <?php echo do_shortcode('[rt_reading_time post_id="' . $post->ID . '"]') ?>minutes read
                        </span>
                    </div>
                    <div class="content py-3" data-bs-spy="scroll" data-bs-target="#table-of-contents"
                        data-bs-offset="0" class="scrollspy-example" tabindex="0">
                        <div class="title py-2">
                            <h3><?php echo $post->post_title ?>
                            </h3>
                        </div>
                        <p class="description py-2">
                            <?php echo $post->post_excerpt ?>
                        </p>
                        <div class="content py-3" id='post-content'>
                            <?php echo $post->post_content ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<script src="<?php bloginfo('template_url'); ?>/assets/js/ajax.googleapis.com_ajax_libs_jquery_3.6.4_jquery.min.js">
</script>
<script>
$(document).ready(function() {
    const h4Tags = $("#post-content h4");
    if (h4Tags.length)
        $('#table-of-content-title').text('Table of contents');
    h4Tags.each(function() {
        const h4Tag = $(this);
        const h4Text = h4Tag.text();
        const slug = h4Text.replaceAll(' ', '-').toLowerCase().replaceAll(/[^a-zA-Z0-9 ]/g, '');
        h4Tag.attr('id', slug);
        h4Tag.addClass('gouk-blog-content-title');
        $('#table-of-contents').append(` <li class="gouk-link-blog-content">
                                    <a href="#${slug}"  id="${slug + '-link'}">
                                        <span>${h4Text}</span>
                                    </a>
                                </li>`)

    })
    $(window).scroll(function() {
        $(".gouk-blog-content-title").each(function() {
            const distance = $(this).offset().top;

            const id = $(this).attr('id');
            if ($(window).scrollTop() + 200 >= distance) {
                $('.gouk-link-blog-content a').removeClass('active');
                $(`#${id}-link`).addClass("active");
            }
        });
    });
})
</script>

<?php

$posts_related_to_post = get_posts(
    [
        'type' => 'post',
        'order_by' => 'date',
        'order' => 'desc',
        'category__in' => wp_get_post_categories($post->ID),
        'post__not_in' => array($post->ID)
    ]
);

get_template_part('template-parts/posts/carousel', null, ['posts' => $posts_related_to_post]);
?>