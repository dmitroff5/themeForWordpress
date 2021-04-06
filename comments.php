<?php
// Не удалять эти строки
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Пожалуйста, не загружайте эту страницу напрямую. Спасибо!');

// Стандартный WordPress комментарии безопасности
if ( post_password_required() ) {
	echo '<p class="nocomments">Этот пост защищен паролем. Введите пароль для просмотра комментариев.</p>';
	return;
}
?>
<?php if (have_comments()): ?>
	<h4 id="comments">
		<?php comments_number('0 Комментариев Comments', '1 Комментарий', '% Коментариев' );?>
	</h4>
	
	<div class="navigation">
		<div class="alignleft">
			<?php previous_comments_link() ?>
		</div>
		<div class="alignright">
			<?php next_comments_link() ?>
		</div>
		<br/>
	</div>
	
	<ol class="commentlist">
		<?php wp_list_comments(); ?>
	</ol>
	<div class="navigation">
		<?php paginate_comments_links(); ?>
	</div>
<?php else: // это отображается, если "нет Комментариев" пока нет ?>

	<?php if (comments_open()): // Если комментарии являются открытыми, но "нет комментариев". ?>
	
	<?php else: // comments are closed ?>
		<p class="nocomments">Комментарии закрыты.</p>
	<?php endif; ?>
	
<?php endif; ?>


<?php if (comments_open()): // Форма комментария ?>

<div id="respond">

<h3><?php comment_form_title( 'Оставить комментарий', 'Ответить на комментарий от %s' ); ?></h3>

<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p>Вы должны <a href="<?php echo wp_login_url( get_permalink() ); ?>">зайти</a>, чтобы оставить комментарий.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( is_user_logged_in() ) : ?>

<p>ВЫ зашли как <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Выйти из своего акаунта">Выйти &raquo;</a></p>

<?php else : ?>

<p>
	<label for="author"><small>Имя <?php if ($req) echo "(Обяз.)"; ?></small></label>
	<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
</p>

<p>
<label for="email"><small>E-Mail (не будет опубликовано) <?php if ($req) echo "(Обяз.)"; ?></small></label>
	<input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
</p>

<p>
	<label for="url"><small>Сайт</small></label>
	<input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
</p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> Вы можете использовать эти теги: <code><?php echo allowed_tags(); ?></code></small></p>-->

<p><textarea name="comment" id="comment" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Отправить" />
<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // Если требуется регистрация и не вошли в систему ?>
</div>

<?php endif; // если вы удалите это Ваш шаблон поплывет 8)  ?>
