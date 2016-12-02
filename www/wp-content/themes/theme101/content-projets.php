<section id="projets">
            <div class="container singpro">
                <?php $the_query = new WP_Query( 'page_id=10' );?>
                <!-- la boucle -->
                <?php while ( $the_query->have_posts() ) : ?>
                <?php $the_query->the_post(); 
                
                echo '<h2 class="h1 wow bounceIn" >' . get_the_title($post = 10) . '</h2>';
                //echo '<p class="lead text-center wow bounceInRight " data-wow-duration="1s" >' . get_the_content() . '</p>';?>             
                <?php endwhile;?>
                <?php wp_reset_postdata(); ?>
                <div class="blockpro text-center  ">
                    
                              <?php
							      $args = array(
    'orderby'           => 'name', 
    'order'             => 'ASC',
    'hide_empty'        => false, 
    'exclude'           => array(11), 
    'exclude_tree'      => array(), 
    'include'           => array(),
    'number'            => '', 
    'fields'            => 'all', 
    'slug'              => '',
    'parent'            => '',
    'hierarchical'      => true, 
    'child_of'          => 0,
    'childless'         => false,
    'get'               => '', 
    'name__like'        => '',
    'description__like' => '',
    'pad_counts'        => false, 
    'offset'            => '', 
    'search'            => '', 
    'cache_domain'      => 'core'
); 
                                  //$domaines = get_terms('category','orderby=count&hide_empty=0');
								  $domaines = get_terms('category',$args);
                                  foreach($domaines as $d){ ?>
								  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 team-projet wow fadeInDown" data-wow-duration="1.5s">
                                           
						                  <a href="<?php echo get_category_link($d->term_id); ?>">
										  <img class="img-responsive center-block"src="<?php echo z_taxonomy_image_url($d->term_id); ?>" />
										  <div class="captn">
                                          <span class="flechblock">Voir Plus </span>
                                          </div>
										  
                                   </a>
								   <?php echo '<h4 >'.$d->name.'</h4>'; ?>
								   </div>
                             <?php } ?>
                   
                 
		   
		        <?php query_posts('post_type=projet'); ?>
                <?php while ( have_posts() ) : the_post(); ?>

               <?php $terms = get_the_terms($post->id,'domaines');
                       $terms_name=array();
                       foreach($terms as $term){
                       $terms_name[] = $term->name;
                                               }
			  
                 ?>
		   
		   <?php echo $term->slug ;?>

               <?php endwhile; ?>
           <?php wp_reset_query(); ?>
		   
                </div>
				
               
            </div>
            <?php if(!is_front_page() ){ ?>
            <!-- <div class="copyright">
              <div class="container-fluid">
                  <div class="copy text-center">
                        <ul class=" list-inline">
                            <li>Copyright 2015 </li>
                            <li>Tous droits réservés</li>
                            <li> Mentions légales </li>
                            <li>Powred by Streamerz</li>
                            <li><a href="<?php // echo bloginfo('url'); ?>/wp-admin">Administration</a></li>
                        </ul>
                    </div>
              </div>
            </div>  -->
            <?php } ?>

        </section>
		
