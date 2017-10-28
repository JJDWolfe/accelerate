<?php
/**
 * The template for displaying the archive of case studies.
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

    <div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
                $image_1 = get_field("image_1");
                $size = "full";
                $services = get_field('services'); ?>
            
            <article class="case-study">
                <aside class="case-study-sidebar">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <h5><?php echo $services; ?></h5>
                    				
                    <?php the_excerpt(); ?>
            
                    <p><strong><a href="<?php echo $link; ?>">Site Link</a></strong></p>
                </aside>
            
                <div class="case-study-images">
                    <a href="<?php the_permalink(); ?>">
                        <?php if($image_1) { ?>
                        <img src="<?php echo wp_get_attachment_image( $image_1, $size ); ?></a>
                        <?php } ?>
                    
                </div>
            </article>
        	<?php endwhile; ?>
		</div><!-- .main-content -->
    </div><!-- #primary -->

<?php get_footer(); ?>
