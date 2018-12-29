<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 offset-md-2 offset-lg-2">
			<header class="entry-header">

				<?php the_title( '<h1 class="entry-title text-center">', '</h1>' );
				if ( has_excerpt() ) {
					//echo wp_strip_all_tags(get_the_excerpt());
					echo $post->post_excerpt;
				}
				?>

				<div class="entry-meta">

					<?php understrap_posted_on(); ?>

				</div><!-- .entry-meta -->

			</header><!-- .entry-header -->
		</div>
	</div>

	<div class="row">
		<!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3"> -->
		<div class="mx-auto">
			<?php echo get_the_post_thumbnail( $post->ID, 'large', array('class' => 'img-fluid') ); ?>
		</div>
	</div>

	<div class="row">
		<div class="entry-content col-xs-12 col-sm-12 col-md-8 col-lg-8 offset-md-2 offset-lg-2">

			<?php the_content(); ?>

			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->
	</div>

	<div class="row">
		<div class="entry-content col-xs-12 col-sm-12 col-md-8 col-lg-8 offset-md-2 offset-lg-2">
			<footer class="entry-footer">

				<?php //understrap_entry_footer(); ?>

			</footer><!-- .entry-footer -->
		</div><!-- .entry-content -->
	</div>


</article><!-- #post-## -->
