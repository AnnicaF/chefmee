<?php require_once 'controllers/authController.php'; ?>

<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/ffac4b7b02.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>

        <nav class="nav_bar-box" id="burger_menu">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn2">
                 <i class="fas fa-bars"></i>
            </label>
            <a href="./index.php"><img class="logo" src="./assets/chefmelogo.png" alt="logo"></a>                    
    
            <ul>
                <li><a href="https://chefme.dk/lej-en-kok">MENU</a></li>
                <li><a href="https://chefme.dk/private-dining">KOKKE</a></li>
                <li><a href="https://chefme.dk/om-os">OM OS</a></li>

                <li class="login-menu"><a href="login.php">LOGIND</a></li>
                <img class="login_icon"src="./assets/icons8-male-user-50.png" alt="logind icon">
            </ul>
        </nav>
    </header>  
        <section id="form-login"> 
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div login">
                <form action="login.php" method="post">
                    <h3 class="text center">Login</h3>

                    <?php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                                <li> <?php echo $error; ?></li>
                        <?php endforeach; ?>
                        </div> 

                    <?php endif; ?>

                    
                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="<?php echo $email; ?> "class="form-control form-control-lg">
                    </div>


                    <div class="form-group">
                    <label for="password">Kode</label>
                    <input type="password" name="password" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                    <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Login</button>
                    </div>
                        <p class="ingenprofil">Har du ikke en profil? <a class="genvej" href="signup.php">Opret nu</a></p>
                </form>
           </div>
        </div>
    </div>
    </section>

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