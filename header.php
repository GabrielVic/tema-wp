<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <?php wp_head(); ?>
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <?php 
				     wp_nav_menu( array(

            ‘menu’ => ‘meu_menu’,

            ‘theme_location’ => ‘meu_menu’,

            ‘container’ => ‘div’,

            ‘container_class’ => ‘classe_do_container’,

            ‘container_id’ => ‘id_do_container’,

            ‘menu_class’ => ‘classe_do_menu’,

            ‘echo’ => true,

            ‘menu_id’ => ‘id_do_menu’,

            ‘before’ => ”,

            ‘after’ => ”,

            ‘link_before’ => ”,

            ‘link_after’ => ”,

            ‘depth’ => 0,

            ‘walker’ => ”,

				) );

				?>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' ); ?>"> <?php echo get_bloginfo( 'name' ); ?> </a></h1>
        <p class="lead blog-description"> <?php echo get_bloginfo( 'description' ); ?> </p>
      </div>
