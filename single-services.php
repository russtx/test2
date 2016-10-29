<?php get_header(); ?>

	<main role="main">
	<!-- section -->
        <section id="cleaningSection">

            <div class="bannerArea"></div>
            
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('cleaning'); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
                        <span id="upper"><p>Caring since 1989</p></span>
			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			

			<?php
    // original content display
        // the_content();
    // split content into array
        $content = split_content();
    // output first content section in column1
        echo '<div id="column1">', array_shift($content), '</div>'; ?>
    
        <?php echo '<span class="divider"></span>'; ?>
        
<?php // output remaining content sections in column2
        echo '<div id="column2">', implode($content), '</div>'; ?>

                        
                        <span class="divider"></span> 
                        
                        <div id="rightsideServices"><?php echo get_post_meta($post->ID, 'key', true); ?></div>

			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>
                 
         
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
                
                
                 <div class="clearfix"></div>
                
                <div id="cleaningBox">
                    
                    <a href="<?php echo home_url(); ?>/services/carpet-cleaning/"><div id="carpetBox">
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
                            <span id="learnMore"><p>Learn More</p></span><
                        </div>
                    </div>/a>
                    
                    <a href="<?php echo home_url(); ?>/services/janitorial-cleaning/"><div id="janitorialBox">
                         <div id="hoverLayer">
                        <h2>Janitorial Cleaning</h2>
                            <span id="divider"></span>
                            <span id="learnMore"><p>Learn More</p></span>
                        </div>
                    </div></a>
                    
                </div><!-- cleaningBox -->
                
                <div class="clearfix"></div>

	</section><!-- /section -->
        
        <div class="returnArea">
                            <a href="<?php echo home_url(); ?>"><p>&#60;&#60;Return To Action Carpet Cleaning</p></a>
                        </div>
      <div class="clearFix"></div>
        
	</main>



<?php get_footer(); ?>
