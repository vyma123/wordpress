<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nguyen Van A">
    <meta name="author" content="https://youtube.com/">    
    <link rel="shortcut icon" href="/wp-content/themes/follow/assets/images/logo.png"> 
  
	 <?php
	 wp_head();
	 ?>

</head> 

<body >


<header id="header" class="header">
        <a href="<?php echo home_url(); ?>" class="logo">
		<?php
				if(function_exists('the_custom_logo')){

					$custom_logo_id = get_theme_mod('custom_logo');
					$logo = wp_get_attachment_image_src($custom_logo_id);
				}
				?>
				<img class="mb-3 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo" >        </a>
        <nav>

		<?php

				wp_nav_menu(
					array(
						'menu' => 'primary',
						'container' => false,
						'theme_location' => 'primary',
						'items_wrap' => '<ul id="" class="main-nav-list">%3$s</ul>'
					)
				);

				?>
          
        </nav>
        <div>
        <i class="search icon"></i>
        </div>
    </header>


    <div class="main-wrapper">
	  