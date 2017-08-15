<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 10/08/2017
 * Time: 15:29
 *
 * Template Name: Home
 */

get_header(); ?>

	<div id="" class="" style="">

		<main id="main" class="site-main">

			<?php
			$args = array(
				'numberposts'      => 10,
				'offset'           => 0,
				'category'         => 0,
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

			$posts = wp_get_recent_posts($args, OBJECT);
			?>

			<div class="row">
				<div class="col-xs-12 col-md-9">
					<?php foreach ($posts as $post)
					{
						get_template_part('template-parts/home', 'post');

						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number())
						{
//					comments_template();
						}

//						break;
					}
					?>
				</div>
				<div class="col-xs-12 col-md-3" style="margin: 20px 0">
					<?php get_sidebar(); ?>
					<?php get_sidebar('search'); ?>
					<?php get_sidebar('recent'); ?>
					<?php //get_sidebar('profile'); ?>
					<?php //get_sidebar('newsletter'); ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();