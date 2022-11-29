<?php
session_start();

require 'dbh.inc.php';

$errors = array();
$username = "";
$email = "";

if(isset($_POST['singup-btn'])){
   
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $passwordConf = $_POST['passwordConf'];  


if(empty($username)){
    $errors['username'] = "Brugernavn påkræves";
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Email ikke godkendt";
}

if(empty($email)){
    $errors['email'] = "Email påkræves";
}

if(empty($password)){
    $errors['password'] = "Kode påkræves";
}

if($password !== $passwordConf){
    $error['password'] = 'De to kodeord stemmer ikke over ens';
}

$emailQuery = "SELECT * FROM users where email=? LIMIT 1";
$stmt = $conn->prepare($emailQuery);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();
$userCount = $result->num_rows;
$stmt->close();

if($userCount > 0){
    $error['email'] = "emalien findes allerde";
}

if(count($errors) === 0){
    $password = password_hash($password, PASSWORD_DEFAULT);
    $token = bin2hex(random_bytes(50));
    $verified = false;

    $sql = "INSERT INTO users (username, user_email, user_first, user_last, user_gender, user_address, user_postal, user_dob, user_phone, user_psw) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssssssss', $username, $email, $first, $last, $gender, $address, $postal, $dob, $phone, $password);

    if($stmt->execute()){

        $user_id =$conn->insert_id;
        $_SESSION['id'] = $user_id;
        $_SESSION['username'] = $username;
        
    }else{
        $error['db_error'] = "Database error: fejl i oprettelse";
    }
}

}