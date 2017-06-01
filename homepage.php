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
					<div class="header_subscribe_area" data-width="1840" data-height="382" style="background-image: url(&quot;https://www.littlecoffeeplace.com/wp-content/uploads/2016/01/Coffee-black.jpg&quot;);">
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

			<div class="col-md-6 home_post">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header home_post_header">
						<h2 class="entry-title">
						<a href="#">History of induction cooking?</a>
						</h2>	
					</header>
					<div class="home_images">
						<a href="#"><img src="http://localhost/coffee/wp-content/uploads/2017/05/Eating-Coffee-Beans.jpg" alt="">
					</div>
				</article><!-- #post-## -->
			</div>
			<div class="col-md-6 home_post">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header home_post_header">
						<h2 class="entry-title">
						<a href="#">History of induction cooking?</a>
						</h2>	
					</header>
					<div class="home_images">
						<a href="#"><img src="http://localhost/coffee/wp-content/uploads/2017/05/Eating-Coffee-Beans.jpg" alt="">
					</div>
				</article><!-- #post-## -->
			</div>
			</div>
		</div><!-- #row -->
	</div><!-- #primary -->

<?php
get_footer();
