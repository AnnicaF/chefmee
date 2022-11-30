<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brugerprofil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div login"> 

            <div class="alert <?php echo $_SESSION['alert-class']; ?>">
            <?php echo $_SESSION['message']; ?>
            </div>

            <div class="alert alert-success">
                Du er nu logget ind!

            </div>
            <h3>Velkommen <?php echo $_SESSION['username']; ?> </h3>

            <a href="#" class="logout">Logud</a>

            <?php if(!$_SESSION['verified']): ?>
            <div class="alert alert-warning">
                Du skal godkende din profil.
                Vi har sendt et link på din email som du skal godkende
                <strong> <?php echo $_SESSION['email']; ?></strong>
            </div>
            <?php endif; ?>

            <?php if($_SESSION['verified']): ?>
            <button class="btn btn-block btn-lg btn-primary">Du er godkendt!</button>
            <?php endif; ?>
            </div>
         </div>
    </div>

    
</body>
</html>