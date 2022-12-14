<?php   
session_start("/menu/index.php"); //to ensure you are using same session
session_destroy("#logud"); //destroy the session
header("index.php"); //to redirect back to "index.php" after logging out
exit();
?>