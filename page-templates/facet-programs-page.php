<?php
/**
 * Template Name: Facet Program Layout
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">

	<div class="container-fluid" id="content">

		<div class="row">

			<div class="col-md-4">
				<h2>Format</h2>
				<?php echo do_shortcode('[facetwp facet="delivery"]');?>
				<h2>Location</h2>
				<?php echo do_shortcode('[facetwp facet="location"]');?>
			</div>

			<div class="col-md-8 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php
					while ( have_posts() ) {
						the_post();

						get_template_part( 'loop-templates/content', 'facet-programs' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					}
					?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
