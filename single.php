
<?php
	get_header();
	?>
    
	  <section class="container">
         <div class="single_article">
		  <article class="content px-3">
			  
			  <?php 
		    if(have_posts()){
				
				while(have_posts()){
					
					the_post();
					get_template_part( 'template-parts/content', 'article');
				}
			}
			?>
	      </article>
		  
		  <div class="box_sidebar">
		    <span class="title_line title_line_sidebar">BÀI MỚI</span>
		    <div class="line_top"></div>

			<div class="box_title_sidebar">
			<?php
			$recent_posts = new WP_Query(array(
				'posts_per_page' => 5, 
				'post_status' => 'publish',
			));

			if ($recent_posts->have_posts()) :
				while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
				<?php endwhile;
				wp_reset_postdata(); 
			else : ?>
				<p>Không có bài viết nào.</p>
			<?php endif; ?>
		</div>
		<span class="title_line title_line_sidebar">BÌNH LUẬN</span>
		<div class="line_top"></div>
		<div>
			<?php
			$recent_comments = get_comments(array(
				'number'    => 5,          
				'status'    => 'approve',  
				'post_type' => 'post'     
			));

			foreach ($recent_comments as $comment) : ?>
				<div class="comment_sidebar">
					
					<a href="<?php echo get_permalink($comment->comment_post_ID); ?>">
						<?php echo esc_html($comment->comment_author); ?>:
					</a>
					<p> <?php echo esc_html($comment->comment_content); ?></p>
				</div>
			<?php endforeach; ?>
		</div>

		  </div>
		 </div>
      </section>
	 

    
	<?php
	get_footer();
	?>