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
				</a></div>
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
					<ul class="header__list">
						<li>
							<a href="<?php echo home_url();?>" class="header__link header__link__active">Start</a>
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
							<a href="tel:<?php the_field('link_tel'); ?>" class="header__link"><?php the_field('number_tel'); ?></a>
						</li>
						<!-- <li>
							<a href="" class="header__link">
								<span class="lang">
									<img src="<?php echo bloginfo("template_url"); ?>/assets/img/lang.png" alt="" class="lang__logo">
									Ru
								</span>
							</a>
						</li> -->
					</ul>
				</nav>
				<div class="header__search search">
					<input type="search" id="site-search" name="q" aria-label="Search through site content" class="search__input">
					<button class="search__button">
						<img src="<?php echo bloginfo("template_url"); ?>/assets/img/search.png" alt="Caută" class="search__img">
					</button>

				</div>
			</div>
		</div>
		</header>