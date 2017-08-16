<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 16/08/2017
 * Time: 20:57
 *
 * @var WP_Post $post
 */

$thumb_id = get_post_thumbnail_id($post);
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];

?>
<div class="col-xs-12 col-md-6">
	<div class="panel panel-default">
		<div class="panel-image hide-panel-body">
			<img
				src="<?= $thumb_url; ?>"
				class="panel-image-preview"/>
		</div>
		<div class="panel-body">
			<h4><?= $post->post_title ?></h4>
			<p><?= get_the_excerpt($post); ?></p>
		</div>
		<div class="panel-footer text-center">
			<!--			<a href="#download"><span class="glyphicon glyphicon-download"></span></a>-->
<!--			<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"><span-->
<!--					class="fa fa-facebook"></span></a>-->
			<a href="#facebook"><span class="fa fa-facebook"></span></a>
			<a href="#twitter"><span class="fa fa-twitter"></span></a>
			<a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>

			<div class="fb-share-button1"
				 data-href="https://developers.facebook.com/docs/plugins/"
				 data-layout="button_count"
				 data-size="large"
				 data-mobile-iframe="true">

				<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"
				   class="fb-xfbml-parse-ignore"
				   target="_blank">
					<span class="fa fa-facebook"></span>
				</a>

				<!--				<a class="fb-xfbml-parse-ignore"-->
				<!--				   target="_blank"-->
				<!--				   href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">-->
				<!--					Share-->
				<!--				</a>-->
			</div>
		</div>
	</div>
</div>
