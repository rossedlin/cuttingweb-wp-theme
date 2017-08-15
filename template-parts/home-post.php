<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 10/08/2017
 * Time: 15:40
 *
 * Template part for displaying page content in page.php
 *
 * @package CuttingWeb
 * @var WP_Post $post
 */

$author_name = get_the_author_meta('display_name', $post->post_author);
?>

<article id="post-<?php $post->ID; ?>" <?php post_class(); ?>>

	<div class="row blog-post">
		<div class="col-xs-12 col-sm-3 col-md-3 text-center">
			<a href="#">
				<img src="<?= wp_get_attachment_image_url(get_post_thumbnail_id($post)); ?>"
					 class="blog-thumbnail img-responsive img-thumbnail">
			</a>
		</div>
		<div class="col-xs-12 col-sm-9 col-md-9">
			<div class="list-group">
				<div class="list-group-item">
					<div class="row-picture">
						<a href="#" title="<?= $author_name ?>">
							<?= get_avatar($post->post_author, 96, '', $author_name, [
								'class' => 'circle img-thumbnail img-box',
							]); ?>
						</a>
					</div>
					<div class="row-content">
						<div class="list-group-item-heading">
							<a href="#" title="sintret">
								<small><?= $author_name; ?></small>
							</a>
						</div>
						<small>
							<i class="glyphicon glyphicon-time"></i>
							<span><?= date('jS F Y', strtotime($post->post_date)); ?></span>
							<br>
							<!-- <span class="explore">-->
							<!-- 	<i class="glyphicon glyphicon-th"></i>-->
							<!-- 	<a href="#">Explore 2 places </a>-->
							<!-- </span>-->
						</small>
					</div>
				</div>
			</div>
			<h4><a href="<?= get_permalink($post); ?>"><?= $post->post_title ?></a></h4>
			<p><?= get_the_excerpt($post); ?></p>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
