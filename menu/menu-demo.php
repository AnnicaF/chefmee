<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dynamisk Menu</title>
        <link rel="stylesheet" href="chefmee/styles.css">

        <style>
            #dmenu{
            display: flex;
            width: 100%;
            background-color: black;
            }
            #dmenu a{
            box-sizing: border-box;
            width:100%;
            padding: 10px;
            color: white !important;
            text-align: center;
            }
        </style>
    </head>

    <body>
        <nav id="dmenu"><?php
        //GET MENU ITEMS
        require "./menu.php";

        // DRAW MENU ITEMS 
        foreach ($items as $i) {
            echo "<a href='". $i['item_link'] ."'>";
            echo $i['item_text'];
            echo"</a>";
        }

        ?></nav>
    <div class="profil_container">
  <div class="profil_menu">Menu</div>

  <div class="profil_title">Profil</div>
  <div class="profil_logud">
      <div class="kontakt-call-to-action-2">
                            
     <a href="login.php" class="buttonlogin">Login</a>
     <img class="login_icon"src="assets/icon_user.svg" alt="logind icon">
      </div>                   
  </div>

  <div class="profil_title_2">title2</div>

  <div class="profil_billede">billede</div>

  <div class="profil_retbillede">ret billede</div>

  <div class="profil_oplysninger">profil oplysninger</div>

  <div class="profil_navn">Navn</div>

  <div class="profil_adresse">Adresse</div>

  <div class="profil_telefon">2023393</div>

  <div class="profil_mail">djjd@laskd.com</div>

  <div class="profil_opdater"><Button class="button_opdater">Opdater</Button></div>
</div>
    

    </body>
</html>