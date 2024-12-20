<div class="container">
    <header class="content-header">
    <h1 class="post-title"><?php the_title(); ?></h1> 

        <div class="meta mb-3">
          <span class="date"><?php the_date(); ?></span>
          <?php
             the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>','</span>');

             $categories = get_the_category();
             if (!empty($categories)) {
                 foreach ($categories as $category) {
                     $category_link = get_category_link($category->term_id);
                     echo '<span class="category"><i class="fa fa-folder"></i> <a href="' . esc_url($category_link) . '">' . esc_html($category->name) . '</a></span>';
                 }
             }
          ?>
          
          
           
          <div class="right_single_box">
            <?php
              $post_views_count = get_post_meta( get_the_ID(), 'post_views_count', true );
              if ( ! empty( $post_views_count ) ) {
                ?>
                <i class="eye icon"></i>
                <?php
                  echo $post_views_count;
                }
                ?>
          <span class="comment"><a href="#comments"><i class='fa fa-comment'></i> <?php comments_number();?></a></span>
        </div>

          <?php 
            customSetPostViews(get_the_ID());
          ?>
          
        </div>
    </header>
    <div>
      <?php
    the_content();
    ?>
    <?php
    comments_template();
    ?>
    </div>
</div>