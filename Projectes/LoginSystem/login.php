<?php
    $showError=false;
    $login = false;
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
    include 'partials/dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "Select * from users where username='$username'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);

    if($num == 1)
    {
      while($row=mysqli_fetch_assoc($result))
      {
        if(password_verify($password,$row['password']))
        {
          $login = true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['username'] = $username;
          header("location:welcome.php");
        }
        else
        {
          $showError = "Invalid password!";
        }
      }

    }
    else
    {
      $showError = "Invalid username!";
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

    <title>Login Page</title>
  </head>
  <body>
  <?php  require "partials/navbar.php";    ?>
 <?php
  if($login)
  {
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Logged in sucesfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>';
  }
  if($showError)
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
  <h1 class="text-center">Login to the website to continue</h1>
    <form action="/LoginSystem/login.php" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">User Name</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>  
  <button type="submit" class="btn btn-primary">Login</button> 
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  </body>
</html>
