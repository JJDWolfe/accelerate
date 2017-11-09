<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Accelerate
 * @since Acclerate
 */

get_header(); ?>

	<div id="primary" class="main-content">
		<main class="site-content" >

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Whoops! You took a wrong turn!', 'Accelerate' ); ?></h1>
				</header><!-- .page-header -->
                
                <aside>
                    
                </aside>

				<div class="page-content">
					<p><?php _e( 'Sorry, this page no longer exists, has never existed or has been moved. We feel like complete jerks for totally misleading you. <br> Feel free to take a look around at our <a href="#"><span class="green-text">blog</span></a> or some of our featured <a href="#"><span class="green-text">work</span></a>.', 'Accelerate' ); ?></p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>