<?php
// tilkobler databasen som hedder user_db
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "user_db";

$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

if($conn -> connect_error){
    die('Database error:' .$conn -> connect_error);
}
?>
<?php
session_start();
?>

<!DOCTYPE html>
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
            <label for="check" class="checkbtn2">
                <i class="fas fa-bars"></i>
            </label>
            <a href="../index.php"><img class="logo" src="./../assets/chefmelogo.png" alt="logo"></a>                    
            
            <ul >
                <li><a href="./index.php">PROFIL</a></li>
                <li><a href="./menu-demo.php">OPLYSNINGER</a></li>
                <li><a href="./bookings.php">BOOKINGER</a></li>

                <li class="login-menu"><a href="../index.php">LOGUD</a></li>
                <img class="login_icon"src="../assets/icons8-male-user-50.png" alt="logind icon">
            </ul>
        </nav>
    </header>  

    <div class="profil_container">
    <div class="profil_billede"><img src="../assets/profile-svgrepo-com.svg" alt="profilbillede"></div>
    <div class="profil_titel">VELKOMMEN</div>

    <main class="profil_sidebar"> 
            <div class="sg">
                <div class="sidebar">
                    <div class="logo-details">
                        <i class="fa-solid fa-bars"></i>
                        <div class="logo_name">Profil</div>
                        <i class='bx bx-menu' id="btn"></i>
                    </div> 

                    <ul class="nav-list">
                        <li>
                            <a href="index.php">
                                <i class="fa-solid fa-user"></i>
                                <span class="links_name">Oplysninger</span>
                            </a>
                            <span class="tooltip">Oplysninger</span>
                        </li>
                        <li>
                            <a href="bookings.php">
                                <i class="fa-solid fa-utensils"></i>
                                <span class="links_name">Bookinger</span>
                            </a>
                            <span class="tooltip">Bookinger</span>
                        </li>

                        <li>
                            <a href="../index.php">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <span class="links_name">Logud</span>
                            </a>
                            <span class="tooltip">Logud</span>
                        </li>
                    </ul> 
                </div>
            </div>
    </main>

    <body>
        <div class="profil_navn">
            <?php   
                $sql = "SELECT * FROM user_test WHERE id = 57;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo $row['username']. "<br>";
                        }
                    }
            ?>
        </div>

        <div class="profil_efternavn">
            <?php
                    
                    $sql = "SELECT * FROM user_test WHERE id = 57;";
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

                    $sql = "SELECT * FROM user_test WHERE id = 57";
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

                    $sql = "SELECT * FROM user_test WHERE id = 57";
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

                    $sql = "SELECT * FROM user_test WHERE id = 57;";
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

                    $sql = "SELECT * FROM user_test WHERE id = 57";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo $row['email'] . "<br>";
                        }
                    }
                ?>
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

                    <div class="chefme_some" style="display:flex;margin:0 10px;">
                        <p class="title"><strong>SoMe</strong></p>
                        <a href="https://www.facebook.com/chefmedk" target="_blank" style="margin-right:10px"><img src="../assets/facebook.svg" style="width:24px;"></a>
                        <a href="https://www.instagram.com/chefme/" target="_blank"><img src="../assets/instagram.svg" style="width:24px;"></a>
                    </div> 
                </div>
            </div>
        </footer>	
    </body>   
</html>