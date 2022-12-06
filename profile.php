<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Brugerprofil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div login"> 

            <?php if(isset($_SESSION['message'])): ?>
            <div class="alert <?php echo $_SESSION['alert-class']; ?>">
            <?php 
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            unset($_SESSION['alert-class']);
            ?>
            </div>
            <?php endif; ?>

           

            <h3>Velkommen <?php echo $_SESSION['username']; ?> </h3>

            <a href="#" class="logout">Logud</a>

            <?php if(!$_SESSION['verified']): ?>
            <div class="alert alert-warning">
                For at aktivere profil
                skal du klikke på link sendt på din email
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