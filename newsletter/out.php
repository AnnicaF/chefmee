<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles.css">
        <title>Afmeld nyhedsbrev</title>
    </head>

        <header>
            <nav class="nav_bar-box">
                <ul>
                    <a href="../index.php"><img class="logo" src="../assets/chefmelogo.png" alt="logo"></a>                    
                    <li><a href="https://chefme.dk/lej-en-kok">MENUER</a></li>
                    <li><a href="https://chefme.dk/private-dining">KOKKE</a></li>
                    <li><a href="https://chefme.dk/om-os">OM OS</a></li>

                    <div class="btn">
                        <div class="kontakt-call-to-action-2">
                            <button class="knap-gul" id="button" type="button" name="button">Login</button>
                        </div>
                    </div>
                </ul>
            </nav>
        </header>   

    <body class="out_body">
        <div class="nyhedsbrev_afmeld-out">
            <h3>Indsæt email for at afmelde</h3>
            <br>
            <form action="unsubscribe.php" method="POST">
                <label for="email"><input type="text" name="email" placeholder="Email"></label> <br>
                <br>
                <button class="nyhedsbrev_btn-afmeld" for="submit" value="Frameld">Afmeld</button>
            </form>
        </div>  
        
        <footer id="footer">
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

                <div class="chefme_some" style="display:flex;margin:0 10px;">
                    <p class="title"><strong>SoMe</strong></p>
                    <br>
                    <a href="https://www.facebook.com/chefmedk" target="_blank" style="margin-right:10px"><img src="./assets/facebook.svg" style="width:24px;"></a>
                    <a href="https://www.instagram.com/chefme/" target="_blank"><img src="./assets/instagram.svg" style="width:24px;"></a>
                </div> 
            </div>
        </footer>	
    </body>
</html>


