<footer class="footer">
	<div class="footer__wrapper">
		<div class="footer__articles">
			<h3 class="footer__articles__title">Articole</h3>
			<span>
				<ul>
				<?php
				$posts = get_posts(array(
					'numberposts' => 6,
					'category'    => 0,
					'orderby'     => 'date',
					'order'       => 'DESC',
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
					<li>
						<a class="footer__articles__title-link" href="<?php the_permalink();?>"><?php the_title(); ?></a>
					</li>
				<?php
				}

				wp_reset_postdata(); // сброс
				?>
				</ul>
			</span>
		</div>
		<div class="footer__seeds">
			<h3 class="footer__seeds__title">Ulei din seminte de</h3>
			<span>
				<ul>
				<?php
				$posts = get_posts(array(
					'numberposts' => 8,
					'category_name'    => 'descriere-ulei',
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
					<li>
						<a class="footer__seeds__title-link" href="<?php the_permalink();?>"><?php the_title(); ?></a>
					</li>
				<?php
				}

				wp_reset_postdata(); // сброс
				?>
				</ul>
			</span>
		</div>
		<div class="footer__about">
			<h3 class="footer__about__title">Despre noi:</h3>
			<img src="<?php echo bloginfo("template_url"); ?>/assets/img/about.jpg" alt="Despre noi">
		</div>
	</div>

</footer>

<!-- Подключаем jQuery -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
<!-- Подключаем файл JS скриптов -->
<?php
wp_footer();
?>
</body>

</html>