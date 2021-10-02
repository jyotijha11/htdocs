<?php
if($_POST) {
  $to = "info@mycoders.in"; // your mail here
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $subject ="";
  $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
  $body = "Message: $message\nE-mail: $email";
  
  //mail headers are mandatory for sending email
  $headers = 'From: ' .$email . "\r\n". 
  'Reply-To: ' . $email. "\r\n" . 
  'X-Mailer: PHP/' . phpversion();
 
  if(@mail($to, $subject, $body, $headers)) {
    $output = json_encode(array('success' => true));
    die($output);
  } else {
    $output = json_encode(array('success' => false));
    die($output);
  }
}
