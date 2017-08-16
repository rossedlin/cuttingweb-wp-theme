<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 15/08/2017
 * Time: 14:26
 */
?>

<style>
	.widget .widget-search
	{
		background:         #FFFFFF;
		width:              100%;
		padding:            15px 20px;
		color:              rgba(0, 0, 0, 0.5);
		-webkit-appearance: none;
	}
</style>

<div class="panel panel-widget widget">
	<div class="panel-heading widget-title" style="background: #333;">Search this Site</div>
	<div class="panel-body widget-content" style="padding: 15px;">
		<form action="/" class="gsc-search-box" target="_top">

			<input autocomplete="off"
				   class="widget-search"
				   name="s"
				   size="10"
				   placeholder="Search …"
				   title="Search"
				   type="text"
				   value="">
			
<!--			<input class="" title="search" type="submit" value="Search">-->
		</form>
	</div>
</div>
