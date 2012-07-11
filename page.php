<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

		<div role="main">

			<?php the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php //comments_template( '', true ); ?>

<?php /*
			<nav id="portfolio-nav">
				<h6><?php _e( 'Portfolio navigation', 'toolbox' ); ?></h6>
				<div>Previous portfolio item: <?php previous_post_link( '%link', '' . _x( '', 'Previous post link', 'toolbox' ) . ' %title' ); ?></div>
				<div>Next portfolio item: <?php next_post_link( '%link', '%title ' . _x( '', 'Next post link', 'toolbox' ) . '' ); ?></div>
			</nav>
*/ ?>

		</div><!-- role="main" -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
