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

$maintitle_text = get_theme_mod( 'tuglyt_history_main_title_setting' );
$mainbody_text = get_theme_mod( 'tuglyt_history_first_body_setting' );

$secondtitle_text = get_theme_mod( 'tuglyt_history_second_title_setting' );
$secondbody_text = get_theme_mod( 'tuglyt_history_second_body_setting' );

$thirdtitle_text = get_theme_mod( 'tuglyt_history_third_title_setting' );
$thirdbody_text = get_theme_mod( 'tuglyt_history_third_body_setting' );

$fourthtitle_text = get_theme_mod( 'tuglyt_history_fourth_title_setting' );
$fourthbody_text = get_theme_mod( 'tuglyt_history_fourth_body_setting' );

$fifthtitle_text = get_theme_mod( 'tuglyt_history_fifth_title_setting' );
$fifthbody_text = get_theme_mod( 'tuglyt_history_fifth_body_setting' );

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php echo do_shortcode('[smartslider3 slider=9]'); ?>


            <div class="content entry-content">
                <div class="container">
                    <div class="history-main-title">
                        <?php

                        if($maintitle_text || is_customize_preview()):?>
                            <h1><?php echo $maintitle_text;?></h1>
                        <?php endif;
                        ?>
                    </div>

                    <div class="history-first-body">
                        <?php
                        if($mainbody_text || is_customize_preview()):
                            echo wpautop($mainbody_text);
                        endif;
                        ?>
                    </div>

                    <br>
                    <br>

                    <div class="history-second-title">
                        <?php

                        if($secondtitle_text || is_customize_preview()):?>
                            <h1><?php echo $secondtitle_text;?></h1>
                            <hr>
                        <?php endif;
                        ?>
                    </div>

                    <div class="history-second-body">
                        <?php
                        if($secondbody_text || is_customize_preview()):
                            echo wpautop($secondbody_text);
                        endif;
                        ?>
                    </div>

                    <br>
                    <br>

                    <div class="history-third-title">
                        <?php

                        if($thirdtitle_text || is_customize_preview()):?>
                            <h1><?php echo $thirdtitle_text;?></h1>
                            <hr>
                        <?php endif;
                        ?>
                    </div>

                    <div class="history-third-body">
                        <?php
                        if($thirdbody_text || is_customize_preview()):
                            echo wpautop($thirdbody_text);
                        endif;
                        ?>
                    </div>

                    <br>
                    <br>

                    <div class="history-fourth-title">
                        <?php

                        if($fourthtitle_text || is_customize_preview()):?>
                            <h1><?php echo $fourthtitle_text;?></h1>
                            <hr>
                        <?php endif;
                        ?>
                    </div>

                    <div class="history-fourth-body">
                        <?php
                        if($fourthbody_text || is_customize_preview()):
                            echo wpautop($fourthbody_text);
                        endif;
                        ?>
                    </div>

                    <br>
                    <br>

                    <div class="history-fifth-title">
                        <?php

                        if($fifthtitle_text || is_customize_preview()):?>
                            <h1><?php echo $fifthtitle_text;?></h1>
                            <hr>
                        <?php endif;
                        ?>
                    </div>

                    <div class="history-fifth-body">
                        <?php
                        if($fifthbody_text || is_customize_preview()):
                            echo wpautop($fifthbody_text);
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
