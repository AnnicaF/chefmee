<?php

$user = 'newsletter';
$password = 'root';
$host = 'localhost';
$dbase = 'newsletter';
$table = 'subscribers';

// connection til database

$dbc = mysqli_connect($host, $user, $password, $dbase)
    or die("Kan ikke skabe forbindelse"); 

    
