<?php get_header(); ?>
<?php // get_template_part('content', 'slide'); ?>
<?php // get_template_part('content', 'projets'); ?>

<div class="singpro">

   <a href="" data-toggle="modal" data-target="#myModal77"><img id="img-arch" src="<?php bloginfo("stylesheet_directory");?>/images/small1manzah.png" class="img-responsive center-block"  alt="" style="" /></a> 
	<div class="modal fade" id="myModal77" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      	<?php echo do_shortcode('[huge_it_gallery id="7"]'); ?>
      </div>
    </div>
  </div>


</div>
<a class="retourbnt" href="javascript:history.back()"></a>
	
<?php get_footer(); ?>