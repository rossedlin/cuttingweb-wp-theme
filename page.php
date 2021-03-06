<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 18/08/2017
 * Time: 12:35
 *
 *
 * The template for displaying all pages.
 *
 * @package CuttingWeb
 */
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
			/*background-color: #ffffff;*/
			margin-top: -440px;
		}
	</style>

	<div id="content" class="site-content">
		<div id="site-main" class="site-main container">

			<div class="row">

				<div class="col-xs-12 col-md-9">
					<?php while (have_posts())
					{
						the_post();
						get_template_part('template-parts/page');
					} ?>
				</div>
				<div class="col-xs-12 col-md-3">
					<?php get_sidebar(); ?>
				</div>

			</div>

		</div>
	</div>

<?php get_footer(); ?>