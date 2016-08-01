<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Financial_Insite
 */

?>

<?php wp_footer(); ?>

<!--Fifth section-->
            <section id="section-6">
                <div id="started"></div>
                <div class="container">
                    <div class="col-sm-12 text-center">
                        <h1 class="section-header-white inverted"><span>GET STARTED</span></h1>
                    </div>
                    <form action="#" class="form-horizontal">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-sm-5 control-label">Name:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-5 control-label">Company:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-5 control-label">What you do:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-5 control-label">Website:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-sm-5 control-label">Telephone:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-5 control-label">Email:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-5 control-label">Financial Status:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-5 control-label">Contact:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <button class="btn btn-lg btn-turqoise">SEND</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 footer text-center">
                            &copy; Financial Insite 2016. All rights reserved.
                        </div>
                    </div>
                </div>
            </section>
            <!-- Fifth section ends -->
        <!-- Ends Body -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap/js/bootstrap.min.js"></script>
<?php if(is_page_template("page-home.php")): ?>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
<?php else: ?>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/mainBlog.js"></script>
<?php endif ?>
</html>
