<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

		<div role="main">

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php comments_template( '', true ); ?>

			<nav>
				<h6><?php _e( 'Post navigation', 'toolbox' ); ?></h6>
				<div><?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'toolbox' ) . ' %title' ); ?></div>
				<div><?php next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link', 'toolbox' ) . '' ); ?></div>
			</nav>

		<?php endwhile; // end of the loop. ?>

		</div><!-- role="main" -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
