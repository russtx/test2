<?php
/* Template Name: Our Services */
get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="ourServicesSection">

		<div class="bannerArea"></div><!-- bannerArea -->	
                    <div class="clearfix"></div>	

                    
            
            <div class="servicesPostBox">        
                 
                
                    
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('our-services-area'); ?>>

                            <span id="servicesUpper"><p>Fast &amp; Friendly </p></span>
                            <h2>Services</h2>
                            
                            
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

                

                $args = array( 'post_type' => 'ourservices', 'orderby' => 'rand', 'posts_per_page' => '1' );

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();?>

                <div class="servicesRightSide">
                         <span class="divider"></span>  
                        <h2><?php the_title();?></h2>
                        <p><?php the_content(); ?><p>
                                  
                </div>
                         <div class="clearfix"></div>
<?php endwhile; ?>
                         
            </div><!-- sevicesPostbox -->
                         
                         
        <section id="cleaningBox">
                    
                    <a href="<?php echo home_url(); ?>/services/carpet-cleaning/"><div id="carpetBox">
                        <div id="hoverLayer">
                            <h2>Carpet Cleaning</h2>
                            <span id="divider"></span>
                            <span id="learnMore"><p>Learn More</p></span><
                        </div>
                    </div>/a>
                        
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
                
                
                
                <section id="qualitySection2">
                    
                    <div id="qualityHeader">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icon-fast&friendly.png" alt="icon" class="qualityIcon">
                        <div class="clearfix"></div>
                        <span id="quality"><p>Start Your Clean Streak</p></span>
                        <h2>Let's Get Started</h2>

                        <a href="<?php echo home_url(); ?>/schedule-service/">
                            <button id="qualityButton"><p>Schedule Now</p></button>
                        </a>
                    </div><!-- qualityHedaer -->
                
                
                    <div id="qualityImage">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carpetRoll.png" alt="carpet-roll">

                    </div><!-- qualityImage -->
                        
                </section><!-- qualitySection -->

            </section><!-- ourServicesSection -->
	</main>



<?php get_footer(); ?>
