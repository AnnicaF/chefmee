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
        <header class="header_hero">
            <nav class="nav_bar">

                <ul>
                    <img class="logo" src="assets/chefmelogo.png" alt="logo">
                    <li><a href="">MENUER</a></li>
                    <li><a href="">KOKKE</a></li>
                    <li><a href="">OM OS</a></li>

                    <div class="btn">
                        <div class="kontakt-call-to-action-2">
                            <button class="knap-gul" id="button" type="button" name="button">Login</button>
                        </div>
                    </div>
                </ul>
            </nav>
    
            <h1 class="hero_caption">
                BOOK EN PRIVATE KOK
            </h1>
            
            <h3 class="hero_caption-2">
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
                <div id="login_form">
                    <div class="close">+</div>

                    <form action="" method="post" onsubmit="event.preventDefault(); validateForm()" class="form_container">
                        <h1 class="logind">Logind</h1>
                            <input class="modal_input" type="email" name="email" id="email" placeholder="Indtast din email">
                            <input class="modal_input" type="password" name="password" id="kode" placeholder="Indtast din kode">
                            <input class="modal_input" type="password" name="cpassword" id="cdkode" placeholder="bekræft din kode">
                            <input class="modal_input" type="submit" name="submit" value="login" class="form-btn">
                            <p class="register">Har du ikke en profil? <a href="register.php">Opret profil</a></p>
                    </form>

                </div>
            </div>
        </div>
    </body>
</html>