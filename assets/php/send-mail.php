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
    echo 'Thank you! We will be in touch soon.';
}
else{
    header("Location: https://www.fininsite.com"); /* Redirect browser */
    exit();
}
?>