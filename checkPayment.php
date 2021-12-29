<?php
$connect=mysqli_connect("localhost","root","","payment_check");


$cardNumber=$_POST['userid'];
$validity=$_POST['date'];
$cvv=$_POST['cvv'];
$otp=$_POST['otp'];

if($otp==123456){
    include 'makePayment.php';
}
else{
    include 'transaction_failed.php';
}

$result=mysqli_query($connect,"insert into payment('card_number','validity','cvv','otp') values('$cardNumber','$validity','$cvv','$otp')");

