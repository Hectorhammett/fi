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

<?php 
if(isset($_POST['submit'])){
    $to = "hector.mendoza@mitechnologiesinc.com"; // this is your Email address
    $from = $_POST['from']; // this is the sender's Email address
    $name = $_POST['clientname'];
    $subject = $_POST['subject'];
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo '<script>alert("Thank you! We will be in touch soon.")</script>';
}
?>


<?php wp_footer(); ?>


<!--Fifth section-->
            <section id="section-6">
                <div id="started"></div>
                <div class="container">
                    <div class="col-sm-12 text-center">
                        <h1 class="section-header-white inverted"><span>CONTACT</span></h1>
                    </div>
                    <form action="#" method="post" id="form-email"/>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Your name(required):</label>
                                    <input type="text" class="form-control" name="clientname"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Your Email(required):</label>
                                    <input type="text" class="form-control" name="from"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Subject:</label>
                                    <input type="text" class="form-control" name="subject"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Your Message:</label>
                                    <textarea class="form-control" name="message"></textarea>
                                </div>
                                <div class="form-group">
                                     <input type="submit" name="submit" value="SEND" class="btn btn-lg btn-turqoise">
                                </div>
                            </div>
                            <hr class="visible-xs">
                            <div class="col-sm-6">
                                <h1 class="contact-header">Contact Us</h1>
                                <p>
                                    Fill out the form to the left for industry leading accounting and business intelligence services or use one of the methods below.
                                </p>
                                <h1 class="contact-header">Contact Information</h1>
                                <p>
                                    2202 N. West Shore Blvd Suite 200, Tampa, FL 33607
                                </p>
                                <h1 class="contact-header">Social Media</h1>
                                <p>
                                    <div class="row">
                                        <div class="col-xs-2">
                                             <i class="fa fa-5x fa-facebook-official" aria-hidden="true"></i> 
                                        </div>
                                        <div class="col-xs-2">
                                            <i class="fa fa-5x fa-linkedin" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-xs-2">
                                            
                                        </div>
                                    </div>
                                </p>
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
<script src="<?php bloginfo('template_directory'); ?>/assets/js/form.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/sa/sa.min.js"></script>
<?php if(is_page_template("page-home.php")): ?>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
<?php else: ?>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/mainBlog.js"></script>
<?php endif ?>
</html>
