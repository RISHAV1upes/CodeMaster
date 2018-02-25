<?php
 session_start();
unset($_SESSION["count"]);
unset($_SESSION["email"]);
unset($_SESSION["pass"]);
unset($_SESSION["name"]);
header("Location: index.php");
?>
