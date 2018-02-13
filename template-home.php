<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 10/08/2017
 * Time: 15:29
 *
 * Template Name: Home
 */

/** @var WP_Term $term */
$term = get_category_by_slug('front-page');

$args = array(
	'numberposts'      => 5,
	'offset'           => 0,
	'category'         => $term->cat_ID,
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_status'      => 'publish',
	'suppress_filters' => true,
);

/** @var WP_Post[] $posts */
$posts = wp_get_recent_posts($args, OBJECT);
if (!is_array($posts))
{
	$posts = [];
}

get_header(); ?>
	<style>
		.navbar
		{
			-webkit-box-shadow: 0 2px 10px 2px rgba(25, 25, 25, 0.75);
			-moz-box-shadow:    0 2px 10px 2px rgba(25, 25, 25, 0.75);
			box-shadow:         0 2px 10px 2px rgba(25, 25, 25, 0.75);
		}

		.site-content
		{
			margin-top: -40px;
			box-shadow: 0 2px 10px 2px rgba(25, 25, 25, 0.75);
		}
	</style>

	<div id="content" class="site-content">
		<div id="site-main" class="site-main container">

			<div class="row">
				<div class="col-xs-12 col-md-9" style="padding: 0;">
					<?php foreach ($posts as $post)
					{
						get_template_part('template-parts/home', 'post');

						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number())
						{
//							comments_template();
						}
					}
					?>
				</div>
				<div class="col-xs-12 col-md-3">
					<?php get_sidebar(); ?>
				</div>
			</div>

		</div>
	</div>

<?php
get_footer();