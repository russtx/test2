<?php
/* Template Name: Contact Page */
get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="contactSection">
                    <div class="bannerArea2"></div><!-- bannerArea -->
                    
                    <span id="contactUpper"><p>Let's Get Started</p></span>
                    <h2>Contact Us</h2>
                    <div class="contactBox">
                        <div class="leftSide" id="rightBorder">
                            <h3>Contact Us</h3>
                            <a href="tel: 540 371 7700"<p><span>Phone</span>(540) 371-7700</a></p>
                        <a href="mail: #"><p id="emailLink"><span>E-Mail</span>info&#64;actioncarpetcleaners.com</a></p>
                        </div>
                        <div class="rightSide">
                            <h3>Visit Us</h3>
                            <span class="footerMap"><a href="https://www.google.com/maps/place/503+Lafayette+Blvd,+Fredericksburg,+VA+22401/@38.2975585,-77.4626801,17z/data=!3m1!4b1!4m5!3m4!1s0x89b6c21a20d42315:0x85fb516eb0ca0bcd!8m2!3d38.2975585!4d-77.4604968">503 Lafayette Blvd.<br />
                                        Fredericksburg, Virginia 22401</a></span>
                        </div>
                        
                        
                    </div><!-- contactBox -->
                    <?php echo do_shortcode('[gravityform id="1" title="true" description="true"]'); ?>
			
                    
		</section><!-- /contact -->
	</main>



<?php get_footer(); ?>
