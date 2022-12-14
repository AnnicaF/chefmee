<?php  

@include 'dbh.inc.php';

session_start();
session_unset(); 
session_destroy (); //destroy indlog
header('location: index.php');
?>