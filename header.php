<!DOCTYPE html>
<html lang="ro">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">


	<title>
		<?php
		bloginfo('name');
		echo " | ";
		bloginfo('description');
		?>
	</title>
	<?php
	wp_head();
	?>

</head>

<body>
	<div class="wrapper">
		<div class="phone__wrapper">
			<div class="phone">
				<a href="tel:<?php the_field('link_tel'); ?>" class="phone__link">
					<img src="<?php echo bloginfo("template_url"); ?>/assets/img/phone.png" alt="" class="phone__img">
				</a>
			</div>
		</div>
		<?php
		if (is_user_logged_in()) {
			echo '<header class="header log_in">';
		} else {
			echo '<header class="header">';
		}

		?>

		<div class='container'>
			<div class="header__body">

				<!-- <a href="#" class="header__logo">
							<img src="<?php //echo bloginfo("template_url");
											?>/assets/img/logo.jpg" alt="">
						</a> -->
				<div class="header__burger">

					<span></span>
					<p class="menu">Menu</p>
				</div>
				<nav class="header__menu">

					<?php

					if (is_front_page()) {
						wp_nav_menu([
							// 'theme_location'  => '',
							'menu'            => 'Top_menu',
							'container'       => false,
							// 'container_class' => '', 
							// 'container_id'    => '',
							'menu_class'      => 'header__menu',
							// 'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							// 'before'          => '',
							// 'after'           => '',
							// 'link_before'     => '',
							// 'link_after'      => '',
							'items_wrap'      => '<ul class="header__list">%3$s</ul>',
							'depth'           => 0
							// 'walker'          => '',
						]);
					} else {
						wp_nav_menu([
							// 'theme_location'  => '',
							'menu'            => 'Top_menu_page',
							'container'       => false,
							// 'container_class' => '', 
							// 'container_id'    => '',
							'menu_class'      => 'header__menu',
							// 'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							// 'before'          => '',
							// 'after'           => '',
							// 'link_before'     => '',
							// 'link_after'      => '',
							'items_wrap'      => '<ul class="header__list">%3$s</ul>',
							'depth'           => 0
							// 'walker'          => '',
						]);
					}


					?>


					<!-- <ul class="header__list">
						<li>
							<a href="#" class="header__link header__link__active">Start</a>
						</li>
						<li>
							<a href="" class="header__link">Blog</a>
						</li>
						<li>
							<a href="#contact" class="header__link">Contacte</a>
						</li>
						<li>
							<a href="#contact" class="header__link">Despre noi</a>
						</li>
						<li>
							<a href="tel:" class="header__link"></a>
						</li>
						
					</ul> -->
				</nav>

				<div class="header__search search">
					<a href="tel:<?php the_field('link_tel', '2'); ?>" class="header__link "><?php the_field('number_tel', '2'); ?></a>
					<!-- <input type="search" id="site-search" name="q" aria-label="Search through site content" class="search__input">
					<button class="search__button">
						<img src="<?php echo bloginfo("template_url"); ?>/assets/img/search.png" alt="Caută" class="search__img">
					</button> -->
					<?php get_template_part('sidebar-search'); ?>

				</div>
			</div>
		</div>
		</header>