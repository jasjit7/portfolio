<?php

// Write a function to clean-up data entered by users
// ==================================================

// Might be better for general text input
  $special_chars_1 = "/[^a-z0-9\-]/i";
		
// Better for an email address
$special_chars_2 = "/[^a-z0-9\-@_.]/i";

// Better for a phone number
$special_chars_3 = "/[^0-9\-]/";

function clean($data, $special_chars) {
  $data = strip_tags($data);
  $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
  $data = preg_replace($special_chars, " ", $data);
  return $data;
}

// Honeypot for anti-spam
if(!empty($_POST['fax'])){
  header('Location: index.html?message=honey');
  exit;
}

// Check user input for errors
if((!empty($_POST['name'])) && (!empty($_POST['email'])) && 
(!empty($_POST['phone'])) && (!empty($_POST['inquiry']))) {
  $name = clean($_POST['name'], $special_chars_1);
  $email = clean($_POST['email'], $special_chars_2);
  $phone = clean($_POST['phone'], $special_chars_3);
  $inquiry = clean($_POST['inquiry'], $special_chars_1);
}else {
  // Redirect the user back to the form and display a user input error message
  header('Location: index.html?form=error');
  exit;
}

	


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.sendgrid.net';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'apikey';                               // SMTP username
    $mail->Password   = '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';  // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to, 587 for TLS and 443 for SSL

    //Recipients
    $mail->setFrom('jasjitkaur7@gmail.com', 'Jasjit');
    $mail->addAddress('jasjitkaur7@gmail.com', 'Kittu');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content

    $content = "
      <p> Dear Website Person, </p>
      <p><b>{$name}</b> has inquired through your website.
      Their phone number is <b>{$phone}</b> and their 
      address is <b>{$email} </b>. </p>
      <p>Their inquiry was <br>
      {$inquiry}. </p>
    ";

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Website inquiry from {$name}";
    $mail->Body    = $content;
    $mail->AltBody = strip_tags($content);

    $mail->send();
    // echo 'Message has been sent';

		// Redirect the user back to the form and display a success message
    header('Location: index.html?message=success');
    exit;
} catch (Exception $e) {

		// This commented error message works with the debugging level set in the try portion of the try-catch statement
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

		// Redirect the user back to the form and display a form processing error message
    header('Location: index.html?message=error');
    exit;
}