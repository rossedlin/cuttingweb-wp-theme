<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 16/08/2017
 * Time: 20:56
 *
 * Template Name: Portfolio
 */

/** @var WP_Term $term */
$term = get_category_by_slug('portfolio');

$args = array(
	'numberposts'      => 8,
	'offset'           => 0,
	'category'         => $term->cat_ID,
	'orderby'          => 'meta_value',
	'order'            => 'ASC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => 'order_by',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_status'      => 'publish',
	'suppress_filters' => true,
);

$posts = wp_get_recent_posts($args, OBJECT);

get_header(); ?>

	<div id="site-main" class="site-main container">

		<div class="row">
			<div class="col-xs-12 col-md-9" style="padding: 0;">

				<?php if (is_array($posts))
				{
					while (count($posts) > 0)
					{
						$i = 0;
						?>

						<div class="row form-group">
							<?php foreach ($posts as $key => $post)
							{
								if ($i > 1) break;

								get_template_part('template-parts/portfolio', 'item');

								$i++;
								unset($posts[$key]);
							} ?>
						</div>

					<?php }
				}
				else
				{
					get_template_part('template-parts/content', 'none');
				} ?>

			</div>

			<div class="col-xs-12 col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>

	</div>

<?php
get_footer();