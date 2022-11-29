<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "user_db";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if($conn -> connect_error){
    die('Database error:' .$conn -> connect_error);

}
