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

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content' ); ?>
			<?php bulmapress_get_comments(); ?>
		<?php endwhile; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<!--<div class="events-widget">-->
<!--    <div class="fb-page" data-href="https://www.facebook.com/tuglyttelton/" data-tabs="events" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/tuglyttelton/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tuglyttelton/">Tug Lyttelton Preservation Society</a></blockquote></div>-->
<!--</div>-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
