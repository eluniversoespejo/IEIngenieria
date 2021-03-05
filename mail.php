<?php
//get data from form  

$name = $_POST['name'];
$phone = $_POST['phone'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "ieingenieriadeencofrados@gmail.com";

$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n Phone = ". $name . "\r\n Email = " . $email . "\r\n Message =" . $message . "\r\n Phone =" . $phone;
$headers = "From: webcontact@encofradosie.co" . "\r\n" .
"CC: ieingenieriadeencofrados@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>