
<?php
	get_header();
?>
        <div class="container">


        <article class="content px-3 py-5 p-md-5">

		<?php 
		    if(have_posts()){

				while(have_posts()){

					the_post();
					get_template_part( 'template-parts/content', 'page');
				}
			}
		?>
	   
	    </article>
		</div>
	 
    
	<?php
	get_footer();
	?>