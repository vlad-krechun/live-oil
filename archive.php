<?php
/*
		Template Name: Страница блога
		Template Post Type:  page, category 
		
*/
?>

<?php
get_header();
?>

<div class="header_blog">

	<div class="header_blog_block">
		<?php
		// параметры по умолчанию
		$posts = get_posts(array(
			'numberposts' => 1,
			'category'    => 0,
			'orderby'     => 'date',
			'order'       => 'DESC',
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
	</div>
</div>
<div class="wrapper_content_blog">
	<div class="content_blog">
		<div class="article__list">

			<?php
			// параметры по умолчанию
			$posts = get_posts(array(
				'numberposts' => -1,
				'category'    => 0,
				'orderby'     => 'date',
				'order'       => 'DESC',
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
				<div class="article">
					<div class="img__prev">
						<a href="<?php the_permalink(); ?>" class="img__prev-link">
							<?php the_post_thumbnail('seed-thumb'); ?>
							<!-- <img src="<?php echo bloginfo("template_url"); ?>/assets/img/cinepa_blog.jpg" alt=""> -->

						</a>
					</div>

					<div class="article_text">
						<a href="<?php the_permalink(); ?>" class="article__link">
							<h2 class="article_title"><?php the_title(); ?></h2>
						</a>
						<div class="article_category">
							<?php the_category(); ?>

						</div>
						<div class="article_label">
							<?php the_tags('#', '', ''); ?>

						</div>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="articles__link">
							<span class="articles__buttons">Citește mai departe...</span>
						</a>
					</div>
				</div>

			<?php
				// формат вывода the_title() ...
			}
			if (function_exists('wp_corenavi')) wp_corenavi();
			wp_reset_postdata(); // сброс
			?>

			<!-- <nav class="pagination">
				<ul>
					<li><span class="page-numbers prev inactive">Prev</span></li>
					<li><span class="page-numbers current">1</span></li>
					<li><a href="#" class="page-numbers">2</a></li>
					<li><a href="#" class="page-numbers">3</a></li>
					<li><a href="#" class="page-numbers">4</a></li>
					<li><a href="#" class="page-numbers">5</a></li>
					<li><a href="#" class="page-numbers">6</a></li>
					<li><a href="#" class="page-numbers">7</a></li>
					<li><a href="#" class="page-numbers">8</a></li>
					<li><a href="#" class="page-numbers">9</a></li>
					<li><a href="#" class="page-numbers next">Next</a></li>
				</ul>
			</nav> -->
		</div>
		<div class="aside__wrapper">
			<?php get_sidebar(); ?>
		</div>

	</div>
</div>


<?php
get_footer();
?>