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

	<style>
		.list-group
		{
			border-radius: 0;
		}

		.list-group .list-group-item
		{
			background-color: transparent;
			overflow:         hidden;
			border:           0;
			border-radius:    0;
			padding:          0 16px;
		}

		.list-group .list-group-item .row-picture,
		.list-group .list-group-item .row-action-primary
		{
			float:         left;
			display:       inline-block;
			padding-right: 16px;
			padding-top:   8px;
		}

		.list-group .list-group-item .row-picture img,
		.list-group .list-group-item .row-action-primary img,
		.list-group .list-group-item .row-picture i,
		.list-group .list-group-item .row-action-primary i,
		.list-group .list-group-item .row-picture label,
		.list-group .list-group-item .row-action-primary label
		{
			display: block;
			width:   56px;
			height:  56px;
		}

		.list-group .list-group-item .row-picture img,
		.list-group .list-group-item .row-action-primary img
		{
			background: rgba(0, 0, 0, 0.1);
			padding:    1px;
		}

		.list-group .list-group-item .row-picture img.circle,
		.list-group .list-group-item .row-action-primary img.circle
		{
			border-radius: 100%;
		}

		.list-group .list-group-item .row-picture i,
		.list-group .list-group-item .row-action-primary i
		{
			background:    rgba(0, 0, 0, 0.25);
			border-radius: 100%;
			text-align:    center;
			line-height:   56px;
			font-size:     20px;
			color:         white;
		}

		.list-group .list-group-item .row-picture label,
		.list-group .list-group-item .row-action-primary label
		{
			margin-left:   7px;
			margin-right:  -7px;
			margin-top:    5px;
			margin-bottom: -5px;
		}

		.list-group .list-group-item .row-content
		{
			display:    inline-block;
			width:      calc(100% - 92px);
			min-height: 66px;
		}

		.list-group .list-group-item .row-content .action-secondary
		{
			position: absolute;
			right:    16px;
			top:      16px;
		}

		.list-group .list-group-item .row-content .action-secondary i
		{
			font-size: 20px;
			color:     rgba(0, 0, 0, 0.25);
			cursor:    pointer;
		}

		.list-group .list-group-item .row-content .action-secondary ~ *
		{
			max-width: calc(100% - 30px);
		}

		.list-group .list-group-item .row-content .least-content
		{
			position:  absolute;
			right:     16px;
			top:       0px;
			color:     rgba(0, 0, 0, 0.54);
			font-size: 14px;
		}

		.blog-post .list-group-item-heading
		{
			margin-top:    5px;
			margin-bottom: 0;
		}

		.blog-post .list-group
		{
			border-radius:      0;
			-webkit-box-shadow: none;
			box-shadow:         none;
		}

		.list-group .list-group-item .list-group-item-heading
		{
			color:     rgba(0, 0, 0, 0.77);
			font-size: 20px;
		}

		.list-group .list-group-separator
		{
			clear:         both;
			overflow:      hidden;
			margin-top:    10px;
			margin-bottom: 10px;
		}

		.list-group .list-group-separator:before
		{
			content:       "";
			width:         calc(100% - 90px);
			border-bottom: 1px solid rgba(0, 0, 0, 0.1);
			float:         right;
		}

		.bg-profile
		{
			background-color: #3498DB !important;
			height:           150px;
			z-index:          1;
		}

		.bg-bottom
		{
			height:      100px;
			margin-left: 30px;
		}

		.img-profile
		{
			display:          inline-block !important;
			background-color: #fff;
			border-radius:    6px;
			margin-top:       -50%;
			padding:          1px;
			vertical-align:   bottom;
			border:           2px solid #fff;
			-moz-box-sizing:  border-box;
			box-sizing:       border-box;
			color:            #fff;
			z-index:          2;
		}

		.row-float
		{
			margin-top: -40px;
		}

		.explore a
		{
			color:       green;
			font-size:   13px;
			font-weight: 600
		}

		.twitter a
		{
			color: #4099FF
		}

		.blog-post
		{
			margin: 20px 2px;
			/*background-color: #00A0D1;*/

			border: 1px solid #c4c4c4;
		}

		.blog-thumbnail
		{
			margin:        10px;

			box-shadow:    0 3px 6px rgba(0, 0, 0, .16), 0 3px 6px rgba(0, 0, 0, .23);
			border-radius: 2px;
			border:        0;
		}


		.panel-widget
		{
			box-shadow:    0 1px 2px rgba(0, 0, 0, .16), 0 1px 2px rgba(0, 0, 0, .23);
			border-radius: 1px;
			border:        0;
		}

		.widget-title
		{
			font:           normal normal 20px Oswald;
			font-weight:    normal;
			text-transform: uppercase;
			background:     #333;
			color:          white;

			padding:        8px 16px;
		}

	</style>

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
					<?php //get_sidebar('profile'); ?>
					<?php get_sidebar('search'); ?>
					<?php //get_sidebar('newsletter'); ?>
					<?php //get_sidebar('recent'); ?>
					<?php //get_sidebar(); ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();