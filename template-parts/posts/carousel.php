<section class="gouk-carousel">
    <div class="row mx-auto">
        <div class="container-fluid __px-100px py-5">
            <div id="GoukCarousel" class="carousel slide" data-ride="carousel" data-interval="9000">
                <div class="d-flex py-2 col-12 justify-content--space-between gap-10px">
                    <h4 class="my-auto morelike">More like this</h4>
                    <div class="carousel-control d-inline-flex float-end gap-10px">
                        <a class="carousel-control-prev" href="#GoukCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#GoukCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <div class="row carousel-inner w-100 py-3" role="listbox">
                    <?php 
                    foreach($args['posts'] as $post) {
                        get_template_part('template-parts/posts/related-post');    
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>