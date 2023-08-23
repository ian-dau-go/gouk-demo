<?php

$category_slug = get_query_var('category');
$search = get_query_var('search');

function get_category_uri($category)
{
    $search = get_query_var('search');
    $uri = get_permalink(get_page_by_path('blog')) . '?category=' . $category->slug . ($search ? '&search=' . $search : '');

    return $uri;
}
?>

<section>
    <div class="row mx-auto">
        <div class="blog__menu container-fluid __px-100px py-2">
            <nav class="navbar navbar-expand-lg navbar-light Frame9615">
                <div class="row mx-auto container-fluid p-0" style="position: relative">
                    <div id="navbarNav" class="col-12 col-md-11 col-lg-11 col-xl-11 my-auto p-0">
                        <div class=" collapse navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item <?php echo $category_slug === '' ? 'active' : '' ?>">
                                    <a class="nav-link" aria-current="page"
                                        href="<?php echo get_permalink(get_page_by_path('blog')) ?>">All</a>
                                </li>
                                <?php
                                $categories = get_categories();

                                foreach ($categories as $category) {
                                    echo '<li class="nav-item ' . ($category_slug === $category->slug ? 'active' : '') . '">
                                                <a class="nav-link " href="' . get_category_uri($category) . '">' . $category->name . '</a>
                                            </li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="gouk__search py-2 col">
                        <form method='GET'>
                            <div class="form-group">
                                <div class="btn search" id="search-btn">
                                    <span class="icon-search">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/search_40x40.svg"
                                            alt="">
                                    </span>
                                </div>
                                <div class="my-auto" id="search-active">
                                    <div class="d-flex border-0">
                                        <div class="input-group w-95 gouk__search--border">
                                            <?php
                                            if ($category_slug) {
                                                echo '<input class="form-control" type="hidden" 
                                            value="' . $category_slug . '" name="category">';
                                            }
                                            ?>
                                            <input class="form-control" type="search" placeholder="Search"
                                                value="<?php echo $search ?>" name='search'>
                                            <div class="input-group-append icon-search-group">
                                                <button class="pr-0 mb-1  btn btn-link post_link d-inline">
                                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/union_19x19.svg"
                                                        alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <span class=" icon-close w-5" id="icon-close-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                viewBox="0 0 26 26" fill="none">
                                                <path
                                                    d="M19.5008 6.50005C19.2976 6.29695 19.0221 6.18286 18.7349 6.18286C18.4476 6.18286 18.1721 6.29695 17.9689 6.50005L13.0008 11.4682L8.03261 6.50005C7.82946 6.29695 7.55396 6.18286 7.2667 6.18286C6.97943 6.18286 6.70393 6.29695 6.50078 6.50005C6.29769 6.7032 6.18359 6.9787 6.18359 7.26596C6.18359 7.55322 6.29769 7.82873 6.50078 8.03188L11.4689 13L6.50078 17.9682C6.29769 18.1714 6.18359 18.4469 6.18359 18.7341C6.18359 19.0214 6.29769 19.2969 6.50078 19.5C6.70393 19.7031 6.97943 19.8172 7.2667 19.8172C7.55396 19.8172 7.82946 19.7031 8.03261 19.5L13.0008 14.5319L17.9689 19.5C18.1721 19.7031 18.4476 19.8172 18.7349 19.8172C19.0221 19.8172 19.2976 19.7031 19.5008 19.5C19.7039 19.2969 19.818 19.0214 19.818 18.7341C19.818 18.4469 19.7039 18.1714 19.5008 17.9682L14.5326 13L19.5008 8.03188C19.7039 7.82873 19.818 7.55322 19.818 7.26596C19.818 6.9787 19.7039 6.7032 19.5008 6.50005Z"
                                                    fill="#303030" />
                                            </svg>
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