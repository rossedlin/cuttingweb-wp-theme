<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 15/08/2017
 * Time: 13:53
 *
 * The recent sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CuttingWeb
 */

/** @var WP_Post[] $posts */
$posts = wp_get_recent_posts([
	'numberposts'      => 5,
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
], OBJECT);
?>

<style>
	.widget-content
	{
		margin:  0;
		padding: 0;
	}

	.widget-content ul
	{
		margin:     0;
		padding:    0;

		list-style: none;
	}

	.widget-content li
	{
		margin:  0;
		padding: 15px 20px;
	}

	.widget-content li hr
	{
		margin: 0;
	}

	.widget-title
	{
		font-weight: bold;
		font-size:   20px;
	}

	.widget-content li
	{
		border-bottom-color: rgba(0, 0, 0, 0.1);
		border-bottom-style: solid;
		border-bottom-width: 1px;

		font-weight:         bold;
	}

	.widget-content li:last-child
	{
		border-bottom-style: none;
	}
</style>

<div>
	<div class="panel panel-primary widget">
		<div class="panel-heading widget-title">Recent Posts</div>
		<div class="panel-body widget-content">
			<ul>
				<?php foreach ($posts as $post)
				{
					get_template_part('sidebar-parts/recent', 'post');
				}
				?>
			</ul>
		</div>
	</div>
</div>
