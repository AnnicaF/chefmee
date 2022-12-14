<html lang="da" dir="ltr">

    <head>
    <meta charset="utf-8">
    <title>Favoritter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <script src="https://kit.fontawesome.com/ffac4b7b02.js" crossorigin="anonymous"></script>
    <script src="navbar.js" defer></script>
    </head>

    <header>

        <nav class="nav_bar-box" id="burger_menu">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <a href="../index.php"><img class="logo" src="./../assets/chefmelogo.png" alt="logo"></a>                    
            
            <ul >
                
                <li><a href="./index.php"><i class="fa-solid fa-user"></i> PROFIL</a></li>
                
                
                <li><a href="./bookings.php"><i class="fa-solid fa-utensils"></i> BOOKINGER</a></li>

                
                <li><a href="./favoritter.php"><i class="fa-solid fa-heart"></i> FAVORITTER</a></li>

                <li class="login-menu"><a href="../logout.php">LOGUD <i class="fa-solid fa-right-from-bracket"></i></a></li>
                
            </ul>
        </nav>
    </header>  
    <body>
        <div class="favoritter_container">
        
        
            <div class="favoritter_titel">
            <h1 class="favoriter_titel">Dine favoritter</h1>
            </div>
        
        

            <div class="favorit1_container">

            <div class="favoritter_billede1"> 
                    <div class="hjerte1"><i class="fa-solid fa-heart"></i></div>
                    <img src="./../assets/julemenu.png" alt="jule mad">  
            </div>

                <div class="favoritter_txt1">
                    <P> <strong>JULE MENU</strong> </P>
                    <br>
                    <P>Pris pr kuvert: 369kr</P>
                    <br>
                    <P>Kok: Kim Jensen</P>
                </div>
            </div>

            <div class="favorit2_container">  

                <div class="favoritter_billede2"> 
                   
                    <div class="hjerte2"><i class="fa-solid fa-heart"></i></div>  
                    <img src="./../assets/nytaar.png" alt="nytars mad">
                </div>
                
                <div class="favoritter_txt2">
                    <P> <strong>NYTÅRS MENU</strong> </P>
                    <br>
                    <P>Pris pr kuvert: 799kr</P>
                    <br>
                    <P>Kok: Sanne Hansen</P>
                </div>
            </div>
            
            <div class="profil_footer"></div>
        </div>

        <footer  class="footer" id="footer">
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
                            <a href="https://www.facebook.com/chefmedk" target="_blank" style="margin-right:10px"><img src="../assets/facebook.svg" style="width:24px;"></a>
                            <a href="https://www.instagram.com/chefme/" target="_blank"><img src="../assets/instagram.svg" style="width:24px;"></a>
                </div> 
            </div>
        </footer>
    </body>
</html>