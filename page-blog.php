<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

/*
Template Name: Blog
*/

get_header(); ?>

		<div role="main" id="blog">

<h1>Blog</h1>

<?php
query_posts('post_type=post');
?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

		</div><!-- role="main" -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
