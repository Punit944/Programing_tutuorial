<?php

//connection to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sanBAse1";

$conn = mysqli_connect($servername,$username,$password,$database);

//creating the table

$sql = "CREATE TABLE `phptrip2` ( `name` VARCHAR(11) NOT NULL ,  `age` INT(11) NOT NULL ,  `post` VARCHAR(11) NOT NULL ,  `year` DATE NOT NULL , PRIMARY KEY(`name`))";
$result = mysqli_query($conn,$sql);

//check if table is created or not

if($result)
{
    echo "DB table is created:";
    echo var_dump($result);
    echo "<br>";
}
else
{
    echo "Creating DB table was unsucessfull, Error=>" .mysqli_error($conn);
}

?>
