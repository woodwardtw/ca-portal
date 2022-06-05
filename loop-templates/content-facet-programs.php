<?php
/**
 * Single facet programs partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content row">

		<?php the_content(); ?>
		<div class="col-md-12">
			<div class="row"><div class="col-md-12 facet-sort-box"><?php echo facetwp_display( 'sort' );?></div></div>
			<?php echo facetwp_display( 'template', 'programs' );?>	
		</div>
		<div class="col-md-12">
			<?php echo do_shortcode('[facetwp pager="true"]') ;?>
			<button class="btn btn-dark" value="Reset" onclick="FWP.reset()" class="facet-reset" />Reset Filters</button>
		</div>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
