<?php
/*
Template Name: Contacte

*/
?>
<?php
get_header();
?>

<div class="wrraper__contacts  id="contact">
	<div class="contacts">
		<div class="contacts__tel">
			<h3 class="contacts__title"> Luați legatura cu noi: </h3>
			<a href="tel:<?php the_field('link_tel', '2'); ?>" class="contacts__tel__link">&#9742 Sunați - <?php the_field('number_tel', '2'); ?></a>
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
<?php
get_footer();
?>