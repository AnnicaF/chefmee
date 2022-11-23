<?php

@include 'dbh.inc.php';
//Tester om der er blevet trykket submit, hvis en er, så er alle//
if(isset($_POST['first'])){

  if($_POST['first'] != "" && $_POST['last'] != ""){
  //Tjekker at der er udfyldt noget//

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
             //mysqli_query($conn, $insert);
             //header('location:login_form.php');
            echo $insert;
            //Det her er blot en test og de to linjer over til udkommenteres//
          
    
         }
     }
  }else{
    echo 'udfyld alle felter';
    // hvis man ikke udfylder noget // 

  }

}

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

      <form action="register.php" method="post"> 
        

          <div class="opretprofil">OPRET PROFIL</div>
          <div class="google"></div>
          <div class="facebook"></div>

          <div class="personoplysninger">Person oplysninger</div>
          <div class="fornavn"><input type="text" name="first" placeholder="Fornavn"></div>
          <div class="efternavn"><input type="text" name="last" placeholder="Efternavn"></div>
          <div class="adresse"><input type="text" name="address" placeholder="Adresse"></div>
          <div class="etage"><input type="text" name="floor" placeholder="Etage"></div>
          <div class="postnummer"><input type="number" name="postal" placeholder="Postnummer"></div>
          <div class="by"><input type="text" name="city" placeholder="By"></div>
        
            <select class="køn" name="user_type">
              <option value="f">Kvinde</option>
              <option value="m">Mand</option>
              <option value="o">Andet</option>
            </select>
          </div>
          
          <div class="fødselsdag"><input type="date" name="dob" placeholder="Date of birth"></div>
          <div class="mobilnummer"><input type="number" name="phone" placeholder="Telefonnummer"></div>
          <div class="logind-oplysninger">logind oplysninger</div>
          <div class="email"><input type="email" name="email" placeholder="Email"></div>
          <div class="kodeord"><input type="password" name="psw" placeholder="Kodeord"></div>
          <div class="gentagkode"><input type="re-password" name="psw" placeholder="Gentag kodeord"></div>
          <div class="nyhedsbrev"><link rel="" href="">Nyhedsbrev</div>
          <div class="vilkår"><link rel=""  href="">Vilkår</div>
          <div class="opret"><button type="submit" name="submit">OPRET</button></div>
          </form>
        </div>
    </form>
  </body>
</html>