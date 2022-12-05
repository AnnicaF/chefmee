<?php

require_once 'connection.inc.php';

$email = $_POST['email'];

$query = "DELETE FROM $table WHERE email='$email'";

$result = mysqli_query($dbc, $query)
    or die ("Fejl ved framelding" . mysqli_error($dbc));

        echo "Du er ny frameldt vores nyhedsbrev";



mysqli_close($dbc);