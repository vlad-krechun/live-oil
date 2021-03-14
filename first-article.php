<?php
		// параметры по умолчанию
		$posts = get_posts(array(
			'numberposts' => 1,
			'category'    => 0,
			'orderby'     => 'rand',
			'order'       => 'ASC',
			'include'     => array(),
			'exclude'     => array(),
			'meta_key'    => '',
			'meta_value'  => '',
			'post_type'   => 'post',
			'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
		));

		foreach ($posts as $post) {
			setup_postdata($post);
		?>
			<?php the_post_thumbnail(); ?>
			<!-- <img class="header_blog_img" src="<?php echo bloginfo("template_url"); ?>/assets/img/cinepa_blog.jpg" alt=""> -->
			<a href="<?php the_permalink(); ?>" class="header__blog__link">
				<div class="header_blog_text">

					<h1 class="header_blog_title">
						<?php the_title(); ?>
					</h1>
					<a href="<?php the_permalink(); ?>" class="articles__link">
						<span class="articles__buttons">Citește mai departe...</span>
					</a>
				</div>
			</a>
		<?php
			// формат вывода the_title() ...
		}

		wp_reset_postdata(); // сброс
		?>