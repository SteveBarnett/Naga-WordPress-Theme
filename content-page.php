<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

<article id="post-<?php the_ID(); ?>" <?php /*post_class();*/ echo 'class="hentry"'; ?>>
	<header>
		<h3><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	</header>

	<?php if ( is_search() ) : // Only display Excerpts for search pages ?>
	<div class="entry-summary">
		<?php the_excerpt( __( 'Continue reading &rarr;', 'toolbox' ) ); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading &rarr;', 'toolbox' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'toolbox' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

<?php
if (has_post_thumbnail()) {
?>
	<div class="thumbnail">
<?php
	$url = get_post_meta(get_the_ID(), 'url', true);
	if ($url != '') {
?>
		<a href="http://<?php echo $url; ?>/" title="View the <?php the_title(); ?> web site">
<?
	}
?>
		<?php the_post_thumbnail('medium'); ?>
<?php
	if ($url != '') {
?>
		</a>

		<a href="http://<?php echo $url; ?>/" title="View the <?php the_title(); ?> web site"><?php echo $url; ?></a>
<?
	}
?>
	</div>
<?php
}
?>

	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
