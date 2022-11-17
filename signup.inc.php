<?php
include_once 'dbh.inc.php';
$first = $_POST['first'];
$last = $_POST['last'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$postal = $_POST['postal'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];


$sql = "INSERT INTO user_database (user_first, user_last, user_gender, user_address, user_postal, user_dob, user_email, user_pwd) 
VALUES ('$first', '$last', '$gender', '$address', '$postal', '$dob', '$phone' '$email', '$pwd');";
$result = mysqli_query($conn, $sql);

header("Location:register.php");

?>