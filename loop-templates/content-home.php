<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

		<header class="entry-header">

			<?php
			$post_url = get_the_permalink();
			the_title( '<a href="'.$post_url.'"><h1 class="entry-title">', '</h1></a>' ); ?>

		</header><!-- .entry-header -->

		<div class="row">

			<div class="<?php if ( has_post_thumbnail() ) {echo "col-xs-12 col-sm-12 col-md-4 col-lg-4";}
			else {echo "";}?>">
				<?php
						if ( has_post_thumbnail() ) {
							echo '<a href="'.$post_url.'">'.get_the_post_thumbnail( $post->ID, 'large', array('class' => 'img-fluid') ).'</a>';
						}

				?>
			</div>


			<div class="entry-content col-xs-12 col-sm-12 col-md-8 col-lg-8">

				<?php echo the_excerpt(); ?>

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


		<footer class="entry-footer">

			<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

		</footer><!-- .entry-footer -->

	</article><!-- #post-## -->
