<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coffeeplace
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="container">
			<div class="row">
				<?php dynamic_sidebar( 'sidebar_foot' ); ?>
				<div class="col-md-4 widget">
					<ul>
						<?php coffee_footer_social_links(); ?>
					</ul>
				</div>
			</div>
		</div>
		
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
