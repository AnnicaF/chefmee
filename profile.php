<?php require_once 'controllers/authController.php'; ?>

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

            <?php 

            $sql = "SELECT firstName, lastName, email FROM user_test";
            $result = $conn->query($sql);

           if ($result->num_rows > 0) {
             // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<br> Fornavn: ". $row["firstName"]. " - Efternavn: ". $row["lastName"]. " " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

            <a href="#" class="logout">Logud</a>

            
            </div>
         </div>
    </div>

    
</body>
</html>