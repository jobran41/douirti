<?php get_header(); ?>
<?php //get_template_part('content', 'slide'); ?>
<section>
	<div class="plans container singpro">
     <table class="table table-striped">
	    <thead>
	      <tr>
	        <th>Désignation</th>
	        <th>Type</th>
	        <th>Niveau</th>
	        <th>Surf Plancher m2</th>
	        <th>Surf Jardin/Terrasse m2</th>
	        <th>Disponnibilité</th>
	        <th>Détails</th>
	      </tr>
	    </thead>
	    <tbody>
	      
	    <?php $documents = new WP_Query(array(
		'post_type' => 'table',
		'posts_per_page' => -1
		)) ; $i=0; ?>
		<?php while ($documents->have_posts()) : $documents->the_post(); 
			$image = get_field('image');
		?>

             <tr>
		    <td><?php echo  $designation = get_field('designation'); ?></td>
	        <td><?php echo $type = get_field('type'); ?></td>
	        <td><?php echo $niveau = get_field('niveau'); ?></td>
	        <td><?php echo $surf2 = get_field('surf_plancher'); ?></td>
	        <td><?php echo $surf = get_field('surf_jardin'); ?></td>
	        <td><p class="<?php the_field('dispo'); ?>"><?php the_field('dispo'); ?></p></td>
	        <td><button type="button"   class="detaille" data-src="<?php echo $image['url']; ?>">Plus de détails</button></td>
	         </tr>
		   
		   <?php  $i++; endwhile; ?>
	     
	    </tbody>
	  </table>
	</div>
  

  <div class="modal fade tabimg" id="myModal" role="dialog" > 
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

	        <img id="img-arch" class="img-responsive center-block" src="" alt="" style="" />

      </div>
    </div>
  </div>


</section>
	
<?php get_footer(); ?>