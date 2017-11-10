<?php
/**
 * The template for displaying about page
 *
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		
        <div class="main-content">
            <div class="site-content">
                <h4>Our Services</h4>
                <p>We take pride in our clients and the content we creat for them. Here's a brief overview of our offered services.</p>
                <?php query_posts ('posts_per_page=4&post_type=our_services'); ?>
                <?php while ( have_posts() ): the_post();
                    $image_4 = get_field('image_4');
                    $size = "full";
                    ?>
            
				<ul class="our-services">
                    <h1><?php the_title(); ?></h1>
				    <?php the_content(); ?>
                    <li class="individual-services">
                        <figure>
                            <?php echo wp_get_attachment_image($image_4, $size); ?>
                        </figure>
                    </li>
                    <?php endwhile; //end of loop. ?>
                    <?php wp_reset_query(); //resets altered query back to loop. ?>
                </ul>
        
            <div id="navigation" class="container">
	           <div class="left"><a href="#">← <span>Interested in Working with Us?</span></a></div>
            </div>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
