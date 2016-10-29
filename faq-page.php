<?php
/* Template Name: FAQ Page */
get_header(); ?>

<main role="main">
    
    <section class="faqSection">  <!-- section -->
    <div class="faqArea">
              <div class="bannerArea2"></div><!-- bannerArea -->  
        
              <span id="faqTitle"><p>Action Carpet cleaning</p></span>
              <h1>Frequently Asked Questions</h1>
        
        
        <h2>Carpet</h2>
                <div id="accordion">  

                 <?php

                $args = array( 'post_type' => 'faqs','cat'  => 10,'orderby' => 'menu_order date', 'order'   => 'ASC',  'posts_per_page' => '110' );
        
                 $loop = new WP_Query( $args );

                 while ( $loop->have_posts() ) : $loop->the_post();?>
                             
                        <h3><?php the_title(); ?></h3>
                        <div><p><?php echo $post->post_content; ?></p></div>
                        
                         <?php endwhile; ?>
                     </div><!-- accordion -->   
                         
                        
                    
        </div><!-- faqArea -->  
        
        <div class="faqArea">
                 <h2>Upolstry</h2>
                <div id="accordion2">  

                 <?php

                $args = array( 'post_type' => 'faqs','cat'  => 11,'orderby' => 'menu_order date', 'order'   => 'ASC',  'posts_per_page' => '110' );
        
                 $loop = new WP_Query( $args );

                 while ( $loop->have_posts() ) : $loop->the_post();?>
                             
                        <h3><?php the_title(); ?></h3>
                        <div><p><?php echo $post->post_content; ?></p></div>
                         <?php endwhile; ?>
                        
                    </div><!-- accordion -->     
                        
                    
        </div><!-- faqArea --> 
        
        <div class="faqArea">
                 <h2>Rugs</h2>
                <div id="accordion3">  

                 <?php

                $args = array( 'post_type' => 'faqs','cat'  => 12,'orderby' => 'menu_order date', 'order'   => 'ASC',  'posts_per_page' => '110' );
        
                 $loop = new WP_Query( $args );

                 while ( $loop->have_posts() ) : $loop->the_post();?>
                             
                        <h3><?php the_title(); ?></h3>
                        <div><p><?php echo $post->post_content; ?></p></div>
                         <?php endwhile; ?>
                        
                    </div><!-- accordion -->     
                        
                    
        </div><!-- faqArea --> 
        
       
                        
                        
        
        

    </section><!-- /faqSection -->
     <div class="clearFix"></div>
                        
                        <div class="returnArea">
                            <a href="<?php echo home_url(); ?>"><p>&#60;&#60;Return To Action Carpet Cleaning</p></a>
                        </div>
      <div class="clearFix"></div>
</main>



<?php get_footer(); ?>
