<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$to = 'ablaye@wer.org';
$message = 'FROM: '.$name.' Email: '.$email.'Message: '.$message;
$headers = 'From: abe@wer.org' . "\r\n";
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message, $headers); //This method sends the mail.
echo "Your email was sent... i think??"; // success message
}else{
echo "Invalid Email, please provide an correct email.";
}

?>