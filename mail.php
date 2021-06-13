<?php 
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$txt="You have received an e-mail from $name .\n\n Message:  $message";
$recipient = "theseara@pm.me";
$subject = "Contact Form";
$mailheader = "From: " .$email;
mail($recipient, $subject, $txt, $mailheader);
echo "Thank You!";
}
?>

