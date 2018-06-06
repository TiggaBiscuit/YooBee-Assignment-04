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

$title_text = get_theme_mod( 'tuglyt_about_title_setting' );
$body_text = get_theme_mod( 'tuglyt_about_body_setting' );
$secondtitle_text = get_theme_mod( 'tuglyt_about_secondtitle_setting' );

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php echo do_shortcode('[smartslider3 slider=6]'); ?>

            <div class="content entry-content">
            <div class="container">
                        <div class="about-title">
                            <?php

                            if($title_text || is_customize_preview()):?>
                                <h1><?php echo $title_text;?></h1>
                            <?php endif;
                            ?>
                        </div>

                        <div class="about-body">
                            <?php
                            if($body_text || is_customize_preview()):
                                echo wpautop($body_text);
                            endif;
                            ?>
                        </div>

                        <br>
                        <br>

                        <div class="about-secondtitle">
                            <?php

                            if($secondtitle_text || is_customize_preview()):?>
                                <h1><?php echo $secondtitle_text;?></h1>
                                <hr>
                            <?php endif;
                            ?>
                        </div>

                        <div class="sponsors">
                            <ul>
                                <li><a href="https://starkbros.co.nz" target="_blank">Stark Bros</a></li>
                                <li><a href="https://lytteng.co.nz" target="_blank">Lyttelton Engineerng</a></li>
                                <li><a href="http://ratafoundation.org.nz/" target="_blank">Rātā Foundation (Formerly The Canterbury Community Trust)</a></li>
                                <li><a href="http://southerntrust.org.nz/" target="_blank">The Southern Trust</a></li>
                                <li><a href="http://pubcharitylimited.org.nz" target="_blank">Pub Charity Limited</a></li>
                                <li><a href="http://lpc.co.nz" target="_blank">Lyttelton Port Company</a></li>
                                <li>Solid Energy - Ceased to Exist on the 31st of October 2016.</li>
                                <li><a href="http://freemasonsnz.org/" target="_blank">Freemasons New Zealand</a></li>
                                <li><a href="https://ccc.govt.nz" target="_blank">Christchurch City Council</a></li>
                            </ul>
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
