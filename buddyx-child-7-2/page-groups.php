<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
<?php get_header() ?>
  <?php while (have_posts()) : the_post() ?>
      <div class="container">
      
  <center><h1><?php the_field("text") ?></h1> <center>


      </div>

<?php endwhile ?>

<?php get_footer() ?>