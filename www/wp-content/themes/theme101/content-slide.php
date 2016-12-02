<section id="accueil">
    <div id="myslide" class="carousel slide " data-ride="carousel">

              <ol class="carousel-indicators">
                <li data-target="#myslide" data-slide-to="0" class="active"></li>
                <li data-target="#myslide" data-slide-to="1"></li>
				
              </ol>
            
                <div class="carousel-inner">

                <?php $documents = new WP_Query(array(
                'post_type' => 'slider',
                )) ;?>
                <?php while ($documents->have_posts()) : $documents->the_post(); ?>
                <div class="item ">
                   <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxrelative">
                              <?php $image = get_field('image');
                                    if( !empty($image) ): ?>
                                        <img width="100%" height="" class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
                                <?php endif; ?> 
                                <div class="textslider text-center">
                                    <?php 
                                    echo '<h3>' . get_the_title() . '</h3>';
                                    echo '<p>' . get_the_excerpt() . '</p>';
                                    ?>
                                    <a href="<?php the_field('link');?>" class="sliderbtn">VOIR PLUS</a>
                                </div>
                            </div>
                        </div>     
                  </div>
                <?php  endwhile; ?>
                <?php wp_reset_postdata(); ?>
        </div>
    </div>    
            <!-- End Carousel -->
</section>