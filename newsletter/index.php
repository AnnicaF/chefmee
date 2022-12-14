<html lang="da">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="https://kit.fontawesome.com/ffac4b7b02.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles.css">
        <title>Tilmed nyhedsbrev</title>
    </head>


    <header>

        <nav class="nav_bar-box" id="burger_menu">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn2">
                 <i class="fas fa-bars"></i>
            </label>
            <a href="../index.php"><img class="logo" src="../assets/chefmelogo.png" alt="logo"></a>                    
    
            <ul>
                <li><a href="https://chefme.dk/lej-en-kok">MENU</a></li>
                <li><a href="https://chefme.dk/private-dining">KOKKE</a></li>
                <li><a href="https://chefme.dk/om-os">OM OS</a></li>

                <li class="login-menu"><a href="../login.php">LOGIND <i class="fa-regular fa-user" id="bruger-logo"></i></a></li>
            </ul>
        </nav>
    </header>  

        
    <body class="nyhedsbrev_body">  
        <div class="nyhedsbrev_container">
            <h1 class="newsletter__title">Tilmeld dig vores nyhedsbrev</h1>

            <form action="subscribe.php">
                <label for="first_name"> 
                    <br>
                    <input class="nyhedsbrev_input" type="text" placeholder="Fornavn" name="first_name"> <br>
                </label>
                <br>

                <label for="last_name">
                    
                    <input class="nyhedsbrev_input" type="text" placeholder="Efternavn" name="last_name"> <br>
                </label>
                <br>

                <label for="email"> 
                    <input class="nyhedsbrev_input" type="text" placeholder="Email" name="email"> <br>
                </label><br><br>

                <input class="nyhedsbrev_btn" type="submit" name="submit" value="Tilmeld">
            </form>
            
            <br>
            <br>

            </div>
            
            <div class="nyhedsbrev_afmeld">
                <a href="./out.php">Afmeld nyhedsbrev</a>
            </div>

            <footer id="footer">
            <div class="profil_footer">
                <div class="footer_container">
                    <div class="chefme_adresse">
                        <p class="title"><strong>Adresse</strong></p>
                        <p>Vimmelskaftet 41A 3.sal<br> 1161 København K</p>
                        <p class="sub-title">ChefMe®</p>
                    </div>

                    <div class="chefme_kontakt">
                            <p class="title"><strong>Kontakt</strong></p>
                            <p class="sub-title">Tlf:
                            <a href="tel:+45 1234 5678"></a><a href="tel:004593404010">93 40 40 10</a></p>
                            <p class="sub-title spaced">Email: support@chefme.dk</p>    
                    </div>

                    <div class="chefme_some">
                        <p><strong>SoMe</strong></p>
                        <br>
                        <a href="https://www.facebook.com/chefmedk" target="_blank"><img src="../assets/facebook.svg"></a>
                        <a href="https://www.instagram.com/chefme/" target="_blank"><img src="../assets/instagram.svg"></a>
                    </div> 
                </div>
            </div>
        </footer>	        
    </body>
</html>

