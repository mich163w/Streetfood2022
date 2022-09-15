<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
<?php get_header() ?>
  <?php while (have_posts()) : the_post() ?>

      <div class="container">
<center><h1><?php the_field("text") ?></h1> <center>

     <center> <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img class="image2" src="<?php the_field("image") ?>" alt=""style="height:270px; width:400px" >
    </div>
    <div class="flip-card-back">
      <img class="image2" src="<?php the_field("image2") ?>" alt="" style="height:390px; width:400px">
    </div>
    
  </div>
</div>

<center>
      <a href="https://michelea.dk/Streetfood/ordrer/">  
<button class="btn"> Se seneste betalinger </button></a>

      </div>

<?php endwhile ?>

<?php get_footer() ?>