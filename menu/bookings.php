<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bestillinger</title>
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
                <li><a href="https://chefme.dk/lej-en-kok">MENU</a></li>
                <li><a href="https://chefme.dk/private-dining">KOKKE</a></li>
                <li><a href="https://chefme.dk/om-os">OM OS</a></li>

                <li class="login-menu"><a href="../index.php">LOGUD</a></li>
                <img class="login_icon"src="../assets/icon_user.svg" alt="logind icon">
            </ul>
        </nav>
    </header>  

        <main>
            <div class="sg">

                <div class="sidebar">
                    <div class="logo-details">
                        <i class="fa-solid fa-bars"></i>
                        <div class="logo_name">Profil</div>
                        <i class='bx bx-menu' id="btn"></i>
                    </div>

                    <ul class="nav-list">
                        <li>
                            <a href="index.php">
                                <i class="fa-solid fa-user"></i>
                                <span class="links_name">Oplysninger</span>
                            </a>
                            <span class="tooltip">Oplysninger</span>
                        </li>
        
                        <li>
                            <a href="bookings.php">
                                <i class="fa-solid fa-utensils"></i>
                                <span class="links_name">Bookinger</span>
                            </a>
                            <span class="tooltip">Bookinger</span>
                        </li>

                        <li>
                            <a href="../index.php">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <span class="links_name">Logud</span>
                            </a>
                            <span class="tooltip">Logud</span>
                        </li>
                    </ul>
                </div>
            </div> 
         </main>


        
<body>


<div class="bookings_container">
    <div class="kommende_container">
        <h3> <strong> Dine kommende begivenheder </strong></h3>
        <br>
<p><strong>Dato:</strong> 03/01 - 2023 </p>
<p><strong>Tidspunkt:</strong> Kl. 18:00 </p>
<p><strong>Andledning:</strong> Fødselsdag</p>
<p><strong>Antal kuverter: </strong> 6pax </p>
<p><strong>Tema: </strong> Japansk</p>
<p><strong>Kok:</strong> Anders Jensen </p>
<br>
<p><strong>Total:</strong> 1.537,00kr</p>
<br>
<p><strong>Bemærkninger:</strong> 1 person er allergisk for glutten.</p>
</div>
       
        
        
        
<div class="tidligere_container">
       <h3> <strong> Dine tidligere begivenheder </strong></h3>
       <br>
        <p><strong>Dato:</strong> 09/12 - 2022</p>
        <p><strong>Tidspunkt:</strong> Kl. 20:00 </p>
        <p><strong>Andledning:</strong> Julefrokost</p>
        <p><strong>Antal kuverter:</strong> 9pax </p>
        <p><strong>Tema:</strong> Dansk Julemad</p>
        <p><strong>Kok:</strong> Jim Karlo </p>
        <br>
        <p><strong>Total:</strong> 6.375,00kr</p>
        <br>
        <p><strong>Bemærkninger:</strong> Risalamande ønskes til dessert.</p>
    </div>
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