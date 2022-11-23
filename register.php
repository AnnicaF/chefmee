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
        
       
          <input type="text" name="first" placeholder="Fornavn">
          <input type="text" name="last" placeholder="Efternavn">
          <input type="text" name="address" placeholder="Adresse">
          <input type="text" name="floor" placeholder="Etage">
          <input type="number" name="postal" placeholder="Postnummer">
          <input type="text" name="city" placeholder="By">
        
            <select class="køn" name="user_type">
              <option value="f">Kvinde</option>
              <option value="m">Mand</option>
              <option value="o">Andet</option>
            </select>
        
      
          <!-- #endregion --><input type="date" name="dob" placeholder="Date of birth">
          <input type="number" name="phone" placeholder="Telefonnummer">
          <input type="email" name="email" placeholder="Email">
          <input type="password" name="psw" placeholder="Kodeord">
          <input type="password" name="cpsw" placeholder="Gentag kodeord">
         <button type="submit" name="submit">OPRET</button>
          </form>
  
    </form>
  </body>
</html>