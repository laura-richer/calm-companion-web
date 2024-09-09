<?php
if (!empty($_POST)) {
  $email = $_POST['email'];
  $recipient = "lauraricher@gmail.com";
  $message = "Calm Companion - Sign up from $email";
  $headers = "From: Calm Companion";

  // Send email
  if (mail($recipient, $message, $headers)) {
      echo "Email sent successfully!";
  } else {
      echo "Failed to send email. Please try again later.";
  }
} ?>
