<?php require_once 'controllers/authController.php'; ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opret</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
    <div class="form-container">
        <div class="row">
            <div class="col form-div">
            <form action="signup.php" method="post">
                <h3 class="text center">Opret profil</h3>

                <!-- <div class="alert alert-danger">
                    <li>Brugernavn påkræves</li>
                </div> -->
                
                <div class="form-group">
                <label for="username">Brugernavn</label>
                <input type="text" name="username"  value="<?php echo '$username'; ?>"class="form-control form-control-lg" placeholder="Indtast dit brugernavn">
                </div>

                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email"  value="<?php echo '$email'; ?> class="form-control form-control-lg" placeholder="Indtast din email">
                </div>

                <div class="form-group">
                <label for="password">Kode</label>
                <input type="password" name="password" class="form-control form-control-lg" placeholder="Indtast din kode">
                </div>

                <div class="form-group">
                <label for="passwordConf">Gentag kode</label>
                <input type="password" name="passwordConf" class="form-control form-control-lg" placeholder="Gentag din kode">
                </div>

                <div class="form-group">
                <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Opret</button>
                </div>
                    <p>Har du profil? <a href="login.php">Login nu</a></p>
            </form>

           </div>
        </div>
    </div>
    
</body>
</html>