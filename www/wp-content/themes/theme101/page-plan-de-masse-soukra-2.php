<?php get_header(); ?>
<?php // get_template_part('content', 'slide'); ?>
<?php // get_template_part('content', 'projets'); ?>

<div class="singpro">

   <a href="" data-toggle="modal" data-target="#myModal88"><img id="img-arch" src="<?php bloginfo("stylesheet_directory");?>/images/small2soukra.png" class="img-responsive center-block"  alt="" style="max-width: 70%;" /></a>
	<div class="modal fade" id="myModal88" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      	<?php echo do_shortcode('[huge_it_gallery id="8"]'); ?>
      </div>
    </div>
  </div>


</div>

	
<?php get_footer(); ?>