<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CuttingWeb
 */

?>

		<hr />
		
		<footer id="colophon" class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">
						Copyright © <?= date('Y'); ?> Cutting Web
					</div>
					<div class="col-xs-12 text-center">
						Created by <a href="http://www.rossedlin.co.uk/" target="_blank">Ross Edlin</a> | Powered by <a href="http://www.wordpress.org/" target="_blank">WordPress.org</a>
					</div>
				</div><!-- .site-info -->
			</div>
		</footer><!-- #colophon -->

	</div><!-- #content -->
</div><!-- #page -->

<!-- Latest compiled and minified JavaScript -->
<script src="/wp-content/themes/cuttingweb-underscore/bootstrap-3.3.7/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
