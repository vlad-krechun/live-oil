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
		<!-- ГОЛОВА БЛОГА -->
		<?php get_template_part( 'first-article' ); ?>
	</div>
</div>
<div class="wrapper_content_blog">
	<div class="content_blog">
		<div class="article__list">
			<?php if (have_posts()) {
				while (have_posts()) {
					the_post(); ?>
					<!-- Цикл WordPress -->
					<!-- Вывод постов: the_title() и т.д. -->
					<div class="article">
				<div class="img__prev">
					<a href="<?php the_permalink(); ?>" class="img__prev-link">
						<?php the_post_thumbnail('seed-thumb'); ?>

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
				<?php } ?>
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