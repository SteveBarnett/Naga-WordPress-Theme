<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

		<div role="main">

			<?php /* Display navigation to next/previous pages when applicable */ ?>
			<?php if ( $wp_query->max_num_pages > 1 ) : ?>
				<?php //get_template_part( 'nav', 'above' ); ?>
			<?php endif; ?>

<section id="work">
<h2><a href="<?php echo home_url(); ?>/portfolio/">Recent Work</a></h2>
<?php
/* Blog */
$blog_query = new WP_Query('posts_per_page=3&post_type=page&post_parent=8');

while( $blog_query->have_posts() ) : $blog_query->the_post();
get_template_part( 'content-page' );
endwhile;

wp_reset_postdata();
?>
</section>

<section id="blog">
<h2><a href="<?php echo home_url(); ?>/blog/">Recent Posts</a></h2>
<?php
/* Portfolio */
$portfolio_query = new WP_Query('posts_per_page=3');

while( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
get_template_part( 'content');
endwhile;

wp_reset_postdata();
?>
</section>

			<?php /* Display navigation to next/previous pages when applicable */ ?>
			<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<?php //get_template_part( 'nav', 'below' ); ?>
			<?php endif; ?>

		</div><!-- role="main" -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
