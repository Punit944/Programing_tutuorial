<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Chat Applictation | Project</title>
</head>
<body>
    <div class="container">
      <form action="php/sigupphp.php" method="POST" class="form">
       
        <label for="fname">First Name</label>
        <input type="text" name="fname" class="input-fild">
      
        <label for="lname">Last Name</label>
        <input type="text" name="lname" class="input-fild">
      
        <label for="username">Create UserName</label>
        <input type="text" name="username" class="input-fild">
      
        <label for="pass">Password</label>
        <input type="text" name="pass" class="input-fild">
      
        <label for="cpass">Comfirm Password</label>
        <input type="text" name="cpass" class="input-fild">

                
        <button type="submit" class="input-fild submitbtn">Submit</button>
        <label for="">I hava already Account : <a href="login.php">Login Now</a></label>
      
      </form>
    </div>
</body>
</html>