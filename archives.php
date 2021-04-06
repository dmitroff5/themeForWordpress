<?php
/*
Template Name: Архивы
*/
?>
<?php get_header(); ?>
	<div id="main">
		<div id="content">
			<?php get_search_form(); ?>
			<h2>Архивы по месяцам:</h2>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
			<h2>Архивы по теме:</h2>
			<ul>
				<?php wp_list_categories(); ?>
			</ul>
		</div>
		<!-- end content div -->
		<?php get_sidebar(); ?>
	</div>
	<!-- end main div -->
<?php get_footer(); ?>
