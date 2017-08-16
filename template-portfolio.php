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
	'numberposts'      => 10,
	'offset'           => 0,
	'category'         => $term->term_id,
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

//pre($term);
//pre($posts);
//exit;

get_header(); ?>

	<div id="site-main" class="site-main container">

		<div class="row">
			<div class="col-xs-12 col-md-9" style="padding: 0;">

				<?php if (is_array($posts))
				{ ?>

					<div class="row form-group">
						<?php foreach ($posts as $post)
						{
							get_template_part('template-parts/portfolio', 'item');
						} ?>
					</div>

					<div class="row form-group">
						<div class="col-xs-12 col-md-6">
							<div class="panel panel-default">
								<div class="panel-image hide-panel-body">
									<img
										src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52d09387ae003_1.JPG"
										class="panel-image-preview"/>
								</div>
								<div class="panel-body">
									<h4>Title of Image</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis
										nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare.
										Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
								</div>
								<div class="panel-footer text-center">
									<a href="#download"><span class="glyphicon glyphicon-download"></span></a>
									<a href="#facebook"><span class="fa fa-facebook"></span></a>
									<a href="#twitter"><span class="fa fa-twitter"></span></a>
									<a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-md-6">
							<div class="panel panel-default">
								<div class="panel-image hide-panel-body">
									<img
										src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52cf9489095e8_1.JPG"
										class="panel-image-preview"/>
								</div>
								<div class="panel-body">
									<h4>Title of Image</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis
										nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare.
										Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
								</div>
								<div class="panel-footer text-center">
									<a href="#download"><span class="glyphicon glyphicon-download"></span></a>
									<a href="#facebook"><span class="fa fa-facebook"></span></a>
									<a href="#twitter"><span class="fa fa-twitter"></span></a>
									<a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
								</div>
							</div>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-xs-12 col-md-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">You can even have a Panel Title</h3>
								</div>
								<div class="panel-image hide-panel-body">
									<img
										src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52c470899a2e1_1.JPG"
										class="panel-image-preview"/>
								</div>
								<div class="panel-body">
									<h4>Title of Image</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis
										nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare.
										Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
								</div>
								<div class="panel-footer text-center">
									<a href="#download"><span class="glyphicon glyphicon-download"></span></a>
									<a href="#facebook"><span class="fa fa-facebook"></span></a>
									<a href="#twitter"><span class="fa fa-twitter"></span></a>
									<a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<div class="panel panel-default">
								<div class="panel-image">
									<img
										src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52cd36aac6bed_1.JPG"
										class="panel-image-preview"/>
								</div>
								<div class="panel-body">
									<h4>Show the Description by default!</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis
										nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare.
										Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
								</div>
								<div class="panel-footer text-center">
									<a href="#download"><span class="glyphicon glyphicon-download"></span></a>
									<a href="#facebook"><span class="fa fa-facebook"></span></a>
									<a href="#twitter"><span class="fa fa-twitter"></span></a>
									<a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
								</div>
							</div>
						</div>
					</div>

				<?php }
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