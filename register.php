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
<div class="container">

<div class="opretprofil">OPRET PROFIL</div>
  <div class="google"></div>
  <div class="facebook"></div>

<div class="personoplysninger">Person oplysninger</div>
  <div class="fornavn"><input type="text" name="first" placeholder="Firstname"></div>
  <div class="efternavn"><input type="text" name="last" placeholder="Larstname"></div>
  <div class="adresse"><input type="text" name="address" placeholder="Address"></div>
  <div class="etage"><input type="text" name="floor" placeholder="Floor"></div>
  <div class="postnummer"><input type="number" name="postal" placeholder="Postal"></div>
  <div class="by"><input type="text" name="city" placeholder="City"></div>
  <div class="køn"><select name="user_type">
  <option value="f">Kvinde</option>
  <option value="m">Mand</option>
  <option value="o">Andet</option>
</select></div>
  <div class="år"><input type="text" name="year" placeholder="Year"></div>
  <div class="fødselsdag"><input type="date" name="dob" placeholder="Date of birth"></div>
  <div class="mobilnummer"><input type="number" name="phone" placeholder="Phone"></div>
  <div class="logind-oplysninger">logind oplysninger</div>
  <div class="email"><input type="email" name="email" placeholder="Email"></div>
  <div class="kodeord"><input type="password" name="psw" placeholder="Password"></div>
  <div class="gentagkode"><input type="re-password" name="psw" placeholder="Repeat Password"></div>
  <div class="nyhedsbrev"><link rel="" href="">Nyhedsbrev</div>
  <div class="vilkår"><link rel=""  href="">Vilkår</div>
  <div class="opret"><button type="submit" name="submit">Sign up</button></div>

</div>
</form>
</body>
</html>