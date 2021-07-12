<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
        <div class="">
           <h1 class="text-primary text-center">Ajex Asynchormuse JavaScript and xml</h1>

           <form>
             <div class="mb-3">
               <label class="form-label" for="user">Username:</label>
               <input type="text" name="" id="user" class="form-control">
             </div>

             <div class="mb-3">
               <label class="form-label" for="pwd">Password:</label>
               <input type="text" name="" id="pwd" class="form-control">
             </div> 

              <div class="mb-3">
               <label  class="form-label" for="user">Chosse State:</label>
               <select class="form-control" onchange="myfun(this.value)">
                 <option>select State</option>
                 <option>Mahrashtra</option>
                 <option>up</option>
                 <option>mp</option>
                 <option>Bihar</option>
               </select>
             </div>

              <div class="mb-3">
               <label  class="form-label" for="user">Chosse city:</label>
               <select class="form-control" id="city">
                 <option>select city</option>                 
               </select>

             </div>
           </form>
         </div>
       

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script type="text/JavaScript">

      function myfun(data)
      {
        var req = new XMLHttpRequest();
        req.open("GET","response.php?datavalue="+data,true);
        req.send();

        req.onreadystatechange = function(){
              if(req.readyState == 4 && req.status == 200){
               document.getElementById('city').innerHTML = req.responseText;
              } 
        }
      }
    </script>
  </body>
</html>