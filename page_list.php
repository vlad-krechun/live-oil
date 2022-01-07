
<?php /* Template Name: Страница со всеми записями */ 
		get_header();
		if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="all_post">
		<h1><?php the_title(); ?></h1>

		<?php 
		//Начало списка

		$arg_cat = array(
			'orderby'      => 'name',
			'order'        => 'ASC',
			'hide_empty'   => 1,
			'exclude'      => '',
			'include'      => '',
		);
		$categories = get_categories( $arg_cat );

		if( $categories ){
			foreach( $categories as $cat ){
				$arg_posts =  array(
						'posts_per_page' => -1,
						'cat' => $cat->cat_ID,
					);
				$query = new WP_Query($arg_posts);

		if ($query->have_posts() ) : ?>
		<a href="<?php echo get_category_link( $cat->term_id ); ?>"><h2><?php echo $cat->name; ?></h2></a>

		<ul>
			<?php while ( $query->have_posts() ) : $query->the_post();  ?>
			<li>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h3><?php the_title(); ?></h3></a>
			</li>
		<?php endwhile; wp_reset_postdata(); ?>
		</ul>			
		<?php endif; 
		}	
	} 

		// Конец 
		?>
		</article>

		<style>
		
		</style>
		<?php
		endwhile; 
		endif; 

		get_footer(); ?>