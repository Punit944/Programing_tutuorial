<?php

//connection to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sanBAse1";

$conn = mysqli_connect($servername,$username,$password,$database);

//creating the table

$sql = "UPDATE `phptrip` SET `post` = 'Students' WHERE `phptrip`.`age` = '21'";
$result = mysqli_query($conn,$sql);
echo  "Rows Affected: ".mysqli_affected_rows($conn);
echo "<br>";
if($result)
{
    echo "Update Done";
}
else
{
    echo "Failed, ERROR=>". mysqli_errno($result);
}

?>