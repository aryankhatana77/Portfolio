<?php
//getting data from php form
$name = $POST['name'];
$subject = $POST['subject'];
$email = $POST['email'];
$message= $_POST['message'];
$to = "aryankhatana77@gmail.com";
$subject = "Mail From website";
$txt ="First Name = ". $name . "\r\n subject= " . $subject ."\r\n email= " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@kueteleviscm157@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
mail($to,$subject,$txt,$headers);
}
//redirect to thank you page
header("Location:thankyou.html");
?>