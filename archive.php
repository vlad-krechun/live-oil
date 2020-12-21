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
		<img class="header_blog_img" src="<?php echo bloginfo("template_url"); ?>/assets/img/cinepa_blog.jpg" alt="">
		<a href="" class="header__blog__link">
			<div class="header_blog_text">

				<h1 class="header_blog_title">
					Beneficiile uleiului viu presat la rece si consumarea lui
				</h1>
				<a href="#" class="articles__link">
					<span class="articles__buttons">Citește mai departe...</span>
				</a>
			</div>
		</a>

	</div>
</div>
<div class="wrapper_content_blog">
	<div class="content_blog">
		<div class="article__list">
					
			<?php
								// параметры по умолчанию
				$posts = get_posts( array(
					'numberposts' => -1,
					'category'    => 0,
					'orderby'     => 'date',
					'order'       => 'DESC',
					'include'     => array(),
					'exclude'     => array(),
					'meta_key'    => '',
					'meta_value'  =>'',
					'post_type'   => 'post',
					'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
				) );

				foreach( $posts as $post ){
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
					<a href="" class="article__link">
						<h2 class="article_title"><?php the_title(); ?></h2>
					</a>
					<div class="article_category">
					<?php the_category(); ?>

					</div>
					<div class="article_label">
					<?php the_tags( '#', '', '' ); ?>

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

				wp_reset_postdata(); // сброс
			?>



			<div class="article">
				<div class="img__prev">
					<a href="http://google.com" class="img__prev-link">

						<img src="<?php echo bloginfo("template_url"); ?>/assets/img/cinepa_blog.jpg" alt="">

					</a>
				</div>

				<div class="article_text">
					<a href="" class="article__link">
						<h2 class="article_title">Lorem ipsum dolor sit amet consectetur</h2>
					</a>
					<div class="article_category">
						<a href="#" class="category_link">Category</a>
						<a href="#" class="category_link">Category</a>

					</div>
					<div class="article_label">
						<a href="#" class="article__label-single">Label 1</a>
						<a href="#" class="article__label-single">Label 2</a>
						<a href="#" class="article__label-single">Label 3</a>
						<a href="#" class="article__label-single">Label 4</a>

					</div>
					<p class="article_prev"> Tdipisicing elit. Distinctio, laborum consequatur velit assumenda iure
						asperiores, in, facilis modi cumque eius architecto? Itaque pariatur sed ab omnis veniam. Obcaecati,adipisicing elit. Distinctio, laborum consequatur velit assumenda iure
						asperiores, in, facilis modi cumque eius architecto? Itaque pariatur sed ab omnis veniam. Obcaecati,
						omnis rerum.</p>
					<a href="#" class="articles__link">
						<span class="articles__buttons">Citește mai departe...</span>
					</a>
				</div>
			</div>






			<!-- <div class="article">
				<div class="img__prev">
					<a href="http://google.com" class="img__prev-link">

						<img src="<?php echo bloginfo("template_url"); ?>/assets/img/cinepa_blog.jpg" alt="">

					</a>
				</div>

				<div class="article_text">
					<a href="" class="article__link">
						<h2 class="article_title">Lorem ipsum dolor sit amet consectetur</h2>
					</a>
					<div class="article_category">
						<a href="#" class="category_link">Category</a>
						<a href="#" class="category_link">Category</a>

					</div>
					<div class="article_label">
						<a href="#" class="article__label-single">Label 1</a>
						<a href="#" class="article__label-single">Label 2</a>
						<a href="#" class="article__label-single">Label 3</a>
						<a href="#" class="article__label-single">Label 4</a>

					</div>
					<p class="article_prev"> Tdipisicing elit. Distinctio, laborum consequatur velit assumenda iure
						asperiores, in, facilis modi cumque eius architecto? Itaque pariatur sed ab omnis veniam. Obcaecati,adipisicing elit. Distinctio, laborum consequatur velit assumenda iure
						asperiores, in, facilis modi cumque eius architecto? Itaque pariatur sed ab omnis veniam. Obcaecati,
						omnis rerum.</p>
					<a href="#" class="articles__link">
						<span class="articles__buttons">Citește mai departe...</span>
					</a>
				</div>
			</div>
			<div class="article">
				<div class="img__prev">
					<a href="http://google.com" class="img__prev-link">

						<img src="<?php echo bloginfo("template_url"); ?>/assets/img/cinepa_blog.jpg" alt="">

					</a>
				</div>

				<div class="article_text">
					<a href="" class="article__link">
						<h2 class="article_title">Lorem ipsum dolor sit amet consectetur</h2>
					</a>
					<div class="article_category">
						<a href="#" class="category_link">Category</a>
						<a href="#" class="category_link">Category</a>

					</div>
					<div class="article_label">
						<a href="#" class="article__label-single">Label 1</a>
						<a href="#" class="article__label-single">Label 2</a>
						<a href="#" class="article__label-single">Label 3</a>
						<a href="#" class="article__label-single">Label 4</a>

					</div>
					<p class="article_prev"> Tdipisicing elit. Distinctio, laborum consequatur velit assumenda iure
						asperiores, in, facilis modi cumque eius architecto? Itaque pariatur sed ab omnis veniam. Obcaecati,adipisicing elit. Distinctio, laborum consequatur velit assumenda iure
						asperiores, in, facilis modi cumque eius architecto? Itaque pariatur sed ab omnis veniam. Obcaecati,
						omnis rerum.</p>
					<a href="#" class="articles__link">
						<span class="articles__buttons">Citește mai departe...</span>
					</a>
				</div>
			</div>
			<div class="article">
				<div class="img__prev">
					<a href="http://google.com" class="img__prev-link">

						<img src="<?php echo bloginfo("template_url"); ?>/assets/img/cinepa_blog.jpg" alt="">

					</a>
				</div>

				<div class="article_text">
					<a href="" class="article__link">
						<h2 class="article_title">Lorem ipsum dolor sit amet consectetur</h2>
					</a>
					<div class="article_category">
						<a href="#" class="category_link">Category</a>
						<a href="#" class="category_link">Category</a>

					</div>
					<div class="article_label">
						<a href="#" class="article__label-single">Label 1</a>
						<a href="#" class="article__label-single">Label 2</a>
						<a href="#" class="article__label-single">Label 3</a>
						<a href="#" class="article__label-single">Label 4</a>

					</div>
					<p class="article_prev"> Tdipisicing elit. Distinctio, laborum consequatur velit assumenda iure
						asperiores, in, facilis modi cumque eius architecto? Itaque pariatur sed ab omnis veniam. Obcaecati,adipisicing elit. Distinctio, laborum consequatur velit assumenda iure
						asperiores, in, facilis modi cumque eius architecto? Itaque pariatur sed ab omnis veniam. Obcaecati,
						omnis rerum.</p>
					<a href="#" class="articles__link">
						<span class="articles__buttons">Citește mai departe...</span>
					</a>
				</div>
			</div>
			<div class="article">
				<div class="img__prev">
					<a href="http://google.com" class="img__prev-link">

						<img src="<?php echo bloginfo("template_url"); ?>/assets/img/cinepa_blog.jpg" alt="">

					</a>
				</div>

				<div class="article_text">
					<a href="" class="article__link">
						<h2 class="article_title">Lorem ipsum dolor sit amet consectetur</h2>
					</a>
					<div class="article_category">
						<a href="#" class="category_link">Category</a>
						<a href="#" class="category_link">Category</a>

					</div>
					<div class="article_label">
						<a href="#" class="article__label-single">Label 1</a>
						<a href="#" class="article__label-single">Label 2</a>
						<a href="#" class="article__label-single">Label 3</a>
						<a href="#" class="article__label-single">Label 4</a>

					</div>
					<p class="article_prev"> Tdipisicing elit. Distinctio, laborum consequatur velit assumenda iure
						asperiores, in, facilis modi cumque eius architecto? Itaque pariatur sed ab omnis veniam. Obcaecati,adipisicing elit. Distinctio, laborum consequatur velit assumenda iure
						asperiores, in, facilis modi cumque eius architecto? Itaque pariatur sed ab omnis veniam. Obcaecati,
						omnis rerum.</p>
					<a href="#" class="articles__link">
						<span class="articles__buttons">Citește mai departe...</span>
					</a>
				</div>
			</div>
			<div class="article">
				<div class="img__prev">
					<a href="http://google.com" class="img__prev-link">

						<img src="<?php echo bloginfo("template_url"); ?>/assets/img/cinepa_blog.jpg" alt="">

					</a>
				</div>

				<div class="article_text">
					<a href="" class="article__link">
						<h2 class="article_title">Lorem ipsum dolor sit amet consectetur</h2>
					</a>
					<div class="article_category">
						<a href="#" class="category_link">Category</a>
						<a href="#" class="category_link">Category</a>

					</div>
					<div class="article_label">
						<a href="#" class="article__label-single">Label 1</a>
						<a href="#" class="article__label-single">Label 2</a>
						<a href="#" class="article__label-single">Label 3</a>
						<a href="#" class="article__label-single">Label 4</a>

					</div>
					<p class="article_prev"> Tdipisicing elit. Distinctio, laborum consequatur velit assumenda iure
						asperiores, in, facilis modi cumque eius architecto? Itaque pariatur sed ab omnis veniam. Obcaecati,adipisicing elit. Distinctio, laborum consequatur velit assumenda iure
						asperiores, in, facilis modi cumque eius architecto? Itaque pariatur sed ab omnis veniam. Obcaecati,
						omnis rerum.</p>
					<a href="#" class="articles__link">
						<span class="articles__buttons">Citește mai departe...</span>
					</a>
				</div>
			</div> -->
			<nav class="pagination">
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
  		      </nav>
		</div>
		<div class="aside">
			<div class="aside__title">
				<h2>Alte articole:</h2>
			</div>

			<ul class="aside__list">
				<a href="" class="aside__list-link">
					<li class="aside__article">Obcaecatiz,adipisicing elit</li>
				</a>
				<a href="" class="aside__list-link">
					<li class="aside__article">Obcaecatiz,adipisicing elit</li>
				</a>
				<a href="" class="aside__list-link">
					<li class="aside__article">Obcaecatiz,adipisicing elit</li>
				</a>
				<a href="" class="aside__list-link">
					<li class="aside__article">Obcaecatiz,adipisicing elit</li>
				</a>
				<a href="" class="aside__list-link">
					<li class="aside__article">Obcaecatiz,adipisicing elit</li>
				</a>
				<a href="" class="aside__list-link">
					<li class="aside__article">Obcaecatiz,adipisicing elit</li>
				</a>
				<a href="" class="aside__list-link">
					<li class="aside__article">Obcaecatiz,adipisicing elit</li>
				</a>

			</ul>
			<div class="article_category aside__category">
				<a href="#" class="category_link">Category</a>
				<a href="#" class="category_link">Category</a>
				<a href="#" class="category_link">Category</a>
				<a href="#" class="category_link">Category</a>


			</div>
			<div class="article_label aside__label">
				<a href="#" class="article__label-single">Label 1</a>
				<a href="#" class="article__label-single">Label 2</a>
				<a href="#" class="article__label-single">Label 3</a>
				<a href="#" class="article__label-single">Label 4</a>

			</div>
		</div>
	</div>
</div>


<?php
get_footer();
?>