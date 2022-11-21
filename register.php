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
<input type="text" name="first" placeholder="Firstname">
<br>
<input type="text" name="last" placeholder="Larstname">
<br>
<select name="user_type">
  <option value="f">Kvinde</option>
  <option value="m">Mand</option>
  <option value="o">Andet</option>
</select>
<br>
<input type="text" name="address" placeholder="Address">
<br>
<input type="number" name="postal" placeholder="Postal">
<br>
<input type="date" name="dob" placeholder="Date of birth">
<br>
<input type="number" name="phone" placeholder="Phone">
<br>
<input type="email" name="email" placeholder="Email">
<br>
<input type="password" name="psw" placeholder="Password">
<br>
<button type="submit" name="submit">Sign up</button>
</form>
  
<div class="container">
  <div class="google"></div>
  <div class="facebook"></div>
  <div class="personoplysninger"></div>
  <div class="fornavn"></div>
  <div class="efternavn"></div>
  <div class="adresse"></div>
  <div class="etage"></div>
  <div class="postnummer"></div>
  <div class="by"></div>
  <div class="køn"></div>
  <div class="år"></div>
  <div class="fødselsdag"></div>
  <div class="mobilnummer"></div>
  <div class="logind-oplysninger"></div>
  <div class="email"></div>
  <div class="kodeord"></div>
  <div class="gentagkode"></div>
  <div class="nyhedsbrev"></div>
  <div class="vilkår"></div>
  <div class="opret"></div>
  <div class="opretprofil"></div>
</div>

</body>
</html>


