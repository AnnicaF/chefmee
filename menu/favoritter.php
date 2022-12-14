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
            <div class="hjerte1"><i class="fa-solid fa-heart"></i></div>
            <div class="favoritter_billede1"> <img src="./../assets/julemenu.png" alt="Billede af julemenu"> </div>
            <div class="favoritter_txt1">
                <P>JULE MENU</P>
                <br>
                <P>Pris PR KUVERT: 369kr</P>
                <br>
                <P>Kok: Jesper Jhonson</P>
            </div>
        </div>

            <div class="favorit2_container">  
                <div class="favoritter_billede2"> <div class="hjerte2"><i class="fa-solid fa-heart"></i></div> <img src="./../assets/nytaar.png" alt="Billede af nytårs menu"> </div>
                <div class="favoritter_txt2">
                <P>JULE MENU</P>
                <br>
                <P>Pris PR KUVERT: 369kr</P>
                <br>
                <P>Kok: Jesper Jhonson</P>
                </div>
            </div>
            
            <div class="profil_footer"></div>
        </div>
    </body>
</html>