<?php
get_header();
?>

<div class="fullscreen fullscreen_one" style="background-image:url('<?php the_field('img_header', '2'); ?>')">
	<div class="fullscreen__body">
		<span class="space">
			<a href="#about__oil" class="fullscreen__link">
				<h2 style="
						<?php
						$field = get_field('text_color');
						if ($field == 'dark') {
						?>
										color: #000
									<?php
								}
									?>
						" class="fullscreen__title"><?php the_field('1_quest', '2'); ?><button
						class="fullscreen__title__button"><span>Află</span></button></h2>

			</a> </span>
		<span class="space">
			<a href="#about__oil" class="fullscreen__link">
				<h2 style="	<?php $field = get_field('text_color'); if ($field == 'dark') {	?>color: #000 <?php }?>
						" class="fullscreen__title"><?php the_field('2_quest', '2'); ?>
						<button
						class="fullscreen__title__button"><span>Află</span></button>
					</h2>

			</a></span>
		<span class="space">
			<a href="#contact" class="fullscreen__link">
				<h2 style="
						<?php
						$field = get_field('text_color');
						if ($field == 'dark') {
						?>
										color: #000
									<?php
								}
									?>
						" class="fullscreen__title"><?php the_field('3_quest', '2'); ?> <button
						class="fullscreen__title__button"><span>Află</span></button></h2>
			</a>
		</span>
	</div>
</div>
<div class="content">
	<h2 class="title__seed"> Unele semințe din care presăm ulei:</h2>
	<div class="seed">
		<?php
		$posts = get_posts(array(
			'numberposts' => -1,
			//'category_name'    => ,
			'orderby'     => 'date',
			'order'       => 'ASC',
			'include'     => array(),
			// 'exclude'     => array(),
			// 'meta_key'    => '',
			// 'meta_value'  =>'',
			'post_type'   => 'post',
			'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
		));

		foreach ($posts as $post) {
			setup_postdata($post);
		?>
		<div class="seed__one">
			<a href="<?php the_permalink(); ?>" class="seed__link">

				<div class="wrapper__seed__img">
					<?php the_post_thumbnail('seed-thumb'); ?>

				</div>
				<span class="seed__text"><?php the_title(); ?></span>
			</a>
		</div>
		<?php
		}

		wp_reset_postdata(); // сброс
		?>


	</div>
</div>
<div class="container">
	<h2 class="container__title"><?php the_field('title_video', '2'); ?></h2>
	<div class="container__video">
		<iframe width="720" height="405" src="<?php the_field('link_youtube', '2'); ?>" frameborder="0"
			allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
</div>
<div class="articles">
	<?php
	$posts = get_posts(array(
		'numberposts' => -1,
		'category_name'    => 'quest',
		'orderby'     => 'date',
		'order'       => 'ASC',
		'include'     => array(),
		// 'exclude'     => array(),	
		// 'meta_key'    => '',
		// 'meta_value'  =>'',
		'post_type'   => 'post',
		'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
	));

	foreach ($posts as $post) {
		setup_postdata($post);
	?>
	<div class="wrapper__articles__img articles__element">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail(); ?>
		</a>
		<?php echo bloginfo("template_url"); ?>

	</div>
	<div class="articles__small articles__element" id="about__oil">
		<a href="<?php the_permalink(); ?>">
			<h2 class="articles__title"><?php the_title(); ?></h2>
		</a>

		<div class="articles__text">
			<?php the_excerpt(); ?>
		</div>
		<a href="<?php the_permalink(); ?>" class="articles__link">
			<span class="articles__buttons">Citește mai departe...</span>
		</a>
	</div>
	<?php
	}

	wp_reset_postdata(); // сброс
	?>

	<!-- <div class="wrapper__articles__img articles__element">
			<img src="<?php echo bloginfo("template_url"); ?>/assets/img/articles_2.jpg" alt="" class="articles__img ">

	</div>	
	<div class="articles__small articles__element" id="storage__oil">
		<h2 class="articles__title">Cum sa păstrezi uleiul?</h2>
		<p class="articles__text">Pentru a păstra uleiul viu este nevoie de respectat cîteva reguli: Feriți de
			lumină Feriți de căldură Reduceți maximal contactul cu aerul Evitați contactul cu metale Recipientul în
			care se păstrează uleiul să fie uscat și steri
		</p>
		<a href="#" class="articles__link">
			<span class="articles__buttons ">Citește mai departe... </span>
		</a>
	</div> -->

</div>
<div class="green__line"></div>
<div class="wrraper__contacts" id="contact">
	<div class="contacts">
		<div class="contacts__tel">
			<h3 class="contacts__title"> Luați legatura cu noi: </h3>
			<a href="tel:<?php the_field('link_tel', '2'); ?>" class="contacts__tel__link">&#9742 Sunați -
				<?php the_field('number_tel', '2'); ?></a>
			<div class="social">
				<h3 class="social__title">Sau scrieți-ne pe rețele de socializare:</h3>
				<span class="facebook">
					<a href="<?php the_field('link_facebook', '2'); ?>" class="social__link">
						<img src="<?php the_field('img_facebook', '2'); ?>" alt="facebook" class="social__img">
					</a>
				</span>
				<span class="instagram">
					<a href="<?php the_field('link_instagram', '2'); ?>" class="social__link">
						<img src="<?php the_field('img_instagram', '2'); ?>" alt="telegram" class="social__img">
					</a>
				</span>
				<span class="telegram">
					<a href="<?php the_field('link_telegram', '2'); ?>" class="social__link">
						<img src="<?php the_field('img_telegram', '2'); ?>" alt="telegram" class="social__img">
					</a>
				</span>


			</div>
		</div>
		<div class="contacts__form">
			<h3 class="contacts__form__title">Aveti o intrebare</h3>
			<?php
			echo do_shortcode('[contact-form-7 id="101" title="Intrebare"]');
			?>
		</div>
	</div>
</div>

</div>
<!-- Временая проверка -->

<?php
get_footer();
?>


Действительно[отклонено] Главная -> Главная (Fetch First)
Ошибка: не удалось нажать несколько Refs на «https://github.com/vlad-krechun/live-oil.git»
Подсказка: обновления были отклонены, потому что удаленный содержит работу, которые вы делаете
Подсказка: не иметь локально.Это обычно вызвано очередным толканием репозитория
Подсказка: к тому же работе.Вы можете сначала интегрировать удаленные изменения
Подсказка: (например, «Гит расскажи ...») Перед толканием снова нажимается.
Подсказка: см. «Примечание о быстродействии» в «Git Push --help» для деталей.