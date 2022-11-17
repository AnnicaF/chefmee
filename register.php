<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>

<form action="signup.inc.php" method="POST">
<input type="text" name="first" placeholder="Firstname">
<br>
<input type="text" name="last" placeholder="Larstname">
<br>
<select name="user_type">
  <option value="f">Kvinde</option>
  <option value="m">Mand</option>
  <option value="o">Andet</option>
</select>
<br>
<input type="text" name="address" placeholder="Address">
<br>
<input type="password" name="postal" placeholder="Postal">
<br>
<input type="date" name="dob" placeholder="Date of birth">
<br>
<input type="number" name="phone" placeholder="Phone">
<br>
<input type="email" name="email" placeholder="Email">
<br>
<input type="password" name="pwd" placeholder="Password">
<br>
<button type="submit" name="submit">Sign up</button>
</form>
    
</body>
</html>