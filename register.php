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
      <div class="registre_container">
      <form action="signup.inc.php" method="post"> 
        

          <div class="opretprofil">OPRET PROFIL</div>
          <div class="google"></div>
          <div class="facebook"></div>

          <p class="personoplysninger">Person oplysninger</p>
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
          <p class="logind-oplysninger">logind oplysninger</p>
          <input class="email" type="email" name="email" placeholder="Email">
          <input class="kodeord" type="password" name="psw" placeholder="Kodeord">
          <input class="gentagkode" type="re-password" name="psw" placeholder="Gentag kodeord">
          <div class="nyhedsbrev"><link rel="" href="">Nyhedsbrev</div>
          <div class="vilkår"><link rel=""  href="">Vilkår</div>
          <div class="opret"><button type="submit" name="submit">OPRET</button></div>
          </form>
        </div>

  </body>
</html>