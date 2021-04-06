<?php get_header(); ?>
	<div id="main">
		<div id="content">
			<?php if (have_posts()) : ?>
			<?php $post = $posts[0];  ?>
			<?php /* Если это архив категорий */ if (is_category()) { ?>
			<h2 class="pagetitle">Архив по категории  '<?php echo single_cat_title(); ?>' </h2>
			<?php /* Если это ежедневный архив */ } elseif (is_day()) { ?>
			<h2 class="pagetitle">Архив за
				<?php the_time('F jS, Y'); ?>
			</h2>
			<?php /* Если это ежемесячный архив */ } elseif (is_month()) { ?>
			<h2 class="pagetitle">Архив за
				<?php the_time('F, Y'); ?>
			</h2>
			<?php /* Если это ежегодный архив */ } elseif (is_year()) { ?>
			<h2 class="pagetitle">Архив за
				<?php the_time('Y'); ?>
			</h2>
			<?php /* Если это поиск */ } elseif (is_search()) { ?>
			<h2 class="pagetitle">Результат поиска</h2>
			<?php /* Если это архив автора */ } elseif (is_author()) { ?>
			<h2 class="pagetitle">Архив автора</h2>
			<?php /* Если это страничный архив */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="pagetitle">Архив блога</h2>
				<?php } ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="post">
				<div class="entry-date">
					<div class="entry-month">
						<?php the_time('M'); ?>
					</div>
					<div class="entry-day">
						<?php the_time('d'); ?>
					</div>
				</div>
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
					<?php the_title(); ?>
					</a></h2>
				<div class="entry-excerpt">
				    <?php the_content('<p class="serif">Подробнее &raquo;</p>'); ?>
					<?php the_excerpt() ?>
				</div>
				<div class="entry-meta">Рубрика
					<?php the_category(', ') ?>
					<strong>|</strong>
					<?php edit_post_link('Edit','','<strong>|</strong>'); ?>
					<?php comments_popup_link('Нет комментариев &#187;', '1 комментарий &#187;', '% комментариев &#187;'); ?>
					
										
					
				</div>
			</div>
			<!-- end post-->
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
		<!-- end content div-->
		<?php get_sidebar(); ?>
	</div>
	<!-- end main div-->
<?php get_footer(); ?>
