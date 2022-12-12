<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles.css">
        <title>Tilmed nyhedsbrev</title>
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
                            <a href="login.php" class="buttonlogin">Login</a>
                           
                         </div>
                    </div>
                </ul>
            </nav>
        </header>   
        
    <body class="nyhedsbrev_body">  
        <div class="nyhedsbrev_container">
            <h1 class="newsletter__title">Tilmeld dig vores nyhedsbrev</h1>

            <form action="subscribe.php">
                <label for="first_name"> 
                    <p>Fornavn</p>
                    <input class="nyhedsbrev_input" type="text" name="first_name">
                </label>
                <br>

                <label for="last_name">
                    <p>Efternavn</p>
                    <input class="nyhedsbrev_input" type="text" name="first_name">
                </label>
                <br>

                <label for="email">
                    <p>Email</p> 
                    <input class="nyhedsbrev_input" type="text" name="email"> 
                </label><br><br>

                <input class="nyhedsbrev_btn" type="submit" name="submit" value="Tilmeld">
            </form>
            
            <br>
            <br>

            </div>
            
            <div class="nyhedsbrev_afmeld">
                <a href="newsletter/out.php">Afmeld nyhedsbrev</a>
            </div>
        
    </body>
</html>

