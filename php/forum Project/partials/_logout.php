<?php 
session_start();
echo "<h2>Loggin you out. Please wait....</h2>";
session_destroy();
header("Location: ../index.php");
?>