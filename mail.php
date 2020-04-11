<?php
if(isset( $_POST['fullname']))
$name = $_POST['fullname'];
if(isset( $_POST['emailId']))
$email = $_POST['emailId'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];
if ($name === ''){
    echo "<script>alert('Name cannot be empty');</script>";
		 echo '<script>window.location = "contact.php";</script>';
die();
}
if ($email === ''){
echo "<script>alert('Email cannot be empty');</script>";
		 echo '<script>window.location = "contact.php";</script>';
die();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "<script>alert('Invalid Email type');</script>";
		 echo '<script>window.location = "contact.php";</script>';
die();
}
}
if ($subject === ''){
echo "<script>alert('Subject cannot be empty');</script>";
		 echo '<script>window.location = "contact.php";</script>';
die();
}
if ($message === ''){
echo "<script>alert('Message cannot be empty');</script>";
		 echo '<script>window.location = "contact.php";</script>';
die();
}
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "Johnmuthokak@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "<script>alert('Message sent successfully');</script>";
		 echo '<script>window.location = "index.html";</script>';
?>
