<?php
$name = $_post['name'];
$visitor_email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];


$email_from = 'www.olmcmaryhillgirls.com';

$email_subject = 'new form submission';

$email_body = "user name: $name.\n".
                "user email:$visitor_email.\n".
                "subject: $subject.\n".
                "user message: $message .\n";

 $to = 'maryhillgirls@yahoo.com'; 
 
 $headers = "From: $email_from \r\n";

 $headers .= "Reply-To: $visitor_email \r\n";

 mail($to,email_subject,$email_body, $headers);

 header("location: index.html");
                

?>
