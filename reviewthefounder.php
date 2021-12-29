<?php

$connect=mysqli_connect("localhost","root","","reviews");

if(isset($_POST['submit1'])){
    $selected_radio=$_POST['rating'];
}

$name=$_POST['name'];

$sql="insert into The_Founder(name,rating) values('$name','$selected_radio')";

$check=mysqli_query($connect,$sql);

include 'thefounder.php';