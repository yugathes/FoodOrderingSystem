<?php
    $to = "yugathesyuga@gmail.com";
    $subject = "Registration Success";
     
    $message = "<b>Your registration success</b>";
    $message .= "<h1>Please wait for admin to verify</h1>";
    
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL ); 
    /*$headers = "Reply-To: The Sender <admin@thesouthernfinance.com>\r\n"; 
    $headers .= "From: The Sender <admin@thesouthernfinance.com>\r\n";  
    $headers .= "Organization: The Southern Finance\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;*/ 
     
    $header = "From:tradeandclaim@thesouthernfinance.com \r\n";
    $header .= "Reply-To: Trade & Claim <tradeandclaim@thesouthernfinance.com>\r\n";
    $header .= "Return-Path: Admin <tradeandclaim@thesouthernfinance.com>\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
     
    $retval = mail ($to,$subject,$message,$header);
     
    if( $retval == true ) {
        echo "Message sent successfully...";
    }
    else {
        echo "Message could not be sent...";
    }
?>