<?php

//connection to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sanBAse1";

$conn = mysqli_connect($servername,$username,$password,$database);

//Inserting the data in a table

$sql = "INSERT INTO `phptri` (`name`, `age`, `post`, `year`) VALUES ('anant', '24', 'builder', '2021-04-07');";
$result = mysqli_query($conn,$sql);

//check if data is inserted or not

if($result)
{
    echo "Data Inserted:";
    echo var_dump($result);
    echo "<br>";
}
else
{
    echo "Task unsucessfull, Error=>" .mysqli_error($conn);
}

?>