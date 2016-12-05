<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
		<meta name="charset" content="<?php bloginfo('charset'); ?>">
		
		<?php wp_head(); ?>
	</head>
	
	<?php 
		
		if( is_front_page() ):
			$awesome_classes = array( 'awesome-class', 'my-class' );
		else:
			$awesome_classes = array( 'no-awesome-class' );
		endif;
		
	?>
	
	<body <?php body_class( $awesome_classes ); ?>>
					<!-- Start Our Navbar -->
			        <nav class="navbar  navbar-fixed-top" role="navigation">
			          <div class="container">
			            <div class="navbar-header">
			              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#ournavbar">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			              </button>
			              <a class="navbar-brand wobble-horizontal" href="<?php echo bloginfo('url'); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/logo_douirti.gif" alt="logo_douirti"></a>
			            </div>
			            <img src="<?php echo get_template_directory_uri(); ?>/images/gif.gif" alt="" class="gif">
			           </div>
			            <div class="clear"></div>
			            <div class="hr"></div>
			         <div class="container">
			            <div class="collapse navbar-collapse" id="ournavbar">

			              <ul class="nav navbar-nav navbar-right">
			                
			                <li>
			                	<a  id="searchform" class="open"><i class="fa fa-search"></i></a>
			                </li>
			                <li> 
                                           <audio autoplay="autoplay" src="<?php echo get_template_directory_uri(); ?>/audio/yanni.mp3"  />  
                                         </li>  
			              </ul>

			              <?php if( is_front_page() ){
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'container' => false,
									'menu_class' => 'nav navbar-nav navbar-right centermenu',
									'walker' => new Walker_Nav_Primary()
									)
								);
							}else {
								wp_nav_menu(array(
									'theme_location' => 'secondary',
									'container' => false,
									'menu_class' => 'nav navbar-nav navbar-right centermenu',
									'walker' => new Walker_Nav_Primary()
									)
								);
							}?>
			            </div>
			          </div> <!-- End Of The Container -->
			        </nav>
        <!-- End Our Navbar -->
				</div>
				<!-- <div class="field" id="searchform" >
				  <input type="text" id="searchterm" placeholder="entrez votre text ?" />
				  <button type="button" id="search"><i class="fa fa-search"></i></button>
				</div> -->
				<div class="search-form-container field">
						<?php get_search_form(); ?>
				</div>
			
			</div>
			
			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />