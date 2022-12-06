<html lang="da">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Opret profil</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    

    <body>
        <header>
            <nav class="nav_bar-box">
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
        </header>    

        <form action="signup.php" method="post">

            <div class="signup_container">
                
                    <p class="opretprofil">Opret profil</p>

                
            <div class="google"> <a href="#" id="google" class="google btn">
          <i class="fab fa-google fa-fw"></i> Log ind med Google
        </a> </div>
               <div class="facebook"> <a href="#" id="facebook" class="fb btn">
          <i class="fab fa-facebook fa-fw"></i> Log ind med Facebook
        </a></div>
                
                <div class="person-oplysninger">Person oplysninger</div>

                <?php require_once 'controllers/authController.php'; ?>

                <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                <?php foreach($errors as $error): ?>
                <li> <?php echo $error; ?></li>
                <?php endforeach; ?>
                </div> 
                <?php endif; ?>

                    <div class="fornavn">
                        <label for="firstName">
                            <input  type="text" name="firstName" placeholder="Fornavn"> 
                        </label>
                    </div>
                
                
                    <div class="efternavn">
                        <label for="lastName">
                            <input type="text" name="lastName" placeholder="Efternavn">
                        </label>
                    </div>
                

                    <div class="etage">
                        <label for="">
                            <input type="text" name="floor" placeholder="Etage">
                        </label>
                    </div>
                
            
                    <div class="adresse">
                        <label for="address">
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
             
        
               
                    <select class="kon" name="user_type">
                        <option value="f">Kvinde</option>
                        <option value="m">Mand</option>
                        <option value="o">Andet</option>
                    </select>
               

                    <div class="fodselsdag">
                        <label for="">
                            <input  type="date" name=""  placeholder="Vælg din fødelsdag">
                        </label>
                    </div>
                
               
                    <div class="mobilnummer">
                        <label for="phone">
                            <input type="number" name="phone"  placeholder="Dit nummer">
                        </label>
                    </div>
              

                    <div class="logind-oplysninger">Logind oplysninger</div>
                
                    <div class="form-group">
                        <label for="username">
                            <input type="text" name="username"  value="<?php echo $username; ?>"class="form-control form-control-lg" placeholder="Indtast dit brugernavn">
                        </label>
                    </div>
               

                    <div class="email">
                        <label for="email">
                            <input type="email" name="email"  value="<?php echo $email; ?>" placeholder="Indtast din email">
                        </label>
                    </div>
                
                    <div class="kodeord">
                        <label for="password">
                            <input type="password" name="password" placeholder="Indtast din kode">
                        </label>
                    </div>
                
                    <div class="gentagkode">
                        <label for="passwordConf">
                            <input type="password" name="passwordConf"  placeholder="Gentag din kode">
                        </label>
                    </div>
            
            
                    <div class="vilkar">
                        <link rel=""  href="">
                            <input type="checkbox" checked="checked">Vilkår
                            <label class="container">
                                <span class="checkmark"></span>
                            </label>
                    </div>
                    
                    <div class="nyhedsbrev">
                        <link rel=""  href="">
                        <input  type="checkbox" checked="checked">Nyhedsbrev
                        <label class="container">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                        
                    <button class="opret" type="submit" name="signup-btn">Opret</button>     
                     
            </div>
                    <p class="har-profil">Har du en profil? <a href="login.php">Log på her</a></p>
        </form>
    </body>  
</html>


