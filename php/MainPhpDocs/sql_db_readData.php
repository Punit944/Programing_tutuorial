<?php

//connection to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sanBAse1";

$conn = mysqli_connect($servername,$username,$password,$database);

//creating the table

$sql = "SELECT * FROM `phptrip` ";
$result = mysqli_query($conn,$sql);

//Find the number of records returned

echo mysqli_num_rows($result);
echo " Rows available in database";
echo "<br>";

//Display the rows returned by the sql query

if(mysqli_num_rows($result)>0)
{
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo"<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo"<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo"<br>";

    while($row=mysqli_fetch_assoc($result))
    {
        // echo var_dump($row);
        echo $row['name']." is ".$row['age']." years old and his post is ".$row['post'];
        echo"<br>";
    }
}

?>