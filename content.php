<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

<article id="post-<?php the_ID(); ?>" <?php /*post_class();*/ echo 'class="hentry"'; ?>>
	<header>
		<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>

		<?php if ( 'post' == $post->post_type ) : ?>
		<div>
			<time class="entry-date updated" datetime="<?php the_date('c'); ?>" pubdate><?php echo get_the_date(); ?></time>

			<span class="byline author vcard">
			By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="View all posts by <?php the_author(); ?>" class="fn" rel="author"><?php the_author(); ?></a>
			</span>

			<span class="source-org vcard">
				<span class="org fn">Naga IT Services</span>
			</span>


		</div>
		<div>Filed under: <?php the_category( ', ' ); ?></div>
		<?php endif; ?>
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

	<footer>
	<?php comments_popup_link( __( 'Leave a comment', 'toolbox' ), __( '1 Comment', 'toolbox' ), __( '% Comments', 'toolbox' ) ); ?><br />
	Share this post on:
<a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>" title="Share this post on Twitter">Twitter</a>,
<a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>
" title="Share this post on Facebook">Facebook</a>,
or <a href="https://plusone.google.com/_/+1/confirm?hl=en&url=<?php echo urlencode(get_permalink()); ?>" title="Share this post on Google+">Google+</a>.
	</footer>

	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->