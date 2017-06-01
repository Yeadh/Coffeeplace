<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package coffeeplace
 */

?>
	<div class="col-md-6 home_post">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header home_post_header">
				<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>	
			</header>
			<div class="home_images">
				<?php the_post_thumbnail(); ?>
			</div>
		</article><!-- #post-## -->
	</div>