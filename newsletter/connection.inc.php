<?php

$user = 'afrederiksen_dkuser_db';
$password = 'eksamen202298';
$host = 'afrederiksen.dk.mysql';
$dbase = 'afrederiksen_dkuser_db';
$table = 'subscribers';

// connection til database

$dbc = mysqli_connect($host, $user, $password, $dbase)
    or die("Kan ikke skabe forbindelse"); 

    