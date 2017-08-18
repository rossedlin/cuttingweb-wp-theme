<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 18/08/2017
 * Time: 11:56
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
	<?php //honma_paginate_page(); ?>
	<div class="comments">
		<?php comments_template(); ?>
	</div>
	<div class="clear"></div>
</article>
