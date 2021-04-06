<form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
	<div>
		<input value="<?php the_search_query(); ?>" type="text" name="s" id="s" />
		<input type="submit" value="<?php esc_attr_e('Поиск'); ?>" />
	</div>
</form>
