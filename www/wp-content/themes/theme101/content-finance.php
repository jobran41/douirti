<section id="finance">
            <div class="container">
                <!-- <h2 class="h1 wow bounceIn">Financement</h2> -->
                <?php $the_query = new WP_Query( 'page_id=14' );?>
                <!-- la boucle -->
                <?php while ( $the_query->have_posts() ) : ?>
                <?php $the_query->the_post(); 
                // print_r($post);
                echo '<h2 class="h1 wow bounceIn" >' . get_the_title() . '</h2>';?>             
                <?php endwhile;?>
                <?php wp_reset_postdata(); ?>  
                <?php $documents = new WP_Query(array(
                    'post_type' => 'finance',
                     'showposts'=> 1,
                    )) ;?>
                <div class="row">
                    <?php while ($documents->have_posts()) : $documents->the_post(); ?>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" data-wow-duration="2s">
                        <div class="curentimgnew">
                           <?php 
                            $image = get_field('image');
                            if( !empty($image) ): ?>
                                <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
                            <?php endif; ?>
                            <div class="triangle"></div>
                        </div>
                        
                    </div> 
                    <?php  endwhile; ?> 
                    <?php while ($documents->have_posts()) : $documents->the_post(); ?>  
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" data-wow-duration="4s">
                        <div class="curentimgvd">
                            <?php the_field('content'); ?>
                        </div>
                    </div>
                    <?php  endwhile; ?> 
                </div>
                </div> 
            </section> 