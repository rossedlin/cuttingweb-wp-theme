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
 * @package CuttingWeb
 */

get_header(); ?>

	<div id="site-main" class="site-main container">

		<div class="row">
			<div class="col-xs-12 col-md-9">
				<?php while (have_posts())
				{
					the_post();

					get_template_part('template-parts/home', 'post');

					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number())
					{
						comments_template();

					}

					break;
				} ?>
			</div>
			<div class="col-xs-12 col-md-3" style="margin: 20px 0">
				<?php get_sidebar(); ?>
			</div>
		</div>

	</div>

<?php
get_footer();