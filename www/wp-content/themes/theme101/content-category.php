<section id="projets">
            <div class="container">
                <?php $the_query = new WP_Query( 'page_id=10' );?>
                <!-- la boucle -->
                <?php while ( $the_query->have_posts() ) : ?>
                <?php $the_query->the_post(); 
                // print_r($post);
                echo '<h2 class="h1 wow bounceIn" >' . get_the_title() . '</h2>';
                echo '<p class="lead text-center wow bounceInRight " data-wow-duration="1s" >' . get_the_content() . '</p>';?>             
                <?php endwhile;?>
                <?php wp_reset_postdata(); ?>
                <div class="blockpro text-center  ">
                    <?php if( is_front_page() ){ ?>
                    <?php $documents = new WP_Query(array(
                    'post_type' => 'projet',
                     'showposts'=> 3,
                    )) ;?>
                    <?php }else{
                        $documents = new WP_Query(array(
                        'post_type' => 'projet',
                        )) ;
                    } ?>
                    <div class="row">
                        <?php while ($documents->have_posts()) : $documents->the_post(); ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 team-projet wow fadeInDown" data-wow-duration="1.5s">
                            <a href="<?php the_permalink(); ?>">
                                <!-- <img src="<?php // echo get_template_directory_uri(); ?>/images/02projet.png" alt="" class="img-responsive center-block"> -->
                                <?php 
                                $image = get_field('image');
                                if( !empty($image) ): ?>
                                    <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
                                <?php endif; ?>
                                <div class="captn">
                                    <span class="flechblock">Voir Plus </span>
                                </div>
                            </a>
                            <h4><?php the_field('title'); ?></h4>
                            <!-- <h4> ACHEVES</h4> -->
                        </div>
                        <?php  endwhile; ?>
                    </div>
                </div>
                <?php if( is_front_page() ){ ?>
                <a href="<?php bloginfo('url')?>/projet" class="voirplusborder center-block">VOIR PLUS</a> 
                <?php } ?>
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
