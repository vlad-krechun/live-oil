<?php
get_header();
?>

<div class="fullscreen fullscreen_one" style="background-image:url('<?php the_field('img_header'); ?>')">
	<div class="fullscreen__body">
		<span class="space">
			<a href="#about__oil" class="fullscreen__link">
				<h2 
				style="
						<?php
						$field = get_field('text_color');
						if ($field == 'dark') {
						?>
										color: #000
									<?php
								}
									?>
						"class="fullscreen__title"><?php the_field('1_quest'); ?><button class="fullscreen__title__button"><span>Află>></span></button></h2>

			</a> </span>
		<span class="space">
			<a href="#storage__oil" class="fullscreen__link">
				<h2 
				style="
						<?php
						$field = get_field('text_color');
						if ($field == 'dark') {
						?>
										color: #000
									<?php
								}
									?>
						"class="fullscreen__title"><?php the_field('2_quest'); ?><button class="fullscreen__title__button"><span>Află>></span></button></h2>

			</a></span>
		<span class="space">
			<a href="#contact" class="fullscreen__link">
				<h2 
				style="
						<?php
						$field = get_field('text_color');
						if ($field == 'dark') {
						?>
										color: #000
									<?php
								}
									?>
						"class="fullscreen__title"><?php the_field('3_quest'); ?> <button class="fullscreen__title__button"><span>Află></span>></button></h2>
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
			'category_name'    => 'seminte-ulei',
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
				<a href="#" class="seed__link">
			<div class="seed__one">
				<div class="wrapper__seed__img"> <img src="<?php echo bloginfo("template_url"); ?>/assets/img/dovleac.jpg" alt="De dovleac" class="seed__img">
				</div>
				<span class="seed__text"><?php the_title(); ?></span>
			</div>
		</a>
			<?php
		}

		wp_reset_postdata(); // сброс
		?>
		<a href="#" class="seed__link">
			<div class="seed__one">
				<div class="wrapper__seed__img"> <img src="<?php echo bloginfo("template_url"); ?>/assets/img/dovleac.jpg" alt="De dovleac" class="seed__img">
				</div>
				<span class="seed__text">De dovleac</span>
			</div>
		</a>
		<a href="#" class="seed__link">
			<div class="seed__one">
				<div class="wrapper__seed__img">
					<img src="<?php echo bloginfo("template_url"); ?>/assets/img/in.jpg" alt="De In" class="seed__img">
				</div>

				<span class="seed__text">De In</span>
			</div>
		</a>
		<a href="#" class="seed__link">
			<div class="seed__one">
				<div class="wrapper__seed__img">
					<img src="<?php echo bloginfo("template_url"); ?>/assets/img/susan.jpg" alt="De Susan" class="seed__img">
				</div>

				<span class="seed__text">De Susan</span>
			</div>
		</a>
		<a href="#" class="seed__link">
			<div class="seed__one">
				<div class="wrapper__seed__img">
					<img src="<?php echo bloginfo("template_url"); ?>/assets/img/chimen_negru.jpg" alt="De chimen Negru" class="seed__img">
				</div>
				<span  class="seed__text">De chimen Negru</span>
			</div>
		</a>
		<a href="#" class="seed__link">
			<div class="seed__one">
				<div class="wrapper__seed__img">
					<img src="<?php echo bloginfo("template_url"); ?>/assets/img/cinepa.jpg" alt="De cînepă" class="seed__img">
				</div>
				<span class="seed__text">De cînepă</span>
			</div>
		</a>
		<a href="#" class="seed__link">
			<div class="seed__one">
				<div class="wrapper__seed__img">
					<img src="<?php echo bloginfo("template_url"); ?>/assets/img/armurariu.jpg" alt="De armurariu" class="seed__img">
				</div>
				<span class="seed__text">De armurariu</span>
			</div>
		</a>
	</div>
</div>
<div class="container">
	<h2 class="container__title"><?php the_field('title_video'); ?></h2>
	<div class="container__video">
		<iframe width="720" height="405" src="<?php the_field('link_youtube'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
</div>
<div class="articles">
	<img src="<?php echo bloginfo("template_url"); ?>/assets/img/articles_1.jpg" alt="" class="articles__img articles__element">
	<div class="articles__small articles__element" id="about__oil">
		<h2 class="articles__title">Beneficiile uleiului viu</h2>
		<p class="articles__text">Uleiul vegetal, care a fost obținut prin metoda tradițională (presare manuală a
			semințelor crude) este baza multor benefici: Este un aliment bogat în nutrienți, cum ar fi: Omega 3,
			Omega 6, Omega 9 vitaminele А, Д, Е, К, В1, В2, și PP , și multe minerale etc. Se știe că uleiul, ca și
			apa este un bun dizolvant. Deci prezența lui este vitală pentru asimilarea majorității vitaminelor.
		</p>
		<a href="#" class="articles__link">
			<span class="articles__buttons">Citește mai departe...</span>
		</a>
	</div>
	<img src="<?php echo bloginfo("template_url"); ?>/assets/img/articles_2.jpg" alt="" class="articles__img articles__element">
	<div class="articles__small articles__element" id="storage__oil">
		<h2 class="articles__title">Cum sa păstrezi uleiul?</h2>
		<p class="articles__text">Pentru a păstra uleiul viu este nevoie de respectat cîteva reguli: Feriți de
			lumină Feriți de căldură Reduceți maximal contactul cu aerul Evitați contactul cu metale Recipientul în
			care se păstrează uleiul să fie uscat și steri
		</p>
		<a href="#" class="articles__link">
			<span class="articles__buttons ">Citește mai departe... </span>
		</a>
	</div>

</div>
<div class="green__line"></div>
<div class="wrraper__contacts" id="contact">
	<div class="contacts">
		<div class="contacts__tel">
			<h3 class="contacts__title"> Luați legatura cu noi: </h3>
			<a href="tel:<?php the_field('link_tel'); ?>" class="contacts__tel__link">&#9742 Sunați - <?php the_field('number_tel'); ?></a>
			<div class="social">
				<h3 class="social__title">Sau scrieți-ne pe rețele de socializare:</h3>
				<span class="facebook">
					<a href="<?php the_field('link_facebook'); ?>" class="social__link">
						<img src="<?php the_field('img_facebook'); ?>" alt="facebook" class="social__img">
					</a>
				</span>
				<span class="telegram">
					<a href="<?php the_field('link_telegram'); ?>" class="social__link">
						<img src="<?php the_field('img_telegram'); ?>" alt="telegram" class="social__img">
					</a>
				</span>

			</div>
		</div>
		<div class="contacts__form">
			<h3 class="contacts__form__title">Aveti o intrebare</h3>
			<form action="#">
				<label for="fname">Numele</label>
				<input type="text" id="fname" name="firstname" placeholder="Introduceti numele..." class="input__fname">

				<label for="lname">Telefonul</label>
				<input type="tel" id="phone" name="phone" placeholder="Telefonul Dumneavoastra..." class="input__phone">


				<label for="subject">Mesajul</label>
				<textarea id="subject" name="subject" placeholder="Scrieti mesajul.." class="textarea__subject"></textarea>

				<input type="submit" value="Trimite" class="input__submit">
			</form>
		</div>
	</div>
</div>

</div>
<?php
get_footer();
?>