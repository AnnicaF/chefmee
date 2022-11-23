<?php

@include 'dbh.inc.php';

//if(isset($_POST['submit'])){

    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $postal = mysqli_real_escape_string($conn, $_POST['postal']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $psw = md5($_POST['psw']);
    $cpsw = md5($_POST['cpsw']);

    $select = " SELECT * FROM users WHERE email = '$email' && psw = '$psw' ";

    //echo $select;
    
     $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        
       $error[] = 'Brugeren findes allerede!';

     }else{
         if($psw != $cpsw){
             $error[] = 'kodeord stemmer ikke over ens';
         }else{
             $insert = "INSERT INTO users (user_first, user_last, user_gender, user_address, user_postal, user_dob, user_phone, user_email, user_psw) 
             VALUES ('$first', '$last', '$gender', '$address', '$postal', '$dob', '$phone', '$email', '$psw');";
            //  mysqli_query($conn, $insert);
            //  header('location:login_form.php');
            echo $insert;
            if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);} echo "Connected successfully";
    
         }
     }
     

//};

?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
      <title>Register</title>
  </head>

    <body>
      <!-- 
      <pre><?php
      var_export($_GET);
      ?></pre>
      -->

      
      <form action="signup.inc.php" method="post"> 
        <div class="registre_container">
        
          <div class="opretprofil">OPRET PROFIL</div>
          <div class="google"></div>
          <div class="facebook"></div>

          <div class="personoplysninger">Person oplysninger</div>
          <input class="fornavn" type="text" name="first" placeholder="Fornavn">
          <input class="efternavn" type="text" name="last" placeholder="Efternavn">
          <input class="adresse" type="text" name="address" placeholder="Adresse">
          <input class="etage" type="text" name="floor" placeholder="Etage">
          <input class="postnummer" type="number" name="postal" placeholder="Postnummer">
          <input class="by" type="text" name="city" placeholder="By">
        
            <select class="køn" name="user_type">
              <option value="f">Kvinde</option>
              <option value="m">Mand</option>
              <option value="o">Andet</option>
            </select>
          
          <input class="fødselsdag" type="date" name="dob" placeholder="Date of birth">
          <input class="mobilnummer" type="number" name="phone" placeholder="Telefonnummer">
          <div class="logind-oplysninger">logind oplysninger</div>
          <input class="email" type="email" name="email" placeholder="Email">
          <input class="kodeord" type="password" name="psw" placeholder="Kodeord">
          <input class="gentagkode" type="re-password" name="psw" placeholder="Gentag kodeord">

          <div class="vilkår"><link rel=""  href="">
            <input type="checkbox" checked="checked">Vilkår<label class="container">
              <span class="checkmark"></span>
              </label>
          </div>
          <div class="nyhedsbrev"><link rel=""  href="">
            <input type="checkbox" checked="checked">Nyhedsbrev<label class="container">
              <span class="checkmark"></span>
              </label>
          </div>
          <button class="opret" type="submit" name="submit">OPRET</button>
        
        </div>
     </form>
  </body>
</html>