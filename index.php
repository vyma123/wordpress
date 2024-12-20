
<?php
	get_header();
	?>
	<section class="container">
		<article class="content px-3">
		<?php
		$page = get_page_by_path('blog');
		echo '<h2 class="title_header_blog">' . get_the_title($page->ID) . '</h2>';
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
				$args = array(
					'posts_per_page' => 5,   
					'orderby' => 'date',     
					'order' => 'ASC'         
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) : ?>
					<div class="container">
						<?php while ($query->have_posts()) : $query->the_post(); ?>
						<div class="box_author">
								<span class="author"><?php the_author(); ?></span> 
								<span class="post_date"><?php the_date(); ?></span> 
							</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					</div>
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