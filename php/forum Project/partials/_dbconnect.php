<?php 
//Script to connect to database
$conn = mysqli_connect("localhost","root","","idiscuss");

if(!$conn)
{
    die("Connection failed: ".mysqli_connect_error());
}



?>