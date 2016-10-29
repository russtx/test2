<?php
/*Template Name:About */
get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="aboutSection">

		<div class="bannerArea4"></div><!-- bannerArea -->  	
                    <div class="clearfix"></div>
                    
           <div class="aboutPostBox">            
                    
                    
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('about-content-area'); ?>>
                            
                            <span id="aboutUpper"><p>Community Cleaners </p></span>
                            <h2>About Action</h2>

				<?php the_content(); ?>
                            
                                <?php the_meta(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>
                                
                                
                                
			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
                        
                        
               <?php

                

                $args = array( 'post_type' => 'about', 'orderby' => 'rand', 'posts_per_page' => '1' );

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();?>

                <div class="servicesRightSide">
                        
                    <span class="divider"></span>    
                    <?php the_content(); ?>
                                  
                </div>
                         <div class="clearfix"></div>
<?php endwhile; ?>
                         
                        
                        
           </div><!-- aboutPostBox -->   
           
           

		
                
                <div id="qualitySection">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icon-fast&friendly.png" alt="icon" class="qualityIcon">
                    <div class="clearfix"></div>
                    <span id="quality"><p>What sets Us Apart?</p></span>
                    <h2>Why Choose Action?</h2>
                    <span id="quality-lower"><p>We Have The Experience And Staff To Assist With Your Needs.</p></span>
                   
                    
                </div><!-- qualitySection -->
                <div class="clearfix"></div>
                
                <div id="aboutAction2">
                    
                    <div id="aboutFast">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/clock.png" alt="icon" class="aboutImage"></a>
                        <h3>
                            Fast And Responsive
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.
                            Integer sit amet gravida dolor, 
                            at faucibus ipsum. 
                                                      
                        </p>
                    </div>
                    
                    <div id="aboutSatisfaction">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs-up.png" alt="icon" class="aboutImage"></a>
                        <h3>
                            Satisfaction Garenteed
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.
                            Integer sit amet gravida dolor, 
                            at faucibus ipsum. 
                                                      
                        </p>
                    </div>
                    
                    <div id="aboutPricing">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/money.png" alt="icon" class="aboutImage"></a>
                        <h3>
                            Affordable Pricing
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.
                            Integer sit amet gravida dolor, 
                            at faucibus ipsum. 
                                                      
                        </p>
                    </div>
                    
                                       
                </div><!-- aboutSection -->
                
                 <div class="clearfix"></div>
                
                <div id="cleaningBox">
                    
                    <div id="carpetBox">
                        <div id="hoverLayer">
                            <h2>Carpet Cleaning</h2>
                            <span id="divider"></span>
                            <a href="<?php echo home_url(); ?>/services/carpet-cleaning/"><span id="learnMore"><p>Learn More</p></span></a>
                        </div>
                    </div>
                        
                    <div id="furnitureBox">
                         <div id="hoverLayer">
                            <h2>Furniture Cleaning</h2>
                            <span id="divider"></span>
                            <a href="<?php echo home_url(); ?>/services/furniture-cleaning/"><span id="learnMore"><p>Learn More</p></span></a>
                         </div>
                    </div>
                    
                    <div id="rugBox">
                         <div id="hoverLayer">
                             <span id="rug"><p>Oriental</p></span>
                            <h2>Rug Cleaning</h2>
                            <span id="divider"></span>
                            <a href="<?php echo home_url(); ?>/services/rug-cleaning/"><span id="learnMore"><p>Learn More</p></span></a>
                        </div>
                    </div>
                    
                    <div id="janitorialBox">
                         <div id="hoverLayer">
                        <h2>Janitorial Cleaning</h2>
                            <span id="divider"></span>
                            <a href="<?php echo home_url(); ?>/services/janitorial-cleaning/"><span id="learnMore"><p>Learn More</p></span></a>
                        </div>
                    </div>
                    
                </div><!-- cleaningBox -->
                
                <div class="clearfix"></div>
                
                <div id="getStarted">
                    
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/get-started-icon.png" alt="icon" class="getStartedIcon">
                    <div class="clearfix"></div>
                    <span id="upperAbout"><p>Start Your Clean Streak</p></span>
                    <h3>Let's Get Started</h3>
                    
                    
                    <div class="clearfix"></div>
                    
                                
                    <a href="<?php echo home_url(); ?>/schedule-service/">
                        <button id="aboutSchedButton"><p>schedule Now</p></button>
                    </a>
                    
                    
                </div><!-- getStarted -->
                
            </section><!-- /aboutSectionn -->    
	</main>

                

<?php get_footer(); ?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

