<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CuttingWeb
 */
?>

<style>
	.search-form
	{
		background: #FFFFFF;
		width: 100%;
		padding: 15px 20px;
		color: rgba(0, 0, 0, 0.5);
		-webkit-appearance: none;
	}
</style>

<?php
if (is_active_sidebar('sidebar-main'))
{
	dynamic_sidebar('sidebar-main');
}