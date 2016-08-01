<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Financial_Insite
 */

get_header(); ?>


<section class="section-full">
    
    <div class="container-fluid posts-page">
        <div class="row">
            
				<?php
					while ( have_posts() ) : the_post();
			
                        echo '<div class="col-sm-12 text-center">';
                        echo '<h1 class="section-header section-footer"><span>' . get_the_title() . '</span></h1>';
                        echo '</div>';
			echo get_the_post_thumbnail( $the_post->ID, 'large', 'style=width:100%;height:auto;margin-bottom:5%;' );
                        echo '<div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-justify text-muli">';
                        echo '<p>';
			echo get_the_content();
						get_template_part( 'template-parts/content', get_post_format() );
						echo '<div class="post-nav">' . the_post_navigation() . '</div>';
		                //If comments are open or we have at least one comment, load up the comment template.
						//if ( comments_open() || get_comments_number() ) :
						//	comments_template();
						//endif;
			
                        echo '</p>';
                        echo '</div>';
					endwhile; // End of the loop.
				?>
        </div>
    </div>
</section>



<?php

get_footer();