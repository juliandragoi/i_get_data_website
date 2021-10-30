<?php 

    if(isset($_POST['email']) && $_POST['email'] != ''){

        $userName = $_POST['name']; // this is the sender's Email address
        $userEmail = $_POST['email'];
        $subject = "Form submission";
        $message = $_POST['message'];

        $to = "info@igetdata.co.uk"; // this is your Email address
        $body = "";

        $body .= "From: ".$userName. "\r\n";
        $body .= "Email: ".$userEmail. "\r\n";
        $body .= "Message: ".$message. "\r\n";

        mail($to,$subject,$body);


    }
?>