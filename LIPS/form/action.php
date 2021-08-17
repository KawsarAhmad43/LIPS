<?php

$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];
$time= $_POST['time'];
$service= $_POST['service'];

$to = "kaleon2016@gmail.com";
$subject = "Mail From N-Coder";

$txt ="Name = ". $name . "\r\n   Email = " . $email . "\r\n Number =" . $number . "\r\n Appointment Time =" . $time . "\r\n Service =" . $service;
$headers = "From: noreply@ncoder.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>