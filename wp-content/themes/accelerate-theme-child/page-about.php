<?php
/**
 * The template for displaying the About page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
get_header(); ?>

	<section id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><span class="about-co"><span style="color:#45ac9d";>Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</span></h2>
            <?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</section><!-- #primary -->

    <div id="primary" class="site-content">
		<div class="main-content">
            <div class="site-content">
                <section class="about-us">
                    
                    <div class="">
                            <h3>Our Services</h3>
                            <p>We take pride in our clients and the content we create for them. <br> Here is a brief overview of our offered services.</p>
		                </div>
                            
                    <ul class="our-services">
                        <?php query_posts ('posts_per_page=4&post_type=our_services'); ?>
                        <?php while ( have_posts() ): the_post();
                            $image_1 = get_field('image_1');
				            $size = "medium";
				            ?>
                        
                        
            
                        <li class="">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                            
                            <figure class="about-images">                            
                            <?php if($image_1) { ?>
                                <?php echo wp_get_attachment_image( $image_1, $size ); ?>
                            <?php } ?>
                            </figure>
                            
                        </li>
                    </ul>
                    <?php endwhile; //end of loop. ?>
                    <?php wp_reset_query(); //resets altered query back to loop. ?>
                
                    <div id="navigation" class="container">
	                   <div class="left"><a href="#">← <span>Interested in Working with Us?</span></a></div>
                    </div>
            </section>
            </div>
                
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?> 
	