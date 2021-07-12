<?php

session_start();

if(isset($_SESSION['username']))
{
	echo "Welcome ". $_SESSION['username'];
	echo "<br>";
	echo "Check out some ".$_SESSION['category'];
	echo "<br>";
}
else
{
	echo "Login please";
}


?>