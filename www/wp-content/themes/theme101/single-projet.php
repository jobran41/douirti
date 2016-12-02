<?php get_header(); ?>

<?php // get_template_part('content', 'slide'); ?>
<section>
	<div class="container singpro">
	<div class="row">
		<div class="col-lg-2"></div>
	    <div class="col-lg-8">
	    	<?php 
            //$image = get_field('image');
            if( !empty($image) ): ?>
                <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
            <?php endif; ?>
            <h4 class="title_project"><?php the_field('title'); ?></h4>
			<p><?php  //the_field('descriptif'); ?></p>

			<?php echo do_shortcode('[yt_playlist mainid="wgcOWU2k0Ko" vdid="wgcOWU2k0Ko,1sAmt-ZVN_U,tRqLHpytGdY" novd="3"]'); ?>
            
            <p><?php the_field('content'); ?></p>
            
	    </div>
	    <div class="col-lg-2"></div>
</div>
	</div>
	 
</section>


<?php get_footer(); ?>