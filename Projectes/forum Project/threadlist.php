<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>iDisucss</title>
</head>

<body>

    <!-- navbar php -->
    <?php 
    $showalert = false;
    include "partials/navbar.php";
    include "partials/_dbconnect.php";  
    $catid = $_GET['catid'];
    $catidsql ="SELECT * FROM `categories` WHERE category_id = $catid";
    $catresult = mysqli_query($conn, $catidsql);
    
    while($row = mysqli_fetch_assoc($catresult)){
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];
        
    }
    ?>

    <?php 
     $method = $_SERVER['REQUEST_METHOD'];
     if($method=='POST')
     {
         $th_title = $_POST['title'];
         $th_desc = $_POST['desc'];

         $sno = $_POST['sno'];
         
         $threadsql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_user_id`, `thread_cat_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$sno', '$catid', current_timestamp());";
         $threadresult = mysqli_query($conn, $threadsql);
         $showalert = true;
         if($showalert==true)
         {
             echo '<div class="alert alert-success text-center alert-dismissible fade show" role="alert">
             <strong>Your thread has been added! Please wait while some time for response</strong>
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>';
         }
         
     }   
    ?>

    <!-- slider start here -->

    <div class="container my-4 ">
        <div class="jumbotron">
            <h3 class="display-4">Welcome to <?php echo $catname;?> Forms</h3>
            <p class="lead"><?php echo $catdesc;?></p>
            <hr class="my-4">
            <p><b>Forum Rules : </b>No Spam / Advertising / Self-promote in the forums. Do not post copyright-infringing
                material. <br>
                Do not post “offensive” posts, links or images. Do not cross postz questions. Remain respectful of other
                members at all times.</p>
            <a href="" class="btn btn-primary btn-lg" role="button">Learn more</a>
        </div>
    </div>



    <hr>

    <div class="container">
        <h1 class="py-2">Browse Questions</h1>
        <?php 
       
       $catid = $_GET['catid'];
       $threadsql ="SELECT * FROM `threads` WHERE thread_cat_id = $catid";
       $threadresult = mysqli_query($conn, $threadsql);
       
       $noResult = true;
   
       while($row = mysqli_fetch_assoc($threadresult)){
          $noResult = false;
          $title = $row['thread_title'];
          $desc = $row['thread_desc'];
          $id = $row['thread_id'];
          $timestamp = $row['timestamp'];

          $useid = $row['thread_user_id'];
          $sql2 = "SELECT username FROM `users` WHERE sno=$useid";
          $result2 = mysqli_query($conn, $sql2);
          $row2 = mysqli_fetch_assoc($result2);

          echo "<div class='media my-3'>
                      <img src='img/userdefault.jpeg' width='58px' class='mr-3' alt='...'>
                      <div class='media-body'>
                      <h5 class='font-weight-bold'>".$row2['username']." "."<small>".$timestamp."</small></h5>
                          <h5 class='mt-0'><a href='thread.php?threadid=".$id."' class='text-dark'>".$title."</a></h5>
                          <p>".$desc."</p>
                      </div>
                  </div>";
       }      
       
      if($noResult)
      {
          echo '<div class="jumbotron jumbotron-fluid">
          <div class="container">
            <p class="display-4">No Results Found</p>
            <p class="lead">Be the first person to ask a question</p>
          </div>
        </div>';
      }
    ?>


    </div>

    <?php 
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
    {
     echo '<div class="container">
     
     <form action="'.$_SERVER['REQUEST_URI'].'" method="post">
    <div class="mb-3">
        <label for="" class="form-label">Problem Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Ellaborate your Concern</label>
        <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
        <input type="hidden" name="sno" value='.$_SESSION["sno"].'>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>';
    }
    else
    {
     echo "<h2 class=' lead text-center'>you have not loged in. Please login to be able start a disussion</h2>";
    }

    ?>

    <?php 
     include "partials/foter.php";
    ?>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
                        -->
</body>

</html>