
<?php
	get_header();
	?>
	<section class="container">
		<article class="content px-3 py-5">
		<?php
		$page = get_page_by_path('blog');
		echo '<h2>' . get_the_title($page->ID) . '</h2>';
		?>

			</h3>
			<span class="title_line">MỚI NHẤT</span>
			<div class="line_top"></div>
			<div class="d-flex justify-content-between gap-3 box_hero">
				<div class="box_latest_news">
					<?php 
		          if(have_posts()){
				  
				  while(have_posts()){
					
					  the_post();
					  
					  get_template_part( 'template-parts/content', 'archive');
					}
				 }
				 ?>
				</div>
				<div>
				<div class="adv">
					<div class="adv_image">
						<?php 
							$adv_image = get_theme_mod('custom_adv_image');
							if ($adv_image) { 
						?>
							<img src="<?php echo esc_url($adv_image); ?>" alt="Advertisement">
						<?php } ?>
					</div>
					<h4 class="title_advertisement">
						<?php echo esc_html(get_theme_mod('custom_adv_title', 'Text advertisement')); ?>
					</h4>
					<a href="<?php echo esc_url(get_theme_mod('custom_adv_link', '#')); ?>" class="button_buy">
						<?php echo esc_html(get_theme_mod('custom_adv_button_text', 'Đặt ngay')); ?>
					</a>
				</div>

				<span class="title_line title_line_sidebar">XEM THÊM</span>
				<div class="line_top"></div>

				<?php
				// Custom query to get the oldest 5 posts
				$args = array(
					'posts_per_page' => 5,   // Limit to 5 posts
					'orderby' => 'date',     // Order by date
					'order' => 'ASC'         // Oldest to newest
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) : ?>
					<div class="container">
						<?php while ($query->have_posts()) : $query->the_post(); ?>
							<h3 class="title_sidebar_blog"><?php the_title(); ?></h3>
							<div class="box_author">
								<span class="author"><?php the_author(); ?></span> <!-- Display the author's name -->
								<span class="post_date"><?php the_date(); ?></span> <!-- Display the post date -->
							</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					</div><!--//container-->
				<?php else : ?>
					<p><?php esc_html_e('No posts found.', 'textdomain'); ?></p>
				<?php endif; ?>



			</div>
			</div>
	   <?php 
	      the_posts_pagination();
		  ?>
	    </article>
	</section>
	 
    
	<?php
	get_footer();
	?>