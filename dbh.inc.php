<?php

$dbServername = "afrederiksen.dk.mysql";
$dbUsername = "afrederiksen_dkuser_db";
$dbPassword = "eksamen202298";
$dbName = "afrederiksen_dkuser_db";

$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

if($conn -> connect_error){
    die('Database error:' .$conn -> connect_error);
}
