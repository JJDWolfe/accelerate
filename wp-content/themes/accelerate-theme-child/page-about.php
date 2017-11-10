<?php 
/**
* Template Name: About Page 
* 
* The template for displaying a full width about page without a sidebar. 
* 
* @package WordPress 
* @subpackage Accelerate 
* @since Accelerate 2.0 
*/ 

get_header(); ?>

	<section id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</section><!-- #primary -->
<section class="recent-posts">
        <div class="site-content">
            <div class="blog-post">
                <h4>From the Blog</h4>
                <?php query_posts ('posts_per_page=1'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                    <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>


<?php get_footer(); ?>
