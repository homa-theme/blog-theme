<htm>

	<head>
		<meta charset=bloginfo('charset')>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- title va bloginfo name ja monde -->
		<?php wp_head();?>
	</head>
	<body <?php body_class(); ?>>
		<div class="container">
		<header class="site-header"><!-- header-->
				<a href="<?php echo home_url() ?>"><h1><?php echo bloginfo('title'); ?></h1></a>
				<h5><?php echo bloginfo('description');?></h5>
				<nav class="site-nav clearfix">
					<?php
					 $args = array(
						 'theme_location'=>'primary'
					 );
					 ?>
					<?php wp_nav_menu($args); ?>
				</nav>
				<?php custom_breadcrumbs(); ?>
		</header>
