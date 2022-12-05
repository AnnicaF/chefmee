<?php 
error_reporting (E_ALL ^ E_NOTICE);

require_once 'connection.inc.php';

$first_name = $_GET["first_name"];
$last_name = $_GET["last_name"];
$email = $_GET['email'];

$date = date("Y-m-d H:i:s");


$query = "SELECT email FROM $table where email='$email'";
$result = $dbc->query($query);

    if($result->num_rows > 0){
        echo 'Denne email er allerede brugt. '
    }



$query = "INSERT INTO $table (first_name, last_name, email, date)  VALUES ('$first_name', '$last_name', '$email', '$date')";


mysqli_query($dbc, $query)
    or die("Fejl med email" . mysqli_error($dbc));

    echo 'Du har nu tilmeldt dig vores nyhedsbrev, tak.';



?>