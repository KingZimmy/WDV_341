<?php
// Check for form submission
if (isset($_POST['submit'])) {

  // Validate the Honeypot field
  if (!empty($_POST['honeypot'])) {
    // Honeypot field was filled out, so this is likely a spam submission
    die('Access denied.');
  }

  // Set the SMTP configuration options
  ini_set("SMTP","mail.heartland-webhosting.com");
  ini_set("smtp_port","465");
  ini_set("auth_username","contact@maramandernach.net");
  ini_set("auth_password","Iamrussian2!");

  // Retrieve the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Send the email to the recipient and the user
  $to = 'contact@maramandernach.net';
  $subject = 'New message from ' . $name;
  $headers = "From: $email\r\n" .
             "Reply-To: $email\r\n" .
             "X-Mailer: PHP/" . phpversion();
  $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";
  mail($to, $subject, $body, $headers);
  mail($email, $subject, $body, $headers);

  // Display a success message to the user
  echo 'Thank you for your message!';

} else {
  // Form was not submitted, so display an error message
  echo 'An error occurred. Please try again.';
}
?>

<!-- 
  I believe all I need to use when it comes to localhost is add my gmail directly instead of trying to use heartland
-->