<section id="ventes">
            <div class="container singpro">
                <?php $the_query = new WP_Query( 'page_id=12' );?>
                <!-- la boucle -->
                <?php while ( $the_query->have_posts() ) : ?>
                <?php $the_query->the_post(); 
                // print_r($post);
                echo '<h2 class="h1 wow bounceIn" >' . get_the_title() . '</h2>';
                //echo '<p class="lead text-center wow bounceInRight " data-wow-duration="1s" >' . get_the_content() . '</p>';?>             
                <?php endwhile;?>
                <?php wp_reset_postdata(); ?>
                <!--div class="blockvente"-->
                    <div class="blockpro text-center ">
					<?php if( is_front_page() ){ ?>
                    <?php $documents = new WP_Query(array(
                    'post_type' => 'projet',
                     'showposts'=> 3,
					'category_name'=>'Ventes',
                    )) ;?>
					<?php }else{
                        $documents = new WP_Query(array(
                        'post_type' => 'projet',
						'category_name'=>'Ventes',
                        )) ;
                    } ?>
                    <div class="row">
                        <?php 
                        $i = 0;
                        while ($documents->have_posts()) : $documents->the_post(); 
                            $class= ($i == 0)? 'col-lg-offset-4 col-sm-offset-2 col-md-offset-2 col-xs-offset-2':'';
                        ?>
                        <div class="<?php echo $class;?> col-lg-4 col-md-4 col-sm-4 col-xs-4 team-projet wow fadeInDown" data-wow-duration="2s">
                            <a href="<?php the_permalink(); ?>">
                                <!-- <img src="<?php // echo get_template_directory_uri(); ?>/images/01vente.png" alt="" class="img-responsive center-block"> -->
                                <?php 
                                $image = get_field('image');
                                if( !empty($image) ): ?>
                                    <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
                                <?php endif; ?>
                                <div class="captns">
                                     <span class="flechblock">Voir Plus </span>
                                </div>
                                
                                <!--?php the_field('content'); ?-->
                            </a>
							<h4><?php the_field('title'); ?></h4>
                        </div>
                    <?php  $i++; endwhile; ?>
                    </div>
                </div>
                <?php if( is_front_page() ){ ?>
                <a href="<?php bloginfo('url')?>/vente" class="voirplusborder center-block">VOIR PLUS</a> 
                <?php } ?>
                <!-- <a href="#" class="voirplusborder center-block">VOIR PLUS</a> -->
            <!--/div-->
        </div>
            <?php if(!is_front_page() ){ ?>
           <!--  <div class="copyright">
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