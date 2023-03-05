<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Buildex
 */
?>

<div class="single-header-2 container">
	<div class="row">
		<div class="col-xs-12 col-lg-8 col-lg-push-2">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title h2-style">', '</h1>' ); ?>
				<div class="entry-meta">
					<?php
						buildex_posted_by();
						buildex_posted_in( array(
							'prefix'  => __( 'In', 'buildex' ),
						) );
						buildex_posted_on( array(
							'prefix'  => __( 'Posted', 'buildex' ),
						) );
						buildex_post_comments( array(
							'postfix' => __( 'Comment(s)', 'buildex' ),
						) );
					?>
				</div><!-- .entry-meta -->
			</header><!-- .entry-header -->
		</div>
	</div>
</div>

<?php buildex_post_thumbnail( 'buildex-thumb-xl', array( 'link' => false ) ); ?>