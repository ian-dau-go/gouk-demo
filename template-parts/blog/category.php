<section>
    <div class="row mx-auto">
        <div class="blog__menu container-fluid __px-100px">
            <nav class="navbar navbar-expand-lg navbar-light Frame9615">
                <div class="row mx-auto container-fluid" style="position: relative">
                    <div id="navbarNav" class="col-12 col-md-11 col-lg-11 col-xl-11 py-2">
                        <div class="  collapse navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" aria-current="page" href="#">All</a>
                                </li>
                                <?php
                                            $categories = get_categories();

                                            foreach($categories as $category)
                                            {
                                                echo '<li class="nav-item">
                                                <a class="nav-link" href="#">'.$category->name.'</a>
                                            </li>';
                                            }
                                            ?>
                            </ul>
                        </div>
                    </div>
                    <div class="gouk__search py-2 col">
                        <form>
                            <div class="form-group">
                                <div class="btn search" id="search-btn">
                                    <span class="icon-search">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/images/icon_search.svg"
                                            alt="">
                                    </span>
                                </div>
                                <div class="my-auto" id="search-active">
                                    <div class="d-flex border-0">
                                        <div class="input-group w-95 gouk__search--border">
                                            <input class="form-control" type="search" placeholder="Search">
                                            <div class="input-group-append icon-search-group">
                                                <span class="icon-search-hover">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/union.svg"
                                                        alt="">
                                                </span>
                                            </div>
                                        </div>
                                        <span class=" icon-close w-5" id="icon-close-btn">
                                            x
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</section>