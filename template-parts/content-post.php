<?php
/**
 * Created by PhpStorm.
 * User: rosse
 * Date: 22/08/2017
 * Time: 14:25
 */
?>
<article class="single_post">
	<div class="article_text">
		<h2><?php the_title(); ?></h2>
		<hr>
		<?php the_content(); ?>
		<div class="clear"></div>
		<p><?php posts_nav_link(); ?></p>
	</div>

	<?php /*
	<div class="comments">
		<?php comments_template(); ?>
	</div>
 	*/ ?>
	<div class="clear"></div>
</article>

