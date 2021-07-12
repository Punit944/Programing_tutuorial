<?php

include "default_connection.php";
require "default_connection.php";

//die if connection is not succesfull
if(!$conn)
{
    die("Failed to connect: ". mysqli_connect_error());
}
else
{
    echo "Database connected succesfully";
}

// include gets the file anyway
// require throws error if there is anything wrong 
// both are literally the same
?>


