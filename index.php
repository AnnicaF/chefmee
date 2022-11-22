<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madoplevelser i egne omgivelser</title>
    <link rel="stylesheet" href="styles.css">
    <script src="modal.js" defer></script>

</head>
<body>
<header>
    <nav class="nav_bar">

    <ul>
    <img class="logo" src="assets/chefmelogo.png" alt="logo">
  <li><a href="">MENUER</a></li>
  <li><a href="">KOKKE</a></li>
  <li><a href="">OM OS</a></li>

  <div class="btn">
      <div class="kontakt-call-to-action-2"><button class="knap-gul" id="button" type="button" name="button">Login</button></div>
</div>
    </ul>
    </nav>
    <h1 class="hero_caption">
                BOOK EN PRIVATE KOK
            </h1>
            <h3>
            Tillad tid til værtskab
            
            </h3>
    </header>
   <main>
    </main>
    <div class="kontakt-knapper">
      <div class="kontakt-call-to-action-2"><button class="knap-gul" id="button" type="button" name="button">Nyhedsbrev</button></div>
    </div>

<div class="bg-modal">
<div class="modal-content">
<div id="form">
  <div class="close">+</div>
  <form onsubmit="event.preventDefault(); validateForm()">
<h1>Login</h1>
<label for="name">Email</label>
<input type="text" id="fornavn">
<small class="error"></small>

<label for="efternavn">Kode</label>
<input type="text" id="efternavn">
<small class="error"></small>

<div class="center">
  <input  id="btn1" type="submit" value="Login">

</div>
  </form>

</div>
</div>
</div>


</body>
</html>