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
$psw = $_POST['psw'];

//var_export($first);

$sql = "INSERT INTO users (user_first, user_last, user_gender, user_address, user_postal, user_dob, user_phone, user_email, user_psw) 
VALUES ('$first', '$last', '$gender', '$address', '$postal', '$dob', '$phone', '$email', '$psw');";
//$result = $conn->query($conn, $sql);
//if (!$conn->query($sql)) {
 //   echo("Error description: " . $conn->error);
 // }

header("Location:register.php");

