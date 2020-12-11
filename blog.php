<?php
/*
		Template Name: Страница блога
*/
?>

<?php
get_header();
?>
<div class="header_blog">

	<div class="header_blog_block">
		<img class="header_blog_img" src="<?php echo bloginfo("template_url"); ?>/assets/img/cinepa_blog.jpg" alt="">
		<div class="header_blog_text">
			<h1 class="header_blog_title">
				Beneficiile uleiului viu presat la rece si consumarea lui
			</h1>
		</div>
	</div>
</div>
<div style="border: solid 12px green; background-color: green;">
</div>

<div class="wrapper_content_blog">
	<div class="content_blog">
		<div class="articles">
			<div class="article">
				<div class="img_prev">
					<img src="<?php echo bloginfo("template_url"); ?>/assets/img/image_1-blog.jpg" alt="">
				</div>
				<div class="article_text">
					<h2 class="article_title">Lorem ipsum dolor sit amet consectetur</h2>
					<p class="article_prev">, adipisicing elit. Distinctio, laborum consequatur velit assumenda iure
						asperiores, in, facilis modi cumque eius architecto? Itaque pariatur sed ab omnis veniam. Obcaecati,
						omnis rerum.</p>
				</div>
			</div>
		</div>
		<div class="aside">

		</div>
	</div>
</div>


<?php
get_footer();
?>