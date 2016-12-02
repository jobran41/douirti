<?php get_header(); ?>

<?php get_template_part('content', 'slide'); ?>
<section>
	<div class="container">
	<div class="row">
	    <div class="col-lg-8">
	    	<?php 
            $image = get_field('image');
            if( !empty($image) ): ?>
                <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
            <?php endif; ?>
            <h4><?php the_field('title'); ?></h4>
            <p><?php the_field('content'); ?></p>
	    </div>
	    <div class="col-lg-4">
	        <?php get_sidebar(); ?>
	    </div>
</div>
	</div>
</section>


<?php get_footer(); ?>