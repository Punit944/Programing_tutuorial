<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>iDisucss</title>
    <style>
     #con{
         min-height: 100vh;
     }
    </style>
</head>

<body>
    <?php 
     include "partials/_dbconnect.php";
     include "partials/navbar.php";
            
    ?>
    
    <div class="container my-3" id="con">
        <h3 class="text-center py-3">Search results for <?php echo $_GET['search']?></h3>
    <?php
     $search=$_GET['search'];
     $threadsql ="SELECT * FROM `threads`WHERE MATCH (thread_title, thread_desc) against ('$search');";
     $threadresult = mysqli_query($conn, $threadsql);
    while($row = mysqli_fetch_assoc($threadresult)){
        $noResult = false;
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $timestamp = $row['timestamp'];
        $id = $row['thread_id'];
        $url = "thread.php?threadid=".$id;
        echo '<div class="result">
        <h3><a href="'.$url.'" class="text-dark">'.$title.'</a></h3>
        <p>'.$desc.'</p>
        </div>';
        
    }
     
     
     ?> 
    </div>
    
    <?php 
     include "partials/foter.php";
    ?>
    
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