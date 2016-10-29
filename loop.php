<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('blogArea'); ?>>

		
            <div class="blogContent">
		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->
                    
               
                
                    <!-- post details -->

                    <span class="entry-date">
                    <h4><?php echo get_the_date(); ?></h4>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pinterest.png" alt="pinterest"></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/e-mail.png" alt="email"></a>
                </span>

                    <!-- /post details -->

                    <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

                    <?php edit_post_link(); ?>
            
            </div><!-- blogContent -->
                    

                <div class="blogImage">
                     <!-- post thumbnail -->
                            <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title('blogArea'); ?>">
                                            <?php the_post_thumbnail(array(500,575)); // Declare pixel size you need inside the array ?>
                                    </a>
                            <?php endif; ?>
                            <!-- /post thumbnail -->
                </div><!-- blogImage -->
               
                
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
