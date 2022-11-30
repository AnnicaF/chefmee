<?php require_once 'controllers/authController.php'; ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opret</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div">
            <form action="signup.php" method="post">
                <h3 class="text-center">Opret profil</h3>

                
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

                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email"  value="<?php echo $email; ?> "class="form-control form-control-lg" placeholder="Indtast din email">
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
