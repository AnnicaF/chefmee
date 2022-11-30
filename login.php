<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div login">
            <form action="login.php" method="post">
                <h3 class="text center">Login</h3>

                
                <div class="form-group">
                <label for="username">Brugernavn eller email</label>
                <input type="text" name="username" class="form-control form-control-lg" placeholder="Indtast dit brugernavn">
                </div>


                <div class="form-group">
                <label for="password">Kode</label>
                <input type="password" name="password" class="form-control form-control-lg" placeholder="Indtast din kode">
                </div>

                <div class="form-group">
                <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Login</button>
                </div>
                    <p>Har du ikke en profil? <a href="signup.php">Opret nu</a></p>
            </form>

           </div>
        </div>
    </div>
    
</body>
</html>