<?php
/*
		Template Name: Страница одиночного поста (статья)
		Post type : page , post, category
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
						<?php the_category(); ?>
					</div>
					<div class="article_label">
						<?php the_tags('#', '', ''); ?>
					</div>
					<div class="single__content"><?php the_content(); ?></div>


				</div>
			</div>
		<?php }
			echo the_posts_pagination();
		} else { ?>
		<p>Записей нет.</p>
	<?php } ?>
	<?php
	$args = [
		'base'         => '%_%',
		'format'       => '?page=%#%',
		'total'        => 1,
		'current'      => 0,
		'show_all'     => False,
		'end_size'     => 1,
		'mid_size'     => 2,
		'prev_next'    => True,
		'prev_text'    => __('« Previous'),
		'next_text'    => __('Next »'),
		'type'         => 'plain',
		'add_args'     => False,
		'add_fragment' => '',
		'before_page_number' => '',
		'after_page_number'  => ''
	];

	echo paginate_links($args);
	?>

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
		<div class="aside__wrapper aside__single">
			<?php get_sidebar(); ?>
		</div>

	</div>
</div>
<?php
get_footer();
?>