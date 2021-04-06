<?php get_header(); ?>
<div id="main">
	<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="navigation">
				<div class="alignleft">
					<?php previous_post_link('&laquo; %link') ?>
				</div>
				<div class="alignright">
					<?php next_post_link('%link &raquo;') ?>
				</div>
			</div>
			<div <?php post_class(); ?>  id="post-<?php the_ID(); ?>">
				<h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
					<?php the_title(); ?>
				</a></h2>
				<div class="entry-content">
				<?php the_content('<p class="serif">Подробнее &raquo;</p>'); ?>
						<?php wp_link_pages('<p><strong>Страница:</strong> ', '</p>', 'number'); ?>
					<p>
						<?php if ( function_exists('the_tags') ) { the_tags(); } ?>
					</p>
					<div class="underpost">
							Автор <?php the_author(); ?> Дата  <?php the_time('F jS, Y') ?>  Рубрика <?php the_category(', ') ?>
														
							<?php edit_post_link('Ред.', '', ''); ?>
					</div>
					<!-- end underpost div-->
				</div>
				<!-- end entry-content div -->
			</div>
			<!-- end post div-->
			<?php comments_template(); ?>
		<?php endwhile; else: ?>
			<p>Извините, нет записей, удовлетворяющих вашим условиям.</p>
		<?php endif; ?>
	</div>
	<!-- end content div-->
	<?php get_sidebar(); ?>
</div>
<!-- end the main div-->
<?php get_footer(); ?>
