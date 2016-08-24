<?php
/*
    Template Name: Home
*/


/* About Section Variables */
$about_title = get_field('about_title');
$about_information = get_field('about_information');
$bio_title_1 = get_field("bio_title_1");
$bio_image_1 = get_field("bio_image_1");
$bio_1 = get_field("bio_1");
$bio_title_2 = get_field("bio_title_2");
$bio_image_2 = get_field("bio_image_2");
$bio_2 = get_field("bio_2");
$about_sub_title = get_field('about_sub_title');
$about_sub_message = get_field('about_sub_message');
$text_under_bios = get_field('text_under_bios');

/* WWD Section Variables */
$wwd_section_title = get_field('wwd_section_title');
$wwd_section_main_message = get_field('wwd_section_main_message');
$icon_1_text = get_field('icon_1_text');
$icon_1_more_info = get_field('icon_1_more_info');
$icon_2_text = get_field('icon_2_text');
$icon_2_more_info = get_field('icon_2_more_info');
$icon_3_text = get_field('icon_3_text');
$icon_3_more_info = get_field('icon_3_more_info');
$icon_4_text = get_field('icon_4_text');
$icon_4_more_info = get_field('icon_4_more_info');
$wwd_closing_line = get_field('wwd_closing_line');
$list_of_promises = get_field('list_of_promises');

/* FAQ Section Variables */
$faq_section_title = get_field('faq_section_title');
$faq_section_main_message = get_field('faq_section_main_message');
$question_1 = get_field('question_1');
$answer_1 = get_field('answer_1');
$question_2 = get_field('question_2');
$answer_2 = get_field('answer_2');
$question_3 = get_field('question_3');
$answer_3 = get_field('answer_3');
$question_4 = get_field('question_4');
$answer_4 = get_field('answer_4');

/* Post Section Variables */
$max_posts = 2;

if ( have_posts() ){
	$args = array( 'numberposts' => $max_posts );
	$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
	for ($i = 0; $i <= $max_posts; $i++){
		$recent_posts[$i]['thumbnail'] = wp_get_attachment_url( get_post_thumbnail_id( $recent_posts[$i] ) );
		
	}
}

get_header(); ?>


<!-- modal -->
<div id="myModal" class="modal">
<div class="modal-content">
<span class="close">x</span>
<p>Thank you! We will be in touch soon.</p>
</div>
</div>


<!-- Main Body -->
            <!--First section-->
            <section class="section-full" id="section-1">
                <div id="top"></div>
                <div class="filter">
                </div>
                <div class="centered-div-section text-center ">
                   <span id="translating"><?php bloginfo('name'); ?></span>
                   <span id="into"><?php bloginfo('description'); ?></span>
                </div>
            </section>
            <!-- First section ends -->

            <!--Second section-->
            <section class="section-full " id="section-2">
                <div id="about"></div>
                <div class="filter">
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h1 class="section-header"><span><?php echo $about_title; ?></span></h1>
                        </div>
                        <div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-justify text-muli">
                            <?php echo $about_information; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="bio-name"> <?php echo $bio_title_1; ?> </h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                        <img src="<?php echo $bio_image_1['url']; ?>" class="center-block img-responsive bio-img">
                                </div>
                                <div class="col-md-8">
                                        <p>
                                        <?php echo $bio_1; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="bio-name"> <?php echo $bio_title_2; ?> </h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                        <img src="<?php echo $bio_image_2['url']; ?>" class="center-block img-responsive bio-img">
                                </div>
                                <div class="col-md-8">
                                        <p>
                                        <?php echo $bio_2; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-justify text-muli">
                            <?php echo $text_under_bios; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center section-footer">
                            <h1 class="bold"><?php echo $about_sub_title; ?></h1>
                            <p>
                                <?php echo $about_sub_message; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>                       

