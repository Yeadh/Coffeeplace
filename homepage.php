<?php
/**
 * Template Name: Home Page
 *
 * @package coffeeplace
 */

get_header(); ?>
	<div class="container-fluid text-center">
		<div class="row">
			<div class="col-md-12">
				 <div class="pswr out" style="" data-tve-custom-colour="58530977">
					<div class="header_subscribe_area" data-width="1840" data-height="382" style="background-image: url(http://localhost/coffee/wp-content/uploads/2017/06/Untitled-1-1.png);">
						<div class="cck tve_clearfix tve_empty_dropzone">
							<h1 class="tve_p_center gr_ver_2 rft bold_text">
								<span class="tve_custom_font_size rft">
								<span class="bold_text">Welcome to our Little Coffee Place</span>
								</span>
							</h1>
						
							<div class="home_subs_area">
							<div class="container">
							<div class="row">
								
								<?php dynamic_sidebar( 'subscribe-top' ); ?>
								
							</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="primary" class="container">
		<div class="row">
			<div class="col-md-12">
			<p class="home_heading">Welcome to Little Coffee Place. Here you can find the best coffee gear reviews and the most practical coffee tips and tricks!</p>

			
			<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>

					<?php
					endif;

					$home_post = new WP_Query(array(
						'post_type' => 'post',
					));
					/* Start the Loop */
					while ( $home_post->have_posts() ) : $home_post->the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content-home');

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			
			</div>
		</div><!-- #row -->
	</div><!-- #primary -->

<?php
get_footer();
