<?php 
if($_SERVER["REQUEST_METHOD"]=="POST");
{
    include "_dbconnect.php";
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];
    
    //check wheater this usernaem exists

    $existsql = "SELECT * FROM `users` WHERE `username`= '$username';";
    $result  = mysqli_query($conn, $existsql);
   
    $numRows = mysqli_num_rows($result);
    if($numRows>0)
    {
        $showError = "User Name already uses";
        header("Location: ../index.php?error=primary&mass=$showError");
    }
    else
    {
        if($pwd == $cpwd)
        {
           $hash = password_hash($pwd, PASSWORD_DEFAULT); 
           
           $sql = "INSERT INTO `users` (`username`, `user_pwd`, `timestamp`) VALUES ('$username', '$hash', current_timestamp());";
           $result = mysqli_query($conn, $sql);
           if($result)
           {
               $showError = "Your account has been created successfull";
               header("Location: ../index.php?error=success&mass=$showError");
            }
            else
            {
               $showError = "Your account not creadted with some problem pleasa try one more time";
               header("Location: ../index.php?error=danger&mass=$showError");

           }

        }
        else
        {
            $showError = "Password and Confier Password is not match";
            header("Location: ../index.php?error=warning&mass=$showError");
        }
    }
}

?>