<!doctype html>
<html <?php language_attributes(); ?>>
<!-- тип кодировки документа -->
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> 
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!-- адаптивное отображение не зависимое от плотности пиксилей -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" integrity="sha256-KzIwBW816wzUouAZSb90aOvInJw+7CjwYEcAgvCYHO8=" crossorigin="anonymous" />  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="wrapper">
<div id="header">
	<h1><a href="<?php echo get_option('home'); ?>">
		<?php bloginfo('name'); ?>
		</a></h1>
	<div class="description">
		<?php bloginfo('description'); ?>
	</div>
	<div id="menu">
		<ul>
			<?php wp_list_pages('depth=1&title_li='); ?>
		</ul>
	</div>
</div>
<!-- end header -->
