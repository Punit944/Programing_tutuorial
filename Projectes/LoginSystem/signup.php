<?php
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $showAlert=false;
    $showError=false;
    include 'partials/dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    //check if username exists or not
    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn,$existSql);
    $numExistRows = mysqli_num_rows($result);

    if($numExistRows>0)
    {
      $showError = "Username Already Exists";
    }
    else
    {
          if(($password == $cpassword))
          {
            $hash =password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp())";
            $result = mysqli_query($conn,$sql);

            if($result)
            {
              $showAlert = true;
            }
          }
          else
          {
            $showError = "Password does not matches!";
          }
    }

 }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Signup Page</title>
  </head>
  <body>
  <?php  require "partials/navbar.php";    ?>
 <?php
  if($showAlert)
  {
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> account has been created, login to continue.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>';
  }
  else if($showError)
  {
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!  </strong> '.$showError.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>';

  }
  ?>
<div class="container mt-4">
  <h1 class="text-center">Signup to Join</h1>
    <form action="/LoginSystem/signup.php" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">UserName</label>
    <input type="text" class="form-control" maxlength="11" id="username" name="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" maxlength="23" id="password" name="password">
  </div>  
  <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" maxlength="23" id="cpassword" name="cpassword">
    <div id="passHelp" class="form-text">We'll never share your information with anyone else.</div>
  </div>
  <button type="submit" class="btn btn-primary">Signup</button> 
  <a href="/LoginSystem/login.php" class="btn btn-primary" role="button">Login</a>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  </body>
</html>
