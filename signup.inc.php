<?php
include_once 'dbh.inc.php';
$first = $_POST['first'];
$last = $_POST['last'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$postal = $_POST['postal'];
$dof = $_POST['dof'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];


$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) 
VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
$result = mysqli_query($conn, $sql);

header("Location:register.php");

?>