
       <footer class="footer text-center py-2 theme-bg-dark">
       <div class="box_footer">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/travel2.jpg" alt="">

    <section class="container footer_content">
    <section>
        <div  class="footer_container">
        <div class="footer_container_box">
    <h4>TOUR MỚI</h4>
    <?php
    $args = array(
        'posts_per_page' => 3,  
        'orderby' => 'date',    
        'order' => 'ASC'        
    );
    
    $query = new WP_Query($args);
    
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
    ?>
        <div class="box_article">
            <div>
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="">
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/travel9.jpg" alt="">
                <?php endif; ?>
            </div>
            <div class="box_title_footer">
                <p class="title_footer"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                <span class="date"><?php echo get_the_date(); ?></span>
            </div>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); endif; ?>
</div>

<div class="footer_container_box">
    <h4>TOUR NỔI BẬT</h4>
    <?php
    $args = array(
        'posts_per_page' => 3,  
        'orderby' => 'date',   
        'order' => 'DESC'       
    );
    
    $query = new WP_Query($args);
    
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
    ?>
        <div class="box_article">
            <div>
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="">
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/travel11.jpg" alt="">
                <?php endif; ?>
            </div>
            <div class="box_title_footer">
                <p class="title_footer"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                <span class="date"><?php echo get_the_date(); ?></span>
            </div>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); endif; ?>
</div>


        <div class="box_article support_cl">
            <h4>HỖ TRỢ KHÁCH HÀNG</h4>
            <span>Hotline: Tư vấn từ 8h - 18h: 0888800914</span>
            <span>Điện thoại: 0888800914</span>
            <span>Fax:</span>
            <span>Email: montamon147@gmail.com</span>
        </div>

       </div>
        <div class="box_logo_footer">
        <a href="<?php echo home_url(); ?>" class="logo logo_footer">
		<?php
				if(function_exists('the_custom_logo')){

					$custom_logo_id = get_theme_mod('custom_logo');
					$logo = wp_get_attachment_image_src($custom_logo_id);
                    if(empty($logo[0])){
                        $logo[0] = get_template_directory_uri()."/assets/images/logo.png";
                    }
				}
				?>
				<img class="mb-3 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo" >        </a>
            <div class="about_us_footer">
                <h5>VỀ CHÚNG TÔI</h5>
                <p class="text">Là một trong những công ty du lịch và dịch vụ chính thống có đầy đủ tính pháp lý theo quy định của luật Doanh nghiệp và luật Du lịch Việt Nam</p>
            </div>
            <div>
            <div class="about_us_footer footer_right_follow">
                <h5>THEO DÕI CHÚNG TÔI</h5>
                <div>
                <i class="facebook icon"></i>       
                <i class="youtube icon"></i>                      
                <i class="linkedin icon"></i>                      
                </div>
            </div>
            </div>
        </div>
    </section>
   

    </div>
        </section>
        </div>
		   
       </footer>
    </div>
   

<?php
	  wp_footer();
?>
</body>
</html> 

