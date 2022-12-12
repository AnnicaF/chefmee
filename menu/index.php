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
            <nav class="nav_bar-box">
                <ul>
                    <a href="../index.php"><img class="logo" src="./../assets/chefmelogo.png" alt="logo"></a>                    
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

        <main>
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
        <div class="profil_info">
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


            <div class="profil_telefon">
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

            <div class="profil_mail">
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
            <div class="profil_opdater"><Button class="button_opdater">Opdater</Button></div>
        </div>
    </body>    
</html>