
<?php
get_header();
?>
    <div class="wrapper-content">
		<div class="container">
			<h2><?php the_title(); ?></h2>
            <div id="main-content" class="main-content">
                <main id="content" role="main">

                <section class="section-hero">
                  <div class="hero">
                    <?php
                    $args = array(
                        'posts_per_page' => 4, 
                        'orderby' => 'date',
                        'order' => 'ASC' 
                    );
                    $query = new WP_Query($args);

                    if ($query->have_posts()) : 
                        $counter = 0; 
                        while ($query->have_posts()) : 
                            $query->the_post(); 
                            $counter++;
                            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); 
                            $location = get_post_meta(get_the_ID(), 'address', true); 
                            // if (!$image_url) {
                            //     $image_url = get_template_directory_uri() . '/assets/images/travel3.jpg'; 
                            // }
                            ?>
                            <?php if ($counter == 1): ?>
                            <div class="hero-left">
                              <a href="<?php the_permalink(); ?>">
                              <?php
                                $default_image = get_template_directory_uri() . '/assets/images/travel2.jpg';

                                $image_url = !empty($image_url) ? $image_url : $default_image;
                                
                                ?>
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">

                                <span class="address">
                                  <i class="location arrow icon"></i>
                                  <?php echo esc_html(get_theme_mod('mytheme_address_1_setting', 'Default Address 1')); ?>
                                </span>

                                <h1 style="color: <?php echo esc_attr(get_theme_mod('mytheme_title_color_setting', '#FF5733')); ?>;"><?php the_title(); ?></h1>
                              </a>
                            </div>
                            <?php elseif ($counter == 2): ?>
                            <div class="hero-right">
                              <div class="hero-right-top">
                                <a href="<?php the_permalink(); ?>">
                                <?php
                                $default_image = get_template_directory_uri() . '/assets/images/travel3.jpg';

                                $image_url = !empty($image_url) ? $image_url : $default_image;
                                
                                ?>
                                  <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                                  <span class="address top_r">
                                    <i class="location arrow icon"></i>
                                    <?php echo esc_html(get_theme_mod('mytheme_address_2_setting', 'Default Address 2')); ?>
                                    </span>
                                  <h1 style="color: <?php echo esc_attr(get_theme_mod('mytheme_subtitle_color_setting', '#FF5733')); ?>;"><?php the_title(); ?></h1>
                                </a>
                              </div>
                              <div class="hero-right-bottom">
                            <?php elseif($counter == 3): ?>
                                <div>
                                  <a href="<?php the_permalink(); ?>">
                                  <?php
                                $default_image = get_template_directory_uri() . '/assets/images/travel4.jpg';

                                $image_url = !empty($image_url) ? $image_url : $default_image;
                                
                                ?>
                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                                    <span class="address">
                                      <i class="location arrow icon"></i>
                                      <?php echo esc_html(get_theme_mod('mytheme_address_3_setting', 'Default Address 3')); ?>
                                      </span>
                                    <h3 style="color: <?php echo esc_attr(get_theme_mod('mytheme_subtitle_color_setting', '#FF5733')); ?>;"><?php the_title(); ?></h3>
                                  </a>
                                </div>
                            <?php elseif($counter == 4): ?>
                              <div>
                                  <a href="<?php the_permalink(); ?>">
                                  <?php
                                $default_image = get_template_directory_uri() . '/assets/images/travel5.jpg';

                                $image_url = !empty($image_url) ? $image_url : $default_image;
                                
                                ?>
                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                                    <span class="address">
                                      <i class="location arrow icon"></i>
                                      <?php echo esc_html(get_theme_mod('mytheme_address_4_setting', 'Default Address 4')); ?>
                                      </span>
                                    <h3 style="color: <?php echo esc_attr(get_theme_mod('mytheme_subtitle_color_setting', '#FF5733')); ?>;"><?php the_title(); ?></h3>
                                  </a>
                                </div>
                            <?php endif; ?>
                            <?php if ($counter == 4): ?>
                              </div>
                            </div>
                            <?php endif; ?>
                        <?php endwhile; 
                        wp_reset_postdata(); 
                    endif; ?>
                  </div>
                </section>

                <section class="dont_miss">
                  <div class="left_dont_miss">

                  <span class="text_dont_miss">
                    ĐỪNG BỎ LỠ
                  </span>
                  <div class="line_">
                    </div>
                    <div class="article">
                      <div class="article_box">
                  <?php
                    $args = array(
                        'posts_per_page' => 5, 
                        'orderby' => 'date',
                        'order' => 'ASC' ,
                        'offset' => 4, 

                    );
                    $query = new WP_Query($args);

                    if ($query->have_posts()) : 
                        $counter = 4; 
                        while ($query->have_posts()) : 
                            $query->the_post(); 
                            $counter++;
                            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); 
                            $location = get_post_meta(get_the_ID(), 'address', true); 
                            if (!$image_url) {
                                $image_url = get_template_directory_uri() . '/assets/images/travel1.jpg'; 
                            }
                            $author = get_the_author();  
                            ?>        

                       <?php if ($counter == 5): ?>
                       <div class="left">
                         <a href="<?php the_permalink(); ?>">
                        <div >
                          <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" alt="">
                        </div>
                        <p class="title"><?php the_title(); ?>
                          </p>
                          <span class="author"><?php echo esc_html($author); ?> 
                        </span>
                          <p class="text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                        </a>
                        </div>
                       <?php elseif ($counter == 6 ): ?>
                        <div class="right">            
                          <div>
                            <a href="<?php the_permalink(); ?>">
                              <div class="img_box">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" alt="">
                              </div>
                              <div class ="title_name_box">
                                <p class="title"><?php the_title(); ?>
                                </p>
                                <p class="date"><?php echo get_the_date(); ?></p>
                                </div>
                              </a>
                           </div>
                           <?php elseif ($counter == 7 ): ?>

                            <div>
                            <a href="<?php the_permalink(); ?>">
                              <div class="img_box">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" alt="">
                              </div>
                              <div class ="title_name_box">
                                <p class="title"><?php the_title(); ?>
                                </p>
                                <p class="date"><?php echo get_the_date(); ?></p>
                                </div>
                              </a>
                           </div>
                           <?php elseif ($counter == 8 ): ?>

                            <div>
                            <a href="<?php the_permalink(); ?>">
                              <div class="img_box">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" alt="">
                              </div>
                              <div class ="title_name_box">
                                <p class="title"><?php the_title(); ?>
                                </p>
                                <p class="date"><?php echo get_the_date(); ?></p>
                                </div>
                              </a>
                           </div>

                           <?php elseif ($counter == 9 ): ?>

                            <div>
                            <a href="<?php the_permalink(); ?>">
                              <div class="img_box">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" alt="">
                              </div>
                              <div class ="title_name_box">
                                <p class="title"><?php the_title(); ?>
                                </p>
                                <p class="date"><?php echo get_the_date(); ?></p>
                                </div>
                              </a>
                            </div>

                           <?php endif; ?>
                        <?php endwhile; 
                        wp_reset_postdata(); 
                       endif; ?>
                        </div>
                     </div>
                   </div>
                  </div>
                   <div class="right_dont_miss">
                    <span>
                    THEO DÕI
                    </span>
                     <div class="line_">
                    </div>
                 <div>
                   <div class="box_side_bar">

                    <div>
                      <i class="facebook icon"></i>                      
                      <p>24,256 Fara</p>
                    </div>
                       <span class="name_total">LIKE</span>
                    </div>

                    <div class="box_side_bar">
                     <div>
                       <i class="youtube square icon"></i>                      
                       <p>17,538 Subscribers</p>
                     </div>
                        <span class="name_total">SUBSCRIBE</span>
                     </div>
                    </div>
                   
                   <div class="box_side_bar">
                    <div>
                      <i class="linkedin icon"></i>                      
                      <p>9,881 Followers</p>
                    </div>
                       <span class="name_total">FOLLOW</span>
                    </div>

                    <div class="adv">
                      <div class="adv_image">
                        <?php 
                          $adv_image = get_theme_mod('custom_adv_image');
                          if(empty($adv_image)){
                            $adv_image = get_template_directory_uri()."/assets/images/banner.jpg";
                          }
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

                   </div>
                   </div>

                </section>
                  
                <section class="dont_miss news">
                  <div class="left_dont_miss">
                  <span class="text_out_country">
                 TOUR DU LỊCH HOT
                 </span>
                  <div class="line_">
                   </div>
                  <div class="article">
                     <div class="article_box">

                     
                  <?php
                    $args = array(
                        'posts_per_page' => 6, 
                        'orderby' => 'date',
                        'order' => 'ASC' ,
                        'offset' => 9, 
                    );
                    $query = new WP_Query($args);

                    if ($query->have_posts()) : 
                        $counter = 9; 
                        while ($query->have_posts()) : 
                            $query->the_post(); 
                            $counter++;
                            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); 
                            $location = get_post_meta(get_the_ID(), 'address', true); 
                            if (!$image_url) {
                                $image_url = get_template_directory_uri() . '/assets/images/travel3.jpg'; 
                            }
                            $author = get_the_author();  
                            ?>       

                       <?php if ($counter == 10): ?>                      
                       <div class="left">
                         <a href="<?php the_permalink(); ?>">
                        <div class="left_hot">
                          <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" alt="">
                        </div>
                        <p class="title"><?php the_title(); ?>
                          </p>
                          <span class="author"> <?php echo esc_html($author); ?>  </span>
                          <p class="text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                        </a>
                        </div>

                        <?php elseif ($counter == 11): ?>                      
                        <div class="left">
                         <a href="<?php the_permalink(); ?>">
                        <div class="left_hot">
                          <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" alt="">
                        </div>
                        <p class="title"><?php the_title(); ?>
                          </p>
                          <span class="author"> <?php echo esc_html($author); ?>  </span>
                          <p class="text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                        </a>
                        </div>
                       
                     </div>
                     <div class="right news_botton">
                     <?php elseif ($counter > 11 && $counter < 16): ?>                      
                          <div>
                            <a href="<?php the_permalink(); ?>">
                              <div class="news_botton_box">
                              <div class="img_box">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" alt="">
                              </div>
                              <div>
                                <p class="title title_hot"><?php the_title(); ?>
                                </p>
                                <span class="author"> <?php echo esc_html($author); ?>  </span>
                                </div>
                              </div>
                              </a>
                           </div>
                           <?php endif; ?>
                        <?php endwhile; 
                        wp_reset_postdata(); 
                       endif; ?>
                        </div>
                   </div>
                  </div>
                   <div class="right_dont_miss">
                    <span>
                    TOUR NỔI BẬT
                    </span>
                     <div class="line_">
                    </div>

                   <div class="box_side_bar right_news">

                   <div class="right news_botton">
                   <?php
                    $args = array(
                        'posts_per_page' => 8, 
                        'orderby' => 'date',
                        'order' => 'ASC' ,
                        'offset' => 15, 
                    );
                    $query = new WP_Query($args);

                    if ($query->have_posts()) : 
                        $counter = 15; 
                        while ($query->have_posts()) : 
                            $query->the_post(); 
                            $counter++;
                            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); 
                            $location = get_post_meta(get_the_ID(), 'address', true); 
                            if (!$image_url) {
                                $image_url = get_template_directory_uri() . '/assets/images/travel5.jpg'; 
                            }
                            $author = get_the_author();  
                            ?>     

                          <?php if ($counter > 15 && $counter < 24): ?>                      
                          <div>
                            <a href="<?php the_permalink(); ?>">
                              <div class="news_botton_box tour_f_right">
                              <div class="img_box">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" alt="">
                              </div>
                              <div class="box_text">
                                <p class="title"><?php the_title(); ?>
                                </p>
                                </div>
                              </div>
                              </a>
                           </div>
                           <?php endif; ?>
                        <?php endwhile; 
                        wp_reset_postdata(); 
                       endif; ?>
                        </div>
                   </div>
                   </div>
                  </section>

                 <section class="dont_miss news gc">
                  <div class="left_dont_miss">
                  <span>
                  TOUR GIỜ CHÓT
                 </span>
                  <div class="line_">
                  </div>
                   <div class="gc_flex">

                   <?php
                    $args = array(
                        'posts_per_page' => 4, 
                        'orderby' => 'date',
                        'order' => 'ASC' ,
                        'offset' => 23, 
                    );
                    $query = new WP_Query($args);

                    if ($query->have_posts()) : 
                        $counter = 19; 
                        while ($query->have_posts()) : 
                            $query->the_post(); 
                            $counter++;
                            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); 
                            $location = get_post_meta(get_the_ID(), 'address', true); 
                            if (!$image_url) {
                                $image_url = get_template_directory_uri() . '/assets/images/travel11.jpg'; 
                            }
                            $author = get_the_author();  
                            ?>     

                          <?php if ($counter > 19 && $counter < 24): ?> 

                            <a href="<?php the_permalink(); ?>">
                              <div class="news_botton_box tour_f_right">
                              <div class="img_box">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" alt="">
                              </div>
                              <div class="box_text">
                                <p class="title"><?php the_title(); ?>
                                </p>
                                </div>
                              </div>
                              </a>

                              <?php endif; ?>
                        <?php endwhile; 
                        wp_reset_postdata(); 
                       endif; ?>
                    </div>

                  </div>
                </section>

                <section class="dont_miss tour_in_country">
                  <div class="left_dont_miss">
                  <span class="title_in_country">
                ĐIỂM ĐẾN YÊU THÍCH
                </span>
                  <div class="line_">
                   </div>
                  <div class="article">
                     <div class="article_box">
                     
                        <div class="right">
                        <?php
                    $args = array(
                        'posts_per_page' => 6, 
                        'orderby' => 'date',
                        'order' => 'ASC' ,
                        'offset' => 27, 
                    );
                    $query = new WP_Query($args);

                    if ($query->have_posts()) : 
                        $counter = 23; 
                        while ($query->have_posts()) : 
                            $query->the_post(); 
                            $counter++;
                            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); 
                            $location = get_post_meta(get_the_ID(), 'address', true); 
                            if (!$image_url) {
                                $image_url = get_template_directory_uri() . '/assets/images/travel5.jpg'; 
                            }
                            $author = get_the_author();  
                            ?>     

                          <?php if ($counter > 23 && $counter < 30): ?> 
                          <div>
                            <a href="<?php the_permalink(); ?>">
                              <div class="img_box fl_l">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" alt="">
                              </div>
                              <div>
                                <p class="title"><?php the_title(); ?>
                                </p>
                                <span class="author"> <?php echo esc_html($author); ?>  </span>
                                <p class="text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                </div>
                              </a>
                           </div>

                           <?php endif; ?>
                        <?php endwhile; 
                        wp_reset_postdata(); 
                       endif; ?>

                        </div>
                     </div>
                   </div>
                  </div>
                   <div class="right_dont_miss">
                   <div>

                    
                   <div class="adv">
                      <div class="adv_image">
                        <?php 
                          $adv_image = get_theme_mod('custom_adv_image');

                          if(empty($adv_image)){

                            $adv_image = get_template_directory_uri()."/assets/images/banner.jpg";
                          }

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

                   </div>
                   <div>
                   <div class="left">
                   <span>
                    TOUR NỔI BẬT
                    </span>
                     <div class="line_ line_f">
                    </div>

                    
                    <?php
                    $args = array(
                        'posts_per_page' => 1, 
                        'orderby' => 'date',
                        'order' => 'ASC' ,
                        'offset' => 33, 
                    );
                    $query = new WP_Query($args);

                    if ($query->have_posts()) : 
                        $counter = 30; 
                        while ($query->have_posts()) : 
                            $query->the_post(); 
                            $counter++;
                            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); 
                            $location = get_post_meta(get_the_ID(), 'address', true); 
                            if (!$image_url) {
                                $image_url = get_template_directory_uri() . '/assets/images/travel7.jpg'; 
                            }
                            $author = get_the_author();  
                            ?>     

                          <?php if ($counter > 30 && $counter < 32): ?> 

                         <a href="<?php the_permalink(); ?>">
                         <p class="title tilte_in_country"><?php the_title();?>
                         </p>
                         <span class="author"> <?php echo esc_html($author); ?> </span>
                        <div >
                          <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" alt="">
                        </div>
                          <p class="text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                        </a>
                        <?php endif; ?>
                        <?php endwhile; 
                        wp_reset_postdata(); 
                       endif; ?>
                        </div>
                   </div>
                   </div>
                  </section>

                  <section class="flash_sale">
                     <div class="banner_box">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner_selling.webp" alt="">
                     </div>
                     <!-- <a href="#">ĐẶT TOUR ></a> -->
                  </section>

                  <section class="dont_miss news tour_new">
                  <div class="left_dont_miss">
                  <span>
                TOUR MỚI NHẤT
                </span>
                  <div class="line_">
                   </div>

                  <div class="article">
                     <div class="article_box grid_i">

                     <?php
                      $args = array(
                          'posts_per_page' => 6, 
                          'orderby'        => 'date', 
                          'order'          => 'DESC',
                      );
                      $query = new WP_Query($args);

                      if ($query->have_posts()) : 
                          while ($query->have_posts()) : 
                              $query->the_post(); 
                              $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); 
                              $location = get_post_meta(get_the_ID(), 'address', true); 
                              if (!$image_url) {
                                  $image_url = get_template_directory_uri() . '/assets/images/travel4.jpg'; 
                              }
                              $author = get_the_author();  
                              ?>     

                              <div class="left">
                                  <a href="<?php the_permalink(); ?>">
                                      <div class="grid_i_box">
                                          <img src="<?php echo esc_url($image_url); ?>" alt="">
                                      </div>
                                      <p class="title title_new"><?php the_title(); ?></p>
                                      <span class="author"><?php echo esc_html($author); ?></span>
                                  </a>
                              </div>

                          <?php 
                          endwhile; 
                          wp_reset_postdata(); 
                      endif;
                      ?>

                     </div>
                   </div>
                  </div>
                   <div class="right_dont_miss">
                    <span>
                    PHỔ BIẾN 
                    </span>
                     <div class="line_">
                    </div>
                   <?php
                      $args = array(
                          'posts_per_page' => 7, 
                          'orderby'        => 'comment_count', 
                          'order'          => 'DESC',
                          'post_status'    => 'publish', 
                      );

                      $popular_posts = new WP_Query($args);
                    ?>

                    <div class="box_side_bar sb_bottom">
                        <?php if ($popular_posts->have_posts()) : ?>
                            <?php while ($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
                                <div>
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="news_botton_box tour_f_right">
                                            <div class="popul">
                                              <?php
                                              $image_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                                               if (!$image_url) {
                                                $image_url = get_template_directory_uri() . '/assets/images/travel7.jpg'; 
                                            }
                                              ?>
                                                <img src="<?php echo $image_url; ?>" alt="<?php echo esc_attr(mb_strimwidth(get_the_title(), 0, 50, '...')); ?>">
                                            </div>
                                            <div class="box_text">
                                                <p class="title"><?php the_title(); ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p>Không có bài viết nào được tìm thấy.</p>
                        <?php endif; ?>
                    </div>

                   </div>
                  </section>
                 </main>
            </div>
        </div>
    </div>
<?php
get_footer();
?>