<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
<?php get_header() ?>
  <?php while (have_posts()) : the_post() ?>
      <div class="container">

 <h1><?php the_field("text") ?></h1> 
  <p><?php the_field("text1") ?></p> 
<table>
	<thead>
		<tr>
			<th>Ordre</th>
			<th>Dato</th>
			<th>Status</th>
			<th>Total</th>
			<th>Handlinger</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>#365170</td>
			<td>3. september 2022</td>
			<td>Gennemført</td>
			<td>49 Dkk</td>
			<td><a href="https://michelea.dk/Streetfood/members/streetfood/">Vis</a></td>
		</tr>
		<tr>
			<td>#346894</td>
			<td>12. august 2022</td>
			<td>Gennemført</td>
			<td>119 Dkk</td>
			<td><a href="https://michelea.dk/Streetfood/members/streetfood/">Vis</a></td>
		</tr>
		<tr>
			<td>#320359</td>
			<td>1. marts 2022</td>
			<td>Gennemført</td>
			<td>79 Dkk</td>
			<td><a href="https://michelea.dk/Streetfood/members/streetfood/">Vis</a></td>
		</tr>
	</tbody>
</table>

<a href="#" <button class="btn"> Se tidligere betalinger </button></a>
      </div>

<?php endwhile ?>

<?php get_footer() ?>