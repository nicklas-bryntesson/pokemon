<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Pokemon
 * @since 1.0.0
 */

get_header(); 
?>

<div id="page" class="site">
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <article class="index-page">
                    <h1>Lets go Pokemon!</h1>
                </article>

            </main><!-- #main .site-main -->
        </div><!-- #primary .content-area -->
    </div><!-- #content .site-content -->
</div><!-- #page .site -->

<?php
get_footer();