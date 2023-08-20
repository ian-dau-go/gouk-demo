<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package    WordPress
 * @subpackage Twenty_Twenty_One
 * @since      Twenty Twenty-One 1.0
 */

get_header();
?>
<section class="not-found__content">
    <div class="row">
        <div class="col-12">

        </div>
        <div class="col-12">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/errors/404.png" />
        </div>
</section>
<?php
get_footer();
?>