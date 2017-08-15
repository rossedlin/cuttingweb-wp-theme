<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 15/08/2017
 * Time: 21:46
 *
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package CuttingWeb
 */

get_header(); ?>

	<style xmlns="http://www.w3.org/1999/html">
		.nb-error
		{
			margin:     0 auto;
			text-align: center;
			max-width:  480px;
			padding:    60px 30px;
		}
		
		.nb-error div
		{
			padding: 10px 4px;
		}

		.nb-error .error-code
		{
			color:       #2d353c;
			font-size:   128px;
			line-height: 136px;
		}

		.nb-error .error-title
		{
			font-size:   15px;
			font-weight: bold;
		}

		.nb-error .error-desc
		{
			font-size: 14px;
			color:     #647788;
		}

		.nb-error .error-button a
		{
			margin: 2px 0;
		}

		.nb-error .input-group
		{
			margin: 30px 0;
		}
	</style>

	<div id="main" class="container site-main" style="">
		
		<div class="nb-error">

			<div class="col-xs-12 error-code">404</div>
			<div class="col-xs-12 error-title">We couldn't find the page...</div>
			<div class="col-xs-12 error-desc">
				Sorry, but the page you are looking for was either not found or does not exist.
			</div>

			<div class="col-xs-12 error-button">
				<a href="/home" class="btn btn-primary" style="padding: 8px 16px;">Go to the home page</a>
				<a href="/contact" class="btn btn-success" style="padding: 8px 16px;">Connect with me</a>
			</div>

			<div class="col-xs-12 error-search input-group">
				<form action="/" target="_top">
					<span class="input-group-btn">
						<input autocomplete="off"
							   class="form-control"
							   name="s"
							   size="10"
							   placeholder="Try searching..."
							   title="Search"
							   type="text"
							   value="">
						<button class="btn btn-default" title="search" type="submit"
								value="Search">
							<em class="fa fa-search"></em>
						</button>
					</span>
				</form>
			</div>
			
		</div>


	</div>

<?php
get_footer();