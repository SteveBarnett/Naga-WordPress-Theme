<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

/*
Template Name: Portfolio
*/

get_header(); ?>

		<div role="main" id="work">

<h1>Portfolio</h1>

<?php
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

$portfolio_query = new WP_Query('post_type=page&post_parent=8&paged=' . $paged);
#$portfolio_query = new WP_Query('post_type=page&post_parent=8');
?>
			<?php /* Start the Loop */ ?>
			<?php while( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

			<nav>
				<h6>Portfolio Navigation</h6>
				<a href="<?php bloginfo( 'home' ); ?>/portfolio/page/<?php echo $paged + 1; ?>">&larr; Older work</a>
				<?php if($paged != 1) { ?>
				<a href="<?php bloginfo( 'home' ); ?>/portfolio/page/<?php echo $paged - 1; ?>">Newer work &rarr;</a>
				<?php } ?>
			</nav>

		</div><!-- role="main" -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
