<html lang="da">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Opret pofil</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    
        <?php require_once 'controllers/authController.php'; ?>

            <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <?php foreach($errors as $error): ?>
                        <li> <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </div> 
        <?php endif; ?>

    <body>
        <form action="signup.php" method="post" >

            <div class="signup_container">
                
                
                    <p class="opretprofil">Opret profil</p>
                

                
        
                <div class="google"><button>GOOGLE</button></div>
                <div class="facebook"><button>FACEBOOK</button></div>
                
                <div class="person-oplysninger">Person oplysninger</div>

                    <div class="fornavn">
                        <label for="firstName">
                            <input  type="text" name="first" placeholder="Fornavn"> 
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


