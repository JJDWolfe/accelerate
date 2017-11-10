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

	<section id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</section><!-- #primary -->
 get_header(); ?>

<h1>Hi! I'm the page-about.php template file. And I'm in use!!</h1>
	<div id="primary" class="site-content">
		<div class="main-content">
            <div class="site-content">
                <section class="about-us">
                            
                    <ul class="our-services">
                        <?php query_posts ('posts_per_page=4&post_type=our_services'); ?>
                        <?php while ( have_posts() ): the_post();
                            $image_4 = get_field('image_4');
                            $size = "full";
                        ?>
            
                        <li class="individual-services">
                        <figure>
                            <?php echo wp_get_attachment_image($image_4, $size); ?>
                        </figure>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></li>
                        <?php endwhile; //end of loop. ?>
                        <?php wp_reset_query(); //resets altered query back to loop. ?>
                    </ul>
                </section>
                
                <div id="navigation" class="container">
	               <div class="left"><a href="#">← <span>Interested in Working with Us?</span></a></div>
                </div>
            </div>
                
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?> 