<!--Third section-->
            <section class="section-full " id="section-3">
                <div id="what_we_do"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h1 class="section-header"><span> <?php echo $wwd_section_title; ?> </span></h1>
                            <h2 class="subheader"> <?php echo $wwd_section_main_message; ?></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="col-md-3 text-center icon-holder">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/_Icons/icon.png" class="img-responsive icon center-block"/>
                                <p>
                                   <?php echo $icon_1_text; ?>
                                </p>
                                <p class="sub-title">
                                    <?php echo $icon_1_more_info; ?>
                                </p>
                            </div>
                            <div class="col-md-3 text-center icon-holder">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/_Icons/Inventory-02.png" class="img-responsive icon center-block"/>
                                <p class="help-margin">
                                   <?php echo $icon_2_text; ?>
                                </p>
                                <p class="sub-title">
                                    <?php echo $icon_2_more_info; ?>
                                </p>
                            </div>
                            <div class="col-md-3 text-center icon-holder">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/_Icons/Financial3-02.png" class="img-responsive icon center-block"/>
                                <p class="help-margin">
                                   <?php echo $icon_3_text; ?>
                                </p>
                                <p class="sub-title">
                                    <?php echo $icon_3_more_info; ?>
                                </p>
                            </div>
                            <div class="col-md-3 text-center icon-holder">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/_Icons/reports_copia.png" class="img-responsive icon center-block"/>
                                <p>
                                   <?php echo $icon_4_text; ?>
                                </p>
                                <p class="sub-title">
                                    <?php echo $icon_4_more_info; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 section-footer text-center">
                            <h2 class="bold"><?php echo $wwd_closing_line; ?></h2>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-4">
                            <p>
                                <?php echo $list_of_promises; ?>
                            </p>
                        </div>
                    </div>

                </div>
            </section>
            <!-- Third section ends -->

            <!--Fourth section-->
            <section class="section-full " id="section-4">
                <div id="faq"></div>
                <div class="filter">
                </div>
                <div class="container">
                     <div class="row">
                        <div class="col-sm-12 text-center">
                            <h1 class="section-header inverted"><span> <?php echo $faq_section_title; ?> </span></h1>
                            <h2 class="subheader inverted"> <?php echo $faq_section_main_message; ?> </h2>
                        </div>
                    </div>
                    <div class="row columns">
                        <div class="col-lg-3">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="column-header">
                                        <h3> <?php echo $question_1; ?> </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>
					<?php echo $answer_1; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="column-header">
                                         <h3> <?php echo $question_2; ?> </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>
					<?php echo $answer_2; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="column-header">
                                        <h3> <?php echo $question_3; ?> </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>
					<?php echo $answer_3; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="column-header">
                                        <h3> <?php echo $question_4; ?> </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>
					<?php echo $answer_4; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Fourth section ends -->

            <!--Fifth section-->
            <section class="section-full " id="section-5">
		<div id="blog"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h1 class="section-header"><span>NEWS & BLOG</span></h1>
                        </div>
                    </div>
		<div class="row">
                        <div class="col-xs-12 col-md-6 blog-post">
                            <div class="col-xs-6">
                                <img class="img-responsive" src="<?php echo $recent_posts[0]['thumbnail']; ?>"/>
                            </div>
                            <div class="col-xs-6">
                                <h1 class="text-turqoise blog-title"><?php echo $recent_posts[0]['post_title']; ?></h1>
                                <p>
                                    <?php echo substr( $recent_posts[0]["post_content"], 0, 256 ); ?>...
                                </p>
                                <p>
                                    <a href="<?php echo $recent_posts[0]["guid"]; ?>" class="pull-right">READ MORE</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 blog-post">
                            <div class="col-xs-6">
                                <img class="img-responsive" src="<?php echo $recent_posts[1]['thumbnail']; ?>"/>
                            </div>
                            <div class="col-xs-6">
                                <h1 class="text-turqoise blog-title"><?php echo $recent_posts[1]['post_title']; ?></h1>
                                <p>
                                    <?php echo substr( $recent_posts[1]["post_content"], 0, 256 ); ?>...
                                </p>
                                <p>
                                    <a href="<?php echo $recent_posts[1]["guid"]; ?>" class="pull-right">READ MORE</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Fifth section ends -->

<?php
get_footer();