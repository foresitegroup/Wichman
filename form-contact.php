<?php
session_start();

$salt = "DrWichmanContactForm";

if ($_POST['confirmationCAP'] == "") {
  if (
      $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('comment' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
     )
  {
    $Subject = (!empty($_POST[md5('subject' . $_POST['ip'] . $salt . $_POST['timestamp'])])) ? $_POST[md5('subject' . $_POST['ip'] . $salt . $_POST['timestamp'])] : "Contact From DrWichman Website";
    $SendTo = "mark@foresitegrp.com";
    $Headers = "From: Contact Form <contactform@drwichman.com>\r\n";
    $Headers .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";
    //$Headers .= "Bcc: mark@foresitegrp.com\r\n";

    $Message = "Message from " . $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] . " (" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . ")";

    if (!empty($_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])])) $Message .= "\n" . $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])];

    if (!empty($_POST['reach'])) $Message .= "\nBest reached by " . $_POST['reach'];

    $Message .= "\n\n" . $_POST[md5('comment' . $_POST['ip'] . $salt . $_POST['timestamp'])];

    if (!empty($_POST['info'])) $Message .= "\n\nI would like to recieve periodic information from www.drwichman.com";

    $Message = stripslashes($Message);
  
    mail($SendTo, $Subject, $Message, $Headers);
    
    $feedback = "<strong>Your message has been sent!</strong> Thank you for your interest. You will be contacted shortly.";

    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 200 OK");
      echo $feedback;
    }
  } else {
    $feedback = "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong>";

    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 500 Internal Server Error");
      echo $feedback;
    }
  }
}

if (empty($_REQUEST['src'])) {
  $_SESSION['feedback'] = $feedback;
  header("Location: " . $_POST['referrer'] . "#contact-form");
}
?>