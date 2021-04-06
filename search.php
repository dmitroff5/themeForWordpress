<?php get_header(); ?>
<div id="main">
	<div id="content">
		<?php if (have_posts()) : ?>
		<h2 class="pagetitle">Результат поиска	</h2>
		<div class="navigation">
			<div class="alignleft">
				<?php next_posts_link('&laquo; Предыдущие') ?>
			</div>
			<div class="alignright">
				<?php previous_posts_link('Следующие &raquo;') ?>
			</div>
		</div>
		<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class(); ?>  id="post-<?php the_ID(); ?>">
			<br/>
			<h3 id="post-<?php the_ID(); ?>">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
				<?php the_title(); ?>
				</a>
			</h3>
			<br/>
			<strong>
				<?php the_time('l, F jS, Y') ?>
			</strong>
			<div class="the-excerpt">
				<?php the_excerpt() ?>
			</div>
			<div class="entry-meta">Рубрика
				<?php the_category(', ') ?>
				<strong>|</strong>
				<?php edit_post_link('Edit','','<strong>|</strong>'); ?>
				<?php comments_popup_link('0 Комментариев &#187;', '1 Комментарий &#187;', '% Коментариев &#187;'); ?>
			</div>
		</div>
		<!-- end post -->
		<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft">
				<?php next_posts_link('&laquo; Предыдущие') ?>
			</div>
			<div class="alignright">
				<?php previous_posts_link('Следующие &raquo;') ?>
			</div>
		</div>
		<?php else : ?>
		<h2 class="center">Не найдено</h2>
		<?php get_search_form(); ?>
		<?php endif; ?>
	</div>
	<!-- end content -->
</div>
<!-- end main div -->
<?php get_footer(); ?>
