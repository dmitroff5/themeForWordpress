<?php
/*
Template Name: ������
*/
?>
<?php get_header(); ?>
	<div id="main">
		<div id="content">
			<h2>������:</h2>
			<ul>
				<?php wp_list_bookmarks(); ?>
			</ul>
		</div>
		<!-- end content div-->
		<?php get_sidebar(); ?>
	</div>
	<!-- end main div-->
<?php get_footer(); ?>
