<?php get_header(); ?>



	<main role="main">

	<!-- section -->

	<section>

            <div class="bannerArea3"></div>

                 

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>



		<!-- article -->

		<article id="post-<?php the_ID(); ?>" <?php post_class('blogContent'); ?>>

                        <span class="date"><?php the_time('F j, Y'); ?> </span>

			



			<!-- post title -->

			<h1>

				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>

			</h1>

			<!-- /post title -->



                        <div class="clearfix"></div>



			<?php the_content(); // Dynamic Content ?>

                        

                        

                        <div class="blogSocials">

                        

                                 <ul>

                                

                                     <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-red.png" alt="facebook" ></a></li>

                                 

                                     <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-red.png" alt="twitter" ></a></li>



                                     <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pinterest-red.png" alt="instagram" ></a></li>



                                     <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/email-red.png" alt="google+" ></a></li>



                                </ul>

                            

                            <div class="clearfix"></div>

                                

                            <p>Share This</p>

                                

                        </div>

			



			



                        <div class="singleblogs">
<?php
	$args = array( 'numberposts' => '3' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){ ?>
		
         <div class="blog">
            <?php the_post_thumbnail('full'); ?>
		<span class="entry-date"><p><?php echo get_the_date(); ?></p></span>
                <span id="divider"></span>
		<?php echo '<h2><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</h2></a></div><!-- blog --> ';
                
	}
        ?>
                
</div><!-- singleblogs -->   

                        

                        



		</article>

		<!-- /article -->



	<?php endwhile; ?>



	<?php else: ?>



		



	<?php endif; ?>



                <div class="clearFix"></div>

                        

                        <div class="returnArea">

                            <a href="<?php echo home_url(); ?>"><p>&#60;&#60;Return To Action Carpet Cleaning</p></a>

                        </div>

            

                

	</section>

	<!-- /section -->

	</main>







<?php get_footer(); ?>

