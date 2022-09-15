<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
<?php get_header() ?>
  <?php while (have_posts()) : the_post() ?>
  
      <div class="container">

        <center><img class="image" src="<?php the_field("image") ?>" alt=""></center>
		 <center><h1> Om Street Food Friends </h1></center>
      
      
      <p> <?php the_field("text2") ?></p> 
      <p> <?php the_field("text3") ?></p> 
      <p><?php the_field("text4") ?></p> 
      <p><?php the_field("text5") ?></p> 

      </div>
      
      <div> 
     <a href="https://michelea.dk/Streetfood/register/"> 
     <center><button class="btn">Bliv medlem nu</button><center>
     </a>
     <a href="https://michelea.dk/Streetfood/wp-login.php"><center><p> Login </p><center></a>
      </div>

<?php endwhile ?>

<?php get_footer() ?>