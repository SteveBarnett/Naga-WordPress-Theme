<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

		<div role="main" class="hfeed">

			<?php /* Display navigation to next/previous pages when applicable */ ?>
			<?php if ( $wp_query->max_num_pages > 1 ) : ?>
				<?php //get_template_part( 'nav', 'above' ); ?>
			<?php endif; ?>
			
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'content'); ?>

			<?php endwhile; ?>
			
			<?php /* Display navigation to next/previous pages when applicable */ ?>
			<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<?php //get_template_part( 'nav', 'below' ); ?>
			<?php endif; ?>

		</div><!-- role="main" -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
