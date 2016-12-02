<?php get_header(); ?>

<?php //get_template_part('content', 'slide'); ?>

	  <section>

<!--List Produits-->
<div class="header-title">
<?php single_term_title( '<h1 class="page-title">', '</h1>' );
				 $cur_cat_id = get_cat_id( single_cat_title("",false) );?>
				 </div>
<div class="container singpro">

<div class="row">

	<?php 
	$i = 0;

$args= array(
			"post_type"=>"projet","posts_per_page"=>-1,"cat"=>$cur_cat_id
			);
			
$the_query = new WP_Query($args);

while ($the_query->have_posts()) : $the_query->the_post();
       // Votre boucle ici
$class= ($i == 0)? 'col-lg-offset-4 col-sm-offset-4 col-md-offset-2 col-xs-offset-2':'';
?>

<div class=" <?php echo $class;?> col-lg-4 col-md-4 col-sm-4 col-xs-4 team-projet wow fadeInDown" data-wow-duration="1.5s">
  <a href="<?php the_permalink() ?>"><?php 
                                $image = get_field('image');
                                if( !empty($image) ): ?>
                                    <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>"style="width:400px;height:300px;
" />
                                <?php endif; ?>
                                <div class="captun">
                                    <span class="flechblock">Voir Plus </span>
                                </div>
								
                            </a>
							 <h4 class="title_project"><?php the_field('title'); ?></h4>
</div> 

<?php // Votre boucle ici fin

$i++; endwhile;
?>

<!--End List Produits-->
</div>

</div>

		
	</section>




<?php get_footer(); ?>