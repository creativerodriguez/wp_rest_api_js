<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Primer
 * @since   1.0.0
 */

get_header(); ?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

<!-- 		Wordpress REST API Post Create Demo -->
		<?php if (current_user_can('administrator')) : ?>
		<div class="admin-quick-add">
			<h3>Quick Add Post</h3>
			<input id="quick-add-title" type="text" name="title" placeholder="Title">
			<textarea id="quick-add-content" name="content" placeholder="Content"></textarea>
			<button id="quick-add-btn">Quick Add Post</button>
			<br><br>
		</div>
		<?php endif; ?>

		<div>
<!-- 		Wordpress REST API Post Load Demo -->
			<button id="research-posts-btn">Load Research Related Blog Posts</button>
			<div id="research-posts-container"></div>
			<br><br>
		</div>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php if ( comments_open() || get_comments_number() ) : ?>

				<?php comments_template(); ?>

			<?php endif; ?>

		<?php endwhile; ?>

	</main><!-- #main -->

</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_sidebar( 'tertiary' ); ?>

<?php get_footer(); ?>
