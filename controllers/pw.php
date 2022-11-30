<?php
$password = 'test';

echo $password;
?>

<hr>

<?php
$hashed = password_hash($password, PASSWORD_BCRYPT);

echo $hashed;
?>

<hr>

<?php

var_dump(password_verify('test', $hashed));