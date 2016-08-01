<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Financial_Insite
 */

get_header(); ?>

<section class="section-full" id="section-2">
<div class="filter">
	<div id="about"></div>
    	<div class="container-fluid posts-page">

		<div class="row">
			<div class="col-sm-12 text-center">
				<h1 class="section-header section-footer"><span> <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'fininsite' ); ?> </span></h1>
			</div>
			<div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-justify text-muli">
				<h2 re><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below?', 'fininsite' ); ?></h2>
			
			<!--- the stuff --->
			<div class="col-sm-12 text-center section-footer">
				<div class="widget-recent-posts">
					<h3><?php the_widget( 'WP_Widget_Recent_Posts' ); ?></h3>
				</div>
			</div>
			<!--- the stuff --->
			</div>
		</div>
	</div>
</div>
</section>

<?php
get_footer();