<?php
$name =$_POST[''];
$visitor_email =$_POST[''];
$subject=$_POST[''];
$message =$_POST[''];


$email_form='info@ragnarvikings.com';
$email_subject='New form submission';
$email_body="User Name: $name.\n".
            "User Name: $visitor_email.\n". 
            "subject: $subject.\n". 
            "User Message:$message.\n";
            
    $to ='sthanikson2000@gmail.com';
    $headers ="From:$email_form\r\n "; 
    $headers. = "Reply-To: $visitor_email"\r\n; 
    mail($to,$email_subject,$email_body,  $headers);
    header("location: contact.html");

?>