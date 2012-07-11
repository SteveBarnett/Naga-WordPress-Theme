<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

		<section role="main">

		<?php if ( have_posts() ) : ?>

			<header>
				<h1><?php printf( __( 'Search Results for: %s', 'toolbox' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>

			<?php /* Display navigation to next/previous pages when applicable */ ?>
			<?php if ( $wp_query->max_num_pages > 1 ) : ?>
					<?php get_template_part( 'nav', 'above' ); ?>
			<?php endif; ?>
			
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>
			
			<?php /* Display navigation to next/previous pages when applicable */ ?>
			<?php if (  $wp_query->max_num_pages > 1 ) : ?>
					<?php get_template_part( 'nav', 'below' ); ?>
			<?php endif; ?>

		<?php else : ?>

			<article>
				<header>
					<h1><?php _e( 'Nothing Found', 'toolbox' ); ?></h1>
				</header>

				<div>
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'toolbox' ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</article>

		<?php endif; ?>

		</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
