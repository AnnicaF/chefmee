<?php

session_start();

require 'dbh.inc.php';

$errors = array();
$email = "";

//hvis der bliver klikket på opret knap
if(isset($_POST['signup-btn'])){
   
  $email = $_POST['email'];
  $password = $_POST['password'];
  $passwordConf = $_POST['passwordConf']; 
  $firstName = $_POST['firstName']; 
  $lastName = $_POST['lastName']; 
  $address = $_POST['address'];
  $postal= $_POST['postal']; 
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];  


             // validering 
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "Email ikke godkendt";
            }

            if(empty($password)){
                $errors['password'] = "Kode påkræves";
            }

            if($password !== $passwordConf){
                $errors['password'] = 'De to kodeord stemmer ikke over ens';
            }
            if(empty($firstName)){
                $errors['firstName'] = "Fornavn påkræves";
            }
            if(empty($lastName)){
                $errors['lastName'] = "Efternavn påkræves";
            }
            if(empty($address)){
                $errors['address'] = "Adresse påkræves";
            }
            if(empty($postal)){
                $errors['postal'] = "Postnummer påkræves";
            }
            if(empty($phone)){
                $errors['phone'] = "Mobilnummer påkræves";
            }
            if(empty($gender)){
                $errors['gender'] = "Køn påkræves";
            }
            if(empty($dob)){
                $errors['dob'] = "Fødselsdag påkræves";
            }

    // vi skal tjekke i databasen om der er to der har ens email        
    $emailQuery = "SELECT * FROM user_test where email='$email' LIMIT 1";
    $result = $conn->query($emailQuery);

    if($conn->error != '') {
        echo $conn->error;
    }

    if($result->num_rows == 1){
        $errors['email'] = "Emailen findes allerde";
    }

    if(count($errors) === 0){
    $password = password_hash($password, PASSWORD_DEFAULT);
    $token = bin2hex(random_bytes(50));

    $sql = "INSERT INTO user_test (`email`, `token`, `password`, `firstName`, `lastName`, `address`, `postal`, `phone`, `gender`, `dob`) VALUES ('$email', '$token', '$password', '$firstName', '$lastName', '$address', '$postal', '$phone', '$gender', '$dob')";
    $conn->query($sql);
    $conn->error;
    
    if($conn->insert_id){

        // bruger login
        $user_id = $conn->insert_id;
        $_SESSION['id'] = $user_id;
        $_SESSION['firstName'] = $firstName;
        $_SESSION['email'] = $email;
    
    
        //besked i nyt vindue
        $_SESSION['message'] = "Du er logget ind!";
        $_SESSION['alert-class'] = "alert-succes";
        header('location: ../chefmee/menu/index.php');
        exit();

        }else{
            $error['db_error'] = "Database error: fejl i oprettelse";
        }
    }

}

// Hvis brugeren klikker på login 

if(isset($_POST['login-btn'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
 
  
               // validering 
             if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                  $errors['email'] = "Email ikke godkendt";
              }
  
              if(empty($email)){
                  $errors['email'] = "Email påkræves";
              }
  
              if(empty($password)){
                  $errors['password'] = "Kode påkræves";
              }

              if(count($errors) === 0){
                    $sql = "SELECT * FROM user_test WHERE email='$email' LIMIT 1";
                    $result = $conn->query($sql);
                    $user = $result->fetch_assoc(); 

                        if (password_verify($password, $user['password'])){
                            // login success
                            $_SESSION['id'] = $user['id'];
                            $_SESSION['email'] = $user['email'];
                        
                            //besked i nyt vindue
                            $_SESSION['message'] = "Du er logget ind!";
                            $_SESSION['alert-class'] = "alert-succes";
                            header('location:../chefmee/menu/index.php');
                            exit();

                        }else {
                            $errors['login_fail'] = "Forkert";
                        } 

               }



}    
