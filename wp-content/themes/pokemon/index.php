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

    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
            
            <header class="content-header">
                <h2>The Wordpress way with <span class="wpQuery">WP_Query:</span></h2>
            </header>

            <?php
            // WP_Query arguments
            $args = array(
                'post_type'              => array( 'pokemon' ),
                'post_status'            => 'publish',
                'posts_per_page'         => '3',
                'orderby'                => 'rand',
            );

            // The Query
            $pokemons = new WP_Query( $args );

            // The Loop
            if ( $pokemons->have_posts() ) { ?>
                <ul class="poke-list">

                <?php while ( $pokemons->have_posts() ) {
                    $pokemons->the_post(); ?>

                    <li class="card">
                        <article>
                            <?php 
                            $image = get_field( 'avatar' );
                            if( !empty( $image ) ) { ?>
                                <figure>
                                    <img src="<?php echo $image['url'] ?>" alt="<?php the_title(); ?>, pokemon number <?php the_field( 'number' ); ?>">
                                </figure>
                            <?php } else {
                               echo 'kuken';
                            } ?>
                            <h3><?php the_title(); ?> <span># <?php the_field( 'number' ); ?></span></h3>
                            <p><?php the_field( 'info' ); ?></p>
                            <small>Type</small>
                            <small>Weakness</small>
                        </article>
                    </li>

                <?php } ?>

                </ul>
 
            <?php } else { ?>

                <div class="queryEmpty">
                    <h1>No pokemons in database</h1>
                </div>

            <?php } ?>
            
            <?php 
            // Restore original Post Data
            wp_reset_postdata();
            ?>

            </main><!-- #main .site-main -->
        </div><!-- #primary .content-area -->
    </div><!-- #content .site-content -->

<?php
get_footer();