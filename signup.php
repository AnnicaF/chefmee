<?php require_once 'controllers/authController.php'; ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opret</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
 <div id="registre_container">
    <div id="opretprofil">
    <h3>Opret profil</h3>
    </div>
   
            <div id="logind-oplysninger">
            <form action="signup.php" method="post">
        
                <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                     <?php foreach($errors as $error): ?>
                            <li> <?php echo $error; ?></li>
                    <?php endforeach; ?>
                     </div> 

                <?php endif; ?>
                
                <div class="form-group">
                <label for="username">Brugernavn</label>
                <input type="text" name="username"  value="<?php echo $username; ?>"class="form-control form-control-lg" placeholder="Indtast dit brugernavn">
                </div>

                <div id="email">
                <label for="email">Email</label>
                <input type="email" name="email"  value="<?php echo $email; ?>" placeholder="Indtast din email">
                </div>

                <div id="kodeord">
                <label for="password">Kode</label>
                <input type="password" name="password" placeholder="Indtast din kode">
                </div>

                <div id="gentagkode">
                <label for="passwordConf">Gentag kode</label>
                <input type="password" name="passwordConf"  placeholder="Gentag din kode">
                </div>

            </div>
            <div id="personoplysninger">

                <div id="fornavn">
                <label for="firstName">Fornavn</label>
                <input type="text" name="firstName"
                placeholder="Fornavn">
                </div>

                <div id="efternavn">
                <label for="lastName">Efternavn</label>
                <input type="text" name="lastName" placeholder="Efternavn">
                </div>

                <div id="adresse">
                <label for="address">Adresse</label>
                <input type="text" name="address"
                placeholder="Din address">
                </div>

                <div id="postnummer">
                <label for="postal">Postnummer</label>
                <input type="number" name="postal"  placeholder="Dit postnummer">
                </div>

                <div id="mobilnummer">
                <label for="phone">Mobilnummer</label>
                <input type="number" name="phone"  placeholder="Dit nummer">
                </div>

            </div>
                
                <div id="opret">
                <button type="submit" name="signup-btn">Opret</button>
                </div>
                    <p>Har du profil? <a href="login.php">Login nu</a></p>
            </form>

        </div> 
    </div>

</div> 
</html>
