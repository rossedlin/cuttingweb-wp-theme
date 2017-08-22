<?php
/**
 * The template for displaying all single posts
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CuttingWeb
 */

get_header(); ?>

	<div id="site-main" class="site-main container">
		<div class="row">
			<div class="col-xs-12 col-md-9" style="padding: 0;">


				<?php
				while (have_posts())
				{
					the_post();

					get_template_part('template-parts/content', get_post_type());
				}
				?>

			</div>

			<div class="col-xs-12 col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>

	</div>

<?php
get_footer();
