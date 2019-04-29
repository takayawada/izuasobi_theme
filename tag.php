<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url' ); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
  </head>
  <body>

  　<header>
  	<?php get_header(); ?>
    </header>

    <div id="breadcrumb ">
      <div class="mt-5   pt-5 ">  
      <?php custom_breadcrumb(); ?>
      </div>
    </div>




	<div id="wrapper ">
			

         <div class="single mt-10 mx-5 px-5 pt-5 ">

  			 <?php while (have_posts()) : the_post(); ?>
  			 <h2>
  			 	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  			 </h2>
  			 <?php the_content(); ?>

		     <?php endwhile; ?>	
         </div>

  </div>

  <div id="sidebar">
      <div class="side ">
          <?php dynamic_sidebar(1); ?>
          <?php dynamic_sidebar(2); ?>
      </div>    
  </div>
    
  <div id="footer"
    <?php get_footer(); ?>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
