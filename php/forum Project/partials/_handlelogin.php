<?php 

if($_SERVER["REQUEST_METHOD"]=="POST");
{
    include "_dbconnect.php";
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $existsql = "SELECT * FROM `users` WHERE `username`= '$username';";
    $result  = mysqli_query($conn, $existsql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1)
    {
      $row = mysqli_fetch_assoc($result);
      if(password_verify($pwd,$row['user_pwd']))
      {
          session_start();
          
          $_SESSION['loggedin'] = true;
          $_SESSION['sno'] = $row['sno'];
          $_SERVER['username'] = $username;

          $showError = "you loggedin successfull";
          header("Location: ../index.php?error=success&mass=$showError");  
          
      }
      else
      {
        $showError = "your password has been incarect please enter valid password";
        header("Location: ../index.php?error=danger&mass=$showError");  
      }
    }
    else
    {
        $showError = "you have not signup Please firstly sigup";
        header("Location: ../index.php?error=warning&mass=$showError");
    }

}
    
?>
