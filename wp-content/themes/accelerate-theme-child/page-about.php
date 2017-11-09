<?php
/**
 * The template for displaying about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
                </ul>
        
            <div id="navigation" class="container">
	           <div class="left"><a href="#">← <span>Interested in Working with Us?</span></a></div>
            </div>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
