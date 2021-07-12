<?php
//Inserting the data into database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "sanBAse1";

$conn = mysqli_connect($servername,$username,$password,$database);

if(isset( $_GET['delete']))
{
  $serialnum = $_GET['delete'];
  $sqld = "DELETE FROM `notes` WHERE `notes`.`sno` = $serialnum";
    $resultd = mysqli_query($conn,$sqld);
    if($resultd)
  {
    echo "<script>
    alert('Deleted successfully');
    window.location.href='/san/example2.php';
    </script>";
  }
  else
  {
    echo "<script>
    alert('Some Problem Occured! Cannot add the Note');
    window.location.href='/san/example2.php';
    </script>";
  }
}

if($_SERVER['REQUEST_METHOD']=='POST')
{
  //connection to database
  
  if(isset( $_GET['update']))
  {
    echo "yes";
    exit();
  }
  else
  {
    //Inserting the data in a table

  $name = $_POST['name'];
  $description = $_POST['description'];

  $sqle = "INSERT INTO `notes` ( `name`, `description`, `date`) VALUES ('$name', '$description', current_timestamp())";
  $resulte = mysqli_query($conn,$sqle);

  //check if data is inserted or not
  if($resulte)
  {
    echo "<script>
    alert('Note Added successfully');
    window.location.href='/san/example2.php';
    </script>";
  }
  else
  {
    echo "<script>
    alert('Some Problem Occured! Cannot add the Note');
    window.location.href='/san/example2.php';
    </script>";
  }
  
  }
  

}


$number = 1;

//connection to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sanBAse1";

$conn = mysqli_connect($servername,$username,$password,$database);

//Showing the table
$sql = "SELECT * FROM `notes` ";
$result = mysqli_query($conn,$sql);


$sno = mysqli_num_rows($result);   //getting the no or rows in sno
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous">
  </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <title>Exampple 2</title>
  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MySQL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#inputSection">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#detailSection">Details</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Check it out
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">ApacheServer</a></li>
            <li><a class="dropdown-item" href="#">phpAdmin</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">DataBase</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Donate</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- -----------------------  -->



<!-- Form Insert -->

   <div class="container mt-3" id="inputSection">
     <h3>Add new note:</h3>
   <form action="/san/example2.php" method="post">
    <input type="hidden" name="snoHidden" id="snoHidden">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input name="name" type="text" class="form-control" id="name" aria-describedby="name">
  <div class="mb-3">
  <label for="descriptionTextarea1" class="form-label">Description</label>
  <textarea name="description" class="form-control" id="description" rows="4"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Add Note</button>
</form>

<div class="container mt-3" id="detailSection">
<table class="table table-striped table-hover" id="myTable">
<thead>
 <tr>
   <th scope="col">sno.</th>
   <th scope="col">Name</th>
   <th scope="col">Description</th>
   <th scope="col">Tools</th>
 </tr>
</thead>
<tbody>

<?php

if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
    echo ' 
    <tr id="row'.$number.'">
    <th scope="row" id= "snum'.$number.'">'.$number.'</th>
    <td id="tdName'.$number.'">'.$row['name'].'</td>
    <td id="tdDesc'.$number.'">'.$row['description'].'</td>
    <td><button type="button" id="'.$row['sno'].'" class="delete btn-primary btn-sm">Delete</button> <button type="button" id="buttonEdit'.$number.'" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Edit</button></td>
    </tr>';
    
    $number++;
    }
}

  echo '</tbody>
  </table>';
?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/san/example2.php?update=true" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input name="name" type="text" class="form-control" id="name" aria-describedby="name">
        <div class="mb-3">
        <label for="descriptionTextarea1" class="form-label">Description</label>
        <textarea name="description" class="form-control" id="description" rows="4"></textarea>
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>

  </body>

  <script>
  deletes = document.getElementsByClassName('delete');
  Array.from(deletes).forEach((element)=>{
    element.addEventListener("click",(e)=>{
      sno = e.target.id;

      if(confirm("delete?"))
      {
        console.log("yes");
        window.location = `/san/example2.php?delete=${sno}`;
      }
      else
      {
        console.log("no");
      }
      
    })
  })
  </script>
  <script>    
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
  </script>
  

<!-- $abc = "<script>document.getElementByID('yourid').value</script>"; -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</html>

<!-- INSERT INTO `notes` (`sno`, `name`, `description`, `date`) VALUES ('1', 'sanskar', 'this is what im going to do today', current_timestamp()); -->


<!-- echo '
    <script> 
    document.getElementById('.$row['sno'].').addEventListener("click",row)
    function row()
    {
      console.log("Clikced"+"'.$row['sno'].'");
      snoHidden.value = "'.$row['sno'].'";
      console.log(snoHidden.value);
    }
    </script>'; -->



    <!-- $serialnum = $_POST['snoHidden'];
     -->


  <!-- if(isset( $_GET['update']))
  {
    echo "yes";
    exit();
  } -->