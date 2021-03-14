<?php
/*
		Template Name: Страница категории
		Template Post Type:  page, category 
		
*/
?>

<?php
get_header();
?>





<div class="header_blog-category">

	<div class="title__category">
		<span>Articole din această categorie</span>
	</div>

</div>

<div class="wrapper_content_blog">
	<div class="content_blog">
		<div class="article__list">
			<?php if (have_posts()) {
				while (have_posts()) {
					the_post(); ?>

					<div class="article">
						<div class="img__prev">
							<a href="<?php the_permalink(); ?>" class="img__prev-link">
								<?php the_post_thumbnail('seed-thumb'); ?>


							</a>
						</div>

						<div class="article_text">
							<a href="" class="article__link">
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
				<?php }
				?>
				<?php
				$args = array(
					'show_all'     => false, // показаны все страницы участвующие в пагинации
					'end_size'     => 1,     // количество страниц на концах
					'mid_size'     => 1,     // количество страниц вокруг текущей
					'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
					'prev_text'    => __('« Previous'),
					'next_text'    => __('Next »'),
					'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
					'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
					'screen_reader_text' => __('Posts navigation'),
				);
				add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
				function my_navigation_template( $template, $class ){
					/*
					Вид базового шаблона:
					<nav class="navigation %1$s" role="navigation">
						<h2 class="screen-reader-text">%2$s</h2>
						<div class="nav-links">%3$s</div>
					</nav>
					*/

					return '
					<nav class="navigation %1$s" role="navigation">
						<div class="nav-links">%3$s</div>
					</nav>    
					';
				}

				?>
			

				<?php the_posts_pagination(); ?>
			<?php
			} else { ?>
				<p>Записей нет.</p>
			<?php } ?>


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