<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bulmapress
 */

$title_text = get_theme_mod( 'tuglyt_home_title_setting' );
$body_text = get_theme_mod( 'tuglyt_home_body_setting' );

get_header(); ?>

<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
            <?php echo do_shortcode('[smartslider3 slider=3]'); ?>

            <div class="content entry-content">
            <div class="container">
                <div class="home-title">
		        <?php

		        if($title_text || is_customize_preview()):?>
                    <h1><?php echo $title_text;?></h1>
		        <?php endif;
		        ?>
                    </div>

                <div class="home-body">
                <?php
		        if($body_text || is_customize_preview()):
			        echo wpautop($body_text);
		        endif;
                ?>
                </div>

                <?php
		        wp_link_pages( array(
			        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bulmapress' ),
			        'after'  => '</div>',
		        ) );
		        ?>
            </div>
            </div><!-- .entry-content -->

            <?php bulmapress_get_comments(); ?>
        <?php endwhile; ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
