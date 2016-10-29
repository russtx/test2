<?php 
/* Template Name: Home-Page */
get_header(); ?>

	<main role="main">
		<!-- section -->
                <div class="clearfix"></div>
		<section id="homePageSection">

                    <div class="bannerArea">
                        <div class="freeBox">
                            <div id='boxBorder'>
                                <span id="upper"><p>Get Those Spots Out For</p></span>
                                <h2>Free</h2>
                                <span id="lower">
                                    <p>When You Schedule A Residential<br />
                                        Carpet Cleaning With Action!</p>
                                </span>
                                <div class="clearfix"></div>
                                <a href="<?php echo home_url(); ?>/schedule-service/">"><button id="freeButton">
                                        <p>Schedule Now</p>
                                    </button></a> 
                            </div><!--boxBorder -->   
                        </div><!-- freeBox -->
                    </div><!-- bannerArea -->	
                    <div class="clearfix"></div>
                    
                    
                    <div id="vanPix"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/van.png" alt="van">
                        
                        

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('home-page-content-area'); ?>>
                            
                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icon-fast&friendly.png" alt="icon" class="headerIcon"></span>
                            <span id="upperText"><p>Fast & Friendly</p></span>
                            <h2>Services</h2>
                                
                            
				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>
                                
                                <div class="clearfix"></div>
                                
                                <a href="<?php echo home_url('our-services'); ?>">
                                    <button id="ourServices">
                                        <p>
                                            Our Services
                                        </p>
                                    </button>
                                    
                                </a>
                                

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			
		<?php endif; ?>
                        
                </div><!-- vanPix -->

		</section><!-- homepageSection -->
		
                
                <section id="cleaningBox">
                    
                    <a href="<?php echo home_url(); ?>/services/carpet-cleaning/"> <div id="carpetBox">
                        <div id="hoverLayer">
                            <h2>Carpet Cleaning</h2>
                            <span id="divider"></span>
                           <span id="learnMore"><p>Learn More</p></span>
                        </div>
                    </div></a>
                        
                    <a href="<?php echo home_url(); ?>/services/furniture-cleaning/"><div id="furnitureBox">
                         <div id="hoverLayer">
                            <h2>Furniture Cleaning</h2>
                            <span id="divider"></span>
                            <span id="learnMore"><p>Learn More</p></span>
                         </div>
                    </div></a>
                    
                    <a href="<?php echo home_url(); ?>/services/rug-cleaning/"><div id="rugBox">
                         <div id="hoverLayer">
                             <span id="rug"><p>Oriental</p></span>
                            <h2>Rug Cleaning</h2>
                            <span id="divider"></span>
                            <span id="learnMore"><p>Learn More</p></span>
                        </div>
                    </div></a>
                    
                    <a href="<?php echo home_url(); ?>/services/janitorial-cleaning/"><div id="janitorialBox">
                         <div id="hoverLayer">
                        <h2>Janitorial Cleaning</h2>
                            <span id="divider"></span>
                            <span id="learnMore"><p>Learn More</p></span>
                        </div>
                    </div></a>
                    
                </section><!-- cleaningBox -->
                
                <div class="clearfix"></div>
                
                <section id="qualitySection">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icon-fast&friendly.png" alt="icon" class="qualityIcon">
                    <div class="clearfix"></div>
                    <span id="quality"><p>Start Your Clean Streak</p></span>
                    <h2>Let's Get Started</h2>
                    
                </section><!-- qualitySection -->
                
                
                <div class="clearfix"></div>
                  
                
                
                <section class="blogArea">
          
              <?php
$args = array( 'posts_per_page' => 1, 'order'=> 'ASC', 'orderby' => 'title' );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?> 
        
                    
        <div class="blogContent">
            <h2><?php the_title(); ?></h2>
            <div class="clearfix"></div>
            <span class="entry-date">
                <h4><?php echo get_the_date(); ?></h4>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="facebook"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png" alt="twitter"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pinterest.png" alt="pinterest"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/e-mail.png" alt="email"></a>
            </span>
            <?php $content = get_the_content();   $trimmed_content = wp_trim_words( $content, 20, '<a href="'. get_permalink() .'"> ...[ read more ]</a>' ); ?>
  <p><?php echo $trimmed_content; ?></p>
  
        <a href="<?php echo home_url(); ?>/new-updates/">
                        <button id="blogButton"><p>Our Blog</p></button>
                    </a> 
  
  
	</div>
                    
                   
                    
       <div class="blogImage" >
            <?php the_post_thumbnail('500, 575');  ?>
       </div>
                    
<?php
endforeach; 
wp_reset_postdata();
?>
                    
                </section><!-- blogArea -->
                
                <section id="aboutAction">
                    
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icon-fast&friendly.png" alt="icon" class="qualityIcon">
                    <div class="clearfix"></div>
                    <span id="upperAbout"><p>community Cleaners</p></span>
                    <h2>About Action</h2>
                    <span id="lowerAbout"><p>Serving the Fredericksburg community for over 25 years.</p></span>
                    
                    <div class="clearfix"></div>
                    
                    <div id="aboutFast">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/clock.png" alt="icon" class="aboutImage"></a>
                        <p>
                            Fast And Responsive
                        </p>
                    </div>
                    
                    <div id="aboutSatisfaction">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs-up.png" alt="icon" class="aboutImage"></a>
                        <p>
                            Satisfaction Garenteed
                        </p>
                    </div>
                    
                    <div id="aboutPricing">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/money.png" alt="icon" class="aboutImage"></a>
                        <p>
                            Affordable Pricing
                        </p>
                    </div>
                    
                               
                    
                    
                    <a href="<?php echo home_url(); ?>/about/">
                        <button id="aboutButton"><p>About Us</p></button>
                    </a>
                    
                    
                </section><!-- AboutAction -->
                
                <section id="scheduleBox">
                
                    <div id="scheduleArea">

                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icon-fast&friendly.png" alt="icon" class="qualityIcon">
                        <div class="clearfix"></div>
                        <span id="upperAbout"><p>Start Your Clean Streak</p></span>
                        <h2>Let's Get Started</h2>

                         <a href="<?php echo home_url(); ?>/schedule-service/">
                            <button id="scheduleButton"><p>Schedule Now</p></button>
                        </a>   

                    </div><!--scheduleArea -->

                      

                    <div id="scheduleImage">

                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/schedule-img.png" alt="icon" class="scheduleImg">   


                    </div><!-- scheduleImage -->
                </section><!-- scheduleBox -->
	</main>

        <div class="clearfix"></div

<?php get_footer(); ?>
