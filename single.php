<?php
/*
		Template Name: Страница одиночного поста (статья)
		Post type : page , post
*/
?>

<?php
get_header();
?>

<div class="header_blog">

	<div class="header_blog_block header__single">
		<?php if (have_posts()) {
			while (have_posts()) {
				the_post(); ?>
				<span class="header_single_img">
					<?php the_post_thumbnail(); ?>
				</span>
		

</div>
</div>
<div class="wrapper_content_blog">
<div class="content_blog">
	<div class="article__list article__single">
		<div class="article">


			<div class="article_text">
				<a href="" class="article__link">
					<h2 class="article_title"><?php the_title(); ?></h2>
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
				<div class="single__content"><?php the_content( );?></div>
				

			</div>
		</div>
			<?php }
		} else { ?>
			<p>Записей нет.</p>
		<?php } ?>

			<div class="wrraper__contacts" id="contact">


				<div class="feed__form">
					<h3 class="contacts__form__title">Lasă un comentariu </h3>
					<form action="#">
						<label for="fname">Numele <span class="obligatory__info">*</span></label>
						<input type="text" id="fname" name="firstname" placeholder="Introduceti numele..." class="input__fname">
						<label for="e_name">Email-ul Dumneavoastra <span class="obligatory__info">*</span></label>
						<input type="email" id="y_email" name="y_email" placeholder="Email-ul Dumneavoastra..." class="input__phone">
						<label for="lname">Telefonul</label>
						<span>Telefonul Dumneavoastra nu va fi disponibil altor persoane</span>
						<input type="tel" id="phone" name="phone" placeholder="Telefonul Dumneavoastra..." class="input__phone">


						<label for="subject">Mesajul <span class="obligatory__info">*</span></label>
						<textarea id="subject" name="subject" placeholder="Scrieti mesajul.." class="textarea__subject"></textarea>
						<p class="accept__info">Prin trimiterea aceste forme dati acordul la prelucrarea datelelor cu caracter personal </p>
						<span><span class="obligatory__info">*</span> Câmp obligatoriu</span>
						<input type="submit" value="Trimite" class="input__submit">
					</form>
				</div>

			</div>
		</div>
		<div class="aside aside__single">
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

