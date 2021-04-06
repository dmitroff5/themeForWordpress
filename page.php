<?php get_header(); ?>
	<div id="main">
		<div id="content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div <?php post_class(); ?>  id="post-<?php the_ID(); ?>">
				<h3>
					<?php the_title(); ?>
				</h3>
				<div class="entry-content">
					<?php the_content('<p class="serif">Подробнее &raquo;</p>'); ?>
					<?php wp_link_pages('<p><strong>Страница:</strong> ', '</p>', 'number'); ?>
				</div>
			</div>
			<?php endwhile; endif; ?>
			<?php edit_post_link(' Ред.', '<p>', '</p>'); ?>
			<?php comments_template(); ?>
		</div>
		<!-- end content div-->
		<?php get_sidebar(); ?>
	</div>
	<!-- end the main div-->
<?php get_footer(); ?>
