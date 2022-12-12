<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles.css">
        <title>Afmeld nyhedsbrev</title>
    </head>

        <header>
            <nav class="nav_bar-box">
                <ul>
                    <a href="../index.php"><img class="logo" src="../assets/chefmelogo.png" alt="logo"></a>                    
                    <li><a href="https://chefme.dk/lej-en-kok">MENUER</a></li>
                    <li><a href="https://chefme.dk/private-dining">KOKKE</a></li>
                    <li><a href="https://chefme.dk/om-os">OM OS</a></li>

                    <div class="btn">
                        <div class="kontakt-call-to-action-2">
                            <button class="knap-gul" id="button" type="button" name="button">Login</button>
                        </div>
                    </div>
                </ul>
            </nav>
        </header>   

    <body>
        <div class="nyhedsbrev_afmeld-out">
            <h3>Indsæt venligst den email du vil afmelde</h3>
            <br>
            <form action="unsubscribe.php" method="POST">
                <label for="email">Email: <input type="text" name="email"></label> <br>
                <br>
                <button class="nyhedsbrev_btn-afmeld" for="submit" value="Frameld">Afmeld</button>
            </form>
        </div>  
    </body>
</html>


