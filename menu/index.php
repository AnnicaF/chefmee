<?php

$dbServername = "afrederiksen.dk.mysql";
$dbUsername = "afrederiksen_dkuser_db";
$dbPassword = "eksamen202298";
$dbName = "afrederiksen_dkuser_db";

$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

if($conn -> connect_error){
    die('Database error:' .$conn -> connect_error);
}
?>
<?php
session_start();
?>

<html lang="da" dir="ltr">

    <head>
    <meta charset="utf-8">
    <title>Brugerprofil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <script src="https://kit.fontawesome.com/ffac4b7b02.js" crossorigin="anonymous"></script>
    <script src="navbar.js" defer></script>
    </head>

    <header>

<nav class="nav_bar-box" id="burger_menu">
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <a href="../index.php"><img class="logo" src="./../assets/chefmelogo.png" alt="logo"></a>                    
    
    <ul >
        
        <li><a href="./index.php"><i class="fa-solid fa-user"></i> PROFIL</a></li>
        
        
        <li><a href="./bookings.php"><i class="fa-solid fa-utensils"></i> BOOKINGER</a></li>

        
        <li><a href="./favoritter.php"><i class="fa-solid fa-heart"></i> FAVORITTER</a></li>

        <li class="login-menu"><a href="../logout.php">LOGUD <i class="fa-solid fa-right-from-bracket"></i></a></li>
        
    </ul>
</nav>
</header>  

    <div class="profil_container">
    <div class="profil_billede"><img src="../assets/profile-svgrepo-com.svg" alt="profilbillede"></div>
    <div class="profil_titel">
    <h1>Velkommen</h1>
    </div>
    
    <body>
        <div class="profil_navn">
            <?php   
                $sql = "SELECT * FROM user_test WHERE id = 71;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo $row['firstName']. "<br>";
                        }
                    }
            ?>
        </div>

        <div class="profil_efternavn">
            <?php
                    
                    $sql = "SELECT * FROM user_test WHERE id = 71;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo $row['lastName']. "<br>";
                        }
                    }
                ?>
        </div>


        <div class="profil_adresse">
                <?php

                    $sql = "SELECT * FROM user_test WHERE id = 71";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo $row['address'] . "<br>";
                        }
                    }
                ?>
        </div>

        <div class="profil_postnummer">
                <?php

                    $sql = "SELECT * FROM user_test WHERE id = 71";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo $row['postal'] . "<br>";
                        }
                    }
                ?>
        </div>


        <div class="profil_tlfnr">
                <?php

                    $sql = "SELECT * FROM user_test WHERE id = 71;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo $row['phone'] . "<br>";
                        }
                    }
                ?>
        </div>

        <div class="profil_email">
                <?php

                    $sql = "SELECT * FROM user_test WHERE id = 71";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo $row['email'] . "<br>";
                        }
                    }
                ?>
                </div>
            <div class="opdater">
                <Button class="button_opdater">Rediger</Button>
            </div>
        </div>
        </div> 

        <footer id="footer">
            <div class="profil_footer">
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

                    <div class="chefme_some">
                        <p><strong>SoMe</strong></p>
                        <br>
                        <a href="https://www.facebook.com/chefmedk" target="_blank"><img src="../assets/facebook.svg"></a>
                        <a href="https://www.instagram.com/chefme/" target="_blank"><img src="../assets/instagram.svg"></a>
                    </div> 
                </div>
            </div>
        </footer>	
    </body>   
</html>