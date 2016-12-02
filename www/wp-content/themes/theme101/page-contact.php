<?php /* Template Name: contact */ ?>
<?php get_header(); ?>
<section id="contact">
	            <div class="container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.259602097839!2d10.163786314721726!3d36.83625827336986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd33613db19ebb%3A0x40a5a673717b1c3b!2sDouirti+SA!5e0!3m2!1sfr!2stn!4v1460707351280" width="800" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                          
                </div>
                <h2 class="h1 text-center wow bounceIn">CONTACT</h2>
                <div class="container infocontact">
                    <?php $documents = new WP_Query(array(
                    'post_type' => 'contact',
                     'showposts'=> 1,
                    )) ;?>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <?php 
                              echo do_shortcode('[contact-form-7 id="280" title="Formulaire de contact 1"]'); 
                            ?>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <?php while ($documents->have_posts()) : $documents->the_post(); ?>
                            <h4 class="text-center"><?php the_field('title'); ?></h4>
                             <?php the_field('shorttext'); ?>
                            <div class="social text-center">
                                <ul class="list-unstyled list-inline">
                                    <li><i class="fa fa-facebook fa-1x jj"></i></li>
                                    <li><i class="fa fa-twitter fa-1x"></i></li>
                                    <li><i class="fa fa-google fa-1x"></i></li>
                                    <li><i class="fa fa-linkedin fa-1x"></i></li>
                                    <li><i class="fa fa-youtube-play fa-1x" ></i></li>
                                </ul>
                            </div>
                            <!-- <p class="lead2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum condimentum ante, vel fermentum libero pharetra sed. Sed non volutpat massa, id cursus dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit
                            </p> -->
                            <?php //the_field('longuetext'); ?>
                            <div class="phone ">
                                <i class="fa fa-phone pull-left fa-2x adr"></i>
                                <?php the_field('telephone'); ?>
                            </div>
							<div class="fax ">
                                <i class="fa fa-fax pull-left fa-2x adr"></i>
                                <?php the_field('fax'); ?>
                            </div>
                            <p class="clear"></p>
                            <div class="place ">
                                <i class="fa fa-map-marker pull-left fa-2x adr"></i>
                                <?php the_field('adress'); ?>
                            </div>
                            <p class="clear"></p>
                            <div class="mail ">
                                <i class="fa fa-envelope pull-left fa-2x adr"></i>
                                <p class="pull-left lead2"><?php the_field('mail'); ?></p>
                            </div>
                            <?php  endwhile; ?>
                        </div>
                    </div>
                </div>
                
                <div class="copyright">
                  <div class="container-fluid">
                      <div class="copy text-center">
                            <ul class=" list-inline">
                                <li>Copyright 2016 </li>
                                <li>Tous droits réservés</li>
                                <li> Mentions légales </li>
                                <li>Powred by Streamerz</li>
                                <li><a href="<?php echo bloginfo('url'); ?>/wp-admin">Administration</a></li>
                            </ul>
                        </div>
                  </div>
                </div> 
            </section>
<?php // get_template_part('content', 'slide'); ?>
<?php // get_template_part('content', 'contact'); ?>
<?php get_footer(); ?>


