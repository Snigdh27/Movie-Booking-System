<?php
$connect=mysqli_connect("localhost","root","","movie_project");
if(!($connect)){
    echo 'Can\'t connect to database';
}
else{
    echo 'Database connected successfully';
}

$email=$_POST['email'];
$password=$_POST['psw'];

$sql="insert into login(email,password) values('$email','$password')";

#$check=mysqli_query($connect,$check);

if(!mysqli_query($connect,$sql)){
    print("Invalid Credentials");
}
else{
    print("Successfully logged in");
}