<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package coffeeplace
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
	</header><!-- .entry-header -->
	<a class="thi" href="<?php the_permalink(); ?>">
	<?php the_post_thumbnail(); ?>
	</a>
	<div class="entry-content">
		<?php coffee_excerpt_more(40); ?>
	<a class="continue_read" href="<?php the_permalink(); ?>">Continue reading</a>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
