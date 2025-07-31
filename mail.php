<?php
//get data from form  
$fname = $_POST['F_name'];
$lname = $_POST['L_name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$message= $_POST['message'];
$to = "info@digimarksky.in";
$subject = "Mail From website";
$txt ="First Name = ". $fname . "\r\n Last Name = " . $lname . "\r\n Contact No. = " . $mobile . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@digimarksky.in";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>