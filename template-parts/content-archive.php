<div class="container">

      <div class="post mb-5">
        <div class="media">
        <a class="more-link" href="<?php the_permalink(); ?>">
            <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php 
            the_post_thumbnail_url('thumbnail');
            ?>" alt="image">
            </a>
            <div class="media-body">
                <h3 class="title mb-1"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                <div class="meta mb-1"><span class="date"><?php the_date();?></span><span class="comment"><a href="#"><?php comments_number(); ?></a></span></div>
                
                <a class="more-link" href="<?php the_permalink(); ?>">Xem thêm &rarr;</a>
            </div><!--//media-body-->
        </div><!--//media-->
	  </div>
</div>