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
<html lang="da">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dynamisk Menu</title>
        <link rel="stylesheet" href="../styles.css">
    </head>

    <body>
    
        <nav id="dmenu"><?php
        //GET MENU ITEMS
        require "./menu.php";

        // DRAW MENU ITEMS 
        foreach ($items as $i) {
            echo "<a href='". $i['item_link'] ."'>";
            echo $i['item_text'];
            echo"</a>";
        }

        ?></nav>
    <div class="profil_container">
  <div class="profil_menu">Menu</div>

  <div class="profil_title">Profil</div>
  <div class="profil_logud">
      <div class="kontakt-call-to-action-2">
                            
     <a href="login.php" class="buttonlogin">Login</a>
     <img class="login_icon"src="assets/icons8-male-user-50.png" alt="logind icon">
      </div>                   
  </div>

  <div class="profil_title_2">
    <h2>Din profil</h2>
  </div>

  <div class="profil_billede"><img src="../assets/userprofile.svg" alt="Profilbillede"></div>

  <div class="profil_retbillede"><button>Ret billede</button></div>

  <div class="profil_oplysninger">
    <h3>Profil oplysninger</h3>


  </div>

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

  </div>

  <div class="profil_opdater"><Button class="button_opdater">Opdater</Button></div>
</div>
    

    </body>
</html>