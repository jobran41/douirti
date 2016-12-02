<section id="quisommenous">
                <div class="container">
                <?php $the_query = new WP_Query( 'page_id=8' );?>
                <!-- la boucle -->
                <?php while ( $the_query->have_posts() ) : ?>
                <?php $the_query->the_post(); 
                // print_r($post);
                echo '<h2 class="h1 margbot wow bounceIn">' . get_the_title() . '</h2>';
                echo '<div class="info wow bounceInLeft" data-wow-duration="1s" >';
                    echo '<p>' . get_the_content() . '</p>';
                echo '</div>';
                ?> 
                <?php endwhile;?>
                <?php wp_reset_postdata(); ?>
                <!--a href="#" class="voirplusborder center-block">VOIR PLUS</a-->
            </div>    
        </section>