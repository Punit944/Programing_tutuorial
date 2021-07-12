<?php
//ways to connect to MySql Database
// 1. MySQLi extension
// 2. PDO 

//connection to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);

//die if connection is not succesfull
if(!$conn)
{
    die("Failed to connect: ". mysqli_connect_error());
}
else
{
    echo "Connection was succesfull";
}

?>