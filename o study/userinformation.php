<?php
$connection = mysqli_connect('localhost','root');
mysqli_select_db($connection,"odata");
$user='user';
$email='email';
$massage='massage';

$query ="INSERT INTO'userinfodata'('user','email','massage')VALUE('$user',$email',$massage')";
mysqli_query($connection,$query);

echo"message is send";
?>