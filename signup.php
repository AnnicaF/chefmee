<html lang="da">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/ffac4b7b02.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Opret profil</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        
     <header>

        <nav class="nav_bar-box" id="burger_menu">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <a href="index.php"><img class="logo" src="assets/chefmelogo.png" alt="logo"></a>                    
            
            <ul >
                <li><a href="https://chefme.dk/lej-en-kok">MENU</a></li>
                <li><a href="https://chefme.dk/private-dining">KOKKE</a></li>
                <li><a href="https://chefme.dk/om-os">OM OS</a></li>

                <li class="login-menu"><a href="login.php">LOGIND <i class="fa-regular fa-user"></i></a></li>
            </ul>
        </nav>
    </header>

        <form action="signup.php" method="post">
        <?php require_once 'controllers/authController.php'; ?>

            <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
            <?php foreach($errors as $error): ?>
            <li> <?php echo $error; ?></li>
            <?php endforeach; ?>
            </div> 
            <?php endif; ?>

            <div class="signup_container" id="signup_input">
                
                    <p class="opretprofil">Opret profil</p>

                
            <div class="google"> <a href="#" id="google" class="google btn">
          <i class="fab fa-google fa-fw"></i> Log ind med Google
        </a> </div>
               <div class="facebook"> <a href="#" id="facebook" class="fb btn">
          <i class="fab fa-facebook fa-fw"></i> Log ind med Facebook
        </a></div>
                
                <div class="person-oplysninger">Person oplysninger</div>
                    <div class="fornavn">
                        <label class="input_fornavn" for="firstName">
                            <input type="text" name="firstName" placeholder="Fornavn"> 
                        </label>
                    </div>
                
                
                    <div class="efternavn">
                        <label class="input_efternavn" for="lastName">
                            <input type="text" name="lastName" placeholder="Efternavn">
                        </label>
                    </div>
            
                    <div class="adresse">
                        <label class="input_adresse" for="address">
                            <input type="text" name="address" placeholder="Adresse">
                        </label>
                    </div>
                

                    <div class="postnummer">
                        <label for="postal">
                            <input type="number" name="postal" placeholder="Postnummer">
                        </label>
                    </div>
        
                    <div class="by">
                        <label for="city">
                            <input type="text" name="city" placeholder="By">
                        </label>
                    </div>
             
        
               
                    <select class="kon" name="gender">
                        <option value="f">Kvinde</option>
                        <option value="m">Mand</option>
                        <option value="o">Andet</option>
                    </select>
               

                    <div class="fodselsdag">
                        <label for="">
                            <input  type="date" name="dob"  placeholder="V??lg din f??delsdag">
                        </label>
                    </div>
                
               
                    <div class="mobilnummer">
                        <label class="input_mobilnummer" for="phone">
                            <input type="number" name="phone"  placeholder="Telefonnummer">
                        </label>
                    </div>
              

                    <div class="logind-oplysninger">Logind oplysninger</div>
                

                    <div class="email">
                        <label for="email">
                            <input type="email" name="email"  value="<?php echo $email; ?>" placeholder="Indtast din email">
                        </label>
                    </div>
                
                    <div class="kodeord">
                        <label class="input_kode" for="password">
                            <input type="password" name="password" placeholder="Opret kodeord">
                        </label>
                    </div>
                
                    <div class="gentagkode">
                        <label class="input_gentagkode" for="passwordConf">
                            <input type="password" name="passwordConf"  placeholder="Gentag kodeord">
                        </label>
                    </div>
            
            
                    <div class="vilkar">
                    <input type="checkbox" checked="checked">
                        <a href="https://chefme.dk/betingelser">Vilk??r</a>
                    </div>
                    
                    <div class="nyhedsbrev">
                        <link rel=""  href="">
                        <input  type="checkbox" checked="checked">Nyhedsbrev
                    </div>

                        
                    <button class="opret" type="submit" name="signup-btn">Opret</button>     
                     
            </div>
                    <p class="har-profil">Har du en profil? <a href="login.php"> Log p?? her </a></p>
        </form>
        <footer id="footer">

<div class="footer_container">
    <div class="chefme_adresse">
                    <p class="title"><strong>Adresse</strong></p>
                    <p>Vimmelskaftet 41A 3.sal<br> 1161 K??benhavn K</p>
                    <p class="sub-title">ChefMe??</p>
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


