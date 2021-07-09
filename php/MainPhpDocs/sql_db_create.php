<?php

//connection to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);

//create a database

$sql = "CREATE DATABASE sanBAse2";
$result = mysqli_query($conn,$sql);

//check for the database creation

if($result)
{
    echo "DB is created:";
    echo var_dump($result);
    echo "<br>";
}
else
{
    echo "Creating DB was unsucessfull, Error=>" .mysqli_error($conn);
}

?>